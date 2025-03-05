<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldRecovery" ) == false ) {
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldRecovery extends ldMssql {
		public function __construct()
		{
			global $ldTpl;
			if($_GET['Write'] == true)
				switch($_GET['type'])
				{
                    case "password": $this->recoveryPassword(); break;
					case "confirm": $this->confirmPassword(); break;
				}
			$ldTpl->set("ResultTpl", $this->tempTpl);
		}
		private function random_hash($length)
		{
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
		return $randomString;
		}
		private function recoveryPassword()
		{
			global $Config_SMTP;
            if(empty($_POST['account']) == true) $tempTpl = RECOVERY_FILL_LOGIN;    
            else
            {
                $verify_login_q = $this->query("SELECT memb__pwd,mail_addr,fpas_answ FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='".$_POST['account']."'");
                $verify_login = mssql_fetch_array($verify_login_q);
                if(mssql_num_rows($verify_login_q) == 0)
                {
                    $this->tempTpl = RECOVERY_LOGIN_NOT_FOUND; 
                    return;
                }   
                $findLastRequestQ = $this->query("SELECT dateRequest FROM ".DATABASE.".dbo.webSendEmailLimit WHERE username='".$_POST['account']."'");
                $findLastRequest = mssql_fetch_object($findLastRequestQ);                
                if((int)$findLastRequest->dateRequest > time())
                {
                    $this->tempTpl = sprintf(RECOVERY_WAIT_TIME_FOR_SEND_AGAIN, $Config_SMTP['LimitTime']); 
                    return;
                }
                else
                {    
                    $timeRequestLimit = strtotime("+ {$Config_SMTP['LimitTime']} Minutes"); 
                    $findLastRequestQ = $this->query("SELECT 1 FROM ".DATABASE.".dbo.webSendEmailLimit WHERE username='".$_POST['account']."'");
                    if(mssql_num_rows($findLastRequestQ) == 0)
                        $this->query("INSERT INTO ".DATABASE.".dbo.webSendEmailLimit (username, dateRequest) VALUES ('".$_POST['account']."','".$timeRequestLimit."')");
                    else                        
                        $this->query("UPDATE ".DATABASE.".dbo.webSendEmailLimit SET dateRequest = '".$timeRequestLimit."' WHERE username = '".$_POST['account']."'");
                } 
						$randomhash = $this->random_hash(32);
						$verify_hash_q = $this->query("SELECT 1 FROM ".DATABASE.".dbo.webRecoveryPassword WHERE username='".$_POST['account']."'");
						if(mssql_num_rows($verify_hash_q) == 0)
							$this->query("INSERT INTO ".DATABASE.".dbo.webRecoveryPassword (username,hash) VALUES ('".$_POST['account']."','".$randomhash."')");
						else
							$this->query("UPDATE ".DATABASE.".dbo.webRecoveryPassword SET hash='".$randomhash."' WHERE username='".$_POST['account']."'");
						
			            date_default_timezone_set("America/Sao_Paulo");
                        $mail             = new PHPMailer();  
                        $body             .= "[Aten&ccedil;&atilde;o!]<br>GxMU Informa: Este &eacute; um email gerado automaticamente pelo nosso sistema, por favor n&atilde;o responda.<br><br><br><br>Caso voc&ecirc; n&atilde;o tenha solicitado este e-mail sugerimos que altere sua senha para sua seguran&ccedil;a.<br><br>Para prosseguir com a recupera&ccedil;&atilde;o de sua senha, por favor <a href=\"http://".$_SERVER['HTTP_HOST']."/?page=lostpw[confirm]&amp;username=".$_POST['account']."&amp;hash=".$randomhash."\" target=\"_blank\">clique aqui</a> e informe sua nova senha.<br><br>IP que realizou o pedido: ".$_SERVER['REMOTE_ADDR'].".<br>Agradecemos sua prefer&ecirc;ncia !<br>Equipe ".TITLE_SITE.""; 
                        $mail->IsSMTP(); 
                        $mail->SMTPDebug  = $Config_SMTP['Debug'];  
                        $mail->Host       = $Config_SMTP['Server'];  
                        $mail->Port       = $Config_SMTP['Port'];  
                        $mail->From       = $Config_SMTP['From'];
                        $mail->Username   = $Config_SMTP['User'];
                        $mail->Password   = $Config_SMTP['Password'];
                        $mail->FromName   = TITLE_SITE;   
                        $mail->Subject    = RECOVERY_EMAIL_SUBJECT;    
                        
                        $mail->MsgHTML($body);

                        $mail->AddAddress($verify_login['mail_addr'], $_POST['account']);                                        

                        if(!$mail->Send()) $mostra = "<strong>".RECOVERY_TRY_AGAIN."</strong>";
                        else $mostra = "<strong>".RECOVERY_SEND_SUCCESS."</strong>";
						
                        
                $tempTpl = "<div class='quadros'>".RECOVERY_LOGIN.": <strong>".$_POST['account']."</strong> <br/><br/>{$mostra}</div>";
            }
			$this->tempTpl = $tempTpl;
		}
        private function confirmPassword()
        {                 
            if(empty($_GET["username"]) == true || empty($_GET["hash"]) == true)
            {
                $this->tempTpl = "Usu&aacute;rio ou Hash incompletos";
            }
            else
            {
                $checkRegisters = $this->query("SELECT username, hash FROM ".DATABASE.".dbo.webRecoveryPassword WHERE username='".$_GET['username']."' AND hash='".$_GET['hash']."'");
                if(mssql_num_rows($checkRegisters) == 0)
                {
                    $this->tempTpl = "Usu&aacute;rio ou Hash incorretos";
                }
				elseif (empty($_POST['senha']) || empty($_POST['resenha']))
				$this->tempTpl = "Por favor, repita o processo.";
				elseif ($_POST['resenha'] != $_POST['senha'])
				$this->tempTpl = "Por favor, digite senhas iguais.<br>Reabra o link!";
                else
                {
				global $FORUM_CONFIGS;
                    $this->query("UPDATE ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO SET memb__pwd='".$_POST['senha']."' WHERE memb___id='".$_GET['username']."'");
				$objCon = mysql_connect($FORUM_CONFIGS['DATABASE']['HOST'], $FORUM_CONFIGS['DATABASE']['USERNAME'], $FORUM_CONFIGS['DATABASE']['PASSWORD']);
                mysql_select_db($FORUM_CONFIGS['DATABASE']['DB_NAME'], $objCon);
				if(!objCon) $this->tempTpl = "Por favor, vai se fuder.";
				else {
				$mybbpassword2 = md5($_POST['senha']);
				$mybbsalt2 = $this->random_hash(8);
				$mybbsalted2 = md5(md5($mybbsalt2).$mybbpassword2);
				mysql_query("UPDATE ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."users SET password='".$mybbsalted2."', salt='".$mybbsalt2."' WHERE username='".$_GET['username']."'");
                    $this->query("DELETE FROM [".DATABASE."].[dbo].[webRecoveryPassword] WHERE [username] = '".$_GET['username']."' AND [hash] = '".$_GET['hash']."'");
                    $this->tempTpl = "Sua Senha foi alterada com sucesso!";
				}
                }
            }
        }
	}	
}

?>