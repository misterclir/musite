<style type="text/css">
    /* Virtual vault */
.vaultBox {                
    width: 300px;
    height: 589px;
    background-image: url('templates/{#TEMPLATE_DIR}/assets/images/vault.png'); 
}

.vaultBox #vaultName {                
    position: relative;
    top: 15px;  
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 11px;
    text-align: center;
    color: #fff;
}

.vaultBox ul#itemsVaultGame, ul#itemsVaultVirtual {                   
    position: relative;
    top: 68px;
    left: 25px;               
    list-style: none;
    padding: 0;
    margin: 0;
    overflow: auto;                 
    width: 251px;
    height: 474px;    
}
.vaultBox ul#itemsVaultGame li, ul#itemsVaultVirtual li {                
    width: 96%;
    height: 17px;    
    margin: 0;
    padding-left: 8px;
    color: #fff;
    overflow: hidden;
    list-style: none; 
    background: none;
}
.vaultBox ul#itemsVaultGame li:hover, ul#itemsVaultVirtual li:hover {                
    width: 96%;
    height: 17px;    
    margin: 0;    
    padding-left: 8px;
    color: #000;
    background-color: #FFF;
    overflow: hidden; 
}
.vaultBox ul#itemsVaultGame li:hover, ul#itemsVaultVirtual li:hover {                
    cursor: pointer; 
}
</style>
{#INCLUDE:header}
<section class="content-wrap">


    <!-- Banner -->
<div class="youplay-banner banner-top youplay-banner-parallax small">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-bg.jpg')">
    </div>

    <div class="youplay-user-navigation">
        <div class="container" id="!">
            <ul>
                <li class="active"><a href="panel.php?panel=home">Minha Conta</a>
                </li>
                </li>
                <li class=""><a href="panel.php?panel=buy_vips#!">Seja VIP</a>
                </li>
                <li class=""><a href="panel.php?panel=buy_coins#!">{#CASH_NAME}</a>
                </li>
                <li class=""><a href="../forum/usercp.php?action=profile">Configurações</a>
                </li>
                <li class=""><a href="index.php">Voltar ao site</a>
                </li>
            </ul>
        </div>
    </div>
{#INCLUDE:panelSide}


<div class="container youplay-content">
    <div class="row">
        <div class="col-md-9">
                            
                    <h3>Bau Virtual:</h3>
                        
                    <div id="etc">
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
        </div></div></div>

        {#INCLUDE:menuPanelUser}

    </div>

</div>
    

{#INCLUDE:footer}