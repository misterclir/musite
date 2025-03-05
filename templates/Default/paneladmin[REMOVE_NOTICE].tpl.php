{#INCLUDE:sidebarAdmin}
	
	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Remover Notícia</h3></header>

		<div class="tab_container">
			<div class="modules_content">

<div id="box_spacer">
  <form action="?page=paneladmin&amp;option=REMOVE_NOTICE&amp;Write=true" method="post">
                       	<em>Titulo:</em><br /><select name="id" class="inputbox">{#OPTIONS_ID_SELECT}</select> <br />
                        <input type="submit" value="Remover" class="button" />
                      </form>

</div>
			
			</table>
			</div><!-- end of #tab1 -->
		</div><!-- end of .tab_container -->
		</article><!-- end of content manager article -->
		
		<div class="clear"></div>
{#RESULTTPL}
		<div class="spacer"></div>
	</section>

</body>

</html>