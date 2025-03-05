{#INCLUDE:header}
<section class="content-wrap">


    <!-- Banner -->
<div class="youplay-banner banner-top youplay-banner-parallax small">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-bg.jpg')">
    </div>

    <div class="youplay-user-navigation">
        <div class="container" id="!">
            <ul>
                <li class=""><a href="panel.php?panel=home">Minha Conta</a>
                </li>
                </li>
                <li class=""><a href="panel.php?panel=buy_vips#!">Seja VIP</a>
                </li>
                <li class=""><a href="panel.php?panel=buy_coins#!">{#CASH_NAME}</a>
                </li>
                <li class="active"><a href="../forum/usercp.php?action=profile">Configurações</a>
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
<form action="panel.php?panel=settings&amp;Write=2#!" method="post">
    <h3>Mudar Senha:</h3>
    <div class="form-horizontal mt-30 mb-40">
                        <div class="form-group">
            <label class="control-label col-sm-2" for="userPwd">Senha Atual:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type="password" id="userPwd" name="userPwd" placeholder="Senha Atual">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="userPwdNew">Nova Senha:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type="password" id="userPwdNew" name="userPwdNew" placeholder="Nova Senha">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="userPwdNewRe">Repita a senha:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type="password" id="userPwdNewRe" name="userPwdNewRe" placeholder="Repita a Nova Senha">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Mudar Senha</button>
            </div>
        </div>
    </div>
</form>
<form action="panel.php?panel=settings&amp;Write=1#!" method="post">
    <h3>Dados:</h3>
    <div class="form-horizontal mt-30 mb-40">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type="text" disabled="disabled" id="email" name="email" value="{#MAIL_ADDR}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="userName">Nome:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type="text" name='userName' id='userName' value="{#MEMB_NAME}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for='userTel'>Telefone:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type="text" id='userTel' name='userTel' value="{#TEL__NUMB}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="cur_password">Senha Atual:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input type="password" id="cur_password" name="cur_password" placeholder="Senha Atual">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Alterar Dados</button>
            </div>
        </div>
    </div>
</form>        </div>
        </div></div></div>

		{#INCLUDE:leftPanel}

    </div>

</div>
    

{#INCLUDE:footer}