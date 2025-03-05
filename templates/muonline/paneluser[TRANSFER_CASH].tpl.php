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
                
                <?php if(isset($_GET['Write']) == true): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Dados da minha conta</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="#" method="post">
                            <em>Meu login:</em><br /><input style="margin-top:4px;" name='userName' type='text' class="inputbox" value='{#MEMB___ID}' maxlength='10' readonly='readonly' /><br />
                            <em>Quantidade de {#CASH_NAME}:</em><br /><input style="margin-top:4px;" name='userTel' type='text' class="inputbox" value='{#CASH_AMOUNT}' readonly='readonly' /><br />
                            <em>Quantidade de {#CASH_NAME2}:</em><br /><input style="margin-top:4px;" name='userTel' type='text' class="inputbox" value='{#CASH_AMOUNT2}' readonly='readonly' /><br />
                        </form>
                    </div>
                </div>

                <div class="legend" style="margin-bottom: 1px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Dados para trasferencia</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <form action="panel.php?panel=transfer_cash&amp;action=transfer#!" method="post">
                            <em>Login Destino:</em><br /><input style="margin-top:4px;" name='usernameDestine' type='password' class="inputbox" maxlength='10' /><br />
                            <em>Tipo de moeda a transferir:</em><br /><select name='typeCash' class="inputbox" ><option value='1'>{#CASH_NAME}</option><option value='2'>{#CASH_NAME2}</option></select><br />
                            <em>Quantidade a transferir:</em><br /><input style="margin-top:4px;" name='amount' type='password' class="inputbox" maxlength='10' /><br />
                            <input type='submit' value='Transferir' class='button' style="margin-top: 6px;"/><br />
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