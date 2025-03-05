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
                <h1 class="topomenumeio">Coletor de Pontos</h1><br>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Coletor de Pontos</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        O coletor de pontos é um serviço oferecido no site para trocar determinados itens do jogo por pontos no site.<br />
                        Esses pontos podem ser utilizados nos eventos do site, como bolões, leilões e entre outros.<br /><br />
                                            
                        <strong>O sistema atualmente, esta oferecendo <u>{#POINTS_PER_ITEM}</u> pontos por cada unidade que você dispor do item <u>{#ITEM_NAME}</u> (não importa suas condições como level e etc.).</strong><br /><br /> 
                                            
                        Caso você possua alguma unidade desse item no seu bau principal do jogo, clique no botão abaixo e converta os mesmos por pontos no site.<br /><br />
                        <form action="panel.php?panel=collector_points&action=collect#!" method="post">
                            <input type='submit' value='Coletar itens e converter em pontos' class='button' style="margin-top: 6px;"/>
                        </form>
                        <br />
                        {#RESPONSE_WRITE}
                    </div>
                </div>

            </div>          
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}