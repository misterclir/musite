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
                <h1 class="topomenumeio">Desconectar Conta</h1><br>
                
                <?php if(isset($_GET['Write']) == true): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Desconectar Conta</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=game_disconnect&amp;Write=true#!" method="post">
                            <em>Senha Atual:</em><br /><input style="margin-top:4px;" name='password' type='password' class="inputbox" /><br />
                            <input type='submit' value='Desconectar' class='button' style="margin-top: 6px;"/>
                        </form>
                    </div>
                </div>

            </div>          
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}