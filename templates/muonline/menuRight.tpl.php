            <!-- Begin Column Right | mtwmr = Mu Template Wrapper Main Right -->
            <div id="mtwmr" style="margin-left:9px;">
                
               
								
					
				 <!-- Begin Box Login -->	
                <div id="mtwmrloginh">
                    <h1 style="margin-top:4px;">Painel de Controle</h1>
                </div>
                <div id="mtwmrloginc">
                    
                    {#DIV[LOGIN_LOGOUT]}
					
                </div>
                <!-- End Box Login -->
		
		
		
				<script>
				if (!$('#mtwmcsliders').length) {
					$('#mtwmr').css('margin-top', '-3px');
				}
				</script>		
					
		
				
			<div id="mtwmreventh" style="margin-top: 12px;">
				<h1><span>Eventos Agendados</span></h1>
				<div style="clear: both"></div>
			</div>
			
			<div id="mtwmrseventAgc">
				<ul>

				
				
					<li class="l2 tooltip">
					<span class="tooltiptext">
						<strong class="nome_evento">Devil Square</strong>
						<div style="margin-bottom:5px;"></div>
						Todos os dias de 4 em 4 horas
					</span>Devil Square<span id="divDevilSquare">-</span>
					</li>
				
				
					<li class="l2 tooltip">
					<span class="tooltiptext">
						<strong class="nome_evento">Blood Castle</strong>
						<div style="margin-bottom:5px;"></div>
						Todos os dias de uma em uma hora,
						com inicio as 00:30h
					</span>Blood Castle<span id="divBloodCastle">-</span>
					</li>
					
					
				
					
					


				</ul>
				<div class="spacer"></div>
			</div>
			
				
				<!--Begin Eventos Agendados -->

								
								 
				                
                <!-- Begin Box Server Infos -->
                				
                <div id="mtwmrsinfoh" style="margin-top: 12px;">
                    <h1><span>Informações</span></h1>
                    <div style="clear: both"></div>
                </div>
                <div id="mtwmrsinfoc">
                    <ul>
                        <li class="l2">Versão <span>{#SERVER_VERSION}</span></li>
						<li class="l1">Dificuldade (xp) <span>{#SERVER_DIFICULT}</span></li>
                        <li class="l2">Experiencia <span>{#SERVER_XP}</span></li>
                        <li class="l1">Drops <span>{#SERVER_DROP}</span></li>
                        <li class="l2">Reset <span><a href="?page=infoserver">{#SERVER_RESETTYPE}</a></span></li>
                    </ul>
                    <div class="spacer"></div>
                </div>		


				
								
                <!-- End Box Server Infos -->
              	<?php
                	global $CASTLE_SIEGE;
                	if($CASTLE_SIEGE['ENABLE'] == TRUE)
                {
                ?>
              	<!-- Begin Box Castle Siege -->
                <div id="mtwmrsiegeh">
                    <h1><span style="margin-top:5px;">Melhor Guild</span></h1>
                    <div style="clear: both;"></div>
                </div>
                <div id="mtwmrsiegec">
                   <!--
                    <div id="s1" class="sword"></div>
                    <div id="s2" class="sword"></div>
                -->
                    <div id="mtwmrsiegecc">
                        <div id="ownner" class="properties">
                            <h1>Dona do Castelo</h1>
                            <span >{#CASTLE_SIEGE_OCCUPY_GUILD}</span>
                        </div>
                        <div id="gmaster" class="properties">
                            <h1>Guild Master</h1>
                            <span >{#CS_GUILD_OWNER}</span>
                        </div>
                        <div id="cwins" class="properties">
                            <h1>Score</h1>
                            <span>{#CS_GUILD_SCORE}</span>
                        </div>
                        <div id="nextWar">
                            <h1>Proxima disputa</h1> 
                            <div>
                                <h2>BREVE</h2>
                                <h3>Aguardem!</h3>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                <!-- End Box Castle Siege -->

                <?php } ?>
				
				<div id="selo_siteforte" style="margin-top:30px; text-align:center;">
				</div>

            </div>
            <!-- End Column Right -->