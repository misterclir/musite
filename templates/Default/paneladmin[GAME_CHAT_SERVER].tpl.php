{#INCLUDE:sidebarAdmin}
	
	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Ver Chat em Tempo Real</h3></header>

		<div class="tab_container">
			<div class="modules_content">

<div id="box_spacer">

<table border='0' width='100%'>
                      <tr>
                       <td colspan='2' bgcolor='#E2DEC5'>
                            <input type="button" value="Atualizar" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;loadLasts='+ document.getElementById('loadLasts').value ;" /> 
                            <input type="button" value="Apagar log" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;action=clearLog&amp;loadLasts='+ document.getElementById('loadLasts').value ;" />
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            Mostrar ultimos: <input type="text" id="loadLasts" value="<?php echo (isset($_GET['loadLasts']) == false ? 50 : $_GET['loadLasts']); ?>" /> 
                            <input type="button" value="Carregar" onclick="window.location = '?page=paneladmin&amp;option=GAME_CHAT_SERVER&amp;loadLasts='+ document.getElementById('loadLasts').value ;" />
                       </td>
                      </tr> 
                    </table>
                    {#RESULTTPL}

</div>
			
			</table>
			</div><!-- end of #tab1 -->
		</div><!-- end of .tab_container -->
		</article><!-- end of content manager article -->
		
		<div class="clear"></div>
		<div class="spacer"></div>
	</section>

</body>

</html>