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
                <h1 class="topomenumeio">Alterar Dados</h1><br>
                
                <?php if(isset($_GET['Write']) == 1 || isset($_GET['Write']) == 2): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Dados da minha conta</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=settings&amp;Write=1#!" method="post">
                            <em>Meu nome:</em><br /><input style="margin-top:4px;" name='userName' type='text' class="inputbox" value='{#MEMB_NAME}' maxlength='10' /><br />
                            <em>Meu telefone:</em><br /><input style="margin-top:4px;" name='userTel' type='text' class="inputbox" value='{#TEL__NUMB}' maxlength='15' /><br />
                            <em>Meu email:</em><br /><input style="margin-top:4px;" name='userMail' type='text' class="inputbox" value='{#MAIL_ADDR}' readonly='readonly' /><br />
                            <em>Senha Atual:</em><br /><input style="margin-top:4px;" name='cur_password' type='password' class="inputbox" /><br />
                            <input type='submit' value='Alterar' class='button' style="margin-top: 6px;"/>
                        </form>
                    </div>
                </div>

                <div class="legend" style="margin-bottom: 1px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Senha de acesso</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=settings&amp;Write=2#!" method="post">
                            <em>Senha atual:</em><br /><input style="margin-top:4px;" name='userPwd' type='password' class="inputbox" maxlength='10' /><br />
                            <em>Nova senha:</em><br /><input style="margin-top:4px;" name='userPwdNew' type='password' class="inputbox" maxlength='10' /><br />
                            <em>Repetir nova senha:</em><br /><input style="margin-top:4px;" name='userPwdNewRe' type='password' class="inputbox" maxlength='10' /><br />
                            <input type='submit' value='Alterar' class='button' style="margin-top: 6px;"/><br />
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