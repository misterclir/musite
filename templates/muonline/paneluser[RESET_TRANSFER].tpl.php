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
                <h1 class="topomenumeio">Transferir Reset</h1><br>

                <div class="legend" style="margin-bottom: 1px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Transferir Reset</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=reset_transfer&amp;Write=true#!" method="post">
                            <em>Personagem Origem:</em><br />
                            <select name='character1' class="inputbox">
                                <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                                {#CHARACTER_LIST_TAG_OPTION}
                            </select><br />
                            <em>Personagem Destino:</em><br />
                            <select name='character2' class="inputbox">
                                <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                                {#CHARACTER_LIST_TAG_OPTION}
                            </select><br />
                            <input type='submit' value='Carregar' class='button' style="margin-top: 6px;"/><br />
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