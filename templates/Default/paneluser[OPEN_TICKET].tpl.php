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
                      <form action='panel.php?panel=open_ticket&amp;Write=true#!' method="post">
                        <table align='center' border='0' cellpadding='1' cellspacing='1' width='330'>
                          <tr><td colspan='2' align='center'><strong>Preencha todos os campos abaixo para abrir o pedido!</strong></td></tr>
                          <tr><td height=15>&nbsp;</td></tr>
                          <tr>
                            <td align='right' width=20%><strong>Personagem:</strong></td>
                            <td align='left'> <select name="character">{#CHARACTER_LIST_TAG_OPTION}</select></td>
                          </tr>
                          <tr>
                            <td align='right' width=20%><strong>Setor:</strong></td>
                            <td align='left'><input type="radio" name="sector" checked="checked" value="Suporte Tecnico" />Suporte Técnico<br /><input type="radio" name="sector" value="Suporte Financeiro" />Suporte Financeiro</td>
                          </tr>
        <div class="form-group">
            <label class="control-label col-sm-2" for="subject">Assunto:</label>
            <div class="col-sm-10">
                <div class="youplay-input">
                    <input name="subject" id="subject" type="text" maxlength="30" placeholder="Coloque aqui o Assunto">
                </div>
            </div>
        </div>
                          <tr>
                            <td align='right' width=20%><strong>Descrição:</strong></td>
                            <td align='left'><textarea name="description" rows="10">Descreva aqui o motivo para que nossa equipe possa analizar.</textarea></td>
                          </tr>
                          <tr>
                            <td align='center' colspan=2><font color="red">Não use os caracteres: " (aspas) ' (apostofro) ; (ponto e virgula)</font></td>
                          </tr>
                          <tr>
                            <td align='center' colspan=2><input type='Submit' class='button' value='Abrir Pedido' /></td>
                          </tr>
                        </table>
                       </form> 
        </div>
		 </div>
        </div></div>

		{#INCLUDE:leftPanel}

    </div>

</div>
    

{#INCLUDE:footer}