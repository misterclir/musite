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
            
    <?php if(isset($_GET['Write']) == true): ?>{#RespostWrite}<?php endif; ?>
            <h3>Master Reset:</h3>
            <div class="form-horizontal mt-30 mb-40">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Vault2">Personagem:</label>
                    <div class="col-sm-10">
                        <div class="youplay-select">
                            <select name='personagem' class="inputbox" onchange="location='panel.php?panel=master_reset&amp;character='+this.options[this.selectedIndex].value">
                                <option value='' disabled="disabled" selected="selected">Selecione aqui</option>
                                {#CHARACTER_LIST_TAG_OPTION}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="quadrosOut">
                        {#RespostWrite}
                    </div>
                </div>
            </div>
        </div>
        </div></div></div>

        {#INCLUDE:menuPanelUser}

    </div>

</div>
    

{#INCLUDE:footer}
