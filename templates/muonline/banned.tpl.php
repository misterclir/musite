{#INCLUDE:header}
  {#INCLUDE:menuLeft}

    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci"> 
        <div class="locationtitle banidos">
            <h1>{#BannedTitle}</h1>
        </div>

        <div class="sub_wrap">
            <div id="etc">
			<div class="legend">
                <table border='0' width='100%'>
                    <tr>
                        <td align='center'><strong>Nome</strong></td>      
                        <td align='center'><strong>Expira</strong></td>
                        <td align='center'><strong>Banidor por</strong></td>
                        <td align='center'><strong>Motivo</strong></td>
                    </tr>
                    {#BANNED_RESULT}
                </table>
			</div>
            </div>           
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}