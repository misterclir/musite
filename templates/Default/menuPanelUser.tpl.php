<style>
ul.block-content li a{
    text-decoration:none;
}
</style>
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
                       <div class="col-md-3">
                            <div class="side-block">
                                <ul class="block-content">
                                    <h4 class="block-title" onclick="javascript:AbreMenu('div1')" style="cursor: pointer;">Gerenciar Minha Conta</h4>
                                    <h4 class="block-title" onclick="javascript:AbreMenu('div2')" style="cursor: pointer;">Gerenciar Personagens</h4>
                               </ul>

                               <ul id='div1' style='display:none' class="block-content">
                                <li><a href='panel.php?panel=home'>Minha Conta</a></li>
                                <li><a href='panel.php?panel=settings#!' onmouseover="show_permission('GMC','{#MODIFY_DATA_FREE}','{#MODIFY_DATA_VIP_S}','{#MODIFY_DATA_VIP_G}','{#MODIFY_DATA_VIP_3}','{#MODIFY_DATA_VIP_4}','{#MODIFY_DATA_VIP_5}');" onmouseout="clear_permission('GMC');">Alterar Dados</a></li>
                                <li><a href='panel.php?panel=clean_vault#!' onmouseover="show_permission('GMC','{#CLEAN_VAULT_FREE}','{#CLEAN_VAULT_VIP_S}','{#CLEAN_VAULT_VIP_G}','{#CLEAN_VAULT_VIP_3}','{#CLEAN_VAULT_VIP_4}','{#CLEAN_VAULT_VIP_5}');" onmouseout="clear_permission('GMC');">Limpar Bau</a></li>
                                <li><a href='panel.php?panel=double_vault#!' onmouseover="show_permission('GMC','{#DOUBLE_VAULT_FREE}','{#DOUBLE_VAULT_VIP_S}','{#DOUBLE_VAULT_VIP_G}','{#DOUBLE_VAULT_VIP_3}','{#DOUBLE_VAULT_VIP_4}','{#DOUBLE_VAULT_VIP_5}');" onmouseout="clear_permission('GMC');">Bau Duplo</a></li>
                                <li><a href='panel.php?panel=virtual_vault#!' onmouseover="show_permission('GMC','{#VIRTUAL_VAULT_FREE}','{#VIRTUAL_VAULT_VIP_S}','{#VIRTUAL_VAULT_VIP_G}','{#VIRTUAL_VAULT_VIP_3}','{#VIRTUAL_VAULT_VIP_4}','{#VIRTUAL_VAULT_VIP_5}');" onmouseout="clear_permission('GMC');">Bau virtual</a></li>
                                <li><a href='panel.php?panel=log_buys#!' onmouseover="show_permission('GMC','{#LOG_BUYS_FREE}','{#LOG_BUYS_VIP_S}','{#LOG_BUYS_VIP_G}','{#LOG_BUYS_VIP_3}','{#LOG_BUYS_VIP_4}','{#LOG_BUYS_VIP_5}');" onmouseout="clear_permission('GMC');">Log de Compras</a></li>
                                <li><a href='panel.php?panel=modify_personalid#!' onmouseover="show_permission('GMC','{#MODIFY_PERSONALID_FREE}','{#MODIFY_PERSONALID_VIP_S}','{#MODIFY_PERSONALID_VIP_G}','{#MODIFY_PERSONALID_VIP_3}','{#MODIFY_PERSONALID_VIP_4}','{#MODIFY_PERSONALID_VIP_5}');" onmouseout="clear_permission('GMC');">Alterar Personal ID</a></li>
                                <li><a href='panel.php?panel=game_disconnect#!' onmouseover="show_permission('GMC','{#GAME_DISCONNECT_FREE}','{#GAME_DISCONNECT_VIP_S}','{#GAME_DISCONNECT_VIP_G}','{#GAME_DISCONNECT_VIP_3}','{#GAME_DISCONNECT_VIP_4}','{#GAME_DISCONNECT_VIP_5}');" onmouseout="clear_permission('GMC');">Desconectar conta</a></li>
                                <li><a href='panel.php?panel=collector_points#!' onmouseover="show_permission('GMC','{#COLLECTOR_POINTS_FREE}','{#COLLECTOR_POINTS_VIP_S}','{#COLLECTOR_POINTS_VIP_G}','{#COLLECTOR_POINTS_VIP_3}','{#COLLECTOR_POINTS_VIP_4}','{#COLLECTOR_POINTS_VIP_5}');" onmouseout="clear_permission('GMC');">Coletor de pontos</a></li>
                                <li><a href='panel.php?panel=auctions#!' onmouseover="show_permission('GMC','{#AUCTIONS_FREE}','{#AUCTIONS_VIP_S}','{#AUCTIONS_VIP_G}','{#AUCTIONS_VIP_3}','{#AUCTIONS_VIP_4}','{#AUCTIONS_VIP_5}');" onmouseout="clear_permission('GMC');">Leilões</a></li>
                                <li><a href='panel.php?panel=transfer_cash#!'>Transferir {#CASH_NAME}/{#CASH_NAME2}</a></li>
                                <li><a href='panel.php?panel=loadModule&module=screenshots&action=panelManager'>Screenshots</a></li>
                                <span id='option_permission_GMC'></span>
                            </ul>

                            <ul id='div2' style='display:none' class="block-content">  
                                 <li><a href='panel.php?panel=reset#!' onmouseover="show_permission('GP','{#RESET_FREE}','{#RESET_VIP_S}','{#RESET_VIP_G}','{#RESET_VIP_3}','{#RESET_VIP_4}','{#RESET_VIP_5}');" onmouseout="clear_permission('GP');">Resetar Personagem</a></li>
                                 <li><a href='panel.php?panel=master_reset#!' onmouseover="show_permission('GP','{#MASTER_RESET_FREE}','{#MASTER_RESET_VIP_S}','{#MASTER_RESET_VIP_G}','{#MASTER_RESET_VIP_3}','{#MASTER_RESET_VIP_4}','{#MASTER_RESET_VIP_5}');" onmouseout="clear_permission('GP');">Master Reset</a></li>
                                 <li><a href='panel.php?panel=reset_transfer#!' onmouseover="show_permission('GP','{#RESET_TRANSFER_FREE}','{#RESET_TRANSFER_VIP_S}','{#RESET_TRANSFER_VIP_G}','{#RESET_TRANSFER_VIP_3}','{#RESET_TRANSFER_VIP_4}','{#RESET_TRANSFER_VIP_5}');" onmouseout="clear_permission('GP');">Transferir Resets</a></li>
                                 <li><a href='panel.php?panel=clean_pk#!' onmouseover="show_permission('GP','{#CLEAN_PK_FREE}','{#CLEAN_PK_VIP_S}','{#CLEAN_PK_VIP_G}','{#CLEAN_PK_VIP_3}','{#CLEAN_PK_VIP_4}','{#CLEAN_PK_VIP_5}');" onmouseout="clear_permission('GP');">Limpar PK</a></li>
                                 <li><a href='panel.php?panel=distribute_points#!' onmouseover="show_permission('GP','{#DISTRIBUTE_POINTS_FREE}','{#DISTRIBUTE_POINTS_VIP_S}','{#DISTRIBUTE_POINTS_VIP_G}','{#DISTRIBUTE_POINTS_VIP_3}','{#DISTRIBUTE_POINTS_VIP_4}','{#DISTRIBUTE_POINTS_VIP_5}');" onmouseout="clear_permission('GP');">Distribuir Pontos</a></li>
                                 <li><a href='panel.php?panel=move_character#!' onmouseover="show_permission('GP','{#MOVE_CHARACTER_FREE}','{#MOVE_CHARACTER_VIP_S}','{#MOVE_CHARACTER_VIP_G}','{#MOVE_CHARACTER_VIP_3}','{#MOVE_CHARACTER_VIP_4}','{#MOVE_CHARACTER_VIP_5}');" onmouseout="clear_permission('GP');">Mover Personagem</a></li>
                                 <li><a href='panel.php?panel=change_nick#!' onmouseover="show_permission('GP','{#CHANGE_NICK_FREE}','{#CHANGE_NICK_VIP_S}','{#CHANGE_NICK_VIP_G}','{#CHANGE_NICK_VIP_3}','{#CHANGE_NICK_VIP_4}','{#CHANGE_NICK_VIP_5}');" onmouseout="clear_permission('GP');">Mudar Nick</a></li>
                                 <li><a href='panel.php?panel=change_class#!' onmouseover="show_permission('GP','{#CHANGE_CLASS_FREE}','{#CHANGE_CLASS_VIP_S}','{#CHANGE_CLASS_VIP_G}','{#CHANGE_CLASS_VIP_3}','{#CHANGE_CLASS_VIP_4}','{#CHANGE_CLASS_VIP_5}');" onmouseout="clear_permission('GP');">Mudar Classe</a></li>
                                 <li><a href='panel.php?panel=redistribute_points#!' onmouseover="show_permission('GP','{#REDISTRIBUTE_POINTS_FREE}','{#REDISTRIBUTE_POINTS_VIP_S}','{#REDISTRIBUTE_POINTS_VIP_G}','{#REDISTRIBUTE_POINTS_VIP_3}','{#REDISTRIBUTE_POINTS_VIP_4}','{#REDISTRIBUTE_POINTS_VIP_5}');" onmouseout="clear_permission('GP');">Redistribuir Pontos</a></li>
                                 <li><a href='panel.php?panel=clean_inventory#!' onmouseover="show_permission('GP','{#CLEAN_INVENTORY_FREE}','{#CLEAN_INVENTORY_VIP_S}','{#CLEAN_INVENTORY_VIP_G}','{#CLEAN_INVENTORY_VIP_3}','{#CLEAN_INVENTORY_VIP_4}','{#CLEAN_INVENTORY_VIP_5}');" onmouseout="clear_permission('GP');">Limpar Inventário</a></li>
                                <span id='option_permission_GP'></span>
                             </ul>
                            
                            </div>
                        </div>