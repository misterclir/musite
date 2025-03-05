<?php
error_reporting(E_ALL & ~E_NOTICE);
require("modules/autoload.php");
require("modules/settings.php");
require("modules/shopSettings.php");
global $PANELUSER_PREMISSIONS;
if($PANELUSER_PREMISSIONS['SHOPPING_INSIDE'][0] == '0') die();
session_name(SESSION_NAME);
session_start();  
if (isset($_COOKIE['LOGINSITE']))
{
	$_SESSION['LOGIN'] = $_COOKIE['LOGINSITE'];
}
$ldVersion = new ldVersion();           
$ldVersion->setCurrentVersion("2.8.1");
$ldVersion->compareCurrentVersion();

$ldSecurity = new ldSecurity();
$ldTime = new ldTime();
$ldMssql = new ldMssql();
$ldTpl = new ldTpl();
$ODBC = $ldMssql;
if(isset($_GET['AjaxFunctions']) == TRUE)
{
    switch($_GET['Function']) 
    {
        case "CatalogSystem" :
            Require_File("modules/classes/webshop/general.class.php");
            $LD_General = new General();
            Require_File("modules/classes/webshop/catalog.class.php"); 
            $LD_Catalog = new Catalog();
            if(!empty($_GET['ShowCatalogType'])) 
            {
                $LD_Catalog->ShowCatalogType($_GET['ShowCatalogType']);
            }             
        break;
		case "FinishBuy" :
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
            if(!isset($_GET['ProductID']) || 
                !isset($_GET['Item_Level']) || 
                !isset($_GET['Item_Option']) || 
                !isset($_GET['Item_Ancient']) || 
                !isset($_GET['Item_Skill']) || 
                !isset($_GET['Item_Luck']) || 
                !isset($_GET['Item_OpExc_1']) || 
                !isset($_GET['Item_OpExc_2']) || 
                !isset($_GET['Item_OpExc_3']) || 
                !isset($_GET['Item_OpExc_4']) || 
                !isset($_GET['Item_OpExc_5']) || 
                !isset($_GET['Item_OpExc_6']) ||  
                !isset($_GET['Item_JH']) ||
                !isset($_GET['Item_Refine']) ||
                !isset($_GET['Item_Socket_Slot_1']) ||
                !isset($_GET['Item_Socket_Slot_2']) ||
                !isset($_GET['Item_Socket_Slot_3']) ||
                !isset($_GET['Item_Socket_Slot_4']) ||
                !isset($_GET['Item_Socket_Slot_5']) ||       
                !isset($_GET['Item_Socket_Slot_1_Option']) ||
                !isset($_GET['Item_Socket_Slot_2_Option']) ||
                !isset($_GET['Item_Socket_Slot_3_Option']) ||
                !isset($_GET['Item_Socket_Slot_4_Option']) ||
                !isset($_GET['Item_Socket_Slot_5_Option'])
                ) exit(Print_error("<script type=\"text/javascript\">alert(\"Erro ao gravar variaveis. Favor tentar efetuar a compra novamente.\"); window.location='?';</script>")); 
            require("modules/classes/webshop/vault.class.php");
            $LD_Items = new Items();
            //var_dump($_GET);exit(); 
            $LD_FinishBuy = new FinishBuy($_GET['ProductID'],
                                            $_GET['Item_Level'],
                                            $_GET['Item_Option'],
                                            $_GET['Item_Ancient'],
                                            $_GET['Item_Skill'],
                                            $_GET['Item_Luck'],
                                            $_GET['Item_OpExc_1'],
                                            $_GET['Item_OpExc_2'],
                                            $_GET['Item_OpExc_3'],
                                            $_GET['Item_OpExc_4'],
                                            $_GET['Item_OpExc_5'],
                                            $_GET['Item_OpExc_6'],
                                            $_GET['Item_JH'],    
                                            $_GET['Item_Refine'],         
                                            $_GET['Item_Socket_Slot_1'],
                                            $_GET['Item_Socket_Slot_2'],
                                            $_GET['Item_Socket_Slot_3'],
                                            $_GET['Item_Socket_Slot_4'],
                                            $_GET['Item_Socket_Slot_5'],
                                            $_GET['Item_Socket_Slot_1_Option'],
                                            $_GET['Item_Socket_Slot_2_Option'],
                                            $_GET['Item_Socket_Slot_3_Option'],
                                            $_GET['Item_Socket_Slot_4_Option'],
                                            $_GET['Item_Socket_Slot_5_Option']
                                            );
        break;
    }
  exit(); //Para a execu??o da p?gina para retornar o ajax
}
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
?>