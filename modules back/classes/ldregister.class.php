<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");


if ( class_exists( "ldRegister" ) == false ) {
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldRegister extends ldMssql {
		private $tpmResult = NULL;

		public function __construct()
		{
			global $ldTpl, $REGISTER_SETTINGS;
			
            if(isset($_GET['activeAccount']) == true && empty($_GET['activeAccount']) == false)
                $this->activeAccount();
            elseif(isset($_GET['resendActivateEmail']) == true && empty($_GET['resendActivateEmail']) == false)
                $this->resendActivateEmail();
			elseif($_GET['write'] == true)
            {
                if(isset($_SESSION['LOGIN']) == true)
                    $this->tpmResult = "<div class='qdestaques'>".REGISTER_LOGOUT_FOR_REGISTER."</div>";
                else
                    $this->registerNow();
            }
                
		    $ldTpl->set("RESULT_REGISTER", $this->tpmResult);
            
            if($REGISTER_SETTINGS['BONUS_ITEM']['ACTIVE'] == true)
            {
                require_once("ldItemClass/ldItemDatabase.class.php");
                require_once("ldItemClass/ldItemMake.class.php");

                // Gerar / Carregar banco de dados
                ldItemDatabase::setDatabases("modules/", "item.txt", "classes/ldItemClass/data/item.serialize.txt");
                if(ldItemDatabase::checkDatabaseExists() == false)
                {
                    ldItemDatabase::createDatabase();   
                }
                if(ldItemDatabase::checkDatabaseExists() == false)
                {
                    exit(LDPU_VIRTUAL_VAULT_CANT_LOAD_DB);   
                }
                //var_dump(ldItemDatabase::$dbItem);
                
                $tmpList = NULL;
                
                if(count($REGISTER_SETTINGS['BONUS_ITEM']['ITEMS']) > 0)
                {
                    foreach($REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'] as $key => $kit)
                    {
                        $tmpList .= "<option value=\"{$key}\" style=\"font-weight: bold;\">&#62; {$kit["Name"]}</option>";
                        $tmpList .= "<option value=\"\" disabled=\"disabled\">--- ".REGISTER_BONUS_PACKET_DETAILS.":</option>";
                        foreach($kit["Items"] as $item)
                        {
                            $tmpList .= "<option value=\"\" disabled=\"disabled\">----- ". ldItemDatabase::$dbItem[ $item["idCategorie"] ][ $item["idItem"] ]["Name"] ."</option>";
                        }
                    }
                }
                
                $ldTpl->set("REGISTER_OPTIONS_BONUS", $tmpList);
            }
            
        }
		public function escape_binary($string)
{
return "X'".bin2hex($string)."'";
}

	 public function random_str($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
        private function registerNow()
        {

			require_once 'recaptchalib.class.php';
			// sua chave secreta
			$secret = reCAPTCHA_SECRETKEY;
			 
			// resposta vazia
			$response = null;
			 
			// verifique a chave secreta
			$reCaptcha = new ReCaptcha($secret);

			// se submetido, verifique a resposta
			if ($_POST["g-recaptcha-response"]) {
			$response = $reCaptcha->verifyResponse(
					$_SERVER["REMOTE_ADDR"],
					$_POST["g-recaptcha-response"]
				);
			}

            global $REGISTER_SETTINGS, $TABLES_CONFIGS, $PANELUSER_MODULE, $Config_SMTP, $FORUM_CONFIGS;
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $resenha = $_POST['resenha'];
            $email = $_POST['email'];
            $reemail = $_POST['reemail'];
            $nome = $_POST['nome'];
			//inicio sistema indicado

			if(!empty($_COOKIE['ref'])){
				$indicadoporid = $_COOKIE['ref'];
			}
			else{
				$indicadoporid = "0";
			}
			//fim
            
           if(empty($login) ||
               empty($senha) ||
               empty($resenha) ||
               empty($email) ||
               empty($reemail) ||
               empty($nome)) 
                  $errorTmp .= REGISTER_EMPTY_INPUTS."<br />"; 
            
            if(eregi("[^a-zA-Z0-9_!=?&-]", $login) == true) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_DO_NOT_USE_SYMBOLS_LOGIN."</div>"; 
            if(strlen($login) > 10) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_LOGIN_INVALID_SIZE."</div>";
            if($REGISTER_SETTINGS['USERNAME']['FORCELOWER'] == true)
                $login = strtolower($login);
            if(eregi("[^a-zA-Z0-9_!=?&-]", $senha) == true) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_DO_NOT_USE_SYMBOLS_PASSWORD."</div>"; 
            if(eregi("[^a-zA-Z0-9_!=?&-]", $resenha) == true) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_DO_NOT_USE_SYMBOLS_REPASSWORD."</div>"; 
            if($REGISTER_SETTINGS['EMAIL_REPEAT'] == false)
                if(mssql_num_rows($this->query("SELECT 1 FROM ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO WHERE mail_addr='".$email."'")) > 0) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_EMAIL_IN_USE."</div>"; 
            if(mssql_num_rows($this->query("SELECT memb___id FROM ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO WHERE memb___id='".$login."'")) > 0) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_LOGIN_IN_USE."</div>"; 
            if($senha != $resenha) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_PASSWORD_NOT_MATCH."</div>"; 
            if($email != $reemail) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_EMAIL_NOT_MATCH."</div>"; 
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">".REGISTER_WRITE_VALID_EMAIL."</div>"; 
			if ($response = null || !$response->success) $error_tmp .= "<div class=\"alert alert-danger\" role=\"alert\">Por favor, verifique o reCaptcha.</div>";
            if(isset($error_tmp) == true) return $this->tpmResult = "<div class=\"quadros\">".$error_tmp."</div>";
            else
            {
			$data = date('d/m/Y G:i');
				
				if(!isset($pontos_indicado)){
					$pontos_indicado = 0;
				}
				if($indicadoporid == 0){
					$pontos_indicado = 0;
				}
				
				function getUserIP()
				{
					$client  = @$_SERVER['HTTP_CLIENT_IP'];
					$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
					$remote  = $_SERVER['REMOTE_ADDR'];
					if(filter_var($client, FILTER_VALIDATE_IP)){$ip = $client;}
					elseif(filter_var($forward, FILTER_VALIDATE_IP)){$ip = $forward;}
					else{$ip = $remote;}
					return $ip;
				}
				$pega_ip = getUserIP();
				$checaip = mssql_num_rows(mssql_query("SELECT IP FROM MuOnline.dbo.MEMB_STAT WHERE IP='".$pega_ip."'"));
				if($checaip >= 1){$indicadoporid = 0;$pontos_indicado = 0;}	
				
				if(FORUM_ENABLE == true) {
                $objCon = mysql_connect($FORUM_CONFIGS['DATABASE']['HOST'], $FORUM_CONFIGS['DATABASE']['USERNAME'], $FORUM_CONFIGS['DATABASE']['PASSWORD']);
                mysql_select_db($FORUM_CONFIGS['DATABASE']['DB_NAME'], $objCon);
				$mybbpassword = md5($senha);
				$mybbsalt = $this->random_str(8);
				$mybbloginkey = $this->random_str(50);
				$mybbsalted = md5(md5($mybbsalt).$mybbpassword);
				$mybbipaddress = strtolower($_SERVER['REMOTE_ADDR']);
				$mybbpackedip = $this->escape_binary($mybbipaddress);
				$mybbdata = strtotime("now");
				$lastuidQ = mysql_query("SELECT uid FROM ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."users order by uid DESC limit 1");
				$lastuids = mysql_fetch_object($lastuidQ);
				$lastuid = $lastuids->uid+1;
				update_stats(array('numusers' => '+1'));
			mysql_query("INSERT INTO ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."users (username,password,salt,loginkey,email,postnum,threadnum,usergroup,displaygroup,regdate,lastactive,lastvisit,lastpost,birthdayprivacy,allownotices,hideemail,receivepms,pmnotice,threadmode,regip,lastip,showimages,showvideos,showsigs,showavatars,showquickreply,showredirect,timezone,dstcorrection,returndate) VALUES ('".$login."','".$mybbsalted."','".$mybbsalt."','".$mybbloginkey."','".$email."','0','0','2','0','".$mybbdata."','0','0','0','all','1','0','1','1','linear','0x00','0x00','1','1','1','1','1','1','0','2','0');");
			$result = mysql_query("SELECT password, salt, uid, loginkey, avatar from ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."users WHERE username='".$login."'");
			$data = mysql_fetch_array($result);
			
			if (md5(md5($data[1]).md5($senha)) == $data[0]);
			{
				setcookie("LOGINSITE", utf8_encode($_GET ['userName']), time()+(60*60*24*365), "/");
				my_setcookie("loginattempts", 1);
				my_setcookie("mybb[lastactive]", time());
				my_setcookie("mybb[lastvisit]", time());
				my_setcookie("mybbuser", sprintf("%s_%s", $data[2], $data[3]));
				$sid = random_str(32);
				my_setcookie("sid", $sid, -1, true);
				
				$inseresssion = mysql_query("INSERT INTO ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."sessions (sid, uid, ip, time, location, useragent, anonymous, nopermission, location1, location2) VALUES ('".$sid."', ".$data[2].", '', ".time().", '/forum/index.php', '".$_SERVER['HTTP_USER_AGENT']."', 0, 0, 0, 0)");
			}
				}
			
                $_SESSION['LOGIN']=$login;
                $data = date('d/m/Y G:i');
                if(USE_MD5 == 1) $senha_query = "CONVERT(varbinary(16),'0x00')"; else $senha_query = "'$senha'";
                $this->query("INSERT INTO ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO (memb___id,memb__pwd,memb_name,sno__numb,post_code,addr_info,addr_deta,mail_addr,phon_numb,job__code,data,appl_days,modi_days,out__days,true_days,mail_chek,bloc_code,ctl1_code,indicado) VALUES ('$login',$senha_query,'$nome','1','s-n','11111','','$email','','1','$data','2003-11-23','2003-11-23','2003-11-23','2003-11-23','1','0','1','$indicadoporid')");
				
				if($indicadoporid != 0){
					$this->query("UPDATE ". DATABASE_ACCOUNTS .".dbo.MEMB_INFO SET pontos_indicado=pontos_indicado+1 WHERE memb_guid='".$indicadoporid."'");
				}
				
                if(USE_MD5 == 1) $this->query("exec dbo.webPwdHashWrite '".$login."','".$senha."'");
                if(VI_CURR_INFO == true) $this->query("INSERT INTO ". DATABASE_ACCOUNTS .".dbo.VI_CURR_INFO (ends_days,chek_code,used_time,memb___id,memb_name,memb_guid,sno__numb,Bill_Section,Bill_value,Bill_Hour,Surplus_Point,Surplus_Minute,Increase_Days )  VALUES ('2005','1',1234,'$login','$nome',1,'7','6','3','6','6','2003-11-23 10:36:00','0' )");
				
                if($TABLES_CONFIGS['WEBCASH']['table'] != "MEMB_INFO")
                    $this->query("INSERT INTO ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                    (".$TABLES_CONFIGS['WEBCASH']['columnUsername'].",   
                                    ".$TABLES_CONFIGS['WEBCASH']['columnAmount'].",   
                                    ".$TABLES_CONFIGS['WEBCASH']['columnAmount2'].")
                                  VALUES
                                    ('".$login."', ".(int)$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT'].", ".(int)$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT2'].");
                                  ");
                else
                    $this->query("UPDATE ".$TABLES_CONFIGS['WEBCASH']['database'].".dbo.".$TABLES_CONFIGS['WEBCASH']['table']." 
                                    SET ".$TABLES_CONFIGS['WEBCASH']['columnUsername']." = '{$login}',   
                                    ".$TABLES_CONFIGS['WEBCASH']['columnAmount']." = ".(int)$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT'].",   
                                    ".$TABLES_CONFIGS['WEBCASH']['columnAmount2']." = ".(int)$REGISTER_SETTINGS['BONUS_CASH']['AMOUNT2']."
                                    WHERE ".$TABLES_CONFIGS['WEBCASH']['columnUsername']." = '{$login}'");
                
                if($TABLES_CONFIGS['WEBVIPS']['table'] != "MEMB_INFO")      
                    $this->query("INSERT INTO ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." 
                                    (".$TABLES_CONFIGS['WEBVIPS']['columnUsername'].",
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnType'].",
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnDateBegin'].",
                                    ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd'].")
                                  VALUES
                                    ('".$login."', 0, '0', '0');
                                  ");
                
                if($REGISTER_SETTINGS['BONUS_VIP']['ACTIVE'] == true)
                {
                    if(MUSERVER_TEAM == 1 && VESION_MUSERVER >= 4)
                    {
                        $newTimeEnd = "DATEADD(day, ".$REGISTER_SETTINGS['BONUS_VIP']['DAYS'].", getdate())";

                        $this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET 
                            ".$TABLES_CONFIGS['WEBVIPS']['columnType']." = ".$REGISTER_SETTINGS['BONUS_VIP']['TYPE'].",
                            ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." = ".$newTimeEnd."
                            WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$login."'");

                        $dateVisible = date("d-m-Y g:i a", strtotime("+ ". $REGISTER_SETTINGS['BONUS_VIP']['DAYS'] ." days"));
                    }
                    else
                    {
                        $timeStampBegin = strtotime("now");
                        $timeStampEnd = strtotime("+ ". $REGISTER_SETTINGS['BONUS_VIP']['DAYS'] ." days");
                        $this->query("UPDATE ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." SET 
                                        ".$TABLES_CONFIGS['WEBVIPS']['columnType']." = ".$REGISTER_SETTINGS['BONUS_VIP']['TYPE'].",
                                        ".$TABLES_CONFIGS['WEBVIPS']['columnDateBegin']." = '".$timeStampBegin."',
                                        ".$TABLES_CONFIGS['WEBVIPS']['columnDateEnd']." = '".$timeStampEnd."'
                                        WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']." = '".$login."'");

                        $dateVisible = date("d-m-Y g:i a",$timeStampEnd);
                    }
                    
                    $tempRespost .= sprintf("<div class='qdestaques2'>".REGISTER_SUCCESS_REGISTER_BONUS_VIP."</div>", $REGISTER_SETTINGS['BONUS_VIP']['DAYS'], $PANELUSER_MODULE['BUY_VIPS']['NAME_FLATS'][$REGISTER_SETTINGS['BONUS_VIP']['TYPE']] , $dateVisible);
                }
                
                if($REGISTER_SETTINGS['BONUS_ITEM']['ACTIVE'] == true)
                {
                    require_once("ldItemClass/ldItemDatabase.class.php");
                    require_once("ldItemClass/ldItemMake.class.php");
                    require_once("ldItemClass/ldItemParse.class.php");  
                    require_once("ldItemClass/ldVault.class.php");

                    // Gerar / Carregar banco de dados
                    ldItemDatabase::setDatabases("modules/", "item.txt", "classes/ldItemClass/data/item.serialize.txt");
                    if(ldItemDatabase::checkDatabaseExists() == false)
                    {
                        ldItemDatabase::createDatabase();   
                    }
                    if(ldItemDatabase::checkDatabaseExists() == false)
                    {
                        exit(LDPU_VIRTUAL_VAULT_CANT_LOAD_DB);   
                    }
                    //var_dump(ldItemDatabase::$dbItem);
                    switch($REGISTER_SETTINGS['BONUS_ITEM']['VERSION'])
                    {
                        case 1: $length = 1200; break;
                        case 2: $length = 1200; break;
                        case 3: 
                            if(constant("VESION_MUSERVER") == 6) $length = 3840; 
                            else $length = 1920;
                            break;
                    }
                    $this->query("INSERT INTO [".DATABASE_CHARACTERS."].[dbo].[warehouse] ([AccountID], [Items], [Money], [EndUseDate], [DbVersion]) VALUES ('".$login."',cast(REPLICATE(char(0xff),".$length.") as varbinary(".$length.")),0, getdate(),". (int)$REGISTER_SETTINGS['BONUS_ITEM']['VERSION'] .")");
                    
                    if(isset($REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'][$_POST['registerBonus']]) && $_POST['registerBonus'] != -1)
                    {
                        $tempRespost .= sprintf("<div class='qdestaques2'>".REGISTER_SUCCESS_REGISTER_BONUS_ITEMS."</div>", $REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'][$_POST['registerBonus']]["Name"]);
                
                        foreach($REGISTER_SETTINGS['BONUS_ITEM']['ITEMS'][$_POST['registerBonus']]["Items"] as $item)
                        {
                            //var_dump( ldItemDatabase::$dbItem[ $item["idCategorie"] ][ $item["idItem"] ]["Name"] );
                            $HexItem = NULL;
                            if(ldItemMake::makeHexItem($HexItem, $item["idItem"], $item["idCategorie"], $REGISTER_SETTINGS['BONUS_ITEM']['VERSION'], $item["options"]) == true)
                            {
                                $ldVault = new ldVault($login, $REGISTER_SETTINGS['BONUS_ITEM']['VERSION']);
                                $ldVault->getVault();   
                                $ldVault->cutCode();  
                                $ldVault->structureVault(); 

                                ldItemParse::parseHexItem($HexItem, $REGISTER_SETTINGS['BONUS_ITEM']['VERSION']);
                                $slot = $ldVault->searchSlotsInVault(ldItemParse::$dumpTemp['Item']['X'], ldItemParse::$dumpTemp['Item']['Y']);
                                if($slot != -1)
                                    $ldVault->insertItemInSlot($HexItem, $slot);
                                    
                                $ldVault->structureVault();
                                $ldVault->writeVault(true);
                                unset($ldVault);
                            } 
                            unset($HexItem);
                        }
                    }
                    
                }
                
                if($REGISTER_SETTINGS['EMAIL_ACTIVE'] == true)
                 {
                    $hash = md5(microtime().$login);
                    $linkActive = "http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]."?page=register&activeAccount=".$login."&hash=".$hash;
                    
                    $this->query("UPDATE [". DATABASE_ACCOUNTS ."].[dbo].[MEMB_INFO] SET [bloc_code] = 1, [hashActivate] = '{$hash}' WHERE [memb___id] = '{$login}'");
                    
                    date_default_timezone_set("America/Sao_Paulo");
                    $mail             = new PHPMailer();  
                    $body             .= sprintf(CREATE_ACCOUNT_ACTIVE_EMAIL_BODY, $login, $senha, $nome, $email, $linkActive, $linkActive);
                    $body             = eregi_replace("[\]",'',$body); 
                    $mail->IsSMTP(); 
                    $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                    $mail->Host       = $Config_SMTP['Server'];  
                    $mail->Port       = $Config_SMTP['Port'];  
                    $mail->From       = $Config_SMTP['From'];
                    $mail->Username   = $Config_SMTP['User'];
                    $mail->Password   = $Config_SMTP['Password'];
                    $mail->FromName   = TITLE_SITE;   
                    $mail->Subject    = CREATE_ACCOUNT_ACTIVE_EMAIL_SUBJECT;    
                    
                    $mail->MsgHTML($body);

                    $mail->AddAddress($email, $login);                                        

                    if($mail->Send()) $emailSend = "<div class='qdestaques2'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_SUCCESS."</strong></div>";
                    else $emailSend = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_ERROR."</strong></div>";
                }
                else
                {
                    date_default_timezone_set("America/Sao_Paulo");
                    $mail             = new PHPMailer();  
                    $body             .= sprintf(CREATE_ACCOUNT_EMAIL_BODY, $login, $senha, $nome, $email);
                    $body             = eregi_replace("[\]",'',$body); 
                    $mail->IsSMTP(); 
                    $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                    $mail->Host       = $Config_SMTP['Server'];  
                    $mail->Port       = $Config_SMTP['Port'];  
                    $mail->From       = $Config_SMTP['From'];
                    $mail->Username   = $Config_SMTP['User'];
                    $mail->Password   = $Config_SMTP['Password'];
                    $mail->FromName   = TITLE_SITE;   
                    $mail->Subject    = CREATE_ACCOUNT_EMAIL_SUBJECT;    
                    
                    $mail->MsgHTML($body);

                    $mail->AddAddress($email, $login);                                        

                    if($mail->Send()) $emailSend = "<div class='qdestaques2'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_SUCCESS."</strong></div>";
                    else $emailSend = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ERROR."</strong></div>";
                }
                
				exit("<script type=\"text/javascript\"> window.location='panel.php'; </script>");
				//return $this->tpmResult = sprintf("<div class=\"quadros\">".REGISTER_SUCCESS_REGISTER."</div>".$tempRespost.$emailSend, $login, $senha, $nome, $email);
            }
			
        }
        private function resendActivateEmail()
        {
            global $Config_SMTP;
            
            $getInfos = $this->query("SELECT [mail_addr],[hashActivate] FROM [". DATABASE_ACCOUNTS ."].[dbo].[MEMB_INFO] WHERE [memb___id] = '".$_GET['resendActivateEmail']."'");
            if(mssql_num_rows($getInfos) == 0)
            {
                $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_NOT_EXISTS_ACCOUNT."</strong></div>";
            }
            else
            {
                $getInfos = mssql_fetch_object($getInfos);
                if($getInfos->hashActivate == null)
                {
                    $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_HAS_ACTIVE."</strong></div>";
                }
                else
                {
                    $linkActive = "http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]."?page=register&activeAccount=".$_GET['resendActivateEmail']."&hash=".$getInfos->hashActivate;
                     
                    date_default_timezone_set("America/Sao_Paulo");
                    $mail             = new PHPMailer();  
                    $body             .= sprintf(CREATE_ACCOUNT_ACTIVE_EMAIL_BODY_PARTIAL, $_GET['resendActivateEmail'], $linkActive, $linkActive);
                    $body             = eregi_replace("[\]",'',$body); 
                    $mail->IsSMTP(); 
                    $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                    $mail->Host       = $Config_SMTP['Server'];  
                    $mail->Port       = $Config_SMTP['Port'];  
                    $mail->From       = $Config_SMTP['From'];
                    $mail->Username   = $Config_SMTP['User'];
                    $mail->Password   = $Config_SMTP['Password'];
                    $mail->FromName   = TITLE_SITE;   
                    $mail->Subject    = CREATE_ACCOUNT_ACTIVE_EMAIL_SUBJECT;    
                    
                    $mail->MsgHTML($body);

                    $mail->AddAddress($getInfos->mail_addr, $_GET['resendActivateEmail']);                                        

                    if($mail->Send()) $this->tpmResult = "<div class='qdestaques2'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_SUCCESS."</strong></div>";
                    else $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_EMAIL_SEND_INFO_ACTIVE_ERROR."</strong></div>";
                }
            }
                
            return $this->tpmResult;
            
        }
		private function activeAccount()
		{
			global $Config_SMTP;
			
            $getInfos = $this->query("SELECT [mail_addr],[hashActivate] FROM [". DATABASE_ACCOUNTS ."].[dbo].[MEMB_INFO] WHERE [memb___id] = '".$_GET['activeAccount']."'");
            if(mssql_num_rows($getInfos) == 0)
            {
                $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_NOT_EXISTS_ACCOUNT."</strong></div>";
            }
            else
            {
                $getInfos = mssql_fetch_object($getInfos);
                if($getInfos->hashActivate == null)
                {
                    $this->tpmResult = "<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_HAS_ACTIVE."</strong></div>";
                }
                else
                {
                    if($getInfos->hashActivate == $_GET['hash'])
                    {
                         $this->query("UPDATE [". DATABASE_ACCOUNTS ."].[dbo].[MEMB_INFO] SET [bloc_code] = 0, [hashActivate] = null WHERE [memb___id] = '{$_GET['activeAccount']}'");
                         $this->tpmResult = "<div class='qdestaques2'><strong>".CREATE_ACCOUNT_ACTIVE_SUCCESS."</strong></div>";
                    }
                    else $this->tpmResult = sprintf("<div class='qdestaques'><strong>".CREATE_ACCOUNT_ACTIVE_ERROR_HASH."</strong></div>", $_GET['activeAccount']);
                }
            }
                
            return $this->tpmResult;
			
		}
	}	
}

?>