{#INCLUDE:header}
	{#INCLUDE:menuLeft}

    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci"> 
        <div class="locationtitle ranking">
            <h1>Ranking</h1>
        </div>

        <div class="sub_wrap">
            <div id="etc">
			
				<!--<div id="qform">	
					<form action="" method="get">
                            <table border='0' width='100%'>
                              <tr>
                                <td align='center'><strong>Tipo: </strong>
                                <select name="type" id="type">                   
                                    <option value="6">Personagem</option>
                                    <option value="7">Guild</option> 
                                </select>
                                </td>
                                <td align='center'><strong>Nome:</strong>
                                <input type="text" name="name" value="" />
                                </td>
                                <td align='center'>
                                    <input type="hidden" name="page" value="rankings" />   
                                    <input type="submit" value="Buscar" class="button" />
                                </td>
                              </tr>
                            </table>
                        </form>
				</div>

				<div id="menu_ranking">
					<script type='text/javascript'>   
                                        function checkType()
                                        {    
                                            var period = document.getElementById('period').value; 
                                            if(period > 0) document.getElementById('type').value = 1;
                                        }
                                        function checkPeriod()
                                        {   
                                            var type = document.getElementById('type').value; 
                                            if(type > 1) document.getElementById('period').value = 0;  
                                        }
                                      </script>
                                      <form action="" method="get">
                                      <input type="hidden" name="page" value="rankings" />
                                        Per�odo: 
                                        <select name="period" id="period" onchange="checkType();">                   
                                            <option value="0">Tempo real</option>
                                            <option value="1">Semanal</option>
                                            <option value="2">Mensal</option>
                                        </select>
                                        Tipo: 
                                        <select name="type" id="type" onchange="checkPeriod();">                   
                                            <option value="1">Resets</option>
                                            <option value="5">Master Resets</option>
                                            <option value="2">Level</option>       
                                            <option value="4">Pk (Mortes)</option>
                                            <option value="3">Guilds</option>
                                            <?php //global $RANKING_CONFIGS; echo ($RANKING_CONFIGS['GENS'] == true ? "<option value=\"8\">Gens - Familia Duprian</option><option value=\"9\">Gens - Familia Vanert</option>":NULL); ?>
                                            <option value="10">Honra</option>
                                        </select>
                                        Quantidade: 
                                        <select name="top">                   
                                            <option value="10">10</option>    
                                            <option value="50">50</option>    
                                            <option value="100">100</option>    
                                            <option value="200">200</option>  
                                        </select>
                                        <input type="submit" value="Carregar" class="button" />
                                      </form>
				<div style="clear: both;"></div>
				</div>-->
			
				<div id="menu_ranking">
					<ul>
						<li><a class="typeranking" ranking="10" href="?page=rankings&period=0&type=12&top=200">Patente</a></li>
						<li><a class="typeranking" ranking="personagem" href="javascript:void(0)">Personagem</a></li>
						<!--<li><a class="typeranking" ranking="evento" href="javascript:void(0)">Evento</a></li>-->
						<li><a class="typeranking" ranking="guild" href="javascript:void(0)">Guild</a></li>
					</ul>
				<div style="clear: both;"></div>
				</div>
				
				
				<div class="ranking_tipo div_ranking" id="personagem" style="display:none;">
					<ul>
						<bdo>
							<li><a href="javascript:void(0)" class="rranking" tipo="personagem2" ranking="resets">Reset</a></li>
							<li><a href="javascript:void(0)" class="rranking" tipo="personagem1" ranking="resets">Master Level</a></li>
							<li><a href="javascript:void(0)" class="rranking" tipo="personagem3" ranking="pks">PK</a></li>
							<li><a href="javascript:void(0)" class="rranking" tipo="personagem4" ranking="heros">Hero</a></li>
							<li><a href="javascript:void(0)" class="rranking" tipo="personagem5" ranking="horas">Hora</a></li>
						</bdo>
					</ul>
				<div style="clear: both;"></div>
				</div>
			
				

				
				<div class="ranking_tipo div_ranking" id="guild" style="display:none;">
					<ul>
						<bdo>
							<li><a href="?page=rankings&type=3&top=200" class="rranking" tipo="guild" ranking="guilds">Score</a></li>
							<!--<li><a href="javascript:void(0)" class="rranking" tipo="guild" ranking="guildsup">Up</a></li>-->
						</bdo>
					</ul>
				<div style="clear: both;"></div>
				</div>
				
				<div class="ranking_top div_ranking" id="periodo2" style="display:none;"><!--Resets-->
					<ul>
						<bdo>
							<li><a href="?page=rankings&period=3&type=1&top=200" class="rtop" periodo="dia">Diario</a></li>
							<li><a href="?page=rankings&period=1&type=1&top=200" class="rtop" periodo="semanal">Semanal</a></li>
							<li><a href="?page=rankings&period=2&type=1&top=200" class="rtop" periodo="mes">Mensal</a></li>
							<li><a href="?page=rankings&period=0&type=1&top=200" class="rtop" periodo="total">Total</a></li>
						</bdo>
					</ul>
				<div style="clear: both;"></div>
				</div>

				<div class="ranking_top div_ranking" id="periodo1" style="display:none;"><!--ML-->
					<ul>
						<bdo>
							<li><a href="?page=rankings&period=0&type=13&top=200" class="rtop" periodo="total">Total</a></li>
						</bdo>
					</ul>
				<div style="clear: both;"></div>
				</div>
				
				<div class="ranking_top div_ranking" id="periodo3" style="display:none;"><!--PK-->
					<ul>
						<bdo>
							<li><a href="?page=rankings&period=0&type=4&top=200" class="rtop" periodo="total">Total</a></li>
						</bdo>
					</ul>
				<div style="clear: both;"></div>
				</div>
				
				
				<div class="ranking_top div_ranking" id="periodo4" style="display:none;"><!--Hero-->
					<ul>
						<bdo>
							<li><a href="?page=rankings&period=0&type=10&top=200" class="rtop" periodo="total">Total</a></li>
						</bdo>
					</ul>
				<div style="clear: both;"></div>
				</div>
				
				
				<div class="ranking_top div_ranking" id="periodo5" style="display:none;"><!--Hora-->
					<ul>
						<bdo>
							<li><a href="?page=rankings&period=3&type=11&top=200" class="rtop" periodo="dia">Diario</a></li>
							<li><a href="?page=rankings&period=1&type=11&top=200" class="rtop" periodo="semanal">Semanal</a></li>
							<li><a href="?page=rankings&period=2&type=11&top=200" class="rtop" periodo="mes">Mensal</a></li>
							<li><a href="?page=rankings&period=0&type=11&top=200" class="rtop" periodo="total">Total</a></li>
						</bdo>
					</ul>
				<div style="clear: both;"></div>
				</div>
				
				 
				<input id="tipo0" type="hidden">
				<input id="tipo1" type="hidden">
				<input id="tipo2" type="hidden">
				
				<!--<div id="resultRanking" style="display: block;">{#ResultRankings}</div>-->

				<div id="etc">{#ResultRankings}</div>

				
				
				<script>
				
				function execRanking() {
					
					var ranking = $("#tipo1").val()+$("#tipo2").val();

					$.ajax({     
						type: 'GET',
						url: 'index.php',
						data: { page: 'ranking', send: 'y', type: '1', top: '50', class: 'todas', tipo: ranking},
						cache: false,			
						success: function(data) { 
						
						
							$("#resultRanking").show();
							$("#resultRanking").html(data);

							
						} 
					});
					
				}
				
				$(".typeranking").click(function() {

					$(".rtop").removeClass('clicked_btn');
					$(".rranking").removeClass('clicked_btn');
					$(".typeranking").removeClass('clicked_btn');
					$(this).addClass('clicked_btn');
					
					$("#resultRanking").hide();
					$(".div_ranking").hide();
					$("#tipo1").val('');
					$("#tipo2").val('');
					
					var typeranking = $(this).attr('ranking');
					
					$("#tipo0").val(typeranking);

					$("#" + typeranking).show();
					
					if(typeranking == 'honra') {
						
						$("#tipo1").val('honra');
						
						execRanking();
						
					}
					
					if(typeranking == 'indicacao') {
						
						$("#tipo1").val('indicacao');
						$("a[periodo=dia]").hide();
						$("a[periodo=semanal]").hide();
						$("#periodo").show();
						
					}
					
					
				});
				
				//-------------------------------------------
				
				$(".rranking").click(function() {
					
					$(".rtop").removeClass('clicked_btn');
					$(".rranking").removeClass('clicked_btn');
					$(this).addClass('clicked_btn');
					
					$("#resultRanking").hide();
					$("#periodo").hide();
					$("#tipo2").val('');
					
					var ranking = $(this).attr('ranking');
					var tipo 	= $(this).attr('tipo');
					
					$("#tipo1").val(ranking);
					
					
					if(tipo == 'personagem1') {
						
						$(".rtop").show();
						$("#periodo1").show();
						$("#periodo2").hide();
						$("#periodo3").hide();
						$("#periodo4").hide();
						$("#periodo5").hide();
						
						
					}
					else if(tipo == 'personagem2') {
						
						$(".rtop").show();
						$("#periodo2").show();
						$("#periodo1").hide();
						$("#periodo3").hide();
						$("#periodo4").hide();
						$("#periodo5").hide();
						
						
					}
					else if(tipo == 'personagem6') {
						
						$(".rtop").show();
						$("#periodo6").hide();
						
						
					}
					else if(tipo == 'personagem3') {
						
						$(".rtop").show();
						$("#periodo3").show();
						$("#periodo1").hide();
						$("#periodo2").hide();
						$("#periodo4").hide();
						$("#periodo5").hide();
						
						
					}
					else if(tipo == 'personagem4') {
						
						$(".rtop").show();
						$("#periodo4").show();
						$("#periodo1").hide();
						$("#periodo2").hide();
						$("#periodo3").hide();
						$("#periodo5").hide();
						
						
					}
					else if(tipo == 'personagem5') {
						
						$(".rtop").show();
						$("#periodo5").show();
						$("#periodo1").hide();
						$("#periodo2").hide();
						$("#periodo4").hide();
						$("#periodo4").hide();
						
						
					}  else if(tipo == 'evento') {
						
						$("#periodo").hide();
						
						execRanking();
						
		
					} else if(tipo == 'guild') {
						
						$("a[periodo=dia]").hide();
						$("#periodo").show();

					}
					
				});
				
				//-------------------------------------------
				
				
				$(".rtop").click(function() {
					
					$(".rtop").removeClass('clicked_btn');
					$(this).addClass('clicked_btn');
					
					$("#resultRanking").hide();
					
					var periodo = $(this).attr('periodo');
					
					$("#tipo2").val(periodo);
					
					execRanking();
					
				});
				

				</script>

                <!-- FIM PAGINA-->
            </div>
        </div>
    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}