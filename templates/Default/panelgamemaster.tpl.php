{#INCLUDE:sidebarGamemaster}
	
	<section id="main" class="column">
		
		<br/>
		<h4 class="alert_info">Seja bem-vindo ao painel do GameMaster {#SERVER_NAME}, aqui voc&ecirc; pode gerenciar seu Servidor.</h4>
		
		
		<article class="module width_full">
			<header>
			  <h3>GameMaster</h3></header>
			<div class="tab_container">
			  <div id="tab2" class="tab_content">
			    <table class="tablesorter" cellspacing="0">
			      <tbody>
			        <tr>
			          <td width="10"><img src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/images/icn_folder.png"/></td>
			          <td width="118">Total de contas</td>
			          <td width="497" style="font-weight: bold;"><strong>{#TOTAL_ACCOUNTS}</strong></td>
		            </tr>
			        <tr>
			          <td><img src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/images/icn_folder.png"/></td>
			          <td>Total de Personagens</td>
			          <td style="font-weight: bold;"><strong>{#TOTAL_CHARATERS}</strong></td>
		            </tr>
			        <tr>
			          <td><img src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/images/icn_folder.png"/></td>
			          <td>Recorde Online</td>
			          <td style="font-weight: bold;"><strong class="fontred"><font color="#FF0000">{#RECORD_ONLINE}</font></strong></td>
		            </tr>
			        <tr>
			          <td><img src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/images/icn_folder.png"/></td>
			          <td>{#VIP_NAME_1}</td>
			          <td style="font-weight: bold;"><strong>{#TOTAL_ACCOUNTS_VIP_SILVER}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a></td>
		            </tr>
			        <tr>
			          <td><img src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/images/icn_folder.png"/></td>
			          <td>{#VIP_NAME_2}</td>
			          <td style="font-weight: bold;"><strong>{#TOTAL_ACCOUNTS_VIP_GOLD}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=1">[Sincronizar]</a></td>
		            </tr>
			        <tr>
			          <td><img src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/images/icn_folder.png"/></td>
			          <td>Personagens Banidos</td>
			          <td style="font-weight: bold;"><strong>{#TOTAL_CHARACTERS_BANNEDS}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=2">[Sincronizar]</a></td>
		            </tr>
			        <tr>
			          <td><img src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/images/icn_folder.png"/></td>
			          <td>Contas Banidas</td>
			          <td style="font-weight: bold;"><strong>{#TOTAL_ACCOUNTS_BANNEDS}</strong> <a href="?page=paneladmin&amp;option=SINCRONIZE&amp;type=2">[Sincronizar]</a></td>
		            </tr>
		          </tbody>
		        </table>
		      </div>
			  <!-- end of #tab1 -->
		  </div>
		</article>
        <!-- end of messages article -->
		<div class="clear"></div>
		<div class="spacer"></div>
	</section>
</body>

</html>