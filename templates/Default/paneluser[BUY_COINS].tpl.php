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
<style>
fieldset legend {
	color:#fff;
}
</style>
    <fieldset>
      <legend>Como funciona?</legend>
      <span align="justify">
		Nosso servidor � totalmente gratuito para jogar, por�m, para manter a qualidade de nossos servidores e servi�os, aceitamos doa��es de nossos jogadores.
		Como gratifica��o pela doa��o realizada, convertemos o valor doado em cr�ditos na conta do jogador, esses cr�ditos s�o utilizados para a compra de "Items" ou "Planos VIP" em nosso Shopping localizado no Menu Principal.
		Doa��es realizadas por deposito banc�rio, necessitam ser confirmadas para que sejam identificadas e assim os cr�ditos serem entregues na devida conta.
	  </span>
    </fieldset>
	<br/>
	
	<fieldset>
      <legend>PagSeguro UOL</legend>
        <div class="alert col-md-4">
          <img src="templates/{#TEMPLATE_DIR}/assets/images/banco/ps.png">
        </div>
        <div class="alert col-md-6">
		  <p>Pagamentos: <span>Boleto, Cr�dito ou D�bito.</span></p>
          <p>Parcelamento: <span>Em at� 12x sem juros.</span></p>
          <p>Realizar doa��o: <span><a href="panel.php?panel=pagseguro#!">CLIQUE AQUI!</a></span></p>
		  <center><p><i>Obs: N�o h� necessidade de confirmar pagamento.</i></p></center>
        </div>
    </fieldset>
	
    <!--<fieldset>
      <legend>Banco do Brasil</legend>
        <div class="alert col-md-6">
          <img src="templates/{#TEMPLATE_DIR}/assets/images/banco/bb.png">
        </div>
        <div class="alert col-md-6">
		  <p>Formas: <span>Dep�sito ou Transfer�ncia.</span></p>
          <p>Conta Poupan�a: <span>xxxxx-x</span></p>
          <p>Ag�ncia: <span>xxxx-x</span></p>
          <p>Opera��o: <span>xxx</span></p>
          <p>Favorecido: <span>Jo�o da Silva</span></p>
        </div>
    </fieldset>-->
	
    <fieldset>
      <legend>Banco Caixa Economica</legend>
        <div class="alert col-md-6">
          <img src="templates/{#TEMPLATE_DIR}/assets/images/banco/cx.png">
        </div>
        <div class="alert col-md-6">
		  <p>Formas: <span>Dep�sito ou Transfer�ncia.</span></p>
          <p>Conta Poupan�a: <span>42946-5</span></p>
          <p>Ag�ncia: <span>2256</span></p>
          <p>Opera��o: <span>013</span></p>
          <p>Favorecido: <span>Felipe Bruno M Silva</span></p>
        </div>
    </fieldset>
		<fieldset>
      <legend>Prazos</legend>
      <span align="justify">
		Transa��es Banc�rias: Ap�s a aprova��o do pagamento, realizado pelo Banco, convertemos o valor em cr�ditos dentro de 24h �teis.<br/>
		PagSeguro UOL: Ap�s a confirma��o do pagamento, realizado pelo PagSeguro, os cr�ditos s�o enviados imediatamente para a sua conta.<br/>
		Em Promo��es: Ap�s a aprova��o do pagamento, realizado pelo Banco, convertemos o valor em cr�ditos dentro de 48h �teis.<br/><br/>
	  </span>
    </fieldset>
		</div>
        </div></div></div>

		{#INCLUDE:leftPanel}

    </div>

</div>
    

{#INCLUDE:footer}