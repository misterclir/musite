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
                <h1 class="topomenumeio">Limpar Bau</h1><br>
                
                <?php if(isset($_GET['Write']) == true): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Limpar Bau</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=clean_vault&amp;Write=1#!" method="post">
                            <em>Limpar bau 1:</em><br /><select name='Vault1' style="margin-top:4px;" class="inputbox"><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                            <em>Limpar bau 2:</em><br /><select name='Vault2' style="margin-top:4px;" class="inputbox"><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                            <em>Zen:</em><br /><select name='Zen' style="margin-top:4px;" class="inputbox"><option value='0'>Não</option><option value='1'>Sim</option></select><br />
                            <em>Senha Atual:</em><br /><input style="margin-top:4px;" name='Pwd' type='password' class="inputbox" /><br />
                            <input type='submit' value='Alterar' class='button' style="margin-top: 6px;"/>
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