<?php
/** Inject **/

$xa = getenv('REMOTE_ADDR');
$badwords = array(";","'","\"","*","union","del","DEL","insert","update",
" =","drop","sele","$");

foreach($_POST as $value)
foreach($badwords as $word)
if(substr_count($value, $word) > 0)
die("Security Warning!<br />Forbidden simbols are included, 
please remove them and try again -> $xa");


error_reporting(E_ALL & ~E_NOTICE);
require("modules/autoload.php");
require("modules/settings.php");

/** Sistema de indicacao **/

if(!empty($_GET['dv'])){

    $c_value = $_GET['dv'];
    setcookie('ref', $c_value, time()+2592000, '/', '{#SITE_URL}');
    
        exit("<script>location = '?page=register'</script>");

}

session_name(SQro0hq39JQr);
session_start();  
if ($_COOKIE['LOGOUT'] != "true" && isset($_COOKIE['LOGINSITE']))
{
	$_SESSION['LOGIN'] = $_COOKIE['LOGINSITE'];
}
if (FORUM_ENABLE == true) {
    define("IN_MYBB", 1);
    require_once '././forum/global.php';
}
$ldVersion = new ldVersion();           
$ldVersion->setCurrentVersion("2.8.1");
$ldVersion->compareCurrentVersion();

$ldSecurity = new ldSecurity();
$ldTime = new ldTime();
$ldMssql = new ldMssql();
$ldTpl = new ldTpl();
if($_GET['page'] != "ajax")    
    $ldGeneral = new ldGeneral(); 
    
new ldLanguage("commontexts", true);
                   
switch($_GET['page'])
{
    case "ajax":
        $ldAjax = new ldAjax();
        exit();
        break;
    case "register":                   
        $ldRegister = new ldRegister();  
        $ldTpl->open("templates/".TEMPLATE_DIR."/register.tpl.php");
        break;
    case "downloads":
        $ldDownloads = new ldDownloads();
        $ldTpl->open("templates/".TEMPLATE_DIR."/downloads.tpl.php");
        break;
    case "rankreset":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankreset.tpl.php");
        break;
    case "rankguild":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankguild.tpl.php");
        break;
    case "rankduel":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankduel.tpl.php");
        break;
    case "rankhour":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankhour.tpl.php");
        break;
    case "rankpk":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankpk.tpl.php");
        break;
    case "rankbc":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankbc.tpl.php");
        break;
    case "rankcc":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankcc.tpl.php");
        break;
    case "rankds":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankds.tpl.php");
        break;
    case "rankit":

        $ldTpl->open("templates/".TEMPLATE_DIR."/rankit.tpl.php");
        break;
    case "rankings":
        $ldRankings = new ldRankings();
        $ldTpl->open("templates/".TEMPLATE_DIR."/rankings.tpl.php");
        break;
    case "contact":
        $ldTpl->open("templates/".TEMPLATE_DIR."/contact.tpl.php");
        break;
    case "info":
        $ldTpl->open("templates/".TEMPLATE_DIR."/info.tpl.php");
        break;
    case "guiajogo":
        $ldTpl->open("templates/".TEMPLATE_DIR."/guiajogo.tpl.php");
        break;
    case "eventos":
        $ldTpl->open("templates/".TEMPLATE_DIR."/eventos.tpl.php");
        break;
    case "geemseed":
        $ldTpl->open("templates/".TEMPLATE_DIR."/geemseed.tpl.php");
        break;
    case "webshop":
        $ldTpl->open("templates/".TEMPLATE_DIR."/webshop.tpl.php");
        break;
    case "premioranking":
        $ldTpl->open("templates/".TEMPLATE_DIR."/premioranking.tpl.php");
        break;
    case "vips":
        $ldVips = new ldVips();
		$ldVips->loadAdvantages();
        $ldTpl->open("templates/".TEMPLATE_DIR."/vips.tpl.php");
        break;
	case "lostpw":
		if(isset($_SESSION['LOGIN']) || isset($_COOKIE['LOGINSITE']))
		$ldTpl->open("templates/".TEMPLATE_DIR."/recovery[logged].tpl.php");
		else
		$ldTpl->open("templates/".TEMPLATE_DIR."/recovery[password].tpl.php");
		break;
	case "lostpw[send]":
		if(isset($_SESSION['LOGIN']) || isset($_COOKIE['LOGINSITE']))
		$ldTpl->open("templates/".TEMPLATE_DIR."/recovery[logged].tpl.php");
		else{
		if(!$_GET['type']) $ldTpl->open("templates/".TEMPLATE_DIR."/index.tpl.php");
        switch($_GET['type'])
        {
            case "password": case "confirm": $ldTpl->open("templates/".TEMPLATE_DIR."/recovery[password][send].tpl.php"); $ldRecovery = new ldRecovery(); break;
			default: $ldTpl->open("templates/".TEMPLATE_DIR."/index.tpl.php"); break;
        }
		}
        break;
	case "lostpw[confirm]":
		if(isset($_SESSION['LOGIN']) || isset($_COOKIE['LOGINSITE']))
		$ldTpl->open("templates/".TEMPLATE_DIR."/recovery[logged].tpl.php");
		else
		$ldTpl->open("templates/".TEMPLATE_DIR."/recovery[password][confirm].tpl.php");
		break;
    case "readNotice":
        $ldNotice = new ldNotice();
        $ldTpl->open("templates/".TEMPLATE_DIR."/readNotice.tpl.php");
        break;
    case "onlines":
        $ldOnlines = new ldOnlines();
        $ldTpl->open("templates/".TEMPLATE_DIR."/onlines.tpl.php");
        break;
    case "captcha":
        $ldCaptcha = new ldCaptcha();
        break;
    case "custonPage":                    
        $ldHome = new ldHome();
        $ldTpl->open("templates/".TEMPLATE_DIR."/{$_GET['template']}.tpl.php");
        break;
    case "banned":                    
        $ldBanned = new ldBanned();
        $ldTpl->open("templates/".TEMPLATE_DIR."/banned.tpl.php"); break;
        break;
    case "loadModule":                     
        $ldHome = new ldHome();                   
        $ldModules = new ldModules($_GET['module']);
        break;
    default:
        $ldHome = new ldHome();
        $ldTpl->open("templates/".TEMPLATE_DIR."/index.tpl.php");
        break;
}
$ldTpl->set("ResultTime", $ldTime->Result_Time());
$ldTpl->show();
echo "<img style=\"display:none;\" src=\"modules/classes/cronjob.class.php?temp=".time()."\" />";
?>