                <script type="text/javascript">
                    function show_permission(area,free,vips,vipg, vip3, vip4, vip5) {
                        if(free == 1) var permission_free = "<span style='color:#009400'>Sim</span>"; else var permission_free = "<span style='color:#BB0000'>Não</span>";
                        if(vips == 1) var permission_vips = "<span style='color:#009400'>Sim</span>"; else var permission_vips = "<span style='color:#BB0000'>Não</span>";
                        if(vipg == 1) var permission_vipg = "<span style='color:#009400'>Sim</span>"; else var permission_vipg = "<span style='color:#BB0000'>Não</span>";
                        if(vip3 == 1) var permission_vip3 = "<span style='color:#009400'>Sim</span>"; else var permission_vip3 = "<span style='color:#BB0000'>Não</span>";
                        if(vip4 == 1) var permission_vip4 = "<span style='color:#009400'>Sim</span>"; else var permission_vip4 = "<span style='color:#BB0000'>Não</span>";
                        if(vip5 == 1) var permission_vip5 = "<span style='color:#009400'>Sim</span>"; else var permission_vip5 = "<span style='color:#BB0000'>Não</span>";
                        document.getElementById('option_permission_'+area).innerHTML = "<div style='margin-left: 20px; margin-top: 10px; margin-bottom: 10px;'>Permissões da Opção:<br/> \
                         - Free: "+permission_free+"<br/> \
                         <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>- {#VIP_NAME_1}: "+permission_vips+"<br/><?php endif; ?> \
                         <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>- {#VIP_NAME_2}: "+permission_vipg+"<br/><?php endif; ?>\
                         <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>- {#VIP_NAME_3}: "+permission_vip3+"<br/><?php endif; ?>\
                         <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>- {#VIP_NAME_4}: "+permission_vip4+"<br/><?php endif; ?>\
                         <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>- {#VIP_NAME_5}: "+permission_vip5+"<?php endif; ?></div>";
                    }
                    function clear_permission(area) {
                        document.getElementById('option_permission_'+area).innerHTML = "";
                    }
                    function AbreMenu(nome_div) {
                        var div = "";
                        var menus = 5;
                        for (var i=1; i < menus; i++) {
                            div = "div"+i;
                            document.getElementById(div).style.display = "none"; 
                            if (div == nome_div) {
                                document.getElementById(nome_div).style.display = "block"; 
                            }
                        }
                    }
                    function AbreMenuV2(nome_div) {
                        var div = "";
                        var menus = 6;
                        for (var i=1; i < menus; i++) {
                            div = "divV2"+i;
                            document.getElementById(div).style.display = "none"; 
                            if (div == nome_div) {
                                document.getElementById(nome_div).style.display = "block"; 
                            }
                        }
                    }
                    </script>
                    <div id="menu_cp">
                           <ul>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div1')">Gerenciar Minha Conta</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div2')">Gerenciar Personagens</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div4')">Suporte</a></li>
                               <li><a id="ButtonPanelGemsA" href='panel.php?panel=buy_coins#!'>Comprar V-Cash</a></li>
                               <li><a id="ButtonPanelVIPA" href='panel.php?panel=buy_vips#!'>Comprar VIP</a></li>
                               <li><a href="javascript:;" onclick="javascript:AbreMenu('div3')">Gerenciar Pagamentos</a></li>
                           </ul>
                           <div style="clear: both;"></div>
                       </div>
                                  
                       <div id='div1' style="display: none;">
                           <div id="menu_cp">
                            <ul>
                               <bdo>
                                <li><a href='panel.php?panel=home'>Minha Conta</a></li>
                                 <li><a href='panel.php?panel=settings#!' onmouseover="show_permission('GMC','{#MODIFY_DATA_FREE}','{#MODIFY_DATA_VIP_S}','{#MODIFY_DATA_VIP_G}','{#MODIFY_DATA_VIP_3}','{#MODIFY_DATA_VIP_4}','{#MODIFY_DATA_VIP_5}');" onmouseout="clear_permission('GMC');">Alterar Dados</a></li>
                                <li><a href='panel.php?panel=log_buys#!' onmouseover="show_permission('GMC','{#LOG_BUYS_FREE}','{#LOG_BUYS_VIP_S}','{#LOG_BUYS_VIP_G}','{#LOG_BUYS_VIP_3}','{#LOG_BUYS_VIP_4}','{#LOG_BUYS_VIP_5}');" onmouseout="clear_permission('GMC');">Log de Compras</a></li>
                                <li><a href='panel.php?panel=modify_personalid#!' onmouseover="show_permission('GMC','{#MODIFY_PERSONALID_FREE}','{#MODIFY_PERSONALID_VIP_S}','{#MODIFY_PERSONALID_VIP_G}','{#MODIFY_PERSONALID_VIP_3}','{#MODIFY_PERSONALID_VIP_4}','{#MODIFY_PERSONALID_VIP_5}');" onmouseout="clear_permission('GMC');">Alterar Personal ID</a></li>
                                <li><a href='panel.php?panel=game_disconnect#!' onmouseover="show_permission('GMC','{#GAME_DISCONNECT_FREE}','{#GAME_DISCONNECT_VIP_S}','{#GAME_DISCONNECT_VIP_G}','{#GAME_DISCONNECT_VIP_3}','{#GAME_DISCONNECT_VIP_4}','{#GAME_DISCONNECT_VIP_5}');" onmouseout="clear_permission('GMC');">Desconectar conta</a></li>
                                <li><a href='panel.php?panel=collector_points#!' onmouseover="show_permission('GMC','{#COLLECTOR_POINTS_FREE}','{#COLLECTOR_POINTS_VIP_S}','{#COLLECTOR_POINTS_VIP_G}','{#COLLECTOR_POINTS_VIP_3}','{#COLLECTOR_POINTS_VIP_4}','{#COLLECTOR_POINTS_VIP_5}');" onmouseout="clear_permission('GMC');">Coletor de pontos</a></li>
                                <li><a href='panel.php?panel=auctions#!' onmouseover="show_permission('GMC','{#AUCTIONS_FREE}','{#AUCTIONS_VIP_S}','{#AUCTIONS_VIP_G}','{#AUCTIONS_VIP_3}','{#AUCTIONS_VIP_4}','{#AUCTIONS_VIP_5}');" onmouseout="clear_permission('GMC');">Leilões</a></li>
                                <li><a href='panel.php?panel=transfer_cash#!'>T. {#CASH_NAME}/{#CASH_NAME2}</a></li>
                                </bdo>
                            </ul>
                           <div style="clear: both;"></div>
                        <span id='option_permission_GMC'></span>
                        </div>
                      </div>
                       
                       <div id='div2' style='display:none'> 
                          <div id="menu_cp"> 
                            <ul>  
                            <bdo>
                                 <li><a href='panel.php?panel=redistribute_points#!' onmouseover="show_permission('GP','{#REDISTRIBUTE_POINTS_FREE}','{#REDISTRIBUTE_POINTS_VIP_S}','{#REDISTRIBUTE_POINTS_VIP_G}','{#REDISTRIBUTE_POINTS_VIP_3}','{#REDISTRIBUTE_POINTS_VIP_4}','{#REDISTRIBUTE_POINTS_VIP_5}');" onmouseout="clear_permission('GP');">Redistribuir Pontos</a></li>
                              </bdo> 
                           </ul>
                           <div style="clear: both;"></div>
                             <span id='option_permission_GP'></span> 
                          </div>
                        </div>
                                
                       <div id='div3' style='display:none'>
                            <div id="menu_cp">
                                 <ul>
                                 <bdo>
                                     <li><a href='panel.php?panel=confirm_payment#!'>Confirmar Pagamento</a></li>
                                     <li><a href='panel.php?panel=log_buys&Write=1#!'>Meus Pagamentos</a></li>
                                     </bdo>
                                  </ul>
                           <div style="clear: both;"></div>
                            </div>
                       </div>
                           
                       <div id='div4' style='display:none'>
                               <div id="menu_cp">
                                <ul>
                                    <bdo>
                                        <li><a href='panel.php?panel=open_ticket#!'>Abrir Tickets</a></li>
                                    </bdo>
                                </ul>
                           <div style="clear: both;"></div>
                            <span id='option_permission_GSUP'></span>
                            </div>
                        </div>