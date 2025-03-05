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
<form action="panel.php?panel=clean_vault&amp;Write=true#!" method="post">
    <h3>Limpar Bau:</h3>
        <div class="form-horizontal mt-30 mb-40">
                        <div class="form-group">
            <label class="control-label col-sm-2" for="Vault1">Limpar bau 1:</label>
            <div class="col-sm-10">
                <div class="youplay-select">
                    <select name='Vault1'><option value='0'>Não</option><option value='1'>Sim</option></select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Vault2">Limpar bau 2:</label>
            <div class="col-sm-10">
                <div class="youplay-select">
                    <select name='Vault2'><option value='0'>Não</option><option value='1'>Sim</option></select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Zen">Limpar Zen:</label>
            <div class="col-sm-10">
                <div class="youplay-select">
                    <select name='Zen'><option value='0'>Não</option><option value='1'>Sim</option></select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Pwd">Minha senha:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type="password" id="Pwd" name="Pwd">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Limpar</button>
            </div>
        </div>
    </div>
</form>       </div>
        </div></div></div>

        {#INCLUDE:menuPanelUser}

    </div>

</div>
    

{#INCLUDE:footer}