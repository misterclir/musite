{#INCLUDE:header}
  {#INCLUDE:menuLeft}

    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci"> 
        <div class="locationtitle usuario">
            <h1>Painel do usuário</h1>
        </div>

        <div class="sub_wrap">
            <div id="etc">
                {#INCLUDE:menuPanelUser}
                <h1 class="topomenumeio">ABRIR TICKET</h1><br>
                
                <?php if(isset($_GET['Write']) == true): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Preencha todos os campos abaixo para abrir o pedido!</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=open_ticket&amp;Write=true#!" method="post">
                            <em>Personagem:</em><br /><select name="character" class="inputbox">{#CHARACTER_LIST_TAG_OPTION}</select><br />
                            <em>Setor:</em><br /><input type="radio" name="sector" checked="checked" value="Suporte Tecnico" />Suporte Técnico<br /><input type="radio" name="sector" value="Suporte Financeiro" />Suporte Financeiro<br />
                            <em>Assunto:</em><br /><input style="margin-top:4px;" name='subject' type='text' class="inputbox"/><br />
                            <em>Descrição:</em><br /><textarea name="description" rows="10" class="inputbox">Descreva aqui o motivo para que nossa equipe possa analizar.</textarea><br />
                            <p>Não use os caracteres: " (aspas) ' (apostofro) ; (ponto e virgula)</p>
                            <input type='submit' value='Abrir Pedido' class='button' style="margin-top: 6px;"/>
                        </form>
                    </div>
                </div>

            </div>          
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}