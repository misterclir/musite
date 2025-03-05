{#INCLUDE:header}
  {#INCLUDE:menuLeft}
  
    <link href="templates/{#TEMPLATE_DIR}/css/shop.css?11" media="all" rel="stylesheet" type="text/css" />

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

        <div style="margin-top:10px;" id="Result_Ajax_Catalog"></div>

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