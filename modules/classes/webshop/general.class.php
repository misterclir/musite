<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "General" ) == false ) {
	class General extends ldMssql {
		public $Temp;
		public $Golds;
		public function __construct() 
		{
			global $ldTpl;
			if(defined("GOLDNAME") == false) exit(Print_error("GOLDNAME",1));
			if(defined("GOLDCOLUMN") == false) exit(Print_error("GOLDCOLUMN",1));
			if(defined("GOLDTABLE") == false) exit(Print_error("GOLDTABLE",1));
			if(defined("GOLDMEMBIDENT") == false) exit(Print_error("GOLDMEMBIDENT",1));
			$ldTpl->set("COIN_1", GOLDNAME);
			$ldTpl->set("CASHNAME", "COIN_2");
		}
		public function GetGolds()
		{
			global $ldTpl;
			$SQL_Q = $this->query("SELECT ".GOLDCOLUMN." FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id = '". $_SESSION['LOGIN'] ."'");
			$SQL = mssql_fetch_row($SQL_Q); 
			$ldTpl->set("Total_Gold", (int)$SQL[0]);
		}
		public function GetCashs()
		{
			global $ldTpl;
			$SQL_Q = $this->query("SELECT ".CASHCOLUMN." FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id = '". $_SESSION['LOGIN'] ."'");
			$SQL = mssql_fetch_row($SQL_Q); 
			$ldTpl->set("Total_Cash", (int)$SQL[0]);
		}
		public function GetMembname()
		{
			global $ldTpl;
			$SQL_Q = $this->query("SELECT memb_name FROM ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO WHERE memb___id = '". $_SESSION['LOGIN'] ."'");
			$SQL = mssql_fetch_row($SQL_Q); 
			$ldTpl->set("memb_name", (string)$SQL[0]);
		}
		public function GetNameClass($Number)
		{
			$this->Temp = NULL;
			switch($Number) 
			{		
				case 0: $this->Temp = "DW"; break;
				case 1: $this->Temp = "SM"; break;
				case 2: $this->Temp = "GM"; break;
				case 16: $this->Temp = "DK"; break;
				case 17: $this->Temp = "BK"; break;
				case 18: $this->Temp = "BM"; break;
				case 32: $this->Temp = "FE"; break;
				case 33: $this->Temp = "ME"; break;
				case 34: $this->Temp = "HE"; break;
				case 48: $this->Temp = "MG"; break;
				case 49: $this->Temp = "DM"; break;
				case 64: $this->Temp = "DL"; break;
				case 65: $this->Temp = "LE"; break;
				case 80: $this->Temp = "SUM"; break;
				case 81: $this->Temp = "BS"; break;
                case 82: $this->Temp = "DM"; break;
                case 96: $this->Temp = "RF"; break;
				case 98: $this->Temp = "FM"; break;
			} 
			return $this->Temp;
		}
	}
}


?>