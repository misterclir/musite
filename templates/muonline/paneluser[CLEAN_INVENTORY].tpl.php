{#INCLUDE:header}
  {#INCLUDE:menuLeft}

    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci"> 
        <div class="locationtitle usuario">
            <h1>Painel do usuário</h1>
        </div>

        <div class="sub_wrap">
            <div id="etc">
                {#INCLUDE:menuPanelUser}
                <h1 class="topomenumeio">Limpar Inventário</h1><br>

                <div class="legend" style="margin-bottom: 1px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Limpar Inventário</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=settings&amp;Write=2#!" method="post">
                            <em>Personagem:</em><br />
                            <select name='personagem' class="inputbox" onchange="location='panel.php?panel=clean_inventory&amp;character='+this.options[this.selectedIndex].value">
                                <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                                    {#CHARACTER_LIST_TAG_OPTION}
                            </select><br />
                        </form> 
                    </div>
                </div>
                
                <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>

            </div>          
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}