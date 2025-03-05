<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldAjax" ) == false ) {
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldAjax extends ldMssql {
		public function __construct()
		{
			switch($_GET['require'])
			{
				case "login":
					$this->loginCheck();
					break;
				case "register":
					$this->registerCheck();
					break;
				default:
					echo "Erro nas propriedades do ajax.";
					break;
			}
		}

		private function loginCheck()
		{
			if(empty($_GET['userName']) || empty($_GET['userPwd'])) exit("<strong>".LOGIN_FILL_ALL_FIELDS."</strong>");
            
            $lock = $this->query("SELECT [errors], DATEDIFF(MINUTE, [date], GETDATE()) [minutes] FROM [dbo].[webPasswordBruteForceLock] WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
            if(mssql_num_rows($lock) > 0)
            {
                $lock = mssql_fetch_object($lock);
                if($lock->errors >= 5 && $lock->minutes < 5)
                {             
                    exit("<strong>".LOGIN_ERROR_LOCK."</strong>");
                }
                else if($lock->errors >= 5 && $lock->minutes >= 5)
                {   
                    $this->query("DELETE FROM [dbo].[webPasswordBruteForceLock] WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
                }
            }
            
			$checkQ = $this->query('exec dbo.webVerifyLogin "'. utf8_encode($_GET['userName']) .'","'. utf8_encode($_GET['userPwd']) .'","'. USE_MD5 .'"');
			$check = mssql_fetch_row($checkQ);
			if($check[0] == 0) 
            {
                $lock = $this->query("SELECT 1 FROM [dbo].[webPasswordBruteForceLock] WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
                if(mssql_num_rows($lock) > 0)
                {
                    $this->query("UPDATE [dbo].[webPasswordBruteForceLock] SET [errors] = [errors] + 1, [date] = GETDATE() WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
                }
                else
                {
                    $insert = $this->query("INSERT INTO [dbo].[webPasswordBruteForceLock] ([username],[errors],[date]) VALUES ('". utf8_encode($_GET['userName']) ."', 1, GETDATE())");
                }
                exit("<strong>".LOGIN_ERROR."</strong>");
            }
			else 
			{
                $this->query("DELETE FROM [dbo].[webPasswordBruteForceLock] WHERE [username] = '". utf8_encode($_GET['userName']) ."'");
				$_SESSION['LOGIN'] = utf8_encode($_GET['userName']);
			if(FORUM_ENABLE == true){
				setcookie("LOGINSITE", utf8_encode($_GET ['userName']), time()+(60*60*24*365), "/");
				global $FORUM_CONFIGS;
				        $objCon = mysql_connect("".$FORUM_CONFIGS['DATABASE']['HOST']."", "".$FORUM_CONFIGS['DATABASE']['USERNAME']."", "".$FORUM_CONFIGS['DATABASE']['PASSWORD']."");
                mysql_select_db("".$FORUM_CONFIGS['DATABASE']['DB_NAME']."", $objCon);
				$result = mysql_query("SELECT password, salt, uid, loginkey, avatar from ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."users WHERE username='".utf8_encode($_GET ['userName'])."'");
				$data = mysql_fetch_array($result);
				
				if (md5(md5($data[1]).md5(utf8_encode($_GET['userPwd']))) == $data[0]);
				{
					
					my_setcookie("loginattempts", 1);
					my_setcookie("mybb[lastactive]", time());
					my_setcookie("mybb[lastvisit]", time());
					my_setcookie("mybbuser", sprintf("%s_%s", $data[2], $data[3]));
					$sid = random_str(32);
					my_setcookie("sid", $sid, -1, true);
					
					$inseresssion = mysql_query("INSERT INTO ".$FORUM_CONFIGS['DATABASE']['TABLE_PREFIX']."sessions (sid, uid, ip, time, location, useragent, anonymous, nopermission, location1, location2) VALUES ('".$sid."', ".$data[2].", '', ".time().", '/forum/index.php', '".$_SERVER['HTTP_USER_AGENT']."', 0, 0, 0, 0)");
				}	
			}	
				
				exit("<strong>".LOGIN_SUCCESS."</strong><script type=\"text/javascript\"> window.location='".$_GET['url']."'; </script>");
			}
		}
		private function registerCheck()
		{
			if(!empty($_GET[login])) {
			 $login = $_GET[login];
			  if(eregi("[^a-zA-Z0-9_!=?&-]", $login) == true) { 
				echo "<script> document.getElementById('login').style.color = '#FF2121';</script>
					<script> document.getElementById('login').style.background = '#7d0000';</script>
					  <script> document.getElementById('login_error').innerHTML = '<strong>".REGISTER_DO_NOT_USE_SYMBOLS."</strong>'; </script>";
			  } else {
				$dados_q = $this->query("SELECT memb___id FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id='".$login."'");
				$dados = mssql_num_rows($dados_q);
				  switch($dados) {
					 case 0:
						echo "<script> document.getElementById('login').style.color = '#009F00'; </script>
					<script> document.getElementById('login').style.background = '';</script>
							  <script> document.getElementById('login_error').innerHTML = '<strong></strong>'; </script>";
					 break;
					 case 1:
						echo "<script> document.getElementById('login').style.color = '#FF2121'; </script>
							  <script> document.getElementById('login').style.background = '#7d0000';</script>
							  <script> document.getElementById('login_error').innerHTML = '".REGISTER_LOGIN_IN_USE."'; </script>";
					 break;
					 default:
						echo "Erro :(";
					 break;
				  }
			  }
			}
			if(!empty($_GET[senha]) && !empty($_GET[resenha])) {
			  $senha = $_GET[senha];
			  $resenha = $_GET[resenha];
			  if(strlen($senha) < 4){
				 echo "<script> document.getElementById('senha').style.color = '#FF2121'; </script>
					<script> document.getElementById('senha').style.background = '#7d0000';</script>
					<script> document.getElementById('resenha').style.background = '#7d0000';</script>
                      <script> document.getElementById('resenha').style.color = '#FF2121'; </script>
                      <script> document.getElementById('senha_error').innerHTML = '<strong><font color=\"#D82020\">Utilize mais de 4 caracteres.</font></strong>'; </script>";
              
			  } else {
			  if(eregi("[^a-zA-Z0-9_!=?&-]", $senha) == true || eregi("[^a-zA-Z0-9_!=?&-]", $resenha) == true) { 
                echo "<script> document.getElementById('senha').style.color = '#FF2121'; </script>
                      <script> document.getElementById('resenha').style.color = '#FF2121'; </script>
					<script> document.getElementById('senha').style.background = '#7d0000';</script>
					<script> document.getElementById('resenha').style.background = '#7d0000';</script>
                      <script> document.getElementById('senha_error').innerHTML = '<strong><font color=\"#D82020\">".REGISTER_DO_NOT_USE_SYMBOLS."</font></strong>'; </script>";
              } else {
				  if($senha != $resenha) {
					echo "<script> document.getElementById('senha').style.color = '#FF2121'; </script>
						  <script> document.getElementById('resenha').style.color = '#FF2121'; </script>
					<script> document.getElementById('senha').style.background = '#7d0000';</script>
					<script> document.getElementById('resenha').style.background = '#7d0000';</script>
						  <script> document.getElementById('senha_error').innerHTML = '<strong><font color=\"#D82020\">".REGISTER_PASSWORD_NOT_MATCH."</font></strong>'; </script>";
				  } else {
					echo "<script> document.getElementById('senha').style.color = '#009F00'; </script>
						  <script> document.getElementById('resenha').style.color = '#009F00'; </script>
					<script> document.getElementById('login').style.background = '';</script>
					<script> document.getElementById('login').style.background = '';</script>
						  <script> document.getElementById('senha_error').innerHTML = '<strong></strong>'; </script>";
				  }
			  }
			}
			}
			
			if(!empty($_GET[email]) && !empty($_GET[reemail])) {
			  $email = $_GET[email];
			  $reemail = $_GET[reemail];
			       if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {                                                     
                    echo "<script> document.getElementById('email').style.color = '#FF2121'; </script>
                          <script> document.getElementById('reemail').style.color = '#FF2121'; </script>
					<script> document.getElementById('email').style.background = '#7d0000';</script>
					<script> document.getElementById('reemail').style.background = '#7d0000';</script>
                          <script> document.getElementById('email_error').innerHTML = '<strong><font color=\"#D82020\">".REGISTER_WRITE_VALID_EMAIL."</font></strong>'; </script>";
                  } elseif($email != $reemail) {
					echo "<script> document.getElementById('email').style.color = '#FF2121'; </script>
						  <script> document.getElementById('reemail').style.color = '#FF2121'; </script>
					<script> document.getElementById('email').style.background = '#7d0000';</script>
					<script> document.getElementById('reemail').style.background = '#7d0000';</script>
						  <script> document.getElementById('email_error').innerHTML = '<strong><font color=\"#D82020\">".REGISTER_EMAIL_NOT_MATCH."</font></strong>'; </script>";
				  } else {
					echo "<script> document.getElementById('email').style.color = '#009F00'; </script>
						  <script> document.getElementById('reemail').style.color = '#009F00'; </script>
					<script> document.getElementById('email').style.background = '';</script>
					<script> document.getElementById('reemail').style.background = '';</script>
						  <script> document.getElementById('email_error').innerHTML = '<strong></strong>'; </script>";
				  }
			}			
		}
	}
	
}

?>
