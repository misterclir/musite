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
                <h1 class="topomenumeio">Doar com Pagseguro</h1><br>
                
                <?php if(isset($_GET['Write']) == true): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Pagamentos PagSeguro</span></h3>                    
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                        <p>O PagSeguro é um serviço através do qual você poderá comprar créditos com Boleto Bancário, Cartões de Crédito e outros meios. Sua compra é confirmada automaticamente e os créditos liberados de imediato após a confirmação.<br /><br />
                       Fazendo seu pagamento com o PagSeguro não é necessário enviar Confirmação de Depósito pelo Painel de Usuário.<br /><br />
                       Para fazer sua compra pelo PagSeguro, preencha o campo abaixo com o valor que deseja obter em créditos e confirme.<br /><br />
                       <div class="alert sucess">Não é necessário nenhum tipo de confirmação, seus créditos irão entrar automaticamente assim que o pagamento for aprovado pelo próprio PagSeguro.</div></p><br /><br />
                        <form id="comprar" action="https://pagseguro.uol.com.br/v2/checkout/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                            <input type="hidden" name="code" id="code" value="" />
                        </form> 
                        <em>Valor:</em><br />
                        <input name="valor" id="valor" type="text" class="inputbox" placeholder="Coloque aqui um valor em Reais (R$)" onkeypress="return NumberOnly(event)"><br />
                        <input type="hidden" name="login" id="login" value="<?=$_SESSION['LOGIN'];?>" />
                        <div id="loading" style="visibility:hidden;"><h3>Aguarde Por Favor... <img src="https://retchhh.files.wordpress.com/2015/03/loading4.gif?w=30&h=30"/></h3></div>
                        <input type='submit' value='Doar Agora' class='button' onclick="enviaPagseguro()" style="margin-top: 6px;"/>
                        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                    </div>
                </div>

                <script>
                function enviaPagseguro(){
                valor = $('#valor').val();
                Login = $('#login').val();
                    if(valor == '') {
                        alert('Por Favor, preencha com um valor');
                    }
                    else {
                 $.post('modules/classes/modules/pagseguro[save].module.php',{login: Login, form: '547'},function(idPedido){
                     
                     $('#loading').css("visibility","visible");
                 
                     $.post('modules/classes/modules/pagseguro[api].module.php',{idPedido: idPedido, login: Login, Valor: valor, form: '014'},function(data){

                       $('#code').val(data);
                       $('#comprar').submit();
                       
                       $('#loading').css("visibility","hidden");
                     })
                    }) }
                 }

                function NumberOnly(e)
                    {
                      var tecla = (window.event) ? event.keyCode : e.which;
                        if (tecla > 47 && tecla < 58)
                          {
                            return true;
                          } else if (tecla == 8 || tecla == 9 || tecla == 37 || tecla == 0 || tecla == 13)
                            {
                              return true;
                            } else
                            {
                              return false;
                            }
                    }
                </script>

            </div>          
        </div> 

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}