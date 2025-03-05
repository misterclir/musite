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
            O coletor de pontos é um serviço oferecido no site para trocar determinados itens do jogo por pontos no site.<br />
            Esses pontos podem ser utilizados nos eventos do site, como bolões, leilões e entre outros.<br /><br />
                                
            <strong>O sistema atualmente, esta oferecendo <u>{#POINTS_PER_ITEM}</u> pontos por cada unidade que você dispor do item <u>{#ITEM_NAME}</u> (não importa suas condições como level e etc.).</strong><br /><br /> 
                                
            Caso você possua alguma unidade desse item no seu bau principal do jogo, clique no botão abaixo e converta os mesmos por pontos no site.<br /><br />
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