{#INCLUDE:sidebarGamemaster}
  
  <section id="main" class="column">
    
    <article class="module width_full">
    <header><h3 class="tabs_involved">Banir / Desbanir Conta</h3></header>

    <div class="tab_container">
      <div class="modules_content">

<div id="box_spacer">

<form action="?page=panelgamemaster&amp;option=MANAGER_BAN_ACCOUNT&amp;Write=true" method="post">
                        <em>Login:</em><br /><input name="account" type="text" value="" /> <br />
                        <em>Ou Personagem:</em><br /><input name="character" type="text" value="" /> <br />
                        <em>Ação:</em><br /><select name="action"><option value="1">Banir</option><option value="2">Desbanir</option></select> <br />
                        <em>Banir em:</em><br /><input name="days" type="text" value="0" /> dias.<br />
                        <em>Motivo:</em><br /><input name="description" type="text" value="" maxlength="50" /><br />
                        <input type="submit" value="Salvar" class="button" />
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