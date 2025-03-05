{#INCLUDE:header}
<script>
function enviaPagseguro(){
valor = $('#valor').val();
Login = $('#login').val();
	if(valor == '') {
		alert('Por Favor, preencha com um valor');
	}
	else {
 $.post('modules/classes/modules/pagseguro[save].module.php',{login: Login, form: '547'},function(idPedido){
	 
	 $('#loading').css("visibility","visible");
 
     $.post('modules/classes/modules/pagseguro[api].module.php',{idPedido: idPedido, login: Login, Valor: valor, form: '014'},function(data){

       $('#code').val(data);
       $('#comprar').submit();
	   
	   $('#loading').css("visibility","hidden");
     })
	}) }
 }

function NumberOnly(e)
    {
      var tecla = (window.event) ? event.keyCode : e.which;
        if (tecla > 47 && tecla < 58)
          {
            return true;
          } else if (tecla == 8 || tecla == 9 || tecla == 37 || tecla == 0 || tecla == 13)
            {
              return true;
            } else
            {
              return false;
            }
    }
</script>
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
                <li class="active"><a href="panel.php?panel=buy_coins#!">{#CASH_NAME}</a>
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
        <h2 class="mt-0">Pagamentos PagSeguro</h2>
            <p>O PagSeguro é um serviço através do qual você poderá comprar créditos com Boleto Bancário, Cartões de Crédito e outros meios. Sua compra é confirmada automaticamente e os créditos liberados de imediato após a confirmação.<br />
               Fazendo seu pagamento com o PagSeguro não é necessário enviar Confirmação de Depósito pelo Painel de Usuário.<br />
               Para fazer sua compra pelo PagSeguro, preencha o campo abaixo com o valor que deseja obter em créditos e confirme.<br />
			   <div class="alert sucess">Não é necessário nenhum tipo de confirmação, seus créditos irão entrar automaticamente assim que o pagamento for aprovado pelo próprio PagSeguro.</div></p>
					<form id="comprar" action="https://pagseguro.uol.com.br/v2/checkout/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
					<input type="hidden" name="code" id="code" value="" />
                    </form> 
			   <div class="row">
                        <div class="col-md-8 input-user">
                            <div class="youplay-input">
                    <input name="valor" id="valor" type="text" placeholder="Coloque aqui um valor em Reais (R$)" onkeypress="return NumberOnly(event)">
					<input type="hidden" name="login" id="login" value="<?=$_SESSION['LOGIN'];?>" />
                            </div>
					<div id="loading" style="visibility:hidden;"><h3>Aguarde Por Favor... <img src="images/load.gif"/></h3></div>
                        </div>
                        <div class="col-md-4">
                            <button type="button" onclick="enviaPagseguro()" class="btn btn-lg pull-right">Doar agora</button>
                        </div>
                </div>
            </form>
			<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
			</div></div>
        </div></div>

		{#INCLUDE:leftPanel}

    </div>

</div>
    

{#INCLUDE:footer}