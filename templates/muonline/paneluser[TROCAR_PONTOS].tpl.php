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
                <h1 class="topomenumeio">TROCAR PONTOS</h1><br>

                <?php if(isset($_GET['action']) == true): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RESULTTPL}</div>
                <?php endif; ?>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Trocar Pontos de Indicação Por {#MOEDA_INDICACAO}</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=trocar_pontos&amp;action=true#!" method="post">
                            <em>Pontos:</em><br /><input type='text' class="inputbox" value="{#MEUS_PONTOS}" name="pontos" /><br />
                            <em>Quantidade de {#MOEDA_INDICACAO}:</em><br /><input style="margin-top:4px;" name='userTel' type='text' class="inputbox" value='{#MOEDA_INDICACAO_AMOUNT}' readonly='readonly' /><br />
                            <input type='submit' value='Trocar' class='button' style="margin-top: 6px;"/>
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