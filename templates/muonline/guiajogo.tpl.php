{#INCLUDE:header}
	{#INCLUDE:menuLeft}

    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci">
      <div class="locationtitle tutoriais">
        <h1>Guia do Jogo</h1>
      </div>
      <div class="sub_wrap">
        <div id="etc">
		
		<style>
		.divtuto {
			height:60px;
			overflow:hidden;
			margin-bottom:5px;
			cursor:pointer;
		}
		.imgtuto {
			/*width:480px;*/
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
		
		if($(this).css('height') != '60px') {
			
			$('div[id="tuto"]').animate({'height': '60px'}, 250 );
			
		} else {
		
		$('div[id="tuto"]').animate({'height': '60px'}, 250 );
		
		$(this).animate({'height': $(this).attr('name')}, 500 );
		
		} 
		
	});

});
</script>
<div style="text-align:right;">
	<strong>BUSCAR: </strong><input type="text" id="searchtuto"/>
</div>
<!--INICIO-->	

	
	<div id="tuto" name="1251px" class="divtuto"><div id="tags" style="display:none;">upando evoluindo itens chaos machine +0 +6 +9</div>
		<img class="imgtuto" src="https://i.imgur.com/2hUkmkM.jpg"/>
	</div>

	<div id="tuto" name="1317px" class="divtuto"><div id="tags" style="display:none;">upando evoluindo itens chaos machine +10 +11 +12 +13</div>
		<img class="imgtuto" src="https://i.imgur.com/CDhJCOe.jpg"/>
	</div>
	
	

<!---FIM-->	

      </div>
      </div>
      <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}