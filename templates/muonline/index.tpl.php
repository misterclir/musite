{#INCLUDE:header}
		{#INCLUDE:menuLeft}

            <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
            
            <div id="mtwmc" style="margin-left:-14px;">
                <!-- Begin Facebook -->
                <div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

                <div id="mtwmcfacebook">
				<div class="fb-page" data-href="https://www.facebook.com/vegasmubr/" data-tabs="timeline" data-width="460" data-height="310" data-small-header="false" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/vegasmubr/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/vegasmubr/">Vegasmu</a></blockquote></div>
                </div>
                <!-- Begin Facebook -->
				<br>
				
				<div id="boxNoticesMiddle">
					<div class="locationtitle">
						<h1>Noticias</h1><div id="MoreNotices"><a href="{#SITE_URL}forum" target="_blank"></a></div>
					</div>
											
						<ul style="margin-top:9px;">
						  {#LAST_NOTICES_HOME}
						</ul>
				</div>

				<div id="boxRHonraMiddle">
				
					
					<div id="PlayRHonra">
						<a href="https://www.youtube.com/embed/qW9-jiB4yBk?autoplay=1" class="fyoutube fancybox"></a>
					</div>
					
					   <?php 
                        global $ldmssql;

                        $findCharacterQ = $ldMssql->query("SELECT TOP 3 Name,".COLUMN_RESETS.", Class FROM Character ORDER BY ".COLUMN_RESETS." DESC");
                        for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                        $findCharacter = mssql_fetch_row($findCharacterQ);
                        $Name = $findCharacter[0];
                        $ResetCount = $findCharacter[1];
                        $Classe = $findCharacter[2];
                       ?>
											
						<div id="RHonraTop3">
						
						
							<div id="Avatar">
								<a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
							</div> 
							
							<div id="Nome">
								<span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span>
							</div>
							
							<div id="Exp">
								<span><?php echo $ResetCount; ?> RR</span>
							</div>
							
						</div>

                        <?php } ?>
					
				</div>
				<script type="text/javascript">
				
					$(document).ready(function () {
						
						$(".fyoutube").fancybox({
							type: "iframe",
							maxWidth: 800,
							maxHeight: 600,
							fitToView: false,
							width: '70%',
							height: '70%',
							autoSize: false,
							closeClick: false,
							openEffect: 'none',
							closeEffect: 'none'
						});
					})
					
				</script>
								
					<div id="mtwmcrankingP">
                    <div id="mtwmcrankingtitle"><span>Rankings</span></div>
					
					<div id="mtwmcrankingtitleP" style="display:none;"><a href="javascript: void(0);"></a></div>
					<div id="mtwmcrankingtitleG"><a href="javascript: void(0);"></a></div>
					<div id="mtwmcrankingtitlePH"><a href="javascript: void(0);"></a></div>
					
                    <div id="mtwmcrankingmenu">
                        <ul>
                            <li><a href="javascript: void(0);" class="diarioP"><span>Diario</span></a></li>
                            <li><a href="javascript: void(0);" class="semanalP"><span>Semanal</span></a></li>
							<li><a href="javascript: void(0);" class="mensalP"><span>Mensal</span></a></li>
                        </ul>
                        <div style="clear: both;"></div>
                    </div>
                    <div id="mtwmcrankingcP">
                        <div class="diarioP">
                            <ul>
                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_RESETS_DAY.", Class FROM Character ORDER BY ".COLUMN_RESETS_DAY." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
								<li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Resets</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Resets</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_BC_RANKINGDAY." FROM ".TABLE_BC_RANKING." ORDER BY ".COLUMN_BC_RANKINGDAY." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Blood Castle</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Pontos</h3>
                                </li>
                                <?php } ?>


								<?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_DS_RANKINGDAY." FROM ".TABLE_DS_RANKING." ORDER BY ".COLUMN_DS_RANKINGDAY." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Devil Square</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Pontos</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_PK_RANKING_DAY.", Class FROM Character ORDER BY ".COLUMN_PK_RANKING_DAY." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>TOP PK</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Kills</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_HERO_RANKING_DAY.", Class FROM Character ORDER BY ".COLUMN_HERO_RANKING_DAY." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>TOP HERO</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Kills</h3>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="semanalP hidden">
                            <ul>
                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_RESETS_WEEK.", Class FROM Character ORDER BY ".COLUMN_RESETS_WEEK." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Resets</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Resets</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_BC_RANKINGSEM." FROM ".TABLE_BC_RANKING." ORDER BY ".COLUMN_BC_RANKINGSEM." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Blood Castle</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Pontos</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_DS_RANKINGSEM." FROM ".TABLE_DS_RANKING." ORDER BY ".COLUMN_DS_RANKINGSEM." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Devil Square</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Pontos</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_PK_RANKING_WEEK.", Class FROM Character ORDER BY ".COLUMN_PK_RANKING_WEEK." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>TOP PK</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Kills</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_HERO_RANKING_WEEK.", Class FROM Character ORDER BY ".COLUMN_HERO_RANKING_WEEK." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>TOP HERO</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Kills</h3>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
						<div class="mensalP hidden">
                            <ul>
                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_RESETS_MONTH.", Class FROM Character ORDER BY ".COLUMN_RESETS_MONTH." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Resets</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Resets</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_BC_RANKINGMES." FROM ".TABLE_BC_RANKING." ORDER BY ".COLUMN_BC_RANKINGMES." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Blood Castle</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Pontos</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_DS_RANKINGMES." FROM ".TABLE_DS_RANKING." ORDER BY ".COLUMN_DS_RANKINGMES." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>Devil Square</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Pontos</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_PK_RANKING_MONTH.", Class FROM Character ORDER BY ".COLUMN_PK_RANKING_MONTH." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>TOP PK</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Kills</h3>
                                </li>
                                <?php } ?>


                                <?php 
                                    global $ldmssql;

                                    $findCharacterQ = $ldMssql->query("SELECT TOP 1 Name,".COLUMN_HERO_RANKING_MONTH.", Class FROM Character ORDER BY ".COLUMN_HERO_RANKING_MONTH." DESC");
                                    for($i=0;$i<mssql_num_rows($findCharacterQ);$i++) {
                                    $findCharacter = mssql_fetch_row($findCharacterQ);
                                    $Name = $findCharacter[0];
                                    $ResetCount = $findCharacter[1];
                                    $Classe = $findCharacter[2];
                                ?>
                                <li>
                                    <a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php include 'templates/{#TEMPLATE_DIR}/config/getImage.php'; ?></a>
                                    <h1>TOP HERO</h1>
                                    <h2>Personagem: <span><a href="index.php?page=rankings&type=6&name=<?php echo $Name;?>"><?php echo $Name;?></a></span></h2>
                                    <h3>( <?php echo $ResetCount; ?> ) Kills</h3>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <span id="rankingupdate" onclick="window.location='?page=premioranking';"><b>[VER PREMIAÇOES E BONUS]</b></span>
                    </div>
                </div>
				
				<div id="mtwmcrankingG" style="display:none;">
                    <div id="mtwmcrankingtitle"><span>Rankings</span></div>
					
					<div id="mtwmcrankingtitleP"><a href="javascript: void(0);"></a></div>
					<div id="mtwmcrankingtitleG"><a href="javascript: void(0);"></a></div>
					<div id="mtwmcrankingtitleGH" style="display:none;"><a href="javascript: void(0);"></a></div>
					
                    <div id="mtwmcrankingmenu">
                        <ul>
                            <li><a href="javascript: void(0);" class="guildscoresemanal"><span>Score</span></a></li>
							<li><a href="javascript: void(0);" class="guildscoremensal"><span>Membros</span></a></li>
                        </ul>
                        <div style="clear: both;"></div>
                    </div>
                    <div id="mtwmcrankingcG">
                        <div class="guildscoresemanal">
                            <ul>
                            <?php
                                global $ldmssql;
                                $GuildQ = $ldMssql->query("SELECT TOP 5 G_Name,G_Mark,G_Score FROM Guild ORDER BY G_Score DESC");
                                for($i=0;$i<mssql_num_rows($GuildQ);$i++) {
                                $Guild = mssql_fetch_row($GuildQ);
                                $G_Name = $Guild[0];
                                $G_Mark = urlencode(bin2hex($Guild[1]));
                                $G_Score = $Guild[2];
                                $posicao = $i+1;
                            ?>
                                <li>
                                    <img src="modules/classes/logoGuildDecode.php?decode=<?php echo $G_Mark;?>" />
                                    <h1><?php echo $posicao; ?>° Lugar</h1>
                                    <h2>Guild: <span><a href="index.php?page=rankings&type=7&name=<?php echo $G_Name;?>"><?php echo $G_Name;?></a></span></h2>
                                    <h3>( <?php echo $G_Score; ?> ) Scores</h3>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
						
						<div class="guildscoremensal hidden">
                            <ul>
                            <?php
                                $GuildQ=mssql_query("SELECT TOP 5 G_Name,G_Mark,G_Score FROM Guild ORDER BY G_Score DESC");
                                for($i=0;$i<mssql_num_rows($GuildQ);$i++) {
                                $Guild = mssql_fetch_row($GuildQ);
                                $G_Name = $Guild[0];
                                $G_Mark = urlencode(bin2hex($Guild[1]));
                                $G_Score = $Guild[2];
                                $posicao = $i+1;

                                $countMembers = mssql_query("SELECT count(1) as total FROM Guildmember WHERE G_Name='".$G_Name."'"); 
                                $countMembers = mssql_fetch_object($countMembers);

                                $Membros = (int)$countMembers->total;
                            ?>
                                <li>
                                    <img src="modules/classes/logoGuildDecode.php?decode=<?php echo $G_Mark; ?>" />
                                    <h1><?php echo $posicao;?>° Lugar</h1>
                                    <h2>Guild: <span><a href="index.php?page=rankings&type=7&name=<?php echo $G_Name;?>"><?php echo $G_Name;?></a></span></h2>
                                    <h3>( <?php echo $Membros ?> ) Membro(s)</h3>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                        <span id="rankingupdate" onclick="window.location='?page=premioranking';"><b>[VER PREMIAÇOES E BONUS]</b></span>
                    </div>
                </div>
				
				
				<script>
				$(document).ready(function() {
					$("[id=mtwmcrankingtitleP]").click(function() {
						$("[id=mtwmcrankingtitleP]").hide();
						$("[id=mtwmcrankingtitlePH]").show();
						$("[id=mtwmcrankingtitleG]").show();
						$("[id=mtwmcrankingG]").hide();
						$("[id=mtwmcrankingP]").show();	
						$(".diarioP").click();						
					});
					
					$("[id=mtwmcrankingtitleG]").click(function() {
						$("[id=mtwmcrankingtitleG]").hide();
						$("[id=mtwmcrankingtitleGH]").show();
						$("[id=mtwmcrankingtitleP]").show();
						$("[id=mtwmcrankingP]").hide();
						$("[id=mtwmcrankingG]").show();
						$(".guildscoresemanal").click();
					});
				});
				</script>
                <!-- End Facebook -->
				
				
            </div>
            <!-- End Content Main -->

            {#INCLUDE:menuRight}
{#INCLUDE:footer}