<?php                
require("../modules/settings.php");   
require("../modules/shopSettings.php");
require("../modules/autoload.php");
//session_save_path("../tmp");    
session_name(SESSION_NAME);
session_start(); 

/*
	@Important Functions
*/
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

/*
	@Import Template Class
*/
Require_File("../modules/shopping/templates.class.php");
$tpl = new LD_Templates();

/*
	@Settings Configs
*/
Require_File("../modules/shopping/time.class.php");
$LD_Time = new LD_Time();
Require_File("../modules/shopping/protect.class.php");
$Protect = new LD_Protect();
//Require_File("../settings.php");
if(defined("LANGUAGE") == true) Require_File("../languages/".LANGUAGE."/shopping.php"); else exit(Print_error("LANGUAGE",1));
if(defined("HOST") == false) exit(Print_error("HOST",1));
if(defined("DB_SHOP_SQL") == false) exit(Print_error("DB_SHOP_SQL",1));
if(defined("USER") == false) exit(Print_error("USER_SQL",1));
if(defined("PWD") == false) exit(Print_error("PWD_SQL",1));
Require_File("../modules/shopping/mssql.class.php");
$ODBC = $SQL = new LD_Mssql();
$ldMssql = new ldMssql();

new ldLanguage("commontexts", true, "../");

switch(SYSTEM_ITEMS)
{
    case "NEW": 
        define("VARBINARY", 1920);
        define("DIVISOR", 32);
        break;
    case "OLD": 
        define("VARBINARY", 1200);
        define("DIVISOR", 20);
        break;
    default: 
        exit(Print_error("Valor da SYSTEM_ITEMS inv&aacute;lido",0));
        break;
}

/*
	@Ajax Functions
*/
if(isset($_GET['AjaxFunctions']) == TRUE)
{
	switch($_GET['Function']) 
	{
		case "Login" : 
			Require_File("../modules/shopping/login.class.php"); 
			$LD_Auth = new LD_Auth($_GET['userName'],$_GET['userPwd']);			
		break;   
        case "managerProducts":
            //VerifyLogin();
            Require_File("modules/products.class.php");
            $products = new products();    
        break;
        case "managerCoupons":
            //VerifyLogin();
            Require_File("modules/coupons.class.php");
            $Coupons = new Coupons();    
        break;
        case "itemFind":
            //VerifyLogin();
            Require_File("modules/itemfind.class.php");
            $itemFind = new itemFind();
        break;
		// 	VerifyLogin(); << Colocar nos outros modulos em ajax para admin
	}
  exit(); //Para a execução da página para retornar o ajax
}

/*
	@Verify auth [Session]
*/
if(!isset($_SESSION['Login']))
{
	$tpl->set("Time", $LD_Time->Result_Time());
	$tpl->set("Address", $_SERVER[SCRIPT_NAME]."?".$_SERVER[QUERY_STRING]);
	$tpl->open("templates/default/login.php");
	$tpl->show();
}
/*
	@Open system shop administration
*/
else
{
    if($_GET['cmd'] != "LogoutSystem"); //VerifyLogin();
	$_SESSION['AddressShop'] = base64_encode("index.php?".$_SERVER['QUERY_STRING']);
    switch($_GET['cmd'])
	{
		case "LogoutSystem": 
			session_destroy();
			Refresh_Page(0);
		break;
		case "Product::[Manager]":                       
			$tpl->open("templates/default/product[manager].php");
		break;
        case "ManagerPhoto":
            Require_File("modules/managerphoto.class.php");
            $managerPhoto = new managerPhoto();
            $tpl->open("templates/default/managerphoto.php");            
        break; 
        case "Coupons::[Manager]":     
            $tpl->open("templates/default/coupons[manager].php");
        break;
        case "Logins::[Manager]": 
            Require_File("modules/logins.class.php");
            $Logins = new Logins();
            $tpl->open("templates/default/manager[login].php");
        break;
        case "ItemFind":
            $tpl->open("templates/default/itemfind.php");
        break;   
        case "Logs::[ItemsBuys]":
            Require_File("../modules/history.class.php");
            $LD_History = new LD_History(false, true);
            Require_File("modules/logsitems.class.php");
            $LogsItems = new LogsItems();
            $tpl->open("templates/default/logs[itemsbuys].php");
            break;
        case "Logs::[KitsBuys]":
            Require_File("../modules/history.class.php");
            $LD_History = new LD_History(false, true);
            Require_File("modules/logskits.class.php");
            $LogsKits = new LogsKits();
            $tpl->open("templates/default/logs[kitsbuys].php");
            break;
        case "Payments::[InProgress]":     
            Require_File("modules/payments.class.php");
            $Payments = new Payments();
            $tpl->open("templates/default/payments[inprogress].php");
        break;
		case "Payments::[Completed]":     
            Require_File("modules/payments.class.php");
            $Payments = new Payments();
			$tpl->open("templates/default/payments[completed].php");
		break;
		case "Payments::[Rejected]":      
            Require_File("modules/payments.class.php");
            $Payments = new Payments();
			$tpl->open("templates/default/payments[rejected].php");
		break;  
		case "Reports": 	
			Require_File("modules/reports.class.php");
			$Reports = new Reports();
			$tpl->open("templates/default/reports.php");
		break;
		default: 			 
			$tpl->open("templates/default/index.php");
		break;
	}
	$tpl->set("Time", $LD_Time->Result_Time());
	$tpl->show();
} 
?>