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
<style>
fieldset legend {
	color:#fff;
}
</style>
    <fieldset>
      <legend>Como funciona?</legend>
      <span align="justify">
		Nosso servidor é totalmente gratuito para jogar, porém, para manter a qualidade de nossos servidores e serviços, aceitamos doações de nossos jogadores.
		Como gratificação pela doação realizada, convertemos o valor doado em créditos na conta do jogador, esses créditos são utilizados para a compra de "Items" ou "Planos VIP" em nosso Shopping localizado no Menu Principal.
		Doações realizadas por deposito bancário, necessitam ser confirmadas para que sejam identificadas e assim os créditos serem entregues na devida conta.
	  </span>
    </fieldset>
	<br/>
	
	<fieldset>
      <legend>PagSeguro UOL</legend>
        <div class="alert col-md-4">
          <img src="templates/{#TEMPLATE_DIR}/assets/images/banco/ps.png">
        </div>
        <div class="alert col-md-6">
		  <p>Pagamentos: <span>Boleto, Crédito ou Débito.</span></p>
          <p>Parcelamento: <span>Em até 12x sem juros.</span></p>
          <p>Realizar doação: <span><a href="panel.php?panel=pagseguro#!">CLIQUE AQUI!</a></span></p>
		  <center><p><i>Obs: Não há necessidade de confirmar pagamento.</i></p></center>
        </div>
    </fieldset>
	
    <!--<fieldset>
      <legend>Banco do Brasil</legend>
        <div class="alert col-md-6">
          <img src="templates/{#TEMPLATE_DIR}/assets/images/banco/bb.png">
        </div>
        <div class="alert col-md-6">
		  <p>Formas: <span>Depósito ou Transferência.</span></p>
          <p>Conta Poupança: <span>xxxxx-x</span></p>
          <p>Agência: <span>xxxx-x</span></p>
          <p>Operação: <span>xxx</span></p>
          <p>Favorecido: <span>João da Silva</span></p>
        </div>
    </fieldset>-->
	
    <fieldset>
      <legend>Banco Caixa Economica</legend>
        <div class="alert col-md-6">
          <img src="templates/{#TEMPLATE_DIR}/assets/images/banco/cx.png">
        </div>
        <div class="alert col-md-6">
		  <p>Formas: <span>Depósito ou Transferência.</span></p>
          <p>Conta Poupança: <span>42946-5</span></p>
          <p>Agência: <span>2256</span></p>
          <p>Operação: <span>013</span></p>
          <p>Favorecido: <span>Felipe Bruno M Silva</span></p>
        </div>
    </fieldset>
		<fieldset>
      <legend>Prazos</legend>
      <span align="justify">
		Transações Bancárias: Após a aprovação do pagamento, realizado pelo Banco, convertemos o valor em créditos dentro de 24h úteis.<br/>
		PagSeguro UOL: Após a confirmação do pagamento, realizado pelo PagSeguro, os créditos são enviados imediatamente para a sua conta.<br/>
		Em Promoções: Após a aprovação do pagamento, realizado pelo Banco, convertemos o valor em créditos dentro de 48h úteis.<br/><br/>
	  </span>
    </fieldset>
		</div>
        </div></div></div>

		{#INCLUDE:leftPanel}

    </div>

</div>
    

{#INCLUDE:footer}