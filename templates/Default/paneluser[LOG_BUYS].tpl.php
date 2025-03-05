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
        <?php if(isset($_GET['Write']) == true): ?><div class="alert alert-success">{#RespostWrite}</div><?php endif; ?>
                      <h3>Selecione o log desejado abaixo:</h3>
                        <br>
                            <em>Gerar log de compras de:</em>
                            <a href="panel.php?panel=log_buys&amp;Write=1#!">
                                <button type="submit" class="btn btn-default">{#CASH_NAME}</button>
                            </a>
                            <a href="panel.php?panel=log_buys&amp;Write=2#!">
                                <button type="submit" class="btn btn-default">Vips</button>
                            </a>
                    </div>
        </div></div></div>

        {#INCLUDE:menuPanelUser}

    </div>

</div>
    

{#INCLUDE:footer}