{#INCLUDE:header}
  {#INCLUDE:menuLeft}

    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci"> 
        <div class="locationtitle usuario">
            <h1>Painel do usuario</h1>
        </div>

        <div class="sub_wrap">
            <div id="etc">
                {#INCLUDE:menuPanelUser}
                <h1 class="topomenumeio">MINHA CONTA</h1>
                <div class="legend" style="margin-top: 25px;">

                <ul style="margin: 10px 0px 10px 0px; line-height:150%;">

                <li>
                <img src="http://i.imgur.com/vjp9bp8.png" style="border:none;display:inline;margin-bottom: -18px;padding-right: 2.5%;">Saldo:<br>
                <font id="ValueGems" style="font-size: 16px;font-family: Geneva, Arial, Helvetica, sans-serif;color:#FF8E13;padding-left: 8%;">
                <strong>{#ACCOUNT_CASH}</strong></font>
                <font style="color: #FF8E13;">{#CASH_NAME}</font></li>
            </ul>
            </div>
            <div class="legend" style="margin-top: 25px;">
            <ul style="margin: 10px 0px 10px 0px; line-height:150%;">
            <li>
            <img src="https://i.imgur.com/WQ87l4b.png" style="border:none;display:inline;margin-bottom: -18px;padding-right: 2.5%;">Saldo:<br>
            <font id="ValueGems" style="font-size: 16px;font-family: Geneva, Arial, Helvetica, sans-serif;color:#9ea703;padding-left: 8%;">
            <strong>{#ACCOUNT_CASH2}</strong></font>
            <font style="color: #9ea703;">{#CASH_NAME2}</font></li>
            </ul>
            </div>
            <div class="legend" style="margin-top: 25px;">
            <ul style="margin: 10px 0px 10px 0px; line-height:150%;">
            <li>
            <img src="https://i.imgur.com/Jdy0fP6.png" style="border:none;display:inline;margin-bottom: -25px;padding-right: 1%;">Conta:<br>
            <font id="ValueGems" style="font-size: 16px;font-family: Geneva, Arial, Helvetica, sans-serif;color:#be9800;padding-left: 8%;">
            <strong>{#ACCOUNT_PLAN_DATAILS}</strong></font></li>
            </ul>
            </div>
            <div class="legend" style="margin-top: 25px;">
            <ul style="margin: 10px 0px 10px 0px; line-height:150%;">
            <li>
            <img src="https://i.imgur.com/WBKBfMR.png" style="border:none;display:inline;margin-bottom: -23px;padding-right: 1%;">Ultima Conexão: {#LAST_CONNECTION_DETAILS}<br>
            <font id="ValueGems" style="font-size: 16px;font-family: Geneva, Arial, Helvetica, sans-serif;color:#be9800;padding-left: 9%;">
            <strong>IP: {#LAST_CONNECTION_DETAILS_IP} </strong></font></li>
            </ul>
            </div>
                </table> 

                <h1 class="topomenumeio">Personagens</h1>

                <div style="margin-bottom: 5px; margin-top: 5px;">
                        {#CHARACTER_DETAILS}                   
                </div>

            </div>          
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}