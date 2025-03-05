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
<h3 class="mt-40 mb-20">Informações</h3>
<table class="table table-bordered">
    <tbody>
    <tr>
        <td style="width: 200px;">
            <p>Nick</p>
        </td>
        <td>
            <p class="uppercase">{#MEMB_NAME}</p>
        </td>
    </tr>
    <tr>
        <td style="width: 200px;">
            <p>Login</p>
        </td>
        <td>
            <p>{#MEMB_LOGIN}</p>
        </td>
    </tr>
    <tr>
        <td style="width: 200px;">
            <p>Tipo</p>
        </td>
        <td>
            <p>{#ACCOUNT_PLAN_DATAILS}</p>
        </td>
    </tr>
    <tr>
        <td style="width: 200px;">
            <p>Ultima Conexão</p>
        </td>
        <td>
            <p>{#LAST_CONNECTION_DETAILS}</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>Ultima conexão pelo IP</p>
        </td>
        <td>
            <p>{#LAST_CONNECTION_DETAILS_IP}</a></p>
        </td>
    </tr>

    </tbody>
</table>

<h3 class="mt-40 mb-20">Personagens</h3>



    <h5 class="ml-10">Utilize o game para criar novos personagens</h5>
<table class="table table-bordered">
    <tbody>
                        <tr>
                            <td><strong><em>Personagem</em></strong></td>
                            <td><strong><em>Classe</em></strong></td>
                            <td><strong><em>Resets</em></strong></td>
                            <td><strong><em>PK</em></strong></td>
                        </tr>
                        {#CHARACTER_DETAILS}
    </tbody>
</table>
        </div>

        {#INCLUDE:menuPanelUser}

    </div>

</div>
    

{#INCLUDE:footer}