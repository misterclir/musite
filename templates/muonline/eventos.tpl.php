{#INCLUDE:header}
	{#INCLUDE:menuLeft}

    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci">
      <div class="locationtitle eventos">
        <h1>Eventos</h1>
      </div>
      <div class="sub_wrap">
        <div id="etc">
		
		<style>
		.divtuto {
			height:122px;
			overflow:hidden;
			margin-bottom:5px;
			cursor:pointer;
		}
		.imgtuto {
			/*width:480px;*/
		}
		
		.text-box {
			margin: 0 0 10px 0; 
			padding: 5px; 
			background-color: #120D0C;
			line-height: 190%
		}	
		
		.text-box p {
			margin-left: 3px;
		}
		
		.text-box h3 {
			color:#8A6047;
		}
			
		</style>

	<script type="text/javascript">
		$(document).ready(function () {

		$("#searchtuto").keyup(function(){		
			  stringPesquisa = $("#searchtuto").val().toLowerCase();
			  
			  if(stringPesquisa != '') {
				  $('div[id=tuto]').hide();
				  $('div[id=tuto]:contains('+stringPesquisa+')').show();

			  } else {
				 $('div[id=tuto]').show();
			  }
			  
			});
		
		$('div[id="tuto"]').click(function () {
			
			if($(this).css('height') != '122px') {
				
				$('div[id="tuto"]').animate({'height': '122px'}, 250 );
				
			} else {
			
			$('div[id="tuto"]').animate({'height': '122px'}, 250 );
			
			$(this).animate({'height': $(this).attr('name')}, 500 );
			
			} 
			
		});

	});
</script>
<!--
<div style="text-align:right;">
	<strong>BUSCAR: </strong><input type="text" id="searchtuto"/>
</div>-->
<!--INICIO-->	

	
	<div id="tuto" name="520px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/WvuZITj.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem � o lutador mais forte dentre os participantes.</p>
				<p>- Ser�o selecionados 02 jogadores para lutar, aquele que ganhar, passa para a pr�xima fase.</p>
				<p>- Se nenhum dos oponentes matar em 1 minuto, ambos ser�o eliminados.</p>
				<p>- Quem relogar ser� eliminado, at� mesmo na sala de espera.</p>
				<p>- Durante as fases eliminat�rias vence a luta quem matar o oponente 3 vezes primeiro.</p>
				<p>- Durante as semi-finais e a final, vence quem matar 5 vezes primeiro.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento voc� deve estar online no servidor <strong>Trade + Ba�.</strong></p>
				<p>- Basta digitar <strong>/matamata</strong> quando o comando estiver ativo, que voc� ser� movido para a sala de espera.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIA��O</strong></h3>
				<p>- <strong>1� Lugar:</strong> 100 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>
	
	<div id="tuto" name="750px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/znQHnPK.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem � o lutador mais forte dentre os participantes.</p>
				<p>- Ser�o permitidos apenas <strong>itens cl�ssicos.</strong></p>
				<p>- Ser�o selecionados 02 jogadores para lutar, aquele que ganhar, passa para a pr�xima fase.</p>
				<p>- Se nenhum dos oponentes matar em 1 minuto, ambos ser�o eliminados.</p>
				<p>- Quem relogar ser� eliminado, at� mesmo na sala de espera.</p>
				<p>- Quem tentar equipar algum item que n�o seja cl�ssico ser� automaticamente eliminado, at� mesmo na sala de espera.</p>
				<p>- Durante as fases eliminat�rias vence a luta quem matar o oponente 3 vezes primeiro.</p>
				<p>- Durante as semi-finais e a final, vence quem matar 5 vezes primeiro.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>O QUE S�O ITENS CL�SSICOS?</strong></h3>
				<p>- S�o todos os itens originais dessa vers�o, ou seja:</strong></p>
				<p>- Sets at� o Flaming Phoenix</p>
				<p>- Swords at� Phantom Mace</p>
				<p>- Shields at� Chaos Shield</p>
				<p>- Asas at� Wings of Dragon (Lvl 2)</p>
			</div>
			
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento voc� deve estar online no servidor <strong>Trade + Ba�.</strong></p>
				<p>- Basta digitar <strong>/matamata</strong> quando o comando estiver ativo, que voc� ser� movido para a sala de espera.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIA��O</strong></h3>
				<p>- <strong>1� Lugar:</strong> 100 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>
	
	

	<div id="tuto" name="500px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/EToTbcv.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem � o mais �gil entre os participantes.</p>
				<p>- Cada jogador dever� ficar apenas com botas, aneis e pendants.</p>
				<p>- Ap�s a contagem, os membros da equipe come�ar�o a ir atr�s dos participantes, aquele que for pego, ser� eliminado do evento.</p>
				<p>- Durante o evento aquele que tentar usar algum item al�m dos permitidos ou relogar, ser� automaticamente eliminado.</p>
				<p>- Vence o �ltimo que for pego.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento voc� deve estar online no servidor <strong>Trade + Ba�.</strong></p>
				<p>- Basta digitar <strong>/pegapega</strong> quando o comando estiver ativo, que voc� ser� movido para o mapa do evento.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIA��O</strong></h3>
				<p>- <strong>1� Lugar:</strong> 100 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>
	
	<div id="tuto" name="500px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/J0nEla0.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem � o lutador mais forte e resistente entre os participantes.</p>
				<p>- Ser�o escolhidos dois jogadores para dar in�cio ao evento.</p>
				<p>- Durante a luta, vence quem matar o oponente 3 vezes primeiro.</p>
				<p>- Aquele que vencer, continua no evento e recebe o pr�ximo advers�rio.</p>
				<p>- O perdedor, � eliminado do evento.</p>
				<p>- Vence o jogador que se manteve no evento at� o final.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento voc� deve estar online no servidor <strong>Trade + Ba�.</strong></p>
				<p>- Basta digitar <strong>/queroir</strong> quando o comando estiver ativo, que voc� ser� movido para a arena do evento.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIA��O</strong></h3>
				<p>- <strong>1� Lugar:</strong> 100 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>

	<div id="tuto" name="500px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/tYMIuc8.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem � o mais esperto entre os participantes.</p>
				<p>- Os jogadores s�o reunidos em uma sala, onde dever�o responder as perguntas feitas pela equipe.</p>
				<p>- Quem acertar uma pergunta ter� o direito de eliminar 02 participantes.</p>
				<p>- Vence o jogador que n�o foi eliminado.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento voc� deve estar online no servidor <strong>Trade + Ba�.</strong></p>
				<p>- Basta digitar <strong>/queroir</strong> quando o comando estiver ativo, que voc� ser� movido para a arena do evento.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIA��O</strong></h3>
				<p>- <strong>1� Lugar:</strong> 80 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>
	
	
	
<!---FIM -->	

      </div>
      </div>
      <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}