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
                <h1 class="topomenumeio">Bau Virtual</h1><br>
                
                <?php if(isset($_GET['Write']) == true): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Bau Virtual</span></h3>
                    <table>
                        <tr>
                            <td style="margin: 0px; padding: 0px; background-color: transparent;">
                            <div class="vaultBox">
                                <div id="vaultName">Ba&uacute; atual no jogo</div>
                                <ul id="itemsVaultGame">
                                    {#liItemsVaultGame}
                                </ul>
                            </div>
                            </td>                                                     
                            <td style="margin: 0px; padding: 0px; width: 100%; background-color: transparent;"></td>
                            <td style="margin: 0px; padding: 0px; background-color: transparent;">
                            <div class="vaultBox">
                                <div id="vaultName">Ba&uacute; virtual</div>
                                <ul id="itemsVaultVirtual">
                                    {#liItemsVaultVirtual}
                                </ul>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="background-color: transparent;">
                                <div id="detailsVault"></div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>          
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}