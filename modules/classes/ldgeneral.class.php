<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldGeneral" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
	class ldGeneral extends ldMssql {
		public function __construct()
		{
			global $ldTpl, $TABLES_CONFIGS, $PANELUSER_MODULE;
			$this->loadServersOn();
			$this->loadDivLoginLogout();
            $this->loadPoll();
			
			$ldTpl->set("TITLE_SITE", TITLE_SITE );
			$ldTpl->set("TITLE_EMPEROR", TITLE_EMPEROR );
			$ldTpl->set("SERVER_NAME", SERVER_NAME );
			$ldTpl->set("SERVER_SLOGAN", SERVER_SLOGAN );
			$ldTpl->set("SERVER_VERSION", SERVER_VERSION );
			$ldTpl->set("SERVER_DROP", SERVER_DROP );
			$ldTpl->set("SERVER_XP", SERVER_XP );
			$ldTpl->set("SERVER_BUGBLESS", SERVER_BUGBLESS );
			$ldTpl->set("SERVER_RESETTYPE", SERVER_RESETTYPE );
			$ldTpl->set("SERVER_MAXPOINTS", SERVER_MAXPOINTS );
			$ldTpl->set("SERVER_DIFICULT", SERVER_DIFICULT );
            $ldTpl->set("CASH_NAME", CASH_NAME );
            $ldTpl->set("CASH_NAME2", CASH_NAME2 );
			$ldTpl->set("POINTS_NAME", POINTS_NAME );
			$ldTpl->set("MONEY_NAME", MONEY_NAME );
            $ldTpl->set("SHOPPING_LINK", SHOPPING_LINK );
            $ldTpl->set("SHOPPING_LINK2", SHOPPING_LINK2 );
            $ldTpl->set("SHOPPING_LINK3", SHOPPING_LINK3 );
            $ldTpl->set("SHOPPING_NAME", SHOPPING_NAME );
            $ldTpl->set("SHOPPING_NAME2", SHOPPING_NAME2 );
            $ldTpl->set("SHOPPING_NAME3", SHOPPING_NAME3 );
            $ldTpl->set("SHOPPING_NUMBER", SHOPPING_NUMBER );
            $ldTpl->set("FACEBOOK_LINK", FACEBOOK_LINK );
            $ldTpl->set("DISCORD_LINK", DISCORD_LINK);
            $ldTpl->set("YOUTUBE_LINK", YOUTUBE_LINK);
            $ldTpl->set("SITE_URL",SITE_URL);
            $ldTpl->set("IP_SERVER",IP_SERVER);
            $ldTpl->set("PORTA_GS",PORTA_GS);			
			$ldTpl->set("UFC_BK", UFC_BK );
			$ldTpl->set("UFC_SM", UFC_SM );
			$ldTpl->set("UFC_DL", UFC_DL );
			$ldTpl->set("UFC_ELF", UFC_ELF );
			$ldTpl->set("UFC_MG", UFC_MG );
			$ldTpl->set("UFC_SUM", UFC_SUM );
			$ldTpl->set("TEMPLATE_DIR", TEMPLATE_DIR);
			$ldTpl->set("TEMPLATE_DIR_EMPEROR", TEMPLATE_DIR_EMPEROR);
			$ldTpl->set("DATABASE_ACCOUNTS",DATABASE_ACCOUNTS);
			$ldTpl->set("MOEDA_INDICACAO",MOEDA_INDICACAO);
			$ldTpl->set("NOME_MOEDA_INDICACAO",NOME_MOEDA_INDICACAO);
			$ldTpl->set("reCAPTCHA_SITEKEY",reCAPTCHA_SITEKEY);
			$ldTpl->set("DOWNLOAD_DATA_UPDATE",DOWNLOAD_DATA_UPDATE);
			$ldTpl->set("DOWNLOAD_PATCH_SOUND",DOWNLOAD_PATCH_SOUND);
			$ldTpl->set("PAGSEGURO_MAIL",PAGSEGURO_MAIL);
			$ldTpl->set("DEPOSITO_AGENCIA",DEPOSITO_AGENCIA);
			$ldTpl->set("DEPOSITO_OPERACAO",DEPOSITO_OPERACAO);
			$ldTpl->set("DEPOSITO_CONTA",DEPOSITO_CONTA);
			$ldTpl->set("DEPOSITO_TIPO_CONTA",DEPOSITO_TIPO_CONTA);
			$ldTpl->set("DEPOSITO_FAVORECIDO",DEPOSITO_FAVORECIDO);
            $ldTpl->set("VIP_NAME_0", $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][0] );
            $ldTpl->set("VIP_NAME_1", $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][1] );
            $ldTpl->set("VIP_NAME_2", $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][2] );
            $ldTpl->set("VIP_NAME_3", $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][3] );
            $ldTpl->set("VIP_NAME_4", $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][4] );
			$ldTpl->set("VIP_NAME_5", $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][5] );
			
			if(DISABLE_BASIC_INFOS == false)
			{
				$SQL_Q = $this->query("SELECT count(1) FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO");
				$SQL = mssql_fetch_row($SQL_Q);
				$ldTpl->set("TOTAL_ACCOUNTS", $SQL[0] );
				
				$SQL_Q = $this->query("SELECT count(1) FROM ".DATABASE_CHARACTERS.".dbo.Character");
				$SQL = mssql_fetch_row($SQL_Q);
				$ldTpl->set("TOTAL_CHARATERS", $SQL[0] );
				
				$SQL_Q = $this->query("SELECT count(1) FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnType']."=1");
				$SQL = mssql_fetch_row($SQL_Q);
				$ldTpl->set("TOTAL_ACCOUNTS_VIP_SILVER", $SQL[0] );
                
                $SQL_Q = $this->query("SELECT count(1) FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnType']."=2");
                $SQL = mssql_fetch_row($SQL_Q);
                $ldTpl->set("TOTAL_ACCOUNTS_VIP_GOLD", $SQL[0] );
                
                $SQL_Q = $this->query("SELECT count(1) FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnType']."=3");
                $SQL = mssql_fetch_row($SQL_Q);
                $ldTpl->set("TOTAL_ACCOUNTS_VIP_3", $SQL[0] );
                
                $SQL_Q = $this->query("SELECT count(1) FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnType']."=4");
                $SQL = mssql_fetch_row($SQL_Q);
                $ldTpl->set("TOTAL_ACCOUNTS_VIP_4", $SQL[0] );
				
				$SQL_Q = $this->query("SELECT count(1) FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnType']."=5");
				$SQL = mssql_fetch_row($SQL_Q);
				$ldTpl->set("TOTAL_ACCOUNTS_VIP_5", $SQL[0] );
				
				$SQL_Q = $this->query("SELECT count(1) FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE bloc_code = 1 AND hashActivate is null");
				$SQL = mssql_fetch_row($SQL_Q);
				$ldTpl->set("TOTAL_ACCOUNTS_BANNEDS", $SQL[0] );
				                                                                                                       
                $SQL_Q = $this->query("SELECT count(1) FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE CtlCode = 1");
				$SQL = mssql_fetch_row($SQL_Q);
				$ldTpl->set("TOTAL_CHARACTERS_BANNEDS", $SQL[0] );
				
			}
			
			$SQL_Q = $this->query("SELECT count(1) FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT WHERE Connectstat = 1");
			$SQL = mssql_fetch_row($SQL_Q);
			$ldTpl->set("TOTAL_ACCOUNTS_ONLINES", $SQL[0] );
			$countPlayersOn = $SQL[0] ;
				
			$SQL_Q = $this->query("SELECT record FROM dbo.webRecord");
			$SQL = mssql_fetch_row($SQL_Q);
			$ldTpl->set("RECORD_ONLINE", $SQL[0] );
			if($countPlayersOn > $SQL[0])
				$this->query("UPDATE dbo.webRecord SET record=".$countPlayersOn.", date = ". time());
			unset($countPlayersOn);
		}
		public function loadServersOn()
		{ 
			global $ldTpl;
            global $Config_Find_Rooms_ConnectServer;
			global $Config_Rooms_ConnectServer;
			if($Config_Find_Rooms_ConnectServer['Enable'] == true)
			{
				$ldCS = new ldCS($Config_Find_Rooms_ConnectServer['Address'],$Config_Find_Rooms_ConnectServer['Port'],$Config_Find_Rooms_ConnectServer['TLimit'], $Config_Find_Rooms_ConnectServer['version']);
				
				for($Rooms_Number_Count = 0; $Rooms_Number_Count < sizeof($ldCS->servers); $Rooms_Number_Count++) 
				{ 
				$tmpGSs .= "<li>".$Config_Rooms_ConnectServer[$ldCS->servers[$Rooms_Number_Count]['id']]['Name'].": <a href=\"panel.php?panel=onlines&amp;room=".$Config_Rooms_ConnectServer[$ldCS->servers[$Rooms_Number_Count]['id']]['Name']."\">".$ldCS->servers[$Rooms_Number_Count]['users']."</a>% <br />
							<div class=\"gauge\" id=\"gauge\" style=\"width:150px; height:10px;\">
							<div class=\"top\"></div>
							 <div class=\"content\" style=\"height:8px;\"><img id=\"".$Config_Rooms_ConnectServer[$ldCS->servers[$Rooms_Number_Count]['id']]['Name']."\" class=\"filling\" src=\"templates/". TEMPLATE_DIR ."/images/gauge.png\" style=\"width:".$ldCS->servers[$Rooms_Number_Count]['users']."%; height:13px; border:none;\" alt=\"\" title=\"\"/></div>
							<div class=\"bottom\"></div>
						   </div></li>";								   
				}
			} 
			$ldTpl->set("GAMESERVERS_ON", $tmpGSs);
			unset($tmpGSs);
		}
		public function loadDivLoginLogout()
		{
			global $ldTpl;
			if(isset($_SESSION['LOGIN']) == true)
			{
				$divLTemp = fopen("templates/". TEMPLATE_DIR ."/div[logout].tpl.php","r");
				$ldTpl->set("DIV[LOGIN_LOGOUT]", fread($divLTemp,filesize("templates/". TEMPLATE_DIR ."/div[logout].tpl.php")));
				$SQL_Q = $this->query("SELECT memb_name,mail_addr FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='". $_SESSION['LOGIN'] ."'");
				$SQL = mssql_fetch_object($SQL_Q);
				if (FORUM_ENABLE == true) {
					$objCon = @mysql_connect($FORUM_CONFIGS['DATABASE']['HOST'], $FORUM_CONFIGS['DATABASE']['USERNAME'], $FORUM_CONFIGS['DATABASE']['PASSWORD']);
	                @mysql_select_db($FORUM_CONFIGS['DATABASE']['DB_NAME'], $objCon);
					$SQLImageQ = @mysql_query("SELECT avatar,avatartype from mybb_users where username='". $_SESSION['LOGIN'] ."'");
					$SQLImage = @mysql_fetch_object($SQLImageQ);
					if($SQLImage->avatartype != "upload"){
					$ldTpl->set("MEMB_FOTO", "forum/images/default_avatar.png");
					} else {
					$forumAvatar = substr($SQLImage->avatar,1);
					$UserImg = "forum".$forumAvatar."";
					$ldTpl->set("MEMB_FOTO", $UserImg);
					}
				}else{
					$ldTpl->set("MEMB_FOTO", "modules/uploads/photos/no-image.png");
				}
				$ldTpl->set("MEMB_NAME", $SQL->memb_name);
				$ldTpl->set("MEMB_MAIL", $SQL->mail_addr);
				$ldTpl->set("MEMB_LOGIN", $_SESSION['LOGIN']);
				$SQL_Q = $this->query("SELECT previlegy FROM dbo.webPrevilegy WHERE username='". $_SESSION['LOGIN'] ."'");
				$SQL = mssql_fetch_object($SQL_Q);
				/*switch((int)$SQL->previlegy)
				{
					case 1: $tmpMenu = "<li><a href=\"panel.php?panel=home#!\">".PANEL_USER."</a></li>
					<li><a href=\"panel.php?panel=panelgamemaster#!\">".PANEL_GAME_MASTER."</a></li>"; break;
					case 2: $tmpMenu = "<li><a href=\"panel.php?panel=home#!\">".PANEL_USER."</a></li>
					<li><a href=\"panel.php?panel=panelgamemaster#!\">".PANEL_GAME_MASTER."</a></li>
					<li><a href=\"panel.php?panel=paneladmin#!\">".PANEL_ADMIN."</a></li>"; break;
					default: $tmpMenu = "<li><a href=\"panel.php?panel=home#!\">".PANEL_USER."</a></li>"; break;
				}*/
				if ((int)$SQL->previlegy > 0) {
                    $tmpMenu = "<li><a href=\"panel.php?panel=home#!\">".PANEL_USER."</a></li>
                    <li><a href=\"panel.php?panel=panelstaff\" target=\"_blank\">Painel Staff</a></li>";
                }
                else{
                    $tmpMenu = "<li><a href=\"panel.php?panel=home#!\">".PANEL_USER."</a></li>";
                }
				$ldTpl->set("MENU_LOGIN", $tmpMenu);
			}
			else 
			{
				$divLTemp = fopen("templates/". TEMPLATE_DIR ."/div[login].tpl.php","r");
				$ldTpl->set("DIV[LOGIN_LOGOUT]", fread($divLTemp,filesize("templates/". TEMPLATE_DIR ."/div[login].tpl.php")));
			}
		}
        public function loadPoll()
        {
            global $ldTpl;
            $findPollQ = $this->query("SELECT [id],[question] FROM dbo.webPollQuestions WHERE active = 1 ORDER BY id DESC");
            if(mssql_num_rows($findPollQ) > 0)
            {
                $findPoll = mssql_fetch_object($findPollQ);
                $pollResult .= "<li><strong>{$findPoll->question}</strong></li>";
                
                $findAnswersQ = $this->query("SELECT [idAnswer],[answer] FROM dbo.webPollAnswers WHERE idPoll = ".(int)$findPoll->id);
                if(mssql_num_rows($findAnswersQ) == 0)
                    $pollResult .= "<li>".POLL_NO_ANSWER_REGISTER."</li>";
                else
                {
                    $pollResult .= "<input id=\"answerNumber\" name=\"answerNumber\" value=\"0\" type=\"hidden\" />"; 
                    while($findAnswers = mssql_fetch_object($findAnswersQ))
                    {
                        $pollResult .= "<li><input id=\"answer\" name=\"answer\" value=\"{$findAnswers->idAnswer}\" type=\"radio\" onclick=\"javascript: document.getElementById('answerNumber').value = this.value\" /> {$findAnswers->answer}</li>";    
                    } 
                    $pollResult .= "<li><input type=\"button\" class=\"button\" value=\"".POLL_BUTTON_VOTE."\" onclick=\"javascript: Verify('panel.php?panel=ajax&amp;require=poll&action=vote&amp;pollId={$findPoll->id}&amp;answerNumber='+document.getElementById('answerNumber').value,'pollResult','get');\" /> <input type=\"button\" class=\"button\" value=\"".POLL_BUTTON_RESULTS."\" onclick=\"javascript: Verify('panel.php?panel=ajax&amp;require=poll&action=result&amp;pollId={$findPoll->id}','pollResult','get');\" /></li>";
                }     
            }
            else
            {
                $pollResult = "<li>".POLL_NO_ACTIVES."</li>";   
            }
            $ldTpl->set("POLL_OPTIONS", $pollResult);
            unset($pollResult);   
        }
        
	}
}
?>