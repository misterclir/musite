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
                <li class=""><a href="../forum/usercp.php?action=profile">Configura��es</a>
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
            O coletor de pontos � um servi�o oferecido no site para trocar determinados itens do jogo por pontos no site.<br />
            Esses pontos podem ser utilizados nos eventos do site, como bol�es, leil�es e entre outros.<br /><br />
                                
            <strong>O sistema atualmente, esta oferecendo <u>{#POINTS_PER_ITEM}</u> pontos por cada unidade que voc� dispor do item <u>{#ITEM_NAME}</u> (n�o importa suas condi��es como level e etc.).</strong><br /><br /> 
                                
            Caso voc� possua alguma unidade desse item no seu bau principal do jogo, clique no bot�o abaixo e converta os mesmos por pontos no site.<br /><br />
            <form action="panel.php?panel=collector_points&action=collect#!" method="post">
                <div class="form-horizontal mt-30 mb-40">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Coletar itens e converter em pontos</button>
                        </div>
                    </div>
                </div>
            </form>
                                <br />
                                {#RESPONSE_WRITE}
                                
                             </div>
        </div></div></div>

        {#INCLUDE:menuPanelUser}

    </div>

</div>
    

{#INCLUDE:footer}