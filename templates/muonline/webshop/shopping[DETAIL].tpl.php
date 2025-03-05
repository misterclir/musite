{#INCLUDE:header}
  {#INCLUDE:menuLeft}
  
    <link href="templates/{#TEMPLATE_DIR}/css/shop.css?11" media="all" rel="stylesheet" type="text/css" />
    <link href="templates/{#TEMPLATE_DIR}/css/webshop.css?11" media="all" rel="stylesheet" type="text/css" />

    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci"> 
        <div class="locationtitle usuario">
            <h1>SHOP DE ITENS</h1>
        </div>

        <div class="menu_line">
            <table width="100%" border="0">
                <tbody>
                    <tr>
                    <td valign="middle"><div align="center"><span id="iSet" class="buttonv" style="width: 110px;">SETS</span></div></td>
                    <td valign="middle"><div align="center"><span id="iDefesa" class="buttonv" style="width: 110px;">DEFESA</span></div></td>
                    <td valign="middle"><div align="center"><span id="iAtaque" class="buttonv" style="width: 110px;">ATAQUE</span></div></td>
                    <td valign="middle"><div align="center"><span id="iOutros" class="buttonv" style="width: 110px;">OUTROS</span></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
                        
        <div class="menu_line" id="iSetGo" style="display:none;">
            <table width="100%" border="0">
                <tr>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Helms', 'Result_Ajax_Catalog', 'get');">Helms</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Pants', 'Result_Ajax_Catalog', 'get');">Pants</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Gloves', 'Result_Ajax_Catalog', 'get');">Gloves</span></td>
                </tr>
                <tr>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Boots', 'Result_Ajax_Catalog', 'get');">Boots</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Armors', 'Result_Ajax_Catalog', 'get');">Armors</span></td>
                <td></td>
                </tr>
            </table>
        </div>

        <div class="menu_line" id="iDefesaGo" style="display:none;">
            <table width="100%" border="0">
                <tr>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Shields', 'Result_Ajax_Catalog', 'get');">Shields</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Wings', 'Result_Ajax_Catalog', 'get');">Wings</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Rings', 'Result_Ajax_Catalog', 'get');">Rings</span></td>
                </tr>
                <tr>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Pendants', 'Result_Ajax_Catalog', 'get');">Pendants</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Guards/Pets', 'Result_Ajax_Catalog', 'get');">Pets</span></td>
                <td></td>
                </tr>
            </table>
        </div>
                        
        <div class="menu_line" id="iAtaqueGo" style="display:none;">
            <table width="100%" border="0">
                <tr>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Swords', 'Result_Ajax_Catalog', 'get');">Swords</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Axes', 'Result_Ajax_Catalog', 'get');">Axes</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Maces', 'Result_Ajax_Catalog', 'get');">Maces</span></td>
                </tr>
                <tr>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Staffs', 'Result_Ajax_Catalog', 'get');">Staffs</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Spears', 'Result_Ajax_Catalog', 'get');">Spears</span></td>
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Crossbows', 'Result_Ajax_Catalog', 'get');">Crossbows</span></td>
                </tr>
                <tr>
                <!--<td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Scepters', 'Result_Ajax_Catalog', 'get');">Scepters</span></td>-->
                <td><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Bows', 'Result_Ajax_Catalog', 'get');">Bows</span></td>
                </tr>
            </table>
        </div>

        <div class="menu_line" id="iOutrosGo" style="display:none;">
            <table width="100%" border="0">
                <tr>
                    <td colspan="3"><span class="buttonm" onclick="javascript:Verify('shop.php?AjaxFunctions=TRUE&Function=CatalogSystem&ShowCatalogType=Talismans', 'Result_Ajax_Catalog', 'get');">Talism&atilde;s</span></td>
                </tr>
            </table>
        </div>

        <div style="margin-top:10px;" id="Result_Ajax_Catalog">
            <script>
                        function CheckOptCash(){
                            var MaxCashOpt = {#MAX_CASH_OPT};
                        if(document.getElementById('Item_OpExc_1').checked == true){
                            var CheckOption1 = 1;
                        } else {
                            var CheckOption1 = 0;
                        }
                        if(document.getElementById('Item_OpExc_2').checked == true){
                            var CheckOption2 = 1;
                        } else {
                            var CheckOption2 = 0;
                        }
                        if(document.getElementById('Item_OpExc_3').checked == true){
                            var CheckOption3 = 1;
                        } else {
                            var CheckOption3 = 0;
                        }
                        if(document.getElementById('Item_OpExc_4').checked == true){
                            var CheckOption4 = 1;
                        } else {
                            var CheckOption4 = 0;
                        }
                        if(document.getElementById('Item_OpExc_5').checked == true){
                            var CheckOption5 = 1;
                        } else {
                            var CheckOption5 = 0;
                        }
                        if(document.getElementById('Item_OpExc_6').checked == true){
                            var CheckOption6 = 1;
                        } else {
                            var CheckOption6 = 0;
                        }
                        if(CheckOption1+CheckOption2+CheckOption3+CheckOption4+CheckOption5+CheckOption6 > MaxCashOpt )
                        {
                        alert('Por favor, selecione apenas {#MAX_CASH_OPT} Options Excelentes ao comprar com {#Coin_2}');
                        }
                        else {
                            document.getElementById('FinishBuyTDCash').style.display = 'block';document.getElementById('FinishBuyTD').style.display = 'none';
                        }
                    }
                            function refresh_price(){ 
                            var preco_final = 0;
                            var preco_final2 = 0;
                            var preco_item = {#NormalPriceJS};
                            var preco_item2 = {#NormalPriceJS2};
                            var preco_level = {#LevelPrice};
                            var preco_option = {#AdcionalPrice};
                            var preco_skill = {#SkillPrice};
                            var preco_luck = {#LuckPrice};        
                            var preco_ancient = {#AncientPrice};   
                            var preco_jh = {#JhPrice};               
                            var preco_refine = {#RefinePrice};
                            var preco_socket = {#SocketPrice};
                            var preco_optionexc = {#OpExcPrice};
                            var coupon_active = {#CouponActiveJS};
                            var coupon_amount = {#CouponAmount};
                            var level_fix = {#LevelFix};
                            var level = document.getElementById('Item_Level').value;
                            var option = document.getElementById('Item_Option').value;   
                            var ancient = document.getElementById('Item_Ancient').value;     
                            var Jh = document.getElementById('Item_JH').value; 
                            if(ancient > 0) {
                                // document.getElementById('Item_OpExc_1').checked = false;
                                // document.getElementById('Item_OpExc_2').checked = false;
                                // document.getElementById('Item_OpExc_3').checked = false;
                                // document.getElementById('Item_OpExc_4').checked = false;
                                // document.getElementById('Item_OpExc_5').checked = false;
                                // document.getElementById('Item_OpExc_6').checked = false;
                                // document.getElementById('Item_OpExc_1').disabled = "disabled";
                                // document.getElementById('Item_OpExc_2').disabled = "disabled";
                                // document.getElementById('Item_OpExc_3').disabled = "disabled";
                                // document.getElementById('Item_OpExc_4').disabled = "disabled";
                                // document.getElementById('Item_OpExc_5').disabled = "disabled";
                                // document.getElementById('Item_OpExc_6').disabled = "disabled";
                                if(ancient == 1)
                                    document.getElementById('ProductName').innerHTML = '{#SetItemAnc1} {#ProductName}';

                                else if(ancient == 2)
                                    document.getElementById('ProductName').innerHTML = '{#SetItemAnc2} {#ProductName}';
                                        
                                document.getElementById('ProductPhoto').src = '{#ProductPhotoAnc}';    
                            } else {
                                document.getElementById('Item_OpExc_1').disabled = {#NomeOpExc1Disabled};
                                document.getElementById('Item_OpExc_2').disabled = {#NomeOpExc2Disabled};
                                document.getElementById('Item_OpExc_3').disabled = {#NomeOpExc3Disabled};
                                document.getElementById('Item_OpExc_4').disabled = {#NomeOpExc4Disabled};
                                document.getElementById('Item_OpExc_5').disabled = {#NomeOpExc5Disabled};
                                document.getElementById('Item_OpExc_6').disabled = {#NomeOpExc6Disabled};    
                                document.getElementById('ProductName').innerHTML = '{#ProductName}';
                                document.getElementById('ProductPhoto').src = '{#ProductPhoto}';        
                            }
                           
                            var check_max = {#MaxOptionsBuy};
                            var check_exc = 0;
                            for(i=1; i<7; i++) { 
                                 if(document.getElementById('Item_OpExc_'+i).checked == true) { check_exc++; }
                                if(check_exc > check_max) {  document.getElementById('Item_OpExc_'+i).checked = false; }
                            }
                            
                            if(level < 0) level = 0;
                            preco_final = preco_item;
                            preco_final = preco_final+(level*preco_level);
                            preco_final = preco_final+(option*preco_option);    
                            preco_final = preco_final+(Jh != 0 ? preco_jh : 0);
                            preco_final = preco_final+(ancient*preco_ancient);
                            preco_final = preco_final+(document.getElementById('Item_Skill').checked == true ? preco_skill : 0);
                            preco_final = preco_final+(document.getElementById('Item_Luck').checked == true ? preco_luck : 0);
                            preco_final = preco_final+(document.getElementById('Item_OpExc_1').checked == true ? preco_optionexc : 0);
                            preco_final = preco_final+(document.getElementById('Item_OpExc_2').checked == true ? preco_optionexc : 0);
                            preco_final = preco_final+(document.getElementById('Item_OpExc_3').checked == true ? preco_optionexc : 0);
                            preco_final = preco_final+(document.getElementById('Item_OpExc_4').checked == true ? preco_optionexc : 0);
                            preco_final = preco_final+(document.getElementById('Item_OpExc_5').checked == true ? preco_optionexc : 0); 
                            preco_final = preco_final+(document.getElementById('Item_OpExc_6').checked == true ? preco_optionexc : 0);
                            preco_final = preco_final+(document.getElementById('Item_Refine').checked == true ? preco_refine : 0);
                            // CASH
                            if(level < 0) level = 0;
                            preco_final2 = preco_item2;
                            preco_final2 = preco_final2+(level*preco_level);
                            preco_final2 = preco_final2+(option*preco_option);    
                            preco_final2 = preco_final2+(Jh != 0 ? preco_jh : 0);
                            preco_final2 = preco_final2+(ancient*preco_ancient);
                            preco_final2 = preco_final2+(document.getElementById('Item_Skill').checked == true ? preco_skill : 0);
                            preco_final2 = preco_final2+(document.getElementById('Item_Luck').checked == true ? preco_luck : 0);
                            preco_final2 = preco_final2+(document.getElementById('Item_OpExc_1').checked == true ? preco_optionexc : 0);
                            preco_final2 = preco_final2+(document.getElementById('Item_OpExc_2').checked == true ? preco_optionexc : 0);
                            preco_final2 = preco_final2+(document.getElementById('Item_OpExc_3').checked == true ? preco_optionexc : 0);
                            preco_final2 = preco_final2+(document.getElementById('Item_OpExc_4').checked == true ? preco_optionexc : 0);
                            preco_final2 = preco_final2+(document.getElementById('Item_OpExc_5').checked == true ? preco_optionexc : 0); 
                            preco_final2 = preco_final2+(document.getElementById('Item_OpExc_6').checked == true ? preco_optionexc : 0);
                            preco_final2 = preco_final2+(document.getElementById('Item_Refine').checked == true ? preco_refine : 0);
                            // 
                            
                            if(document.getElementById('Item_Socket_Slot_1').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_1_Option').disabled = "";
                                preco_final = preco_final+preco_socket;
                            }
                            else 
                                document.getElementById('Item_Socket_Slot_1_Option').disabled = "disabled";  
                            
                            if(document.getElementById('Item_Socket_Slot_2').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_2_Option').disabled = ""; 
                                preco_final = preco_final+preco_socket;
                            }
                            else
                                document.getElementById('Item_Socket_Slot_2_Option').disabled = "disabled";   
                                
                            if(document.getElementById('Item_Socket_Slot_3').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_3_Option').disabled = "";
                                preco_final = preco_final+preco_socket; 
                            }
                            else
                                document.getElementById('Item_Socket_Slot_3_Option').disabled = "disabled";   
                                
                            if(document.getElementById('Item_Socket_Slot_4').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_4_Option').disabled = ""; 
                                preco_final = preco_final+preco_socket;
                            }
                            else
                                document.getElementById('Item_Socket_Slot_4_Option').disabled = "disabled";   
                                
                            if(document.getElementById('Item_Socket_Slot_5').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_5_Option').disabled = "";
                                preco_final = preco_final+preco_socket; 
                            }
                            // CASH
                            if(document.getElementById('Item_Socket_Slot_1').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_1_Option').disabled = "";
                                preco_final2 = preco_final2+preco_socket;
                            }
                            else 
                                document.getElementById('Item_Socket_Slot_1_Option').disabled = "disabled";  
                            
                            if(document.getElementById('Item_Socket_Slot_2').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_2_Option').disabled = ""; 
                                preco_final2 = preco_final2+preco_socket;
                            }
                            else
                                document.getElementById('Item_Socket_Slot_2_Option').disabled = "disabled";   
                                
                            if(document.getElementById('Item_Socket_Slot_3').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_3_Option').disabled = "";
                                preco_final2 = preco_final2+preco_socket; 
                            }
                            else
                                document.getElementById('Item_Socket_Slot_3_Option').disabled = "disabled";   
                                
                            if(document.getElementById('Item_Socket_Slot_4').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_4_Option').disabled = ""; 
                                preco_final2 = preco_final2+preco_socket;
                            }
                            else
                                document.getElementById('Item_Socket_Slot_4_Option').disabled = "disabled";   
                                
                            if(document.getElementById('Item_Socket_Slot_5').checked == true)
                            {
                                document.getElementById('Item_Socket_Slot_5_Option').disabled = "";
                                preco_final2 = preco_final2+preco_socket; 
                            } 
                            // 
                            else
                                document.getElementById('Item_Socket_Slot_5_Option').disabled = "disabled";   
                            
                            
                            if(coupon_active == true) preco_final = Math.ceil((( preco_final  / 100 ) * (100 - coupon_amount)));
                            document.getElementById('novo_preco').innerHTML = + preco_final +'<span>  {#Coin_1}</span>';
                            if(coupon_active == true) preco_final2 = Math.ceil((( preco_final2  / 100 ) * (100 - coupon_amount)));
                            document.getElementById('novo_preco2').innerHTML = + preco_final2 +'<span>  {#Coin_2}</span>';

                            // 
                            // 
                            // 
                        var ExellentOption1 = document.getElementById('Item_OpExc_1').checked;
                        var ExellentOption2 = document.getElementById('Item_OpExc_2').checked;
                        var ExellentOption3 = document.getElementById('Item_OpExc_3').checked;
                        var ExellentOption4 = document.getElementById('Item_OpExc_4').checked;
                        var ExellentOption5 = document.getElementById('Item_OpExc_5').checked;
                        var ExellentOption6 = document.getElementById('Item_OpExc_6').checked;
                        var SocketOption1 = document.getElementById('Item_Socket_Slot_1').checked;
                        var SocketOption2 = document.getElementById('Item_Socket_Slot_2').checked;
                        var SocketOption3 = document.getElementById('Item_Socket_Slot_3').checked;
                        var SocketOption4 = document.getElementById('Item_Socket_Slot_4').checked;
                        var SocketOption5 = document.getElementById('Item_Socket_Slot_5').checked;
                        var LuckOption = document.getElementById('Item_Luck').checked;
                        var SkillOption = document.getElementById('Item_Skill').checked;
                        var LevelOption = document.getElementById('Item_Level').value;
                        var Item_Option = document.getElementById('Item_Option').value;
                        var Item_Refine = document.getElementById('Item_Refine').checked;
                        var Item_JH = document.getElementById('Item_JH').value; 
                        // var Ancient_Option = document.getElementById('Item_Ancient').value; 
                        var CheckedOption1 = 0;
                        var CheckedOption2 = 0;
                        var CheckedOption3 = 0;
                        var CheckedOption4 = 0;
                        var CheckedOption5 = 0;
                        var CheckedOption6 = 0;
                        var CheckedSocket1 = 0;
                        var CheckedSocket2 = 0;
                        var CheckedSocket3 = 0;
                        var CheckedSocket4 = 0;
                        var CheckedSocket5 = 0;
                        if (Item_Refine == true) 
                        {
                            //var RefineEl = document.getElementById('RefineLabel');
                            //RefineText = (RefineEl.innerText || RefineEl.textContent);
                            $("#WebShopDetailRefine").hide().html('<span style="color:#bb95c4; font-size: 10px;">{#OptionRadioRFBR}<br><br></span>').fadeIn(1);
                        }
                        else
                        {
                            document.getElementById('WebShopDetailRefine').innerHTML = '<span> </span>';
                        }
                        if (Item_JH != 0) 
                        {
                            $("#WebShopDetailJH").hide().html('<span style="color:#FC3; font-size: 10px;">'+document.getElementById('Item_JH').options[document.getElementById('Item_JH').selectedIndex].text+'<br><br></span>').fadeIn(1);
                        }
                        else
                        {
                            document.getElementById('WebShopDetailJH').innerHTML = '<span> </span>';
                        }
                        if (Item_Option > 0) 
                        {
                            $("#WebShopDetailAdd").hide().html('<span style="color:#7daeff; font-size: 10px;">{#NomeOp} +'+document.getElementById('Item_Option').value*4+'<br></span>').fadeIn(1);
                        }
                        else
                        {
                            document.getElementById('WebShopDetailAdd').innerHTML = '<span> </span>';
                        }
                        if (LevelOption > 0) 
                        {
                            $("#WebShopDetailLevel").hide().html('{#LevelProductName}').fadeIn(1);
                        }
                        else
                        {
                            document.getElementById('WebShopDetailLevel').innerHTML = '<span> </span>';
                        }
                        if (SkillOption == true) 
                        {
                            $("#WebShopDetailSkill").hide().html('<span style="color:#7daeff; font-size: 10px;">{#ITEM_SKILL}<br></span>').fadeIn(1);
                        }
                        else
                        {
                            document.getElementById('WebShopDetailSkill').innerHTML = '<span> </span>';
                        }
                        if (LuckOption == true) 
                        {
                            $("#WebShopDetailLuck").hide().html('<span style="color:#7daeff; font-size: 10px;">Sorte (Taxa de Sucesso com Jewel of Soul +25%)<br>Sorte (Taxa de Dano Cr&iacute;tico +5%)<br></span>').fadeIn(1);
                        }
                        else
                        {
                            document.getElementById('WebShopDetailLuck').innerHTML = '<span> </span>';
                        }
                       // OPTION #1
                        if (ExellentOption1 == true) 
                        {
                            $("#WebShopDetailOpt1").hide().html('<span style="text-align:center;color:#7daeff; font-size: 10px;">{#NomeOpExc1}<br></span>').fadeIn(1);
                           CheckedOption1 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailOpt1').innerHTML = '<span> </span>';
                        }
                        // END OPTION #1
                        // OPTION #2
                        if (ExellentOption2 == true) 
                        {
                            $("#WebShopDetailOpt2").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">{#NomeOpExc2}<br></span>').fadeIn(1);
                           CheckedOption2 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailOpt2').innerHTML = '<span> </span>';
                        }
                        //END OPTION #2
                        // OPTION #3
                        if (ExellentOption3 == true) 
                        {
                            $("#WebShopDetailOpt3").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">{#NomeOpExc3}<br></span>').fadeIn(1);
                           CheckedOption3 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailOpt3').innerHTML = '<span> </span>';
                        }
                        //END OPTION #3
                        // OPTION #4
                        if (ExellentOption4 == true) 
                        {
                            $("#WebShopDetailOpt4").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">{#NomeOpExc4}<br></span>').fadeIn(1);
                           CheckedOption4 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailOpt4').innerHTML = '<span> </span>';
                        }
                        //END OPTION #4
                        // OPTION #5
                        if (ExellentOption5 == true) 
                        {
                            $("#WebShopDetailOpt5").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">{#NomeOpExc5}<br></span>').fadeIn(1);
                           CheckedOption5 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailOpt5').innerHTML = '<span> </span>';
                        }
                        //END OPTION #5
                        // OPTION #6
                        if (ExellentOption6 == true) 
                        {
                            $("#WebShopDetailOpt6").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">{#NomeOpExc6}<br></span>').fadeIn(1);
                           CheckedOption6 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailOpt6').innerHTML = '<span> </span>';
                        }
                        //END OPTION #6

                        // Socket #1
                        if (SocketOption1 == true) 
                        {
                            $("#WebShopDetailSocket1").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">Socket 1: '+document.getElementById('Item_Socket_Slot_1_Option').options[document.getElementById('Item_Socket_Slot_1_Option').selectedIndex].text+'<br></span>').fadeIn(1);
                           CheckedSocket1 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailSocket1').innerHTML = '<span> </span>';
                        }
                        //END Socket #1
                        // Socket #2
                        if (SocketOption2 == true) 
                        {
                            $("#WebShopDetailSocket2").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">Socket 2: '+document.getElementById('Item_Socket_Slot_2_Option').options[document.getElementById('Item_Socket_Slot_2_Option').selectedIndex].text+'<br></span>').fadeIn(1);
                           CheckedSocket2 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailSocket2').innerHTML = '<span> </span>';
                        }
                        //END Socket #2
                        // Socket #3
                        if (SocketOption3 == true) 
                        {
                            $("#WebShopDetailSocket3").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">Socket 3: '+document.getElementById('Item_Socket_Slot_3_Option').options[document.getElementById('Item_Socket_Slot_3_Option').selectedIndex].text+'<br></span>').fadeIn(1);
                           CheckedSocket3 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailSocket3').innerHTML = '<span> </span>';
                        }
                        //END Socket #3
                        // Socket #4
                        if (SocketOption4 == true) 
                        {
                            $("#WebShopDetailSocket4").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">Socket 4: '+document.getElementById('Item_Socket_Slot_4_Option').options[document.getElementById('Item_Socket_Slot_4_Option').selectedIndex].text+'<br></span>').fadeIn(1);
                           CheckedSocket4 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailSocket4').innerHTML = '<span> </span>';
                        }
                        //END Socket #4
                        // Socket #5
                        if (SocketOption5 == true) 
                        {
                            $("#WebShopDetailSocket5").hide().html('<span style="text-align:center; color:#7daeff; font-size: 10px;">Socket 5: '+document.getElementById('Item_Socket_Slot_5_Option').options[document.getElementById('Item_Socket_Slot_5_Option').selectedIndex].text+'<br></span>').fadeIn(1);
                           CheckedSocket5 = 1;
                        }
                        else
                        {
                            document.getElementById('WebShopDetailSocket5').innerHTML = '<span> </span>';
                        }
                        //END Socket #5
                        // Verificar se o item esta Exellent
                        
                        if(CheckedOption1+CheckedOption2+CheckedOption3+CheckedOption4+CheckedOption5+CheckedOption6 >= 1 )
                        {
                            $("#WebShopDetailName").hide().html('{#ExcProductName}{#ProductName}</span>').fadeIn(1);
                                $('#WebShopDetailLevel').css('color','#033e23f');

                        }
                        else
                        {
                            document.getElementById('WebShopDetailName').innerHTML = '<span style="color:#ffcc19;font-size: 12px;">{#ProductName}</span>';
                                $('#WebShopDetailLevel').css('color','#ffcc19');
                        }
                        // FIm Verificar se o item esta Exellent                        
                        // Verificar se o item esta com Socket
                        if(CheckedSocket1+CheckedSocket2+CheckedSocket3+CheckedSocket4+CheckedSocket5 >= 1 )
                        {
                            $("#WebShopDetailSocketT").hide().html('<br><span style="color:#9a609a;font-size: 10px;">Socket Options<br><br></span>').fadeIn(1);

                        }
                        else
                        {
                            document.getElementById('WebShopDetailSocketT').innerHTML = '<span></span>';
                        }
                        // FIm Verificar se o item esta com Socket
                        
                        // Ancient
                        if(ancient == 1)
                        {
                            $("#WebShopDetailName").hide().html('<span style="color:#33e23f;font-size: 12px;">Exc. {#SetItemAnc1} {#ProductName}</span>').fadeIn(1);
                                $('#WebShopDetailLevel').css('color','#33e23f');
                                $('#WebShopAncBg').css('background-color','#3e3bca');
                        }
                        if(ancient == 2)
                        {
                            $("#WebShopDetailName").hide().html('<span style="color:#33e23f;font-size: 12px;">Exc. {#SetItemAnc2} {#ProductName}</span>').fadeIn(1);
                                $('#WebShopDetailLevel').css('color','#33e23f');
                                $('#WebShopAncBg').css('background-color','#3e3bca');
                        }
                        if(ancient == 0)
                        {
                            $("#WebShopDetailName").hide().html('{#ExcProductName}{#ProductName}</span>').fadeIn(1);
                                $('#WebShopDetailLevel').css('color','#33e23f');
                                $('#WebShopAncBg').css('background-color','transparent');
                        }
                        if(CheckedOption1+CheckedOption2+CheckedOption3+CheckedOption4+CheckedOption5+CheckedOption6 < 1 && ancient == 0 )
                        {
                            $("#WebShopDetailName").hide().html('<span style="color:#ffcc19;font-size: 12px;">{#ProductName}</span>').fadeIn(1);
                                $('#WebShopDetailLevel').css('color','#ffcc19');
                        }
                        // 
                        
                          }
                    </script>

                    <script>
                        $(document).ready(
                            function()
                            {
                                refresh_price();
                            }
                        )
                    </script>
	<div id="mainContent">
        <div id="Result_Ajax_Catalog">
            <div class="qdestaques">
                <h1 style="display:none" id="ProductName">{ProductName}</h1>
                <style>.WebShopImage{width: 200px !important;}</style>
                <div style="width:100%;margin:0 auto;">
                <table>
                    <tr class="WebShopImage" valign="top">
                        <td >
                            <div class="WebShopItemDetail"><br>
                                <img id="ProductPhoto" src="{#ProductPhoto}" style="border:none;" /><br>
                                <div id="WebShopAncBg"> 
                                <span id="WebShopDetailName">
                                    <p style="color:#ffcc19;font-family: tahoma; font-size:12px;">{#ProductName}</p>
                                </span>
                                <span style="color:#ffcc19" id="WebShopDetailLevel"></span></div><br>
                                <div style="/*background-color:red;*/ color:white;">
                                <span id="WebShopClass" style="font-size:9px;">{#EquipedBy}</span></div><br>
                                <span id="WebShopDetailRefine"></span>
                                <span id="WebShopDetailJH"></span>
                                <span id="WebShopDetailSkill"></span>
                                {#divOptions}
                            </div>
                        </td>
                        <td style="width:10px !important;">
                            
                        </td>
                        <td style="width:240px !important;">
                            <!-- Main Options -->
                            <table class="WebShopMainOpt" border="0" valign="top" >
                                <tr>
                                    <td  class="td-space-sm">
                                        <label style="font-weight:100;">Level: 
                                            <select name="Item_Level" id="Item_Level" onchange="javascript: refresh_price();" {#DisabledLevel}><option value=0>+0</option> <option value=1>+1</option> <option value=2>+2</option> <option value=3>+3</option> <option value=4>+4</option> <option value=5>+5</option> <option value=6>+6</option> <option value=7>+7</option> <option value=8>+8</option> <option value=9>+9</option> <option value=10>+10</option> <option value=11>+11</option> <option value=12>+12</option> <option value=13>+13</option>
                                            </select>
                                        </label>
                                     </td>
                                     <td>
                                        <label style="font-weight:100;">Adicional: 
                                            <select name="Item_Option" id="Item_Option"  onchange="javascript: refresh_price();" {#DisabledAdcional}><option value=0>+0</option> <option value=1>+4</option> <option value=2>+8</option> <option value=3>+12</option> <option value=4>+16</option> <option value=5>+20</option> <option value=6>+24</option> <option value=7>+28</option>
                                            </select>
                                        </label>
                                     </td>
                                     <td class="WebShopAncient">
                                        <label style="font-weight:100;">Ancient: 
                                            <select name="Item_Ancient" id="Item_Ancient" onchange="javascript: refresh_price();" {#DisabledAncient}> {#OptionSelectAnc}
                                            </select>
                                        </label>
                                     </td>
                                </tr>
                                <tr>
                                    <td class="WebShopSkill">
                                        <label style="font-weight:100;">
                                            <input name='Item_Skill' id='Item_Skill' type='checkbox' value=1 onchange="javascript: refresh_price();" {#DisabledSkill} /> Skill
                                        </label>
                                    </td>
                                    <td>
                                        <label style="font-weight:100;">
                                            <input name='Item_Luck' id='Item_Luck' type='checkbox' value=1 onchange="javascript: refresh_price();" {#DisabledLuck} /> Luck
                                        </label>
                                    </td>
                                </tr>
                            </table>
                            <table class="WebShopExc">
                                <tr>
                                    <td>
                                        <label style="font-size:9px;font-weight:100;">
                                            <input name='Item_OpExc_6' id='Item_OpExc_6' type='checkbox' value=1 {#DisabledOpExc} onchange="javascript: refresh_price();"> {#NomeOpExc6}
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-size:9px;font-weight:100;">
                                            <input name='Item_OpExc_5' id='Item_OpExc_5' type='checkbox' value=1 {#DisabledOpExc} onchange="javascript: refresh_price();"> {#NomeOpExc5}
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-size:9px;font-weight:100;">
                                            <input name='Item_OpExc_4' id='Item_OpExc_4' type='checkbox' value=1 {#DisabledOpExc} onchange="javascript: refresh_price();"> {#NomeOpExc4}
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-size:9px;font-weight:100;">
                                            <input name='Item_OpExc_3' id='Item_OpExc_3' type='checkbox' value=1 {#DisabledOpExc} onchange="javascript: refresh_price();"> {#NomeOpExc3}
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-size:9px;font-weight:100;" class="">
                                            <input name='Item_OpExc_2' id='Item_OpExc_2' type='checkbox' value=1 {#DisabledOpExc} onchange="javascript: refresh_price();"> {#NomeOpExc2}
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-size:9px;font-weight:100;">
                                            <input name='Item_OpExc_1' id='Item_OpExc_1' type='checkbox' value=1 {#DisabledOpExc} onchange="javascript: refresh_price(); "> {#NomeOpExc1}
                                        </label>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td style="color:red">{#MaxOptText}</td>
                                </tr> -->
                                <tr>
                                    <td class="qdestaques alert">Obs: Para o item ficar excelente, voc&ecirc; deve marcar no m&iacute;nimo uma op&ccedil;&atilde;o excelente.</td>
                                </tr> 
                            </table>
                        </td>
                    </tr>
                </table>
                </div>
                <div style="width:90%; padding:10px; border-bottom: 2px solid #333333;margin:0 auto;" class="webShopHarmony"></div>
                <div class="WebShopHarmony">
                <table><!-- Table harmony -->

                    <tr>
                        <td>
                            <span style="color:#FC3;font-weight:bold;">
                                Op&ccedil;&otilde;es Harmony
                            </span> 
                            <table border="0">
                                <tr>
                                    <td>
                                        <label style="font-weight:100;">Op&ccedil;&atilde;o: 
                                            <select name="Item_JH" id="Item_JH" onchange="javascript: refresh_price();" {#DisabledJH}>{#OptionSelectJH}
                                            </select>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="quadros">
                                        Aten&ccedil;&atilde;o: Essa op&ccedil;&atilde;o depende do level do item!<br />N&atilde;o nos responsabilizamos por op&ccedil;&otilde;es incorretas.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                </div><!-- Ends Table harmony -->
                
                <!-- Refine Table -->
                <div style="width:90%; padding:10px; border-bottom: 2px solid #333333;margin:0 auto;" class="WebShopRefine"></div>
                <div  class="WebShopRefine">
                <table>
                    <tr>
                        <td align="center">
                            <span style="color:#9f659f;font-weight:bold;">Op&ccedil;&otilde;es Level 380</span>
                            <table border="0">
                                <tr>
                                    <td>
                                        <label style="font-weight:100;">
                                            <input name='Item_Refine' id='Item_Refine' type='checkbox' value=1 {#DisabledRefine} onchange="javascript: refresh_price();"> {#OptionRadioRF}
                                        </label>
                                    </td>
                                </tr> 
                            </table>
                        </td>
                    </tr>
                </table>
                </div>
                <!-- Ends Refine Table -->

                <!-- Start Socket Table -->
                <div style="width:90%; padding:10px; border-bottom: 2px solid #333333;margin:0 auto;" class="webShopSockets"></div>
                <div class="WebShopSockets">
                <table>
                    <tr>
                        <td>
                            <span style="color:#7daeff;font-weight:bold">Op&ccedil;&otilde;es Sockets</span>
                            <table border="0"> 
                                <tr>
                                    <td>
                                        <label style="font-weight:100;">
                                            <input name='Item_Socket_Slot_1' id='Item_Socket_Slot_1' type='checkbox' value=1 {#DisabledSocket} onchange="javascript: refresh_price();"> Liberar Slot Socket 1
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 25px;">
                                        <label style="font-weight:100;">
                                            <select name='Item_Socket_Slot_1_Option' id='Item_Socket_Slot_1_Option' onchange="javascript: refresh_price();" disabled="disabled"> {#OptionSocketSelect1}</select>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-weight:100;">
                                            <input name='Item_Socket_Slot_2' id='Item_Socket_Slot_2' type='checkbox' value=1 {#DisabledSocket} onchange="javascript: refresh_price();"> Liberar Slot Socket 2
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 25px;">
                                        <label style="font-weight:100;">
                                            <select name='Item_Socket_Slot_2_Option' id='Item_Socket_Slot_2_Option' onchange="javascript: refresh_price();" disabled="disabled"> {#OptionSocketSelect2}</select>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-weight:100;">
                                            <input name='Item_Socket_Slot_3' id='Item_Socket_Slot_3' type='checkbox' value=1 {#DisabledSocket} onchange="javascript: refresh_price();"> Liberar Slot Socket 3
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 25px;">
                                        <label style="font-weight:100;">
                                            <select name='Item_Socket_Slot_3_Option' id='Item_Socket_Slot_3_Option' onchange="javascript: refresh_price();" disabled="disabled"> {#OptionSocketSelect3}</select>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-weight:100;">
                                            <input name='Item_Socket_Slot_4' id='Item_Socket_Slot_4' type='checkbox' value=1 {#DisabledSocket} onchange="javascript: refresh_price();"> Liberar Slot Socket 4
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 25px;">
                                        <label style="font-weight:100;">
                                            <select name='Item_Socket_Slot_4_Option' id='Item_Socket_Slot_4_Option' onchange="javascript: refresh_price();" disabled="disabled"> {#OptionSocketSelect4}</selepct>
                                        </lable>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="font-weight:100;">
                                            <input name='Item_Socket_Slot_5' id='Item_Socket_Slot_5' type='checkbox' value=1 {#DisabledSocket} onchange="javascript: refresh_price();"> Liberar Slot Socket 5
                                        </label>
                                    </td>
                                </tr> 
                                <tr>
                                    <td style="padding-left: 25px;">
                                        <label style="font-weight:100;">
                                            <select name='Item_Socket_Slot_5_Option' id='Item_Socket_Slot_5_Option' onchange="javascript: refresh_price();" disabled="disabled"> {#OptionSocketSelect5}
                                            </select>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="quadros">
                                        Aten&ccedil;&atilde;o:S&oacute; selecione as op&ccedil;&otilde;es caso voc&ecirc; saiba <br> exatamente o que est&aacute; fazendo!<br />N&atilde;o nos responsabilizamos por op&ccedil;&otilde;es incorretas.
                                    </td>
                                </tr>
                           </table>
                        </td>
                    </tr> 
                </table>
                </div>
                <!-- Ends Socket Table -->

                <!-- Start Cupom Table -->
                <hr class="my-hr WebShopCupom">
                <table class="WebShopCupom center">
                    <tr>
                        <td>
                            <span style="font-weight:bold;color:#868686;">
                                Cupom de Desconto
                            </span><br><br>
                            Se voc&ecirc; tem um cumpom de desconto, insira o c&oacute;digo no campo abaixo.<br>Clique em "Ativar Cupom", e o desconto sera aplicado automaticamente.<br>
                            C&oacute;digo de desconto: <input type="text" id="couponCode" value="{#CouponCode}" maxlength="10" /><br> <br> <input class="btn btn-default btn-sm" type="button" class="button" value="Ativar cupom" onclick="javascript: document.getElementById('CouponCodeDIV').style.display = 'block'; Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CouponActive&amp;couponCode='+ document.getElementById('couponCode').value, 'CouponCodeDIV', 'get');" />
                            <div id="CouponCodeDIV" style="display:none; text-align:center;" class="qdestaques">
                        </td>
                    </tr>
                </table>
                <!-- Start Cupom Table -->
                <!-- <hr style="margin-top:40px;" class="my-hr"> -->
                <!-- Start Buttons Table -->
                <table class="WebShopButtons center" border="0"> 
                    <tr>
                        <tr>
                            <?php if(IS_GOLDITEM == 1): ?>
                            <td class="td-space"><b id="novo_preco" style="color:#FF8E13; font-size:20px;">{#NormalPrice} <span>{#Coin_1}</span> </b><br><input type="submit" class="button" onclick="javascript: document.getElementById('FinishBuyTD').style.display = 'block';document.getElementById('FinishBuyTDCash').style.display = 'none'; " value="Comprar" /></td>
                            <?php endif; if(IS_CASHITEM == 1): ?>
                            <td class="td-space"><b id="novo_preco2" style="color:#4C4C4C;font-size:20px;">{#NormalPrice2} <span>{#Coin_2}</span></b><br><input type="submit" class="button" onclick="javascript: CheckOptCash();"  value="Comprar" /></td>
                            <?php endif; ?>
                        </tr>
                    </tr>
               </table>
                <!-- Ends Buttons Table -->

                <!-- Gold Table -->
                <table style="width:100%">
                    <tr>
                        <td>
                            <div id="FinishBuyTD" style="display:none; text-align:center;" class="qdestaques">
                                <span>
                                    Voc&ecirc; tem certeza que deseja comprar esse item?<br />Compras n&atilde;o podem ser desfeitas!
                                </span>
                                <br />
                                <br />
                                <input type="submit" class="button" onclick="javascript: document.getElementById('FinishBuyTD').style.display = 'none'; document.getElementById('Result_Ajax_FinishBuy').style.display = 'block'; Verify('shop.php?AjaxFunctions=TRUE&amp;Function=FinishBuy&amp;ProductID={#ProductID}&amp;Item_Level='+ document.getElementById('Item_Level').value +'&amp;Item_Option='+ document.getElementById('Item_Option').value +'&amp;Item_Ancient='+ document.getElementById('Item_Ancient').value +'&amp;Item_Skill='+ document.getElementById('Item_Skill').checked +'&amp;Item_Luck='+ document.getElementById('Item_Luck').checked +'&amp;Item_OpExc_1='+ document.getElementById('Item_OpExc_1').checked +'&amp;Item_OpExc_2='+ document.getElementById('Item_OpExc_2').checked +'&amp;Item_OpExc_3='+ document.getElementById('Item_OpExc_3').checked +'&amp;Item_OpExc_4='+ document.getElementById('Item_OpExc_4').checked +'&amp;Item_OpExc_5='+ document.getElementById('Item_OpExc_5').checked +'&amp;Item_OpExc_6='+ document.getElementById('Item_OpExc_6').checked +'&amp;Item_JH='+ document.getElementById('Item_JH').value +'&amp;Item_Refine='+ document.getElementById('Item_Refine').checked +'&amp;Item_Socket_Slot_1='+ document.getElementById('Item_Socket_Slot_1').checked +'&amp;Item_Socket_Slot_2='+ document.getElementById('Item_Socket_Slot_2').checked +'&amp;Item_Socket_Slot_3='+ document.getElementById('Item_Socket_Slot_3').checked +'&amp;Item_Socket_Slot_4='+ document.getElementById('Item_Socket_Slot_4').checked +'&amp;Item_Socket_Slot_5='+ document.getElementById('Item_Socket_Slot_5').checked +'&amp;Item_Socket_Slot_1_Option='+ document.getElementById('Item_Socket_Slot_1_Option').value +'&amp;Item_Socket_Slot_2_Option='+ document.getElementById('Item_Socket_Slot_2_Option').value +'&amp;Item_Socket_Slot_3_Option='+ document.getElementById('Item_Socket_Slot_3_Option').value +'&amp;Item_Socket_Slot_4_Option='+ document.getElementById('Item_Socket_Slot_4_Option').value +'&amp;Item_Socket_Slot_5_Option='+ document.getElementById('Item_Socket_Slot_5_Option').value, 'Result_Ajax_FinishBuy', 'get');"  value="Desejo comprar usando {#Coin_1}" />
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- Ends Gold Table -->

                <!-- Cash Table -->
                <table style="width:100%">
                    <tr>
                        <td>
                            <div id="FinishBuyTDCash" style="display:none; text-align:center;" class="qdestaques">
                                <span>
                                    Voc&ecirc; tem certeza que deseja comprar esse item?<br />Compras n&atilde;o podem ser desfeitas!
                                </span>
                                <br />
                                <br />
                                <input type="submit" class="button" onclick="javascript: document.getElementById('FinishBuyTDCash').style.display = 'none'; document.getElementById('Result_Ajax_FinishBuy').style.display = 'block'; Verify ('shop.php?PAYWITHCASH=TRUE&amp;AjaxFunctions=TRUE&amp;Function=FinishBuy&amp;ProductID={#ProductID}&amp;Item_Level='+ document.getElementById('Item_Level').value +'&amp;Item_Option='+ document.getElementById('Item_Option').value +'&amp;Item_Ancient='+ document.getElementById('Item_Ancient').value +'&amp;Item_Skill='+ document.getElementById('Item_Skill').checked +'&amp;Item_Luck='+ document.getElementById('Item_Luck').checked +'&amp;Item_OpExc_1='+ document.getElementById('Item_OpExc_1').checked +'&amp;Item_OpExc_2='+ document.getElementById('Item_OpExc_2').checked +'&amp;Item_OpExc_3='+ document.getElementById('Item_OpExc_3').checked +'&amp;Item_OpExc_4='+ document.getElementById('Item_OpExc_4').checked +'&amp;Item_OpExc_5='+ document.getElementById('Item_OpExc_5').checked +'&amp;Item_OpExc_6='+ document.getElementById('Item_OpExc_6').checked +'&amp;Item_JH='+ document.getElementById('Item_JH').value +'&amp;Item_Refine='+ document.getElementById('Item_Refine').checked +'&amp;Item_Socket_Slot_1='+ document.getElementById('Item_Socket_Slot_1').checked +'&amp;Item_Socket_Slot_2='+ document.getElementById('Item_Socket_Slot_2').checked +'&amp;Item_Socket_Slot_3='+ document.getElementById('Item_Socket_Slot_3').checked +'&amp;Item_Socket_Slot_4='+ document.getElementById('Item_Socket_Slot_4').checked +'&amp;Item_Socket_Slot_5='+ document.getElementById('Item_Socket_Slot_5').checked +'&amp;Item_Socket_Slot_1_Option='+ document.getElementById('Item_Socket_Slot_1_Option').value +'&amp;Item_Socket_Slot_2_Option='+ document.getElementById('Item_Socket_Slot_2_Option').value +'&amp;Item_Socket_Slot_3_Option='+ document.getElementById('Item_Socket_Slot_3_Option').value +'&amp;Item_Socket_Slot_4_Option='+ document.getElementById('Item_Socket_Slot_4_Option').value +'&amp;Item_Socket_Slot_5_Option='+ document.getElementById('Item_Socket_Slot_5_Option').value, 'Result_Ajax_FinishBuy', 'get');"  value="Desejo comprar usando {#Coin_2}" />
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- Ends Cash Table -->
                <script type="text/javascript">
                function initPage()
                {
                    document.getElementById('Item_Level').value = {#LevelFix};                  
                }
                initPage();
                refresh_price();
            </script>
            <div class="qdestaques" id="Result_Ajax_FinishBuy" style="display:none; list-style:none;"></div>
            </div>
        </div>        
            </div>
<?php 
if (SYSTEM_ITEMS == "OLD") 
    {
        echo '
            <style> 
                .WebShopSockets{display:none;}
                .WebShopHarmony{display:none;}
                .WebShopRefine{display:none;}
                .WebShopHr{display:none;}
            </style>
        ';
    }
$enableRefine = "{#EnableRefine}";
if ($enableRefine == 0)
{
            echo '
            <style> 
                .WebShopRefine{display:none;}
            </style>
        ';
}
$enableSocket = "{#EnableSocket}";
if ($enableSocket != 1)
{
            echo '
            <style> 
                .WebShopSockets{display:none;}
            </style>
        ';
}
$skill = "{#EnableSkill}";
if ($skill == 0) {
    echo '
            <style> 
                .WebShopSkill{display:none;}
            </style>
        ';
}
$ancient = "{#EnableAncient}";
if ($ancient == 0) {
    echo '
            <style> 
                .WebShopAncient{display:none;}
            </style>
        ';
}
if (ENABLE_CUPOM_MODULE == false) {
    echo '
            <style> 
                .WebShopCupom{display:none;}
            </style>
        ';
}
?>
                </div>

        <script>
        $( document ).ready(function() {
            
            $("#iSet").click(function() {   
                $("#iSetGo").show();
                $("#iDefesaGo").hide();
                $("#iAtaqueGo").hide();
                $("#iOutrosGo").hide();
            
            });
            
            $("#iDefesa").click(function() {    
                $("#iDefesaGo").show();
                $("#iSetGo").hide();
                $("#iAtaqueGo").hide();
                $("#iOutrosGo").hide();
            
            });
            
            $("#iAtaque").click(function() {
                $("#iAtaqueGo").show();
                $("#iDefesaGo").hide();
                $("#iSetGo").hide();
                $("#iOutrosGo").hide();
            
            });
            
            $("#iOutros").click(function() {
                $("#iOutrosGo").show();
                $("#iAtaqueGo").hide();
                $("#iDefesaGo").hide();
                $("#iSetGo").hide();
            
            });
            
        });
        </script>   

            
    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}