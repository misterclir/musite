<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "LogsKits" ) == false ) {
	class LogsKits {
		public function __construct() 
		{
			global $tpl;
			$this->GetNumberBuys();
            if($_GET['DeleteLog'] == true) $this->Delete_Log();
			if($_GET['Write'] == true) $this->Search_Buys();
			$tpl->set("BOX_RESULT", $this->tmp_box_list);
		}	
		private function GetNumberBuys()
		{
			global $tpl, $ODBC;
			$findTotalBuysQuery = $ODBC->query("SELECT count(1) as countSolds FROM [". DB_SHOP_SQL ."].[dbo].[LogSoldsKits]");
			$findTotalBuys = mssql_fetch_object($findTotalBuysQuery);
			$tpl->set("TOTAL_BUYS_SYSTEM",(int)$findTotalBuys->countSolds);
		}
        private function Delete_Log()
        {
            global $ODBC;
            $ODBC->query("DELETE FROM [". DB_SHOP_SQL ."].[dbo].[LogSoldsKits] WHERE Number = ". (int) $_GET['id'] );
            print("<script>alert('Log deletado com sucesso!');</script>");
        }
        private function Search_Buys()
        {
            global $ODBC, $LD_History;
            $lasts = ($_POST['lasts'] < 1 ? 1 : $_POST['lasts']);
            $login = $_POST['login'];
            if(empty($login) == false) $query_p = "WHERE login='". $login ."'";                                               
            $findKitsSoldsQ = $ODBC->query("SELECT TOP ". $lasts ." * FROM [". DB_SHOP_SQL ."].[dbo].[LogSoldsKits] {$query_p} ORDER BY Number DESC"); 
            while($findKitsSolds = mssql_fetch_object($findKitsSoldsQ))
            {   
                $findKitDetailsQuery = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[Kits] WHERE Number = ". $findKitsSolds->kitNumber);
                $findKitDetails = mssql_fetch_object($findKitDetailsQuery); 
                $this->tmp_box_list .= "<div class=\"quadros\">Id Interno: <strong>{$findKitsSolds->Number}</strong> - <a href=\"?cmd=Logs::[KitsBuys]&DeleteLog=true&id={$findKitsSolds->Number}\">Deletar log</a><br />\nNome do Kit: <strong>{$findKitDetails->kitName}</strong><br />\nLogin: <strong>{$findKitsSolds->login}</strong><br />\nPre&ccedil;o pago: <strong>{$findKitsSolds->price}</strong> ".GOLDNAME."<br />\nComprado em: <strong>". date("d/m/Y g:i a", $findKitsSolds->data) ."</strong><br />\n<strong>Produtos que est&atilde;o incluidos no kit:</strong> ";
                $FindSoldsDetailsQuery = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[LogSoldsKitsDetails] WHERE NumberSoldKit = ". $findKitsSolds->Number ." AND login = '". $_SESSION['Login'] ."'");
                while($FindSoldsDetails = mssql_fetch_object($FindSoldsDetailsQuery))
                {                                             
                    $FindSoldsQuery = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[LogSolds] WHERE login = '". $_SESSION['Login'] ."' AND type='kit' AND serial='{$FindSoldsDetails->itemSerial}'");
                    $FindSolds = mssql_fetch_object($FindSoldsQuery);
                    $IDI++;                                                       
                    $FindItemDetailsQuery = $ODBC->query("SELECT NAME,EXE,photoItem,photoItemAnc,JH,RF FROM [". DB_SHOP_SQL ."].[dbo].[Items] WHERE Number = '". $FindSoldsDetails->itemId ."'");
                    $FindItemDetails = mssql_fetch_object($FindItemDetailsQuery); 
                    $LD_History->GetNameOptions($FindItemDetails->EXE);                 
                    $LD_History->GetNameOptionJH($FindSolds->jh, $FindItemDetails->JH);
                    $LD_History->GetNameOptionRefine($FindSolds->refine, $FindItemDetails->RF);
                    $LD_History->GetNameOptionsSocketItem(array($FindSolds->socket1_int,$FindSolds->socket2_int,$FindSolds->socket3_int,$FindSolds->socket4_int,$FindSolds->socket5_int));
                
                    $this->tmp_box_list .= "<div class=\"quadros\">
                                    <div style=\"position:relative; float: right; text-align:center;\">
                                        <img src=\"../". ($FindSoldsQuery->ancient == 0 ? $FindItemDetails->photoItem : $FindItemDetails->photoItemAnc ) ."\" style=\"border: none;\" />\n
                                    </div>
                                    <em>ID. Interno</em>: <strong>". $FindSolds->number ."</strong><br />\n
                                    <em>Nome do item</em>: <strong>". $FindItemDetails->NAME ."</strong><br />\n
                                    <em>Serial</em>: <strong>". $FindSolds->serial ."</strong><br />\n
                                    <em>Level</em>: <strong>+". $FindSolds->level ."</strong> | \n
                                    <em>Option (adcional)</em>: <strong>+". ($FindSolds->option*4) ."</strong><br />\n
                                    <em>Luck</em>: <strong>". ($FindSolds->luck == "true" ? "Sim" : "N�o") ."</strong> | \n
                                    <em>Skill</em>: <strong>". ($FindSolds->skill == "true" ? "Sim" : "N�o") ."</strong><br />\n
                                    <em>Ancient</em>: <strong>". ($FindSolds->ancient == 0 ? "N�o" : "").($FindSolds->ancient == 1 ? "+5 Stamina" : "").($FindSolds->ancient == 2 ? "+10 Stamina" : "") ."</strong><br />\n
                                    <em>Option Harmony</em>: <strong>". $LD_History->textHarmonyOption ."</strong><br />\n
                                    <em>Option Level 380</em>: <strong>". $LD_History->textRefineOption ."</strong><br /><br />\n
                                    <em><strong>Op��es Excelentes</strong></em>: <br />\n
                                    <em>". $LD_History->NomeOpExc1 ."</em>: <strong>". ($FindSolds->excop1 == "true" ? "Sim" : "N�o") ."</strong><br />\n
                                    <em>". $LD_History->NomeOpExc2 ."</em>: <strong>". ($FindSolds->excop2 == "true" ? "Sim" : "N�o") ."</strong><br />\n
                                    <em>". $LD_History->NomeOpExc3 ."</em>: <strong>". ($FindSolds->excop3 == "true" ? "Sim" : "N�o") ."</strong><br />\n
                                    <em>". $LD_History->NomeOpExc4 ."</em>: <strong>". ($FindSolds->excop4 == "true" ? "Sim" : "N�o") ."</strong><br />\n
                                    <em>". $LD_History->NomeOpExc5 ."</em>: <strong>". ($FindSolds->excop5 == "true" ? "Sim" : "N�o") ."</strong><br />\n
                                    <em>". $LD_History->NomeOpExc6 ."</em>: <strong>". ($FindSolds->excop6 == "true" ? "Sim" : "N�o") ."</strong><br /><br />\n
                                    <em><strong>Op��es Sockets</strong></em>: <br />\n
                                    <em>Slot Socket 1</em>: <strong>". ($FindSolds->socket1 == "true" ? "Sim - {$LD_History->socketItemOptionName[0]}" : "N�o") ."</strong><br />\n
                                    <em>Slot Socket 2</em>: <strong>". ($FindSolds->socket2 == "true" ? "Sim - {$LD_History->socketItemOptionName[1]}" : "N�o") ."</strong><br />\n
                                    <em>Slot Socket 3</em>: <strong>". ($FindSolds->socket3 == "true" ? "Sim - {$LD_History->socketItemOptionName[2]}" : "N�o") ."</strong><br />\n
                                    <em>Slot Socket 4</em>: <strong>". ($FindSolds->socket4 == "true" ? "Sim - {$LD_History->socketItemOptionName[3]}" : "N�o") ."</strong><br />\n
                                    <em>Slot Socket 5</em>: <strong>". ($FindSolds->socket5 == "true" ? "Sim - {$LD_History->socketItemOptionName[4]}" : "N�o") ."</strong><br /><br />\n
                                    <em>Recuperado</em>: <strong>". $FindSolds->recovery ."</strong> vezes<br />\n
                                </div>";
                }
                $this->tmp_box_list .= "</div>";  
            }
        } 
	}
}
?>