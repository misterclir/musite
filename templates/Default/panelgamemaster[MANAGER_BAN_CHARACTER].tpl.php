{#INCLUDE:sidebarGamemaster}
  
  <section id="main" class="column">
    
    <article class="module width_full">
    <header><h3 class="tabs_involved">Banir / Desbanir personagem</h3></header>

    <div class="tab_container">
      <div class="modules_content">

<div id="box_spacer">

<form action="?page=panelgamemaster&amp;option=MANAGER_BAN_CHARACTER&amp;Write=true" method="post">
                            <em>Personagem:</em><br /><input name="character" type="text" value="" class="inputbox" /> <br />
                            <em>Ação:</em><br /><select name="action" class="inputbox" ><option value="1">Banir</option><option value="2">Desbanir</option></select> <br />
                            <em>Banir em:</em><br /><input name="days" type="text" value="0" class="inputbox"  /> dias.<br />
                            <em>Motivo:</em><br /><input name="description" type="text" value="" maxlength="50" class="inputbox" /><br />
                            <input type="submit" value="Salvar." class="button" style="margin-top: 10px;" />
                          </form>
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