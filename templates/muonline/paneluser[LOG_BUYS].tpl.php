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
                <h1 class="topomenumeio">Log de Compras</h1><br>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Selecione o log desejado abaixo</span></h3>
                    <em>Gerar log de compras de:</em>
                            <a href="panel.php?panel=log_buys&amp;Write=1#!">
                                <input type="button" class="button" value="{#CASH_NAME}">
                            </a>
                            <a href="panel.php?panel=log_buys&amp;Write=2#!">
                                <input type="button" class="button" value="Vips">
                            </a>
                </div>
                
                <?php if(isset($_GET['Write']) == true): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

            </div>          
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}