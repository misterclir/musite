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
            
    <?php if(isset($_GET['action']) == true): ?><div class="alert alert-success">{#RespostWrite}</div><?php endif; ?>
<form action="panel.php?panel=transfer_cash&amp;action=transfer#!" method="post">
    <h3>Transferir {#CASH_NAME}/{#CASH_NAME2}</h3>
    <div class="form-horizontal mt-30 mb-40">
        <h4>Dados da minha conta</h4>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Pwd">Meu login:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type='text' class="inputbox" value="{#MEMB___ID}" disabled="disabled" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Pwd">Quantidade de {#CASH_NAME}:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type='text' class="inputbox" value="{#CASH_AMOUNT}" disabled="disabled" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Pwd">Quantidade de {#CASH_NAME2}:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type='text' class="inputbox" value="{#CASH_AMOUNT2}" disabled="disabled" />
                </div>
            </div>
        </div>
        <br><br>

        <h4>Dados para trasferencia</h4>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Pwd">Login:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input name='usernameDestine' type='text' maxlength='10' />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Pwd">Tipo de moeda a transferir:</label>
            <div class="col-sm-10">
                <div class="youplay-select">
                    <select name='typeCash'><option value='1'>{#CASH_NAME}</option><option value='2'>{#CASH_NAME2}</option></select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Pwd">Quantidade a transferir:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input name='amount' type='text' maxlength='10' />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Transferir</button>
            </div>
        </div>
    </div>
</form>       </div>
        </div></div></div>

        {#INCLUDE:menuPanelUser}

    </div>

</div>
    

{#INCLUDE:footer}
