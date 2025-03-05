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
          <h1 class="topomenumeio">COMPRAR V-Cash</h1>
      
<div style="margin-bottom: 8px; margin-top: 10px; text-align:center;">

  <div id="divBuyPack">
  
        

    <!--60% DE DESCONTO-->
    <div class="buyPack" itemid1="25" itemdescription1="Pacote de 1200 V-Cash" itemamount1="20.00" id="BuyPacote1P60" style="display:inline-block; cursor:pointer; margin-bottom:10px;"></div>
    <div class="buyPack" itemid1="48" itemdescription1="Pacote de 3000 V-Cash" itemamount1="35.00" id="BuyPacote2P60" style="display:inline-block; cursor:pointer; margin-bottom:10px;"></div>
    <div class="buyPack" itemid1="97" itemdescription1="Pacote de 7000 V-Cash" itemamount1="65.00" id="BuyPacote3P60" style="display:inline-block; cursor:pointer; margin-bottom:10px;"></div>
        
    
  </div>
  
  <div id="divPayPack" style="display:none; ">
  
    <div class="uniqPack" id="" style="display:inline-block;"></div>
    
    <div class="backPack" id="backPack" style="cursor:pointer; margin:8px auto;"></div>
    
    <div class="formas_pagamentos">
    
    <div class="buyBank" itemid1="" itemdescription1="" itemamount1="" id="imgCaixa" style="display:inline-block; cursor:pointer;"></div>
    
    <div class="buyPicPay" itemid1="" itemdescription1="" itemamount1="" id="imgPicPay" style="display:inline-block; cursor:pointer;"></div>
    
    <form id="pag_pagamento" name="pag_pagamento" method="post" target="_blank" action="https://pagseguro.uol.com.br/v2/checkout/payment.html" style="display:inline-block;">  
      <input name="receiverEmail" type="hidden" value="{#PAGSEGURO_MAIL}">  
      <input name="currency" type="hidden" value="BRL">   
      <input name="itemId1" type="hidden" value="">  
      <input name="itemDescription1" type="hidden" value="">  
      <input name="itemAmount1" type="hidden" value="">  
      <input name="itemQuantity1" type="hidden" value="1">  
      <input name="itemWeight1" type="hidden" value="0">
      <input name="reference" type="hidden" value="{#MEMB_LOGIN}">  
      <input name="submit" type="image" id="imgPagSeguro">
    </form>
    
    
    
    </div>
    
    <div class="dataBank" style="display:none;">  
    
      <div class="qdestaques" style="line-height: 1.5; width: 170px; margin: 8px auto 12px;">
        Banco: <span style="color:#B9945A;">Caixa Econômica</span><br>
        Favorecido: <span style="color:#B9945A;">{#DEPOSITO_FAVORECIDO}</span><br>
        Agência: <span style="color:#B9945A;">{#DEPOSITO_AGENCIA}</span><br>
        Operação: <span style="color:#B9945A;">{#DEPOSITO_OPERACAO}</span><br>
        Conta Poupança: <span style="color:#B9945A;">{#DEPOSITO_CONTA}</span><br>
        Tipo de Conta: <span style="color:#B9945A;">{#DEPOSITO_TIPO_CONTA}</span><br>
        Valor do Depósito: <span id="valueBank" style="color:#B9945A;"></span>
      </div>
    </div>
    
    <div class="dataPicPay" style="display:none;">  
    
      <div class="yesPicPay" id="yesPicPay" style="display:inline-block; cursor:pointer; margin:10px 5px 0px 0px;"></div>
      <div class="noPicPay" id="noPicPay" style="display:inline-block; cursor:pointer; margin:10px 0px 0px 5px;"></div>
    
      <div id="divYesPicPay" class="qdestaques" style="line-height: 1.5; width: 458px; margin: 8px auto 12px; display:none;">
        
        <strong style="font-size:14px; color:#B9945A;">SIGA O TUTORIAL ABAIXO PARA COMPRAR COM O PicPay</strong><br><br>
      
        <strong>1º</strong> - Abra o PicPay e clique no botão "PAGAR" localizado na parte debaixo do App.<br>
        <img src="https://i.imgur.com/UDv4bP1.png" width="300"><br><br>
        
        <strong>2º</strong> - Na barra de pesquisa, busque por <strong>@vegasmu</strong> e clique no usuário que aparecer, como mostrado na imagem abaixo.<br>
        <img src="https://i.imgur.com/bX2aMTX.png" width="300"><br><br>
        
        <strong>3º</strong> - Na tela de "Nova transação", você irá seguir os passos <font color="red">(1)</font>, <font color="red">(2)</font> e <font color="red">(3)</font>, de acordo com a imagem que está mais abaixo.<br>
        <font color="red">(1)</font> - No campo Valor, digite: <span id="valuePicPay" style="color:#B9945A;"></span><br>
        <font color="red">(2)</font> - No campo Mensagem, digite: <span id="PackPicPay" style="color:#B9945A;"></span> - <span style="color:#B9945A;">{#MEMB_LOGIN}</span><br>
        <font color="red">(3)</font> - Clique no botão "PAGAR"<br>
        <img src="https://i.imgur.com/ellGAxE.png" width="300"><br><br>
        
        <strong>*</strong> Agora basta aguardar que sua compra será confirmada em até <u>8h úteis</u>.<br><br>
        
        <strong>Observação:</strong> O pagamento será feito através de um cartão de crédito da sua escolha.
      </div>
    
      <div id="divNoPicPay" class="qdestaques" style="line-height: 1.5; width: 458px; margin: 8px auto 12px; display:none;">
        
        <strong style="font-size:14px; color:#B9945A;">SIGA O TUTORIAL ABAIXO PARA CRIAR UMA CONTA NO PicPay</strong><br><br>
      
        <strong>1º</strong> - Baixe o App PicPay através da loja do seu smartphone. Basta pesquisar por PicPay na PlayStore ou AppStore.<br>
        <img src="https://i.imgur.com/H9Pbs6W.png" width="300"><br><br>
        
        <strong>2º</strong> - Abra o PicPay e clique no botão "Criar minha conta no PicPay!". Agora basta preencher os dados que forem solicitados, como nome, número do celular entre outros. É bem simples e rápido!<br>
        <img src="https://i.imgur.com/p0TpS1s.png" width="300"><br><br>
        
        <strong>*</strong> Após ter criado sua conta no PicPay, siga o tutorial <span style="color:#B9945A; font-weight:bold;">"JÁ TENHO CONTA NO PICPAY"</span>
        
      </div>
      
    </div>
    
  </div>
  
  <script>
  $(".buyPack").click(function() {
    
    //CRIAR PACOTE PAGSEGURO
    $("#pag_pagamento input[name=itemId1]").val($(this).attr("itemId1"));
    $("#pag_pagamento input[name=itemDescription1]").val($(this).attr("itemDescription1"));
    $("#pag_pagamento input[name=itemAmount1]").val($(this).attr("itemAmount1"));
    
    //CRIAR PACOTE CAIXA
    $(".buyBank").attr("itemId1",$(this).attr("itemId1"));
    $(".buyBank").attr("itemDescription1",$(this).attr("itemDescription1"));
    $(".buyBank").attr("itemAmount1",$(this).attr("itemAmount1"));
    
    //CRIAR PACOTE PICPAY
    $(".buyPicPay").attr("itemId1",$(this).attr("itemId1"));
    $(".buyPicPay").attr("itemDescription1",$(this).attr("itemDescription1"));
    $(".buyPicPay").attr("itemAmount1",$(this).attr("itemAmount1"));
    
    //MUDAR PACOTE UNICO
    $(".uniqPack").attr("id",$(this).attr("id"));
    
    //MOSTRAR DIV FORMA DE PAGAMENTO E ESCONDER PACOTES
    $("#divBuyPack").hide();
    //$("#divPayPack").show("slow");
    $("#divPayPack").show("slide", { direction: "right" }, 400);
    
    //ESCONDER LEGENDA
    $("#legendBank").hide();
    

  });
  
  $("#backPack").click(function() {
    
    //MOSTRAR LEGENDA
    $("#legendBank").show();
    
    //MOSTRAR DIV PACOTES E ESCONDER FORMA DE PAGAMENTO
    $("#divPayPack").hide();
    $("#divYesPicPay").hide();
    $("#divNoPicPay").hide();
    $(".dataPicPay").hide();
    $(".dataBank").hide();
    //$("#divBuyPack").show("slow");
    $("#divBuyPack").show("slide", { direction: "left" }, 400);
    
  });
  
  $(".buyBank").click(function() {
    
    $("#divYesPicPay").hide();
    $("#divNoPicPay").hide();
    
    //SETAR VALOR REFERENTE AO PACOTE
    $("span[id=valueBank]").html("R$ "+ $(this).attr("itemAmount1"));
    
    //MOSTRAR E ESCONDER DADOS DO BANCO
    $(".dataPicPay").hide();
    $(".dataBank").slideToggle();
    
    
  });
  
  $(".buyPicPay").click(function() {
    
    $("#divYesPicPay").hide();
    $("#divNoPicPay").hide();
    
    //SETAR VALOR REFERENTE AO PACOTE
    $("span[id=valuePicPay]").html("R$ "+ $(this).attr("itemAmount1"));
    $("span[id=PackPicPay]").html($(this).attr("itemDescription1"));
    
    //MOSTRAR E ESCONDER DADOS DO BANCO
    $(".dataBank").hide();
    $(".dataPicPay").slideToggle();
    
  });
  
  $("#yesPicPay").click(function() {
    
    $("#divNoPicPay").hide();
    $("#divYesPicPay").slideToggle();
    
    
  });
  
  $("#noPicPay").click(function() {
    
    $("#divYesPicPay").hide();
    $("#divNoPicPay").slideToggle();
    
    
  });
  </script>






</div>

<div id="legendBank">

        
   <div class="legend" style="margin-bottom: 25px;">
                      <div style="margin-bottom: 8px; margin-top: 10px;">
            <table width="100%" cellpadding="2" cellspacing="2" class="table">
     <tbody><tr>
       <td scope="col"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>VEGASMU UTILIZA CAIXA ECONÔMICA E PAGSEGURO.</strong></div></td>
     </tr>
     <tr>
       <td scope="col">- Temos <strong>100% de satisfação</strong> de nossos compradores.<br>
       - Garantimos <strong>100% sua compra</strong>, ou tenha seu dinheiro de volta.</td>
     </tr>
   </tbody></table>
   </div>
   </div>
   

<div class="legend" style="margin-bottom: 25px;">
                      <div style="margin-bottom: 8px; margin-top: 10px;">
             <table width="100%" border="0" cellpadding="2" cellspacing="2">
              <tbody>
                <tr>
                  <td scope="col" height="20"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>O QUE É GEMS?</strong></div></td>
                  </tr>
                  <tr>
                    <td scope="col" bgcolor="">- Gems é uma "moeda virtual " usada para fazer compras no shop do jogo, com ela você pode comprar Itens Full no <a href="?page=webshop" target="_blank">SHOP</a>.</td>
                  </tr>
                </tbody>
</table>
</div>
</div>
<div class="legend" style="margin-bottom: 25px;">
                      <div style="margin-bottom: 8px; margin-top: 10px;">
              <table width="100%" border="0" cellpadding="2" cellspacing="2">
                <tbody>
                  <tr>
                    <td scope="col" height="20"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>COMO POSSO OBTER GEMS?</strong></div></td>
                  </tr>
                  <tr>
                    <td scope="col" bgcolor="">- Gems podem ser comprados em <a href="?page=paneluser&amp;option=BUY_GEMS" target="_blank">PACOTES</a>, com pagamento feito pela Caixa Econômica ou pelo PagSeguro. </td>
                  </tr>
                </tbody>
          </table>
      </div>
      </div>
      
      <div class="legend" style="margin-bottom: 25px;">
                      <div style="margin-bottom: 8px; margin-top: 10px;">
              <table width="100%" border="0" cellpadding="2" cellspacing="2">
                <tbody>
                  <tr>
                    <td height="20"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>QUAIS FORMAS DE PAGAMENTO SÃO ACEITAS? </strong></div></td>
                  </tr>
                  <tr>
                    <td bgcolor=""><div align="left">- Atualmente estamos trabalhando com as seguintes formas de pagamento:<br><br> 
            •&nbsp; Depósito em conta (Caixa Econômica);<br>
            •&nbsp; Boleto bancário;<br>
            •&nbsp; Cartão de crédito;<br>
            •&nbsp; Débito bancário.<br><br>
            
            
            
            - Caso não estiver encontrando todas as formas de pagamento no site do PagSeguro, clique <a href="https://i.imgur.com/L7Z42mC.png" id="photoLarge_PagS">AQUI</a> e saiba como proceder.
            <br><br>
            * Todas as formas de pagamento citadas são efetuadas através do PagSeguro, exceto depósito em conta (Caixa Econômica).</div></td>
                  </tr>
                </tbody>
          </table>

                    </div>
                </div>
        
    <script> jQuery("a#photoLarge_PagS").fancybox();</script>
        
      <div class="legend" style="margin-bottom: 25px;">
                      <div style="margin-bottom: 8px; margin-top: 10px;">
              <table width="100%" border="0" cellpadding="2" cellspacing="2">
                <tbody>
                  <tr>
                    <td height="20"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>COMO COMPRAR? </strong></div></td>
                  </tr>
                  <tr>
                    <td bgcolor=""><div align="left">- Para comprar, você precisa clicar <a href="?page=paneluser&amp;option=BUY_GEMS" target="_blank">AQUI</a>, escolher seu pacote de Gems e em seguida a forma de pagamento, sendo ela Caixa Econômica ou PagSeguro.<br><br>
          - Se você escolher Caixa Econômica, basta fazer o depósito na conta bancária que irá aparecer e depois confirmar o seu pagamento <a href="panel.php?panel=confirm_payment#!" target="_blank">AQUI</a>.<br><br>
          - Se você escolher o PagSeguro, uma nova página irá abrir, agora basta seguir todos os passos que a mesma irá mostrar.</div></td>
                  </tr>
                </tbody>
          </table>

                    </div>
                </div>
        
        <div class="legend" style="margin-bottom: 25px;">
                      <div style="margin-bottom: 8px; margin-top: 10px;">
              <table width="100%" border="0" cellpadding="2" cellspacing="2">
                <tbody>
                  <tr>
                    <td scope="col" height="20"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>APÓS O PAGAMENTO</strong></div></td>
                  </tr>
                  <tr>
                    <td scope="col" bgcolor="">- Se você comprou pela Caixa Econômica, basta confirmar o seu pagamento <a href="panel.php?panel=confirm_payment#!" target="_blank">AQUI</a>, e aguardar o pacote de Gems cair na sua conta.<br><br>
          - Se você comprou pelo PagSeguro, quando o seu pagamento for aprovado o pacote de Gems cairá na sua conta automaticamente.<br><br>
          * Os pagamentos geralmente são confirmados em <u>24h úteis</u>.</td>
                  </tr>
                </tbody>
          </table>
              </div></div>
        
  </div>

</div>                            
</div>
    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}