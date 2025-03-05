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
				<p>- Este evento consiste em saber quem é o lutador mais forte dentre os participantes.</p>
				<p>- Serão selecionados 02 jogadores para lutar, aquele que ganhar, passa para a próxima fase.</p>
				<p>- Se nenhum dos oponentes matar em 1 minuto, ambos serão eliminados.</p>
				<p>- Quem relogar será eliminado, até mesmo na sala de espera.</p>
				<p>- Durante as fases eliminatórias vence a luta quem matar o oponente 3 vezes primeiro.</p>
				<p>- Durante as semi-finais e a final, vence quem matar 5 vezes primeiro.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento você deve estar online no servidor <strong>Trade + Baú.</strong></p>
				<p>- Basta digitar <strong>/matamata</strong> quando o comando estiver ativo, que você será movido para a sala de espera.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIAÇÃO</strong></h3>
				<p>- <strong>1º Lugar:</strong> 100 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>
	
	<div id="tuto" name="750px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/znQHnPK.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem é o lutador mais forte dentre os participantes.</p>
				<p>- Serão permitidos apenas <strong>itens clássicos.</strong></p>
				<p>- Serão selecionados 02 jogadores para lutar, aquele que ganhar, passa para a próxima fase.</p>
				<p>- Se nenhum dos oponentes matar em 1 minuto, ambos serão eliminados.</p>
				<p>- Quem relogar será eliminado, até mesmo na sala de espera.</p>
				<p>- Quem tentar equipar algum item que não seja clássico será automaticamente eliminado, até mesmo na sala de espera.</p>
				<p>- Durante as fases eliminatórias vence a luta quem matar o oponente 3 vezes primeiro.</p>
				<p>- Durante as semi-finais e a final, vence quem matar 5 vezes primeiro.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>O QUE SÃO ITENS CLÁSSICOS?</strong></h3>
				<p>- São todos os itens originais dessa versão, ou seja:</strong></p>
				<p>- Sets até o Flaming Phoenix</p>
				<p>- Swords até Phantom Mace</p>
				<p>- Shields até Chaos Shield</p>
				<p>- Asas até Wings of Dragon (Lvl 2)</p>
			</div>
			
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento você deve estar online no servidor <strong>Trade + Baú.</strong></p>
				<p>- Basta digitar <strong>/matamata</strong> quando o comando estiver ativo, que você será movido para a sala de espera.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIAÇÃO</strong></h3>
				<p>- <strong>1º Lugar:</strong> 100 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>
	
	

	<div id="tuto" name="500px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/EToTbcv.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem é o mais ágil entre os participantes.</p>
				<p>- Cada jogador deverá ficar apenas com botas, aneis e pendants.</p>
				<p>- Após a contagem, os membros da equipe começarão a ir atrás dos participantes, aquele que for pego, será eliminado do evento.</p>
				<p>- Durante o evento aquele que tentar usar algum item além dos permitidos ou relogar, será automaticamente eliminado.</p>
				<p>- Vence o último que for pego.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento você deve estar online no servidor <strong>Trade + Baú.</strong></p>
				<p>- Basta digitar <strong>/pegapega</strong> quando o comando estiver ativo, que você será movido para o mapa do evento.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIAÇÃO</strong></h3>
				<p>- <strong>1º Lugar:</strong> 100 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>
	
	<div id="tuto" name="500px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/J0nEla0.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem é o lutador mais forte e resistente entre os participantes.</p>
				<p>- Serão escolhidos dois jogadores para dar início ao evento.</p>
				<p>- Durante a luta, vence quem matar o oponente 3 vezes primeiro.</p>
				<p>- Aquele que vencer, continua no evento e recebe o próximo adversário.</p>
				<p>- O perdedor, é eliminado do evento.</p>
				<p>- Vence o jogador que se manteve no evento até o final.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento você deve estar online no servidor <strong>Trade + Baú.</strong></p>
				<p>- Basta digitar <strong>/queroir</strong> quando o comando estiver ativo, que você será movido para a arena do evento.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIAÇÃO</strong></h3>
				<p>- <strong>1º Lugar:</strong> 100 Seeds + 1 ponto no ranking.</p>
			</div>
		</div>	
	</div>

	<div id="tuto" name="500px" class="divtuto">
		<img class="eventcover" src="https://i.imgur.com/tYMIuc8.jpg"/>
		<div style="margin: 10px 3px 8px 3px;">
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO FUNCIONA?</strong></h3>
				<p>- Este evento consiste em saber quem é o mais esperto entre os participantes.</p>
				<p>- Os jogadores são reunidos em uma sala, onde deverão responder as perguntas feitas pela equipe.</p>
				<p>- Quem acertar uma pergunta terá o direito de eliminar 02 participantes.</p>
				<p>- Vence o jogador que não foi eliminado.</p>
			</div>
			
			<div class="text-box">
				<h3> .&nbsp;<strong>COMO PARTICIPAR?</strong></h3>
				<p>- Para participar do evento você deve estar online no servidor <strong>Trade + Baú.</strong></p>
				<p>- Basta digitar <strong>/queroir</strong> quando o comando estiver ativo, que você será movido para a arena do evento.</p>
			</div>
			<div class="text-box">
				<h3> .&nbsp;<strong>PREMIAÇÃO</strong></h3>
				<p>- <strong>1º Lugar:</strong> 80 Seeds + 1 ponto no ranking.</p>
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