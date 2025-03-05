            
            <!-- Begin Column Left | mtwml = Mu Template Wrapper Main Left -->
            <div id="mtwml">

                <!-- Begin Menu -->
                <div id="mtwmlmenu" style="width:210px;">
                    <div id="mtwmlmenuh"><h1>Menu</h1></div>
                    <ul>
                        <li><a href="index.php?page=home" id="mPrincipal"><span>Principal</span></a></li>
                        <li><a href="index.php?page=register" id="mCadastro"><span>Cadastro</span></a></li>
                        <li><a href="index.php?page=downloads" id="mDownloads"><span>Downloads</span></a></li>
                        <li><a href="index.php?page=info" id="mServidor"><span>Servidor</span></a></li>
                        <li><a href="index.php?page=guiajogo" id="mTutoriais"><span>Guia do Jogo</span></a></li>
                        <li><a href="index.php?page=rankings" id="mRanking"><span>Ranking</span></a></li>
                        <li><a href="index.php?page=vips" id="mVip"><span>Vip</span></a></li>
			            <!--<li><a href="?page=elixir" id="mElixir"><span>Elixir</span></a></li>-->
                        <li><a href="index.php?page=geemseed" id="mCash"><span>Gold</span></a></li>
                        <?php if (FORUM_ENABLE == true) { ?>
                        <li><a href="{#SITE_URL}forum/" target="_blank" id="mForum"><span>Fórum</span></a></li>
                        <?php } 
                            global $PANELUSER_PREMISSIONS;
                            if($PANELUSER_PREMISSIONS['SHOPPING_INSIDE'][0] == '1'){
                        ?>
                            <!--<li class="green"><a href="panel.php?panel=CatalogSystem#!" id="mWebshop"><span>Shopping</span></a></li> -->
                        <?php }else{ ?>
                            <!--<li class="green"><a href="{#SHOPPING_LINK}" id="mWebshop"><span>Shopping</span></a></li> -->
                        <?php } ?>
                    </ul>
                    <div id="mtwmlmenuf"></div>
                </div>
                <!-- End Begin Menu -->
				
				
				
				
                <!-- Begin Staff -->
				
		
                <div id="mtwmlstaffh">
                    <h1><span>Equipe</span></h1>
                    <div style="clear: both;"></div>
                </div>
                <div id="mtwmlstaff">
                    <div id="mtwmlstaffc">
                        <ul>
                            <?php 
                                global $ldMssql;
                                $findMembersQ = $ldMssql->query("Use ".DATABASE_CHARACTERS."; SELECT Character.Name, MEMB_STAT.ConnectStat FROM ".DATABASE_CHARACTERS.".dbo.Character JOIN ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT ON (Character.AccountID = MEMB_STAT.memb___id) WHERE Character.CtlCode = 32 ");
                                while($findMembers = mssql_fetch_object($findMembersQ))
                                {
                                    echo "
                                    <li>
                                        <div class=\"star\"><img src=\"templates/{#TEMPLATE_DIR}/images/star_0.png\" alt=\"ADM\" title=\"ADM\" /></div>
                                        <div class=\"name\" onclick=\"window.location='?page=profile&char=". $findMembers->Name ."';\" style=\"cursor:pointer;\">". $findMembers->Name ."</div>
                                        <div class=\"status\"><img src=\"templates/{#TEMPLATE_DIR}/images/". ($findMembers->ConnectStat == 0 ? "status_off":"status_on") .".png\" alt=\"". ($findMembers->ConnectStat == 0 ? "Offline":"Online") ."\" title=\"". ($findMembers->ConnectStat == 0 ? "Offline":"Online") ."\" /></div>
                                    </li>";
                                }
                            ?>
                            <?php 
                                global $ldMssql;
                                $findMembersQ = $ldMssql->query("Use ".DATABASE_CHARACTERS."; SELECT Character.Name, MEMB_STAT.ConnectStat FROM ".DATABASE_CHARACTERS.".dbo.Character JOIN ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT ON (Character.AccountID = MEMB_STAT.memb___id) WHERE Character.CtlCode = 16 ");
                                while($findMembers = mssql_fetch_object($findMembersQ))
                                {
                                    echo "<div class=\"block-content\" style=\"font-size: 12px;\">". $findMembers->Name ."<span class=\"pull-right label label-default\" style=\"font-size: 13px;\">". ($findMembers->ConnectStat == 0 ? "Offline":"<span style=\"color:green;\">Online</span>") ."</span></div>
                                    <li>
                                        <div class=\"star\"><img src=\"templates/{#TEMPLATE_DIR}/images/star_GM.png\" alt=\"ADM\" title=\"ADM\" /></div>
                                        <div class=\"name\" onclick=\"window.location='?page=profile&char=". $findMembers->Name ."';\" style=\"cursor:pointer;\">". $findMembers->Name ."</div>
                                        <div class=\"status\"><img src=\"templates/{#TEMPLATE_DIR}/images/". ($findMembers->ConnectStat == 0 ? "status_off":"status_on") .".png\" alt=\"". ($findMembers->ConnectStat == 0 ? "Offline":"Online") ."\" title=\"". ($findMembers->ConnectStat == 0 ? "Offline":"Online") ."\" /></div>
                                    </li>";
                                }
                            ?>
                            <?php 
                                global $ldMssql;
                                $findMembersQ = $ldMssql->query("Use ".DATABASE_CHARACTERS."; SELECT Character.Name, MEMB_STAT.ConnectStat FROM ".DATABASE_CHARACTERS.".dbo.Character JOIN ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT ON (Character.AccountID = MEMB_STAT.memb___id) WHERE Character.CtlCode = 8");
                                while($findMembers = mssql_fetch_object($findMembersQ))
                                {
                                    echo "<div class=\"block-content\" style=\"font-size: 12px;\">". $findMembers->Name ."<span class=\"pull-right label label-default\" style=\"font-size: 13px;\">". ($findMembers->ConnectStat == 0 ? "Offline":"<span style=\"color:green;\">Online</span>") ."</span></div>
                                    <li>
                                        <div class=\"star\"><img src=\"templates/{#TEMPLATE_DIR}/images/star_MD.png\" alt=\"ADM\" title=\"ADM\" /></div>
                                        <div class=\"name\" onclick=\"window.location='?page=profile&char=". $findMembers->Name ."';\" style=\"cursor:pointer;\">". $findMembers->Name ."</div>
                                        <div class=\"status\"><img src=\"templates/{#TEMPLATE_DIR}/images/". ($findMembers->ConnectStat == 0 ? "status_off":"status_on") .".png\" alt=\"". ($findMembers->ConnectStat == 0 ? "Offline":"Online") ."\" title=\"". ($findMembers->ConnectStat == 0 ? "Offline":"Online") ."\" /></div>
                                    </li>";
                                }
                            ?>
                        </ul>
                        <!--<a href="#" id="staffabout"><span style="margin-top:11px;">Saiba Mais</span></a>-->
                        <div style="clear: both;"></div>
                    </div>
                    <div class="spacer"></div>
                </div>
                <!-- End Begin Staff -->
            </div>
            <!-- End Begin Column Left -->