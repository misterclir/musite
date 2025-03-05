<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldHome" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
	class ldHome extends ldMssql {
		public function __construct()
		{
            global $FORUM_CONFIGS, $CASTLE_SIEGE;
            $this->loadLastNotices(); 
            if($FORUM_CONFIGS['ENABLE'] == TRUE) $this->loadLastForum(); 
			if($CASTLE_SIEGE['ENABLE'] == TRUE) $this->loadCastleSiege(); 
		}
        private function loadCastleSiege()
        {
            global $ldTpl, $CASTLE_SIEGE;
            $findInfosQ = $this->query("SELECT * FROM ".DATABASE_CHARACTERS.".dbo.MuCastle_DATA");
			$findInfosOw = ($findInfos->OWNER_GUILD);
            $findInfos = mssql_fetch_object($findInfosQ);
			$findOwnerGuildQ = $this->query("Select G_Master, G_Mark, G_Score from ".DATABASE_ACCOUNTS.".dbo.Guild WHERE G_Name='".$findInfos->OWNER_GUILD."'");
			$findOwnerGuild = mssql_fetch_object($findOwnerGuildQ);
			$GuildLogo = urlencode(bin2hex($findOwnerGuild->G_Mark));
            $ldTpl->set("CASTLE_SIEGE_OCCUPY_GUILD", ($findInfos->CASTLE_OCCUPY == 0 ? CASTLE_SIEGE_OCCUPY_GUILD : $findInfos->OWNER_GUILD) ); 
            $ldTpl->set("CASTLE_SIEGE_END_DATE", $CASTLE_SIEGE['CONFRONTATION'] ); 
            $ldTpl->set("CASTLE_SIEGE_DATE", $CASTLE_SIEGE['DATE'] ); 
			$ldTpl->set("CS_GUILD_OWNER", ($findInfos->CASTLE_OCCUPY == 0 ? CS_GUILD_OWNER : $findOwnerGuild->G_Master) );
            $ldTpl->set("CS_GUILD_MARK", ($findInfos->CASTLE_OCCUPY == 0 ? CS_GUILD_OWNER : $GuildLogo) );
            $ldTpl->set("CS_GUILD_SCORE", ($findInfos->CASTLE_OCCUPY == 0 ? CS_GUILD_SCORE : $findOwnerGuild->G_Score) );
        }
		public function BBCode($texto){
		$texto = preg_replace( "/\[b\](.*?)\[\/b\]/i", "$1<br>", $texto );
		$texto = preg_replace( "/\[i\](.*?)\[\/i\]/i", "$1", $texto );
		$texto = preg_replace( "/\[u\](.*?)\[\/u\]/i", "$1", $texto );
		$texto = preg_replace( "/\[color=(.*?)\](.*?)\[\/color\]/i", "$2", $texto );
		$texto = preg_replace( "/\[font=(.*?)\](.*?)\[\/font\]/i", "$2", $texto );
		$texto = preg_replace( "/\[size=(.*?)\](.*?)\[\/size\]/i", "$2", $texto );
		$texto = preg_replace( "/\[center\](.*?)\[\/center\]/i", "$1", $texto );
		$texto = preg_replace( "/\[img\](.*?)\[\/img\]/i", "$1", $texto );
		$texto = preg_replace( "/\[url=(.*?)\](.*?)\[\/url\]/i", "<a href=\"$1\" target=\"_blank\">$2</a>", $texto);
		$texto = preg_replace( "/\[youtube\](.*?)\[\/youtube\]/i", "$1", $texto );
		$texto = preg_replace( "/\[quote\](.*?)\[\/quote\]/i", "$1", $texto );
		$texto = preg_replace( "/\[align=(.*?)\]/i", "", $texto );
		$texto = preg_replace( "/\[\/align\]/i", "<br>", $texto );
		return $texto;
        }
        private function loadLastNotices()
        {
            if(FORUM_ENABLE == true){
    			global $ldTpl, $FORUM_CONFIGS;
                if($FORUM_CONFIGS['DATABASE']['TYPE'] == 0)
                {
                    $objCon = @mysql_connect($FORUM_CONFIGS['DATABASE']['HOST'], $FORUM_CONFIGS['DATABASE']['USERNAME'], $FORUM_CONFIGS['DATABASE']['PASSWORD']);
                    if($objCon == false)
                        $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_CONNECT_DATABASE." (MYSQL)</div></li>";
                    if(@mysql_select_db($FORUM_CONFIGS['DATABASE']['DB_NAME'], $objCon) == false)
                        $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_SELECT_DATABASE." (MYSQL)</div></li>";
                    else 
                    {
                $findForums = mysql_query("SELECT tid, fid, subject, firstpost, dateline FROM ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."threads where fid='2' or fid='3' or fid='4' or fid='5' order by tid desc limit 7");
                while($findNotices = mysql_fetch_object($findForums))
                {
    				$findDescriptionQ = mysql_query("select CHARACTER_LENGTH(message) as tamanhomsg, message from ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."posts where tid='". $findNotices->tid ."'");
    				$findDescription = mysql_fetch_object($findDescriptionQ);
    				if($findDescription->tamanhomsg >= 200){$Pontos123="...";}
    				else {$Pontos123="";}
    				$Description = substr($this->BBCode($findDescription->message), 0, 300);
    				$linkpost = $FORUM_CONFIGS['LINKS_TOPICS']."".$findNotices->tid;
    				$imageDesk = array("templates/Default/assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg",
    								   "templates/Default/assets/images/game-the-witcher-500x375.jpg",
    								   "templates/Default/assets/images/chaoscastle-500x375.jpg",
    								   "templates/Default/assets/images/game-kingdoms-of-amalur-reckoning-3-500x375.jpg",
    								   "templates/Default/assets/images/battle-500x375.jpg",
    								   "templates/Default/assets/images/game-bloodborne-500x375.jpg",
    								   "templates/Default/assets/images/game-lords-of-the-fallen-500x375.jpg",
    								   "templates/Default/assets/images/game-the-witcher-500x375.jpg");
    				$randnum++;
    				
    				switch($findNotices->fid){
    				case 3:
    				$tags = "Not&iacute;cia";
    				break;
    				case 4:
    				$tags = "Manuten&ccedil;&atilde;o";
    				break;
    				case 5:
    				$tags = "Eventos/Promo&ccedil;&otilde;es";
    				break;
    				default:
    				$tags = "Not&iacute;cia";
    				break;
    				}
                    $tempTpl .= "<li><a href=\"". $linkpost ."\">". $findNotices->subject ."</a></li>";
    				}
    				$ldTpl->set("LAST_NOTICES_HOME",$tempTpl);
                    unset($tempTpl);
    		        }   
                }  
            }else{
                global $ldTpl, $NOTICES;
                $findNoticesQ = $this->query("SELECT TOP ".(int)$NOTICES['LAST']." * FROM dbo.webNotices ORDER BY date DESC");
                while($findNotices = mssql_fetch_object($findNoticesQ))
                {
                    $tempTpl .= "<li><a href=\"?page=readNotice&amp;id=". $findNotices->id ."\">". $findNotices->subject ."</a></li>";
                }
                $ldTpl->set("LAST_NOTICES_HOME",$tempTpl);
                unset($tempTpl);
            }
        }
		private function loadLastForum()
		{
			global $ldTpl, $FORUM_CONFIGS;
            if($FORUM_CONFIGS['DATABASE']['TYPE'] == 0)
            {
                $objCon = mysql_connect($FORUM_CONFIGS['DATABASE']['HOST'], $FORUM_CONFIGS['DATABASE']['USERNAME'], $FORUM_CONFIGS['DATABASE']['PASSWORD']);
                if($objCon == false)
                    $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_CONNECT_DATABASE." (MYSQL)</div></li>";
                if(mysql_select_db($FORUM_CONFIGS['DATABASE']['DB_NAME'], $objCon) == false)
                    $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_SELECT_DATABASE." (MYSQL)</div></li>";
                else 
                {
                    switch($FORUM_CONFIGS['TYPE'])
                    {
                        case 0: //vBulletin
                            $query = "SELECT threadid as topicId, title as title FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}thread WHERE forumid = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forumid" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY threadid DESC LIMIT 7";
                            break;
                        case 1: //IPB
                            $query = "SELECT tid as topicId, title as title FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}topics WHERE forum_id = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forum_id" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY tid DESC LIMIT 7";
                            break;
                        case 2: //phpBB
                            $query = "SELECT topic_title as title, topic_id as topicId FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}topics WHERE forum_id = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forum_id" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY topic_id DESC LIMIT 7";
                            break;
                    }
                    $query = mysql_query($query);
                    while($findLastForum = mysql_fetch_object($query))
                    {
                        $tempTpl .= sprintf("<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\"><a href=\"{$FORUM_CONFIGS['LINKS_TOPICS']}\" target=\"_blank\">%s</a></div></li>", $findLastForum->topicId, $findLastForum->title);
                    }  
                }
            }
            elseif($FORUM_CONFIGS['DATABASE']['TYPE'] == 1)
            {
                $objCon = mssql_connect($FORUM_CONFIGS['DATABASE']['HOST'], $FORUM_CONFIGS['DATABASE']['USERNAME'], $FORUM_CONFIGS['DATABASE']['PASSWORD']);
                if($objCon == false)
                    $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_CONNECT_DATABASE." (MSSQL)</div></li>";
                if(mssql_select_db($FORUM_CONFIGS['DATABASE']['DB_NAME'], $objCon) == false)
                    $tempTpl = "<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\">".LLF_ERROR_SELECT_DATABASE." (MSSQL)</div></li>";
                else 
                {
                    switch($FORUM_CONFIGS['TYPE'])
                    {
                        case 0: //vBulletin
                            $query = "SELECT TOP {$FORUM_CONFIGS['LAST_TOPICS']} threadid as topicId, title as title FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}thread WHERE forumid = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forumid" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY threadid DESC";
                            break;
                        case 1: //IPB
                            $query = "SELECT TOP {$FORUM_CONFIGS['LAST_TOPICS']} tid as topicId, title as title FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}topics WHERE forum_id = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forum_id" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY tid DESC";
                            break;
                        case 2: //phpBB
                            $query = "SELECT TOP {$FORUM_CONFIGS['LAST_TOPICS']} topic_title as title, topic_id as topicId FROM {$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']}topics WHERE forum_id = ".($FORUM_CONFIGS['NUMBER_FORUM'] == -1 ? "forum_id" : $FORUM_CONFIGS['NUMBER_FORUM'])." ORDER BY topic_id DESC";
                            break;
                    }
                    $query = mssql_query($query);
                    while($findLastForum = mssql_fetch_object($query))
                    {
                        $tempTpl .= sprintf("<li><div style=\"border-bottom-color:#C2CAD3; border-bottom-width:thin; border-bottom-style:dotted;\"><a href=\"{$FORUM_CONFIGS['LINKS_TOPICS']}\" target=\"_blank\">%s</a></div></li>", $findLastForum->topicId, $findLastForum->title);
                    }  
                }
				$this->connect();
            }
			if($FORUM_CONFIGS['UTF8_DECODE'] == true)
				$tempTpl = utf8_decode($tempTpl);
            $ldTpl->set("LAST_FORUM_HOME", $tempTpl);                                       
			unset($tempTpl);
		}  
	}	
}

?>