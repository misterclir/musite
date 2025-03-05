<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");
if ( class_exists( "Catalog" ) == false ) {
    class Catalog {
        var $item = array();
        public function ShowCatalogKits()
        {
            global $LD_General, $ODBC;
           // require("modules/classes/webshop/history.class.php");
            $LD_History = new History(false, true);
                    
            $searchKitsQ = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[Kits] WHERE active = 1");
            while($searchKits = mssql_fetch_object($searchKitsQ))
            {
                print "<div class=\"quadros\">\nNome do Kit: <strong>{$searchKits->kitName}</strong><br />\nPre&ccedil;o total: <strong>{$searchKits->priceFix}</strong> ".GOLDNAME."<br />\nVendido: <strong>{$searchKits->solds}</strong> vez(es)<br />\n<div id='kitNumber{$searchKits->Number}' style='display: none'><strong>Produtos que est&atilde;o incluidos no kit: </strong>";
                $searchItensKitQ = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[KitsItemsDetails] WHERE kitNumber = ". $searchKits->Number );
                while($searchItensKit = mssql_fetch_object($searchItensKitQ))
                {
                    $searchItemDetailsQ = $ODBC->query("SELECT NAME,EXE,JH,RF FROM [". DB_SHOP_SQL ."].[dbo].[Items] WHERE Number = '{$searchItensKit->itemNumber}'");
                    $searchItemDetails = mssql_fetch_object($searchItemDetailsQ);
                    $LD_History->GetNameOptions($searchItemDetails->EXE);
                    $LD_History->GetNameOptionJH($searchItensKit->fixJH, $searchItemDetails->JH);
                    $LD_History->GetNameOptionRefine(($searchItensKit->fixRefine == 1 ? "true":"false"),$searchItemDetails->RF);
                    $LD_History->GetNameOptionsSocketItem(array($searchItensKit->fixSocket1, $searchItensKit->fixSocket2, $searchItensKit->fixSocket3, $searchItensKit->fixSocket4, $searchItensKit->fixSocket5));
                                   
                    require("sockets.lib.php");
                    //exit(var_dump($socketLib));
                    print "<div class=\"quadros\">
                            <table border=\"0\">
                                <tr><td rowspan=\"3\" valign=\"top\"><img src=\"\" style=\"border:none;\" /></td></tr>
                                <tr><td>Nome: <strong>".$searchItemDetails->NAME."</strong></td></tr>
                                <tr><td>Detalhes do item:\n<br />
                                        <em>Level</em>: <strong>+". $searchItensKit->fixLVL ."</strong> | \n
                                        <em>Option (adcional)</em>: <strong>+". ($searchItensKit->fixOP * 4) ."</strong><br />\n
                                        <em>Luck</em>: <strong>". ($searchItensKit->fixLuck == 1 ? "Sim" : "N&atilde;o") ."</strong> | \n
                                        <em>Skill</em>: <strong>". ($searchItensKit->fixSkill == 1 ? "Sim" : "N&atilde;o") ."</strong><br />\n
                                        <em>Ancient</em>: <strong>". ($searchItensKit->fixANC == 0 ? "N&atilde;o" : "").($searchItensKit->fixANC == 1 ? "+5 Stamina" : "").($searchItensKit->fixANC == 2 ? "+10 Stamina" : "") ."</strong><br />\n
                                        <div class=\"WebShopKitOptions\">
                                        <em>Option Harmony</em>: <strong>". $LD_History->textHarmonyOption ."</strong><br />\n
                                        <em>Option Level 380</em>: <strong>". $LD_History->textRefineOption ."</strong><br /><br />\n</div>
                                        <em><strong>Op&ccedil;&otilde;es Excelentes</strong></em>: <br />\n
                                        <em>". $LD_History->NomeOpExc1 ."</em>: <strong>". ($searchItensKit->fixOpEx1 == 1 ? "Sim" : "N&atilde;o") ."</strong><br />\n
                                        <em>". $LD_History->NomeOpExc2 ."</em>: <strong>". ($searchItensKit->fixOpEx2 == 1 ? "Sim" : "N&atilde;o") ."</strong><br />\n
                                        <em>". $LD_History->NomeOpExc3 ."</em>: <strong>". ($searchItensKit->fixOpEx3 == 1 ? "Sim" : "N&atilde;o") ."</strong><br />\n
                                        <em>". $LD_History->NomeOpExc4 ."</em>: <strong>". ($searchItensKit->fixOpEx4 == 1 ? "Sim" : "N&atilde;o") ."</strong><br />\n
                                        <em>". $LD_History->NomeOpExc5 ."</em>: <strong>". ($searchItensKit->fixOpEx5 == 1 ? "Sim" : "N&atilde;o") ."</strong><br />\n
                                        <em>". $LD_History->NomeOpExc6 ."</em>: <strong>". ($searchItensKit->fixOpEx6 == 1 ? "Sim" : "N&atilde;o") ."</strong><br /><br />\n
                                        <div class=\"WebShopKitOptions\">
                                            <em><strong>Op&ccedil;&otilde;es Sockets</strong></em>: <br />\n
                                            <em>Slot Socket 1</em>: <strong>". ($searchItensKit->fixSocket1 != $socketLib['notSocket'] ? "Sim - {$LD_History->socketItemOptionName[0]}" : "N&atilde;o") ."</strong><br />\n
                                            <em>Slot Socket 2</em>: <strong>". ($searchItensKit->fixSocket2 != $socketLib['notSocket'] ? "Sim - {$LD_History->socketItemOptionName[1]}" : "N&atilde;o") ."</strong><br />\n
                                            <em>Slot Socket 3</em>: <strong>". ($searchItensKit->fixSocket3 != $socketLib['notSocket'] ? "Sim - {$LD_History->socketItemOptionName[2]}" : "N&atilde;o") ."</strong><br />\n
                                            <em>Slot Socket 4</em>: <strong>". ($searchItensKit->fixSocket4 != $socketLib['notSocket'] ? "Sim - {$LD_History->socketItemOptionName[3]}" : "N&atilde;o") ."</strong><br />\n
                                            <em>Slot Socket 5</em>: <strong>". ($searchItensKit->fixSocket5 != $socketLib['notSocket'] ? "Sim - {$LD_History->socketItemOptionName[4]}" : "N&atilde;o") ."</strong><br /><br />\n
                                        </div>
                                </td></tr>                                                        
                             </table>
                           </div>
                           "; if (SYSTEM_ITEMS == OLD) {
                               echo '<style>.WebShopKitOptions{display:none;}</style>';
                           } 
                          
                }
                print "</div>
                       <div style=\"text-align: right;\">
                        <input type=\"button\" class=\"button\" value='Mostrar itens do Kit' id='kitInputNumber{$searchKits->Number}' onclick=\"if(document.getElementById('kitNumber{$searchKits->Number}').style.display == 'none') { document.getElementById('kitNumber{$searchKits->Number}').style.display = 'block'; document.getElementById('kitInputNumber{$searchKits->Number}').value = 'Esconder itens do Kit'; } else { document.getElementById('kitNumber{$searchKits->Number}').style.display = 'none'; document.getElementById('kitInputNumber{$searchKits->Number}').value = 'Mostrar itens do Kit'; }\" />
                        <input type=\"button\" class=\"button\" value=\"Comprar Kit\" onclick=\"javascript: document.getElementById('FinishBuyDIV{$searchKits->Number}').style.display = 'block'; \" />
                        </div>
                        <div id=\"FinishBuyDIV{$searchKits->Number}\" style=\"display:none; text-align:center;\" class=\"qdestaques\"> 
                            <strong>Voc&ecirc; tem certeza que deseja comprar esse kit?<br />Compras n&atilde;o podem ser desfeitas!</strong><br />               
                            <input type=\"button\" class=\"btn btn-success btn-sm\" value=\"Desejo comprar e declaro aceitar os termos de uso do servidor.\" onclick=\"javascript: document.getElementById('FinishBuyDIV{$searchKits->Number}').style.display = 'none'; document.getElementById('Result_Ajax_FinishBuy{$searchKits->Number}').style.display = 'block'; Verify ('index.php?AjaxFunctions=TRUE&amp;Function=FinishBuyKit&amp;ProductID={$searchKits->Number}', 'Result_Ajax_FinishBuy{$searchKits->Number}', 'get');\" />
                        </div>
                        <div class=\"quadros\" id=\"Result_Ajax_FinishBuy{$searchKits->Number}\" style=\"display:none;\"></div>
                      </div>";
            }            
        }
        public function ShowCatalogType($ShowCatalogType)
        {
            global $LD_General, $ODBC;
            switch($ShowCatalogType)
            {                                                                            
                case "Kits": return $this->ShowCatalogKits();
                case "Ofert": $ODBC_Party = " AND ofert=1 ORDER BY solds DESC"; break;
                case "All": $ODBC_Party = " ORDER BY solds DESC"; break;
                default: $ODBC_Party = " AND CATEGORIA='".$ShowCatalogType."' ORDER BY solds DESC"; break;
            }
            $ODBC_Q = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[Items] WHERE insertShop = 1 ". $ODBC_Party);
            while($ODBC = mssql_fetch_object($ODBC_Q))
            {
				if($ODBC->GoldItem == 1) $PriceGoldItem = "". $ODBC->price ."". GOLDNAME ."";
				if($ODBC->CashItem == 1) $PriceCashItem = "". $ODBC->CashPrice ."". CASHNAME .""; else $PriceCashItem = "<br>";
                print "<a href=\"panel.php?panel=CatalogSystemDetails&ProductId=".$ODBC->Number."#!\"><div class=\"menu_catalog\">
                        <table width=\"153\" border=\"0\">
                          <tbody><tr><td align=\"center\" style=\"padding-top:6px;\"><strong style=\"text-transform:uppercase; font-size:10.5px;\">".$ODBC->NAME."</strong></td></tr>
                          <tr><td align=\"center\" style=\"padding-top:20px;padding-left: 1px;\"><img class=\"itemshop itemBox\" rel=\"itemView0708200\" src=\"images/items/".$ODBC->TP."-".$ODBC->ID.".jpg\" style=\"border:none; height:100px; width:85px;\"></td></tr>
                          <tr><td align=\"center\" style=\"padding-top:13px;\">Unidades ilimitadas</td></tr>
                          <tr><td align=\"center\" style=\"padding-top:9px; color: #FF8E13;\"><strong style=\"font-size:10.5px;\">". $PriceGoldItem ."</td></tr> <tr><td align=\"center\" style=\"padding-top:9px;\"><strong style=\" font-size:10.5px;\">". $PriceCashItem ."</td></tr>
                        </tbody></table>
                </div></a>";
            }         
        }
        public function getClass($ProductID)
        {
            global $ODBC;
            $ODBC_C = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[Items] WHERE Number='".$ProductID."'");
            if ($ODBC_C->C_0 == true) {
                $class = ' DW ';
            }
            if ($ODBC_C->C_1 == true) {
                $class = ' SM ';
            }
            if ($ODBC_C->C_2 == true) {
                $class = ' GM ';
            }
            if ($ODBC_C->C_16 == true) {
                $class = ' DK ';
            }
            if ($ODBC_C->C_17 == true) {
                $class = ' BK ';
            }
            if ($ODBC_C->C_18 == true) {
                $class = ' BM ';
            }
            if ($ODBC_C->C_32 == true) {
                $class = ' FE ';
            }
            if ($ODBC_C->C_33 == true) {
                $class = ' ME ';
            }
            if ($ODBC_C->C_34 == true) {
                $class = ' HE ';
            }
            if ($ODBC_C->C_48 == true) {
                $class = ' MG ';
            }
            if ($ODBC_C->C_49 == true) {
                $class = ' DM ';
            }
            if ($ODBC_C->C_64 == true) {
                $class = ' DL ';
            }
            if ($ODBC_C->C_65 == true) {
                $class = ' LE ';
            }
            if ($ODBC_C->C_80 == true) {
                $class = ' SUM ';
            }
            if ($ODBC_C->C_81 == true) {
                $class = ' BS ';
            }
            if ($ODBC_C->C_82 == true) {
                $class = ' DM ';
            }
            if ($ODBC_C->C_96 == true) {
                $class = ' RF ';
            }
            if ($ODBC_C->C_98 == true) {
                $class = ' FM ';
            }
            return $class;
        }
        public function getClassName($tp,$id)
        {
            // START HERE
            $handle = fopen("modules/classes/webshop/ServerFiles/Item.txt","r");
            while (!feof($handle))
            {
                $ItemInfo = fscanf($handle, '%d %s %d %d %d %d %d %d "%[^"]" %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d');
                if(strpos($ItemInfo[0],"//") === false && isset($ItemInfo[0]))
                {
                    if(!isset($ItemInfo[1]))
                    {
                        if($ItemInfo[0] !== "end")
                        {
                            $itemType = $ItemInfo[0];
                        }
                    }
                    else
                    {
                        $item[$itemType][$ItemInfo[0]] = array("Slot" => $ItemInfo[1], "Skill" => $ItemInfo[2], "X" => $ItemInfo[3], "Y" => $ItemInfo[4], "Serial" => $ItemInfo[5], "Option" => $ItemInfo[6], "Drop" => $ItemInfo[7], "Name" => $ItemInfo[8]);
                        
                        if($itemType != 14)
                        {
                            $item[$itemType][$ItemInfo[0]]["Level"] = $ItemInfo[9];
                            $item[$itemType][$ItemInfo[0]]["LevelSpecial"] = $ItemInfo[9];
                        }
                        else
                        {
                            $item[$itemType][$ItemInfo[0]]["Value"] = $ItemInfo[9];
                            $item[$itemType][$ItemInfo[0]]["Level"] = $ItemInfo[10];
                            $item[$itemType][$ItemInfo[0]]["LevelSpecial"] = $ItemInfo[10];
                        }
                        
                        if($itemType <= 5)
                        {
                            $item[$itemType][$ItemInfo[0]]["DmgMin"] = $ItemInfo[10];
                            $item[$itemType][$ItemInfo[0]]["DmgMax"] = $ItemInfo[11];
                            $item[$itemType][$ItemInfo[0]]["AttackSpeed"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["MagicDur"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["MagicPwr"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["ReqStr"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["ReqAgi"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["ReqEne"] = $ItemInfo[19];
                            $item[$itemType][$ItemInfo[0]]["ReqVit"] = $ItemInfo[20];
                            $item[$itemType][$ItemInfo[0]]["ReqCom"] = $ItemInfo[21];
                            $item[$itemType][$ItemInfo[0]]["Type"] = $ItemInfo[22];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[23];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[24];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[25];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[26];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[27];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[28];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[29];
                        }
                        if($itemType == 5)
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[14];
                        
                        if($itemType >= 6 && $itemType <= 12)
                            $item[$itemType][$ItemInfo[0]]["Defense"] = $ItemInfo[10];

                        if($itemType >= 6 && $itemType <= 11)
                        {
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["ReqStr"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["ReqAgi"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["ReqEne"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["ReqVit"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["ReqCom"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["Type"] = $ItemInfo[19];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[20];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[21];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[22];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[23];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[24];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[25];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[26];   
                        }
                        
                        if($itemType == 6)
                        {
                            $item[$itemType][$ItemInfo[0]]["DefRate"] = $ItemInfo[11];
                        }
                        if($itemType >= 7 && $itemType <= 9)
                        {
                            $item[$itemType][$ItemInfo[0]]["MagicDef"] = $ItemInfo[11];
                        }
                        if($itemType >= 10 || $itemType <= 11)
                        {
                            $item[$itemType][$ItemInfo[0]]["Speed"] = $ItemInfo[11];
                        }                   
                        if($itemType == 12)
                        {
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[11];
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["ReqEne"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["ReqStr"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["ReqAgi"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["ReqCom"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["Zen"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[19];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[20];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[21];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[22];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[23];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[24];                       
                        }
                        if($itemType == 13)
                        {
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[9];
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[10];
                            $item[$itemType][$ItemInfo[0]]["Ice"] = $ItemInfo[11];
                            $item[$itemType][$ItemInfo[0]]["Poison"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["Lightning"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["Fire"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["Earth"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["Wind"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["Water"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["Type"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[19];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[20];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[21];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[22];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[23];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[24];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[25];
                        }
                        if($itemType == 15)
                        {
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[10];
                            $item[$itemType][$ItemInfo[0]]["Enery"] = $ItemInfo[11];
                            $item[$itemType][$ItemInfo[0]]["Zen"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[19];
                        }                          
                    }
                }
            }
            @fclose($handle);
            // @Dark Wizard
            if ($item[$tp][$id]["DW"] == 0) 
            {
                $returnClass .= "";
            }
            if ($item[$tp][$id]["DW"] == 1) 
            {
                $returnClass .= "Pode ser equipado por Dark Wizard <br>";
            }
            if ($item[$tp][$id]["DW"] == 2) 
            {
                $returnClass .= "Pode ser equipado por Soul Master <br>";
            }
            if ($item[$tp][$id]["DW"] == 3) 
            {
                $returnClass .= "Pode ser equipado por Grand Master <br>";
            }
            // @Dark Knight
            if ($item[$tp][$id]["DK"] == 0) 
            {
                $returnClass .= "";
            }
            if ($item[$tp][$id]["DK"] == 1) 
            {
                $returnClass .= "Pode ser equipado por Dark Knight <br>";
            }
            if ($item[$tp][$id]["DK"] == 2) 
            {
                $returnClass .= "Pode ser equipado por Blade Knight <br>";
            }
            if ($item[$tp][$id]["DK"] == 3) 
            {
                $returnClass .= "Pode ser equipado por Blade Master <br>";
            }
            // @Fairy Elf
            if ($item[$tp][$id]["EL"] == 0) 
            {
                $returnClass .= "";
            }
            if ($item[$tp][$id]["EL"] == 1) 
            {
                $returnClass .="Pode ser equipado por Fairy Elf <br>";
            }
            if ($item[$tp][$id]["EL"] == 2) 
            {
                $returnClass .="Pode ser equipado por Muse Elf <br>";
            }
            if ($item[$tp][$id]["EL"] == 3) 
            {
                $returnClass .="Pode ser equipado por High Elf <br>";
            }
            // @Magic Gladiator
            if ($item[$tp][$id]["EL"] == 0) 
            {
                $returnClass .= "";
            }
            if ($item[$tp][$id]["MG"] == 1) 
            {
                $returnClass .= "Pode ser equipado por Magic Gladiator <br>";
            }
            if ($item[$tp][$id]["MG"] == 2) 
            {
                $returnClass .= "Pode ser equipado por Duel Master <br>";
            }
            // @Dark Lord
            if ($item[$tp][$id]["DL"] == 0) 
            {
                $returnClass .= "";
            }
            if ($item[$tp][$id]["DL"] == 1) 
            {
                $returnClass .="Pode ser equipado por Dark Lord <br>";
            }
            if ($item[$tp][$id]["DL"] == 2) 
            {
                $returnClass .="Pode ser equipado por Lord Emperor <br>";
            }
            // @Summoner
            if ($item[$tp][$id]["SU"] == 0) 
            {
                $returnClass .= "";
            }
            if ($item[$tp][$id]["SU"] == 1) 
            {
                $returnClass .="Pode ser equipado por Summoner <br>";
            }
            if ($item[$tp][$id]["SU"] == 2) 
            {
                $returnClass .="Pode ser equipado por Blood Summoner <br>";
            }
            if ($item[$tp][$id]["SU"] == 3) 
            {
                $returnClass .="Pode ser equipado por Dimension Master <br>";
            }
            // @Rage Fight
            if ($item[$tp][$id]["RF"] == 0) 
            {
                $returnClass .= "";
            }
            if ($item[$tp][$id]["RF"] == 1) 
            {
                $returnClass .="Pode ser equipado por Rage Fight <br>";
            }
            if ($item[$tp][$id]["RF"] == 2) 
            {
                $returnClass .="Pode ser equipado por Fist Master <br>";
            }
            return $returnClass;
        }
        public function GetProductDetails($ProductID)
        {

            global $ldTpl, $LD_General, $ODBC;
            $ODBC_Q = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[Items] WHERE Number='".$ProductID."'");
            $ODBC_R = mssql_fetch_object($ODBC_Q);
            if(mssql_num_rows($ODBC_Q) == 0) exit(Print_error("<script type=\"text/javascript\">alert(\"Desculpe, esse produto não encontrado.\"); //history.go(-1);</script>"));
            $ldTpl->set("ProductID", $ProductID);
            $ldTpl->set("ProductName", $ODBC_R->NAME);
            $ldTpl->set("ProductCat", $ODBC_R->CATEGORIA);
			if($ODBC_R->CATEGORIA == "Wings") {$ldTpl->set("ExcProductName", "<span style=\"color:#ffcc19;font-size: 12px;\">");$ldTpl->set("LevelProductName", "<span style=\"color:#ffcc19;font-size: 12px;\"> +'+document.getElementById('Item_Level').value+'</span>");
				  $ldTpl->set("divOptions", "<span id=\"WebShopDetailOpt1\"></span>
                                <span id=\"WebShopDetailOpt2\"></span>
                                <span id=\"WebShopDetailOpt3\"></span>
                                <span id=\"WebShopDetailOpt4\"></span>
                                <span id=\"WebShopDetailOpt5\"></span>
                                <span id=\"WebShopDetailOpt6\"></span>
								<span id=\"WebShopDetailLuck\"></span>
                                <span id=\"WebShopDetailAdd\"></span>
                                <span id=\"WebShopDetailSocketT\"></span>
                                <span id=\"WebShopDetailSocket1\"></span>
                                <span id=\"WebShopDetailSocket2\"></span>
                                <span id=\"WebShopDetailSocket3\"></span>
                                <span id=\"WebShopDetailSocket4\"></span>
                                <span id=\"WebShopDetailSocket5\"></span>");
			}
			else {$ldTpl->set("ExcProductName", "<span style=\"color:#33e23f;font-size: 12px;\">Excellent "); $ldTpl->set("LevelProductName", "<span style=\"font-size: 12px;\"> +'+document.getElementById('Item_Level').value+'</span>");
				  $ldTpl->set("divOptions", "<span id=\"WebShopDetailLuck\"></span>
                                <span id=\"WebShopDetailAdd\"></span>
                                <span id=\"WebShopDetailOpt6\"></span>
                                <span id=\"WebShopDetailOpt5\"></span>
                                <span id=\"WebShopDetailOpt4\"></span>
                                <span id=\"WebShopDetailOpt3\"></span>
                                <span id=\"WebShopDetailOpt2\"></span>
                                <span id=\"WebShopDetailOpt1\"></span>
                                <span id=\"WebShopDetailSocketT\"></span>
                                <span id=\"WebShopDetailSocket1\"></span>
                                <span id=\"WebShopDetailSocket2\"></span>
                                <span id=\"WebShopDetailSocket3\"></span>
                                <span id=\"WebShopDetailSocket4\"></span>
                                <span id=\"WebShopDetailSocket5\"></span>");
			}
            $ldTpl->set("ProductPhoto","images/items/".$ODBC_R->TP."-".$ODBC_R->ID.".jpg" /*$ODBC_R->photoItem*/);
            $ldTpl->set("ProductPhotoAnc","images/items/".$ODBC_R->TP."-".$ODBC_R->ID.".jpg"/*$ODBC_R->photoItemAnc*/);
            $ldTpl->set("NormalPriceJS", $ODBC_R->price);
            $ldTpl->set("NormalPriceJS2", $ODBC_R->CashPrice);
			$ldTpl->set("MAX_GOLD_OPT", MAX_OPTIONS_WITH_GOLD);
			$ldTpl->set("MAX_CASH_OPT", MAX_OPTIONS_WITH_CASH);
			define("IS_GOLDITEM", $ODBC_R->GoldItem);
			define("IS_CASHITEM", $ODBC_R->CashItem);
            $ldTpl->set("LevelPrice", $ODBC_R->priceLevel);
            $ldTpl->set("AdcionalPrice", $ODBC_R->priceOption);
            $ldTpl->set("SkillPrice", $ODBC_R->priceSkill);
            $ldTpl->set("LuckPrice", $ODBC_R->priceLuck);        
            $ldTpl->set("AncientPrice", $ODBC_R->priceAncient);   
            $ldTpl->set("JhPrice", $ODBC_R->priceJh);             
            $ldTpl->set("RefinePrice", $ODBC_R->priceRefine);
            $ldTpl->set("SocketPrice", $ODBC_R->priceSocket);
            $ldTpl->set("OpExcPrice", $ODBC_R->priceOptExc);
			$ldTpl->set("Coin_1", GOLDNAME);
			$ldTpl->set("Coin_2", CASHNAME);
            $ldTpl->set("ClassesName", ($ODBC_R->C_0 == 1 ? $LD_General->GetNameClass(0).",&nbsp;":"") . 
                                     ($ODBC_R->C_1 == 1 ? $LD_General->GetNameClass(1).",&nbsp;":"") . 
                                     ($ODBC_R->C_2 == 1 ? $LD_General->GetNameClass(2).",&nbsp;":""));
            $ldTpl->set("DisabledLevel", ($ODBC_R->LVL == "SN" || $ODBC_R->LVL != "NO" ? "disabled=\"disabled\"":""));
            $ldTpl->set("LevelFix", ($ODBC_R->LVL != "SN" && $ODBC_R->LVL != "NO" ? (int)$ODBC_R->LVL:"0"));
            $ldTpl->set("DisabledAdcional", ($ODBC_R->OP == 0 ? "disabled=\"disabled\"":"")); 
            $ldTpl->set("DisabledAncient", ($ODBC_R->ANC == 0 ? "disabled=\"disabled\"":""));
            //$ldTpl->set("ProductNameAncient", ($ODBC_R->ANC == 1 ? $ODBC_R->SetItem1:""));
            $ldTpl->set("DisabledSkill", ($ODBC_R->SK == 0 ? "disabled=\"disabled\"":""));
            $ldTpl->set("DisabledLuck", ($ODBC_R->LK == 0 ? "disabled=\"disabled\"":""));
            $ldTpl->set("DisabledOpExc", ($ODBC_R->EXE == 0 ? "disabled=\"disabled\"":""));                     
            $ldTpl->set("DisabledJH", ($ODBC_R->JH == 0 || SYSTEM_ITEMS == "OLD" ? "disabled=\"disabled\"":""));
            $ldTpl->set("DisabledRefine", ($ODBC_R->RF == 0 || SYSTEM_ITEMS == "OLD" ? "disabled=\"disabled\"":""));  
            $ldTpl->set("DisabledSocket", ($ODBC_R->Socket == 0 ? "disabled=\"disabled\"":""));  
            $ldTpl->set("EnableSocket", ($ODBC_R->Socket));  
            $ldTpl->set("EnableRefine", ($ODBC_R->RF));
            $ldTpl->set("MaxOptionsBuy", MAX_OPTIONS_WITH_GOLD); 
            if($ODBC_R->ANC == 1)
            {
                $tmpAncSelect = "<option value='0'>N&atilde;o</option>";
                if($ODBC_R->SetItem1 != "NO") $ldTpl->set("SetItemAnc1", $ODBC_R->SetItem1); else $ldTpl->set("SetItemAnc1", "");
                if($ODBC_R->SetItem2 != "NO") $ldTpl->set("SetItemAnc2", $ODBC_R->SetItem2); else $ldTpl->set("SetItemAnc2", ""); 
                if($ODBC_R->SetItem1 != "NO") $tmpAncSelect .= "<option value='1'>{$ODBC_R->SetItem1}</option>";
                if($ODBC_R->SetItem2 != "NO") $tmpAncSelect .= "<option value='2'>{$ODBC_R->SetItem2}</option>";
                $ldTpl->set("OptionSelectAnc", $tmpAncSelect);  
            } 
            else
            {
                $ldTpl->set("SetItemAnc1", "");
                $ldTpl->set("SetItemAnc2", ""); 
                $ldTpl->set("OptionSelectAnc", "<option value='0'>N&atilde;o</option>");  
            }                                                
            
            if($ODBC_R->JH == 0)
            {
                $ldTpl->set("OptionSelectJH", "<option value='00'>Nenhuma</option>");   
            }   
            else
            {
                $SelectOptionsJhQ = $ODBC->query("SELECT * FROM [". DB_SHOP_SQL ."].[dbo].[ItemsJewelOfHarmony] WHERE TP = '{$ODBC_R->JH}' ORDER BY [Number]");
                while($SelectOptionsJh = mssql_fetch_array($SelectOptionsJhQ))
                {
                    if(substr($SelectOptionsJh['NM'],0 ,8) == "NONE JoH") continue;  
                    
                    for($iJh = 0; $iJh < 14; $iJh++)
                    {         
                        $indexJh = strtoupper(dechex($iJh)); 
                        if($this->isZeroOptionJh == true && $SelectOptionsJh['prefx'.$indexJh] == 0) continue;             
                        if($SelectOptionsJh['prefx'.$indexJh] == 0) $this->isZeroOptionJh = true;
                        $this->optionJHTemp .= "<option value='{$SelectOptionsJh['ID']}{$indexJh}'>{$SelectOptionsJh['NM']} ". $SelectOptionsJh['prefx'.$indexJh] ." </option>\n";
                    } 
                    $this->isZeroOptionJh = false;   
                    $this->optionJHTemp .= "<option disabled='disabled'>--------</option>\n";  
                }     
                $ldTpl->set("OptionSelectJH", "<option value='00'>Nenhuma</option><option disabled='disabled'>--------</option>\n".$this->optionJHTemp);           
            }  
            
            if($ODBC_R->RF == 0)
            {
                $ldTpl->set("OptionRadioRF", "Nenhuma");   
            }   
            else
            {
                $SelectOptionRefineQ = $ODBC->query("SELECT prefx1, prefx2 FROM [". DB_SHOP_SQL ."].[dbo].[ItemsRefinery] WHERE ID={$ODBC_R->RF}");
                $SelectOptionRefine = mssql_fetch_object($SelectOptionRefineQ);  
                $ldTpl->set("OptionRadioRF", $SelectOptionRefine->prefx1.", ".$SelectOptionRefine->prefx2); 
                $ldTpl->set("OptionRadioRFBR", $SelectOptionRefine->prefx1."<BR>".$SelectOptionRefine->prefx2);    
            }
            
            require("modules/classes/webshop/sockets.lib.php");
            if($ODBC_R->Socket == 0)
            {                                                                                                
                $ldTpl->set("OptionSocketSelect1", "<option value=\"{$socketLib['notSocket']}\">Slot de socket fechado</option>");   
                $ldTpl->set("OptionSocketSelect2", "<option value=\"{$socketLib['notSocket']}\">Slot de socket fechado</option>");   
                $ldTpl->set("OptionSocketSelect3", "<option value=\"{$socketLib['notSocket']}\">Slot de socket fechado</option>");   
                $ldTpl->set("OptionSocketSelect4", "<option value=\"{$socketLib['notSocket']}\">Slot de socket fechado</option>");   
                $ldTpl->set("OptionSocketSelect5", "<option value=\"{$socketLib['notSocket']}\">Slot de socket fechado</option>");   
            }   
            else
            {
                switch($ODBC_R->CATEGORIA)
                {   //None: -1, Fire: 1, Water: 2, Ice: 3, Wind: 4, Lightning: 5, Ground/Earth: 6          
                    case "Amulets": 
                        $typesSockets = array("-1");
                        break;  
                    case "Armors": 
                        $typesSockets = array("2", "4", "6"); 
                        break;  
                    case "Axes":                         
                        $typesSockets = array("1", "3", "5");
                        break;  
                    case "Boots":                                       
                        $typesSockets = array("2", "4", "6"); 
                        break;  
                    case "Bows":                          
                        $typesSockets = array("1", "3", "5");
                        break;  
                    case "Castel Siege": 
                        $typesSockets = array("-1");
                        break;  
                    case "CrossBows":                       
                        $typesSockets = array("1", "3", "5");
                        break;  
                    case "Events": 
                        $typesSockets = array("-1");
                        break;  
                    case "Events MIX": 
                        $typesSockets = array("-1");
                        break;  
                    case "Gifts/Boxs": 
                        $typesSockets = array("-1");
                        break;  
                    case "Gloves":                                        
                        $typesSockets = array("2", "4", "6"); 
                        break;  
                    case "Guards/Pets": 
                        $typesSockets = array("-1");
                        break;   
                    case "Helms":                                      
                        $typesSockets = array("2", "4", "6"); 
                        break;    
                    case "Jewels": 
                        $typesSockets = array("-1");
                        break;    
                    case "Jewels MIX": 
                        $typesSockets = array("-1");
                        break;    
                    case "Maces":                         
                        $typesSockets = array("1", "3", "5");
                        break;    
                    case "Mix Items": 
                        $typesSockets = array("-1");
                        break;    
                    case "Mix Pets": 
                        $typesSockets = array("-1");
                        break;    
                    case "New/Test": 
                        $typesSockets = array("-1");
                        break;    
                    case "Orbs": 
                        $typesSockets = array("-1");
                        break;    
                    case "Other Items": 
                        $typesSockets = array("-1");
                        break;    
                    case "Pants":                                       
                        $typesSockets = array("2", "4", "6"); 
                        break;    
                    case "Pendants": 
                        $typesSockets = array("-1");
                        break;    
                    case "Potions": 
                        $typesSockets = array("-1");
                        break;    
                    case "Quests": 
                        $typesSockets = array("-1");
                        break;    
                    case "Rings": 
                        $typesSockets = array("-1");
                        break;    
                    case "Scepters":                       
                        $typesSockets = array("1", "3", "5");
                        break;    
                    case "Scrolls": 
                        $typesSockets = array("-1");
                        break;    
                    case "Shields":                                  
                        $typesSockets = array("2", "4", "6"); 
                        break;    
                    case "Spears":                         
                        $typesSockets = array("1", "3", "5");
                        break;    
                    case "Staffs":                        
                        $typesSockets = array("1", "3", "5");
                        break;    
                    case "Swords":                       
                        $typesSockets = array("1", "3", "5");
                        break;    
                    case "Wings":                      
                        $typesSockets = array("-1"); 
                        break;  
                    default:
                        $typesSockets = array("-1");                       
                }
                if($typesSockets[0] == "-1")   
                {                                                                                  
                    $ldTpl->set("OptionSocketSelect1", "<option value=\"{$socketLib['emptySocket']}\">Socket livre [Provavelmente sem suporte]</option>"); 
                    $ldTpl->set("OptionSocketSelect2", "<option value=\"{$socketLib['emptySocket']}\">Socket livre [Provavelmente sem suporte]</option>"); 
                    $ldTpl->set("OptionSocketSelect3", "<option value=\"{$socketLib['emptySocket']}\">Socket livre [Provavelmente sem suporte]</option>"); 
                    $ldTpl->set("OptionSocketSelect4", "<option value=\"{$socketLib['emptySocket']}\">Socket livre [Provavelmente sem suporte]</option>"); 
                    $ldTpl->set("OptionSocketSelect5", "<option value=\"{$socketLib['emptySocket']}\">Socket livre [Provavelmente sem suporte]</option>"); 
                }
                else
                {
                    for($iSocketCount = 0, $iSocketIncrement = count($typesSockets); $iSocketCount < $iSocketIncrement; $iSocketCount++)
                    {   
                        foreach($socketLib['socketTypeNumber'][$typesSockets[$iSocketCount]] as $key => $socket)
                        {
                            $this->selectOptionsSocketItemTmp[0] .= "<option value=\"". (int)($key) ."\">{$socket['socketTypeName']} ({$socket['socketName']} + {$socket['socketsArgs'][1]})</option>\n";
                            $this->selectOptionsSocketItemTmp[1] .= "<option value=\"". (int)($key+50) ."\">{$socket['socketTypeName']} ({$socket['socketName']} + {$socket['socketsArgs'][2]})</option>\n";
                            $this->selectOptionsSocketItemTmp[2] .= "<option value=\"". (int)($key+100) ."\">{$socket['socketTypeName']} ({$socket['socketName']} + {$socket['socketsArgs'][3]})</option>\n";
                            $this->selectOptionsSocketItemTmp[3] .= "<option value=\"". (int)($key+150) ."\">{$socket['socketTypeName']} ({$socket['socketName']} + {$socket['socketsArgs'][5]})</option>\n";
                            $this->selectOptionsSocketItemTmp[4] .= "<option value=\"". (int)($key+200) ."\">{$socket['socketTypeName']} ({$socket['socketName']} + {$socket['socketsArgs'][5]})</option>\n";
                        }
                    }
                    /*for($iSocketCount = 0, $iSocketIncrement = count($typesSockets); $iSocketCount < $iSocketIncrement; $iSocketCount++)
                    {
                        $SelectOptionsSocketQ = $ODBC->query("SELECT ST, NM, ID, S1, S2, S3, S4, S5 FROM [". DB_SHOP_SQL ."].[dbo].[ItemsSocket] WHERE TP = ".$typesSockets[$iSocketCount]);
                        while($SelectOptionsSocket = mssql_fetch_array($SelectOptionsSocketQ))
                        {                                                                      
                            $this->selectOptionsSocketItemTmp[0] .= "<option value=\"". ($SelectOptionsSocket['ID']) ."\">{$SelectOptionsSocket['ST']} ({$SelectOptionsSocket['NM']} + {$SelectOptionsSocket['S1']})</option>\n";
                            $this->selectOptionsSocketItemTmp[1] .= "<option value=\"". ($SelectOptionsSocket['ID']+50) ."\">{$SelectOptionsSocket['ST']} ({$SelectOptionsSocket['NM']} + {$SelectOptionsSocket['S2']})</option>\n";
                            $this->selectOptionsSocketItemTmp[2] .= "<option value=\"". ($SelectOptionsSocket['ID']+100) ."\">{$SelectOptionsSocket['ST']} ({$SelectOptionsSocket['NM']} + {$SelectOptionsSocket['S3']})</option>\n";
                            $this->selectOptionsSocketItemTmp[3] .= "<option value=\"". ($SelectOptionsSocket['ID']+150) ."\">{$SelectOptionsSocket['ST']} ({$SelectOptionsSocket['NM']} + {$SelectOptionsSocket['S4']})</option>\n";
                            $this->selectOptionsSocketItemTmp[4] .= "<option value=\"". ($SelectOptionsSocket['ID']+200) ."\">{$SelectOptionsSocket['ST']} ({$SelectOptionsSocket['NM']} + {$SelectOptionsSocket['S5']})</option>\n";
                        }
                    }*/                                                                                       
                    $ldTpl->set("OptionSocketSelect1", "<option value=\"{$socketLib['emptySocket']}\">Deixar o socket livre</option>".$this->selectOptionsSocketItemTmp[0]); 
                    $ldTpl->set("OptionSocketSelect2", "<option value=\"{$socketLib['emptySocket']}\">Deixar o socket livre</option>".$this->selectOptionsSocketItemTmp[1]); 
                    $ldTpl->set("OptionSocketSelect3", "<option value=\"{$socketLib['emptySocket']}\">Deixar o socket livre</option>".$this->selectOptionsSocketItemTmp[2]); 
                    $ldTpl->set("OptionSocketSelect4", "<option value=\"{$socketLib['emptySocket']}\">Deixar o socket livre</option>".$this->selectOptionsSocketItemTmp[3]); 
                    $ldTpl->set("OptionSocketSelect5", "<option value=\"{$socketLib['emptySocket']}\">Deixar o socket livre</option>".$this->selectOptionsSocketItemTmp[4]); 
                }  
            }                    
            $ldTpl->set("MaxOptText", "<em>Max. de op&ccedil;&otilde;es excelentes: </em><strong>". $ODBC_R->maxOptExcSel ."</strong>");
            if($_SESSION['COUPON_ACTIVE'] == true)
            {
                $ldTpl->set("NormalPrice", ceil((( $ODBC_R->price / 100 ) * (100 - $_SESSION['COUPON_PERCENT']))));
                $ldTpl->set("NormalPrice2", ceil((( $ODBC_R->CashPrice / 100 ) * (100 - $_SESSION['COUPON_PERCENT']))));
                $ldTpl->set("CouponActiveJS", "true");
                $ldTpl->set("CouponAmount", $_SESSION['COUPON_PERCENT']);
                $ldTpl->set("CouponCode", $_SESSION['COUPON_CODE']);
                $ldTpl->set("CouponActiveDIV", "<div id=\"CouponCodeDIV\" style=\"text-align:center;\" class=\"quadros\">Cupom <em>".$_SESSION['COUPON_CODE']."</em> ativado.<br />Valor do desconto <em>".$_SESSION['COUPON_PERCENT']."%</em>.</div>");
            }
            else
            {
                $ldTpl->set("NormalPrice", $ODBC_R->price);
                $ldTpl->set("NormalPrice2", $ODBC_R->CashPrice);
                $ldTpl->set("CouponActiveJS", "false");
                $ldTpl->set("CouponAmount", 0);
                $ldTpl->set("CouponCode", "");
                $ldTpl->set("CouponActiveDIV", "");
            }
            switch($ODBC_R->EXE) 
            {
                case 1:
                    $ldTpl->set("NomeOpExc1", "Recupera Mana ao matar monstro (Mana/8)"); 
                    $ldTpl->set("NomeOpExc2", "Recupera Vida ao matar monstro (Vida/8)"); 
                    $ldTpl->set("NomeOpExc3", "Aumenta velocidade do Ataque(M&aacute;gico)+7"); 
                    $ldTpl->set("NomeOpExc4", "Aumento no Dano +2%"); 
                    $ldTpl->set("NomeOpExc5", "Aumento no Danos +level/20"); 
                    $ldTpl->set("NomeOpExc6", "Taxa no Dano Excelente +10%");
                    $ldTpl->set("NomeOp","Dano adicional"); 
                    
                    $ldTpl->set("NomeOpExc1Disabled", "false"); 
                    $ldTpl->set("NomeOpExc2Disabled", "false"); 
                    $ldTpl->set("NomeOpExc3Disabled", "false"); 
                    $ldTpl->set("NomeOpExc4Disabled", "false"); 
                    $ldTpl->set("NomeOpExc5Disabled", "false"); 
                    $ldTpl->set("NomeOpExc6Disabled", "false"); 
                    break;
                case 2://SHIELDS ETC
                    $ldTpl->set("NomeOpExc1", "Aumenta a taxa de zen em +40%"); 
                    $ldTpl->set("NomeOpExc2", "Sucesso de defesa +10%"); 
                    $ldTpl->set("NomeOpExc3", "Reflete 5% o dano recebido"); 
                    $ldTpl->set("NomeOpExc4", "Diminui o dano recebido +4%"); 
                    $ldTpl->set("NomeOpExc5", "Aumenta Mana em +4%"); 
                    $ldTpl->set("NomeOpExc6", "Aumenta a Vida em +4%");
                    $ldTpl->set("NomeOp","Defesa adicional");
                    
                    $ldTpl->set("NomeOpExc1Disabled", "false"); 
                    $ldTpl->set("NomeOpExc2Disabled", "false"); 
                    $ldTpl->set("NomeOpExc3Disabled", "false"); 
                    $ldTpl->set("NomeOpExc4Disabled", "false"); 
                    $ldTpl->set("NomeOpExc5Disabled", "false"); 
                    $ldTpl->set("NomeOpExc6Disabled", "false"); 
                    break;
                case 3:
                    $ldTpl->set("NomeOpExc1", "Aumenta HP"); 
                    $ldTpl->set("NomeOpExc2", "Aumenta Mana"); 
                    $ldTpl->set("NomeOpExc3", "Defesa do oponente ignorada em +3%"); 
                    $ldTpl->set("NomeOpExc4", "Aumenta AG Máximo"); 
                    $ldTpl->set("NomeOpExc5", "Aumenta velocidade de ataque +7"); 
                    $ldTpl->set("NomeOpExc6", "Sem Efeito");
                    $ldTpl->set("NomeOp","Dano adicional"); 
                    
                    $ldTpl->set("NomeOpExc1Disabled", "false"); 
                    $ldTpl->set("NomeOpExc2Disabled", "false"); 
                    $ldTpl->set("NomeOpExc3Disabled", "false"); 
                    $ldTpl->set("NomeOpExc4Disabled", "false"); 
                    $ldTpl->set("NomeOpExc5Disabled", "false"); 
                    $ldTpl->set("NomeOpExc6Disabled", "\"disabled\"");
                    break;
                case 4:
                    $ldTpl->set("NomeOpExc1", "+ Ataque"); 
                    $ldTpl->set("NomeOpExc2", "+ Defesa"); 
                    $ldTpl->set("NomeOpExc3", "+ Illusion"); 
                    $ldTpl->set("NomeOpExc4", "Sem efeito"); 
                    $ldTpl->set("NomeOpExc5", "Sem efeito"); 
                    $ldTpl->set("NomeOpExc6", "Sem efeito");
                    
                    $ldTpl->set("NomeOpExc1Disabled", "false"); 
                    $ldTpl->set("NomeOpExc2Disabled", "false"); 
                    $ldTpl->set("NomeOpExc3Disabled", "false"); 
                    $ldTpl->set("NomeOpExc4Disabled", "\"disabled\""); 
                    $ldTpl->set("NomeOpExc5Disabled", "\"disabled\""); 
                    $ldTpl->set("NomeOpExc6Disabled", "\"disabled\"");
                    break;
                case 5:
                    $ldTpl->set("NomeOpExc1", "Aumento na taxa de aquisi&ccedil;&atilde;o de zen em +40%"); 
                    $ldTpl->set("NomeOpExc2", "Sucesso de defesa +10%"); 
                    $ldTpl->set("NomeOpExc3", "Reflete 5% o dano recebido"); 
                    $ldTpl->set("NomeOpExc4", "Diminui o dano recebido +4%"); 
                    $ldTpl->set("NomeOpExc5", "Aumenta Mana em +4%"); 
                    $ldTpl->set("NomeOpExc6", "Aumenta a Vida em +4%");
                    $ldTpl->set("NomeOp","Defesa adicional");

                    $ldTpl->set("NomeOpExc1Disabled", "false"); 
                    $ldTpl->set("NomeOpExc2Disabled", "false"); 
                    $ldTpl->set("NomeOpExc3Disabled", "false"); 
                    $ldTpl->set("NomeOpExc4Disabled", "false"); 
                    $ldTpl->set("NomeOpExc5Disabled", "false"); 
                    $ldTpl->set("NomeOpExc6Disabled", "false");
                    break;
                case 6:
                    $ldTpl->set("NomeOpExc1", "Aumenta mana ap&oacute;s matar monstros +mana/8"); 
                    $ldTpl->set("NomeOpExc2", "Aumenta vida ap&oacute;s matar monstros +vida/8"); 
                    $ldTpl->set("NomeOpExc3", "Aumenta velocidade de ataque +7"); 
                    $ldTpl->set("NomeOpExc4", "Adiciona dano +2%"); 
                    $ldTpl->set("NomeOpExc5", "Aumenta danos +leve1/20"); 
                    $ldTpl->set("NomeOpExc6", "&Ecirc;xito rank defensivo +10%");
                    
                    $ldTpl->set("NomeOpExc1Disabled", "false"); 
                    $ldTpl->set("NomeOpExc2Disabled", "false"); 
                    $ldTpl->set("NomeOpExc3Disabled", "false"); 
                    $ldTpl->set("NomeOpExc4Disabled", "false"); 
                    $ldTpl->set("NomeOpExc5Disabled", "false"); 
                    $ldTpl->set("NomeOpExc6Disabled", "false");
                    break;
                case 7:
                    $ldTpl->set("NomeOpExc1", "Ignora o Poder Defensivo do Oponente 5%"); 
                    $ldTpl->set("NomeOpExc2", "5% Chance de retornar o dano"); 
                    $ldTpl->set("NomeOpExc3", "5% Chance de recuperar toda a vida"); 
                    $ldTpl->set("NomeOpExc4", "5% Chance de recuperar toda a mana"); 
                    $ldTpl->set("NomeOpExc5", "Sem efeito"); 
                    $ldTpl->set("NomeOpExc6", "Sem efeito");
                    
                    $ldTpl->set("NomeOpExc1Disabled", "false"); 
                    $ldTpl->set("NomeOpExc2Disabled", "false"); 
                    $ldTpl->set("NomeOpExc3Disabled", "false"); 
                    $ldTpl->set("NomeOpExc4Disabled", "false"); 
                    $ldTpl->set("NomeOpExc5Disabled", "true"); 
                    $ldTpl->set("NomeOpExc6Disabled", "true");
                    break;
                default:
                    $ldTpl->set("NomeOpExc1", "Sem efeito"); 
                    $ldTpl->set("NomeOpExc2", "Sem efeito"); 
                    $ldTpl->set("NomeOpExc3", "Sem efeito"); 
                    $ldTpl->set("NomeOpExc4", "Sem efeito"); 
                    $ldTpl->set("NomeOpExc5", "Sem efeito"); 
                    $ldTpl->set("NomeOpExc6", "Sem efeito");
                    
                    $ldTpl->set("NomeOpExc1Disabled", "\"disabled\""); 
                    $ldTpl->set("NomeOpExc2Disabled", "\"disabled\""); 
                    $ldTpl->set("NomeOpExc3Disabled", "\"disabled\""); 
                    $ldTpl->set("NomeOpExc4Disabled", "\"disabled\""); 
                    $ldTpl->set("NomeOpExc5Disabled", "\"disabled\""); 
                    $ldTpl->set("NomeOpExc6Disabled", "\"disabled\"");
                    break;
            }
            // START HERE
            $handle = fopen("modules/classes/webshop/ServerFiles/Item.txt","r");
            while (!feof($handle))
            {
                $ItemInfo = fscanf($handle, '%d %s %d %d %d %d %d %d "%[^"]" %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d');
                if(strpos($ItemInfo[0],"//") === false && isset($ItemInfo[0]))
                {
                    if(!isset($ItemInfo[1]))
                    {
                        if($ItemInfo[0] !== "end")
                        {
                            $itemType = $ItemInfo[0];
                        }
                    }
                    else
                    {
                        $item[$itemType][$ItemInfo[0]] = array("Slot" => $ItemInfo[1], "Skill" => $ItemInfo[2], "X" => $ItemInfo[3], "Y" => $ItemInfo[4], "Serial" => $ItemInfo[5], "Option" => $ItemInfo[6], "Drop" => $ItemInfo[7], "Name" => $ItemInfo[8]);
                        
                        if($itemType != 14)
                        {
                            $item[$itemType][$ItemInfo[0]]["Level"] = $ItemInfo[9];
                            $item[$itemType][$ItemInfo[0]]["LevelSpecial"] = $ItemInfo[9];
                        }
                        else
                        {
                            $item[$itemType][$ItemInfo[0]]["Value"] = $ItemInfo[9];
                            $item[$itemType][$ItemInfo[0]]["Level"] = $ItemInfo[10];
                            $item[$itemType][$ItemInfo[0]]["LevelSpecial"] = $ItemInfo[10];
                        }
                        
                        if($itemType <= 5)
                        {
                            $item[$itemType][$ItemInfo[0]]["DmgMin"] = $ItemInfo[10];
                            $item[$itemType][$ItemInfo[0]]["DmgMax"] = $ItemInfo[11];
                            $item[$itemType][$ItemInfo[0]]["AttackSpeed"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["MagicDur"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["MagicPwr"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["ReqStr"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["ReqAgi"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["ReqEne"] = $ItemInfo[19];
                            $item[$itemType][$ItemInfo[0]]["ReqVit"] = $ItemInfo[20];
                            $item[$itemType][$ItemInfo[0]]["ReqCom"] = $ItemInfo[21];
                            $item[$itemType][$ItemInfo[0]]["Type"] = $ItemInfo[22];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[23];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[24];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[25];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[26];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[27];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[28];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[29];
                        }
                        if($itemType == 5)
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[14];
                        
                        if($itemType >= 6 && $itemType <= 12)
                            $item[$itemType][$ItemInfo[0]]["Defense"] = $ItemInfo[10];

                        if($itemType >= 6 && $itemType <= 11)
                        {
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["ReqStr"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["ReqAgi"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["ReqEne"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["ReqVit"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["ReqCom"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["Type"] = $ItemInfo[19];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[20];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[21];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[22];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[23];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[24];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[25];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[26];   
                        }
                        
                        if($itemType == 6)
                        {
                            $item[$itemType][$ItemInfo[0]]["DefRate"] = $ItemInfo[11];
                        }
                        if($itemType >= 7 && $itemType <= 9)
                        {
                            $item[$itemType][$ItemInfo[0]]["MagicDef"] = $ItemInfo[11];
                        }
                        if($itemType >= 10 || $itemType <= 11)
                        {
                            $item[$itemType][$ItemInfo[0]]["Speed"] = $ItemInfo[11];
                        }                   
                        if($itemType == 12)
                        {
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[11];
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["ReqEne"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["ReqStr"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["ReqAgi"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["ReqCom"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["Zen"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[19];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[20];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[21];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[22];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[23];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[24];                       
                        }
                        if($itemType == 13)
                        {
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[9];
                            $item[$itemType][$ItemInfo[0]]["Durability"] = $ItemInfo[10];
                            $item[$itemType][$ItemInfo[0]]["Ice"] = $ItemInfo[11];
                            $item[$itemType][$ItemInfo[0]]["Poison"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["Lightning"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["Fire"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["Earth"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["Wind"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["Water"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["Type"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[19];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[20];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[21];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[22];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[23];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[24];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[25];
                        }
                        if($itemType == 15)
                        {
                            $item[$itemType][$ItemInfo[0]]["ReqLevel"] = $ItemInfo[10];
                            $item[$itemType][$ItemInfo[0]]["Enery"] = $ItemInfo[11];
                            $item[$itemType][$ItemInfo[0]]["Zen"] = $ItemInfo[12];
                            $item[$itemType][$ItemInfo[0]]["DW"] = $ItemInfo[13];
                            $item[$itemType][$ItemInfo[0]]["DK"] = $ItemInfo[14];
                            $item[$itemType][$ItemInfo[0]]["EL"] = $ItemInfo[15];
                            $item[$itemType][$ItemInfo[0]]["MG"] = $ItemInfo[16];
                            $item[$itemType][$ItemInfo[0]]["DL"] = $ItemInfo[17];
                            $item[$itemType][$ItemInfo[0]]["SU"] = $ItemInfo[18];
                            $item[$itemType][$ItemInfo[0]]["RF"] = $ItemInfo[19];
                        }                          
                    }
                }
            }
            @fclose($handle);
            $ldTpl->set("ITEM_SKILL",$this->GetSkillName($item[$ODBC_R->TP][$ODBC_R->ID]["Skill"]));

            $ldTpl->set("EquipedBy",$this->getClassName($ODBC_R->TP,$ODBC_R->ID));
            $ldTpl->set("EnableSkill",$item[$ODBC_R->TP][$ODBC_R->ID]["Skill"]);
            $ldTpl->set("EnableAncient",$ODBC_R->ANC);
        }
        public function GetSkillName($skill)
        {
            $handle = fopen("modules/classes/webshop/ServerFiles/Skill.txt","r");
            while (!feof($handle))
            {
                $SkillInfo = fscanf($handle, '%d "%[^"]" %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d %d');
                if(strpos($SkillInfo[0],"//") === false && isset($SkillInfo[0]))
                {
                    if($skill == $SkillInfo[0])
                    {
                        $SkillItem = $SkillInfo[1];
                        if($SkillInfo[3] > 0) $SkillItem .= " (Mana:" . $SkillInfo[3] . ")";
                        return $SkillItem;
                        @fclose($handle);
                        
                    }
                }
            }
            @fclose($handle);
        }
        
    }
}


?>