<?php
error_reporting(E_ALL & ~E_NOTICE);
require("modules/autoload.php");
require("modules/settings.php");
require("modules/shopSettings.php");
session_name(SESSION_NAME);
session_start();  
if (isset($_COOKIE['LOGINSITE']))
{
	$_SESSION['LOGIN'] = $_COOKIE['LOGINSITE'];
}
if(FORUM_ENABLE){
	define("IN_MYBB", 1);
	require_once './forum/global.php';
}
$ldVersion = new ldVersion();           
$ldVersion->setCurrentVersion("2.8.1");
$ldVersion->compareCurrentVersion();

$ldSecurity = new ldSecurity();
$ldTime = new ldTime();
$ldMssql = new ldMssql();
$ldTpl = new ldTpl();
$ODBC = $ldMssql;
if($_GET['page'] != "ajax")    
    $ldGeneral = new ldGeneral(); 
    $ldPanelUser = new ldPanelUser();
    
new ldLanguage("commontexts", true);
if(isset($_SESSION['LOGIN']) == false){	
		$ldTpl->open("templates/".TEMPLATE_DIR."/loginerror.tpl.php");
}
$ldTpl->set("ResultTime", $ldTime->Result_Time());
$ldTpl->show();

function Print_error ($Msg, $Type = 0) 
{
    switch ($Type) 
    {
        case 1: return "Erro: A constante ".$Msg." n&atilde;o foi declarada."; break;
        case 2: return "Erro: A p&aacute;gina ".$Msg." n&atilde;o existe."; break;
        case 3: return "Erro: O campo ".$Msg." est&aacute; em branco."; break;
        default: return $Msg; break;
    }
}
function Require_File($file)
{
    if(file_exists($file) == true) require $file; else exit(Print_error($file,2));
}
function Refresh_Page($Time = 1000)
{
    if($Time == 0) print "<script type=\"text/javascript\">window.location='?';</script>";
    else print "<script type=\"text/javascript\">setInterval(\"window.location='?';\",".$Time.");</script>";
}

echo "<img style=\"display:none;\" src=\"modules/classes/cronjob.class.php?temp=".time()."\" />";
?>