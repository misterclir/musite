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
                <h1 class="topomenumeio">COMPRAR VIP</h1>
          
          <div style="margin-bottom: 8px; margin-top: 10px; text-align:center;">

            
                
                <?php if(isset($_GET['Write']) == 1 || isset($_GET['Write']) == 2): ?>
                    <div id="etc" style="margin-bottom: 26px;">{#RespostWrite}</div>
                <?php endif; ?>

                <div id="divBuyPack">
                
                    <!--VIP 0%-->
                    <div class="buyPack1" id="BuyVIP1" style="display:inline-block; cursor:pointer;"></div>
                    <div class="buyPack2" id="BuyVIP2" style="display:inline-block; cursor:pointer;"></div>
                </div>
                
                <div id="divPayPack" style="display:none;">
                
                    <div class="uniqPack" id="" style="display:inline-block;"></div>
                    
                    <div class="backPlan" id="backPack" style="cursor:pointer; margin:8px auto;"></div>
                    
                    <div class="gemsouseeds"></div>
                    
                    <div id="FinishGems" class="button_gems" onclick="">
                        <div class="value_gems"></div>
                    </div>
                    
                    
                    <div id="FinishSeeds" class="button_seeds" onclick="">
                        <div class="value_seeds"></div>
                    </div>

                </div>
                
                <div id="divPayPack1" style="display:none;">
                
                    <div class="uniqPack" id="" style="display:inline-block;"></div>
                    
                    <div class="backPlan" id="backPack1" style="cursor:pointer; margin:8px auto;"></div>
                    
                    <form action='panel.php?panel=buy_vips&amp;Write=1#!' id='Compras' method='post'>

                      <input name='vip' type='radio' id='vip11' value='2:30' checked='checked' style="display: none;"/>

                      <button id="FinishGems" class="button_gems" type="submit" onclick="" style="border: none; margin-left: -5px;">
                          <div class="value_gems" style="top: -10px;">{#CASH_AMOUNT2_VIP3_30_DAYS} V-Cash</div>
                      </button>
                    </form>
                </div>


                
                <div id="divPayPack2" style="display:none;">
                
                    <div class="uniqPack" id="" style="display:inline-block;"></div>
                    
                    <div class="backPlan" id="backPack2" style="cursor:pointer; margin:8px auto;"></div>
                    
                    <form action='panel.php?panel=buy_vips&amp;Write=1#!' id='Compras' method='post'>

                      <input name='vip' type='radio' id='vip11' value='1:30' checked='checked' style="display: none;"/>

                      <button id="FinishGems" class="button_gems" type="submit" onclick="" style="border: none; margin-left: -5px;">
                          <div class="value_gems" style="top: -10px;">{#CASH_AMOUNT_VIPSILVER_30_DAYS} V-Cash</div>
                      </button>
                    </form>
                </div>
                
                <div id="divPayPack3" style="display:none;">
                
                    <div class="uniqPack" id="" style="display:inline-block;"></div>
                    
                    <div class="backPlan" id="backPack3" style="cursor:pointer; margin:8px auto;"></div>
                    
                    <div class="gemsouseeds"></div>

                    <form action='panel.php?panel=buy_vips&amp;Write=1#!' id='Compras' method='post'>

                      <input name='vip' type='radio' id='vip11' value='1:90' checked='checked' style="display: none;"/>

                      <button id="FinishGems" class="button_gems" type="submit" onclick="" style="border: none; float: left; margin-left: 22px;">
                          <div class="value_gems" style="top: -10px;">{#CASH_AMOUNT_VIPGOLD_30_DAYS} Geems</div>
                      </button>
                    </form>
                    
                    <form action='panel.php?panel=buy_vips&amp;Write=2#!' id='Compras' method='post'>
                </div>
                
                <script>
                /*$(".buyPack").click(function() {
                    
                    //CRIAR PACOTE VALOR
                    $(".value_gems").html($(this).attr("valueGems")+" Gems");
                    $(".value_seeds").html($(this).attr("valueSeeds")+" Seeds");
                    
                    //CRIAR PACOTE CLICK
                    $("#FinishGems").attr("onclick","window.self.location.href = 'paneluser?panel=buy_vips&vip="+$(this).attr("planoVIP")+"&moeda=1';");
                    $("#FinishSeeds").attr("onclick","window.self.location.href = '?page=paneluser&option=BUY_VIPS&s=1&p="+$(this).attr("planoVIP")+"&moeda=2';");
                    
                    //MUDAR PACOTE UNICO
                    $(".uniqPack").attr("id",$(this).attr("id"));
                    
                    //MOSTRAR DIV FORMA DE PAGAMENTO E ESCONDER PACOTES
                    $("#divBuyPack").hide();
                    
                    //ESCONDER AVISOS
                    $(".qdestaques").hide();
                    
                    //$("#divPayPack").show("slow");
                    $("#divPayPack").show("slide", { direction: "right" }, 400);
                    
                    //ESCONDER LEGENDA
                    $("#legendBank").hide();

                });
                
                $("#backPack").click(function() {
                    
                    //MOSTRAR LEGENDA
                    $("#legendBank").show();
                    
                    $("#divPayPack").hide();
                    $("#divBuyPack").show("slide", { direction: "left" }, 400);
                    
                });*/

                $(".buyPack1").click(function() {
                                        
                    //MUDAR PACOTE UNICO
                    $(".uniqPack").attr("id",$(this).attr("id"));
                    
                    //MOSTRAR DIV FORMA DE PAGAMENTO E ESCONDER PACOTES
                    $("#divBuyPack").hide();
                    
                    //ESCONDER AVISOS
                    $(".qdestaques").hide();
                    
                    //$("#divPayPack").show("slow");
                    $("#divPayPack1").show("slide", { direction: "right" }, 400);
                    
                    //ESCONDER LEGENDA
                    $("#legendBank").hide();

                });

                $("#backPack1").click(function() {
                    
                    //MOSTRAR LEGENDA
                    $("#legendBank").show();
                    
                    $("#divPayPack1").hide();
                    $("#divBuyPack").show("slide", { direction: "left" }, 400);
                    
                });

                $(".buyPack2").click(function() {
                                        
                    //MUDAR PACOTE UNICO
                    $(".uniqPack").attr("id",$(this).attr("id"));
                    
                    //MOSTRAR DIV FORMA DE PAGAMENTO E ESCONDER PACOTES
                    $("#divBuyPack").hide();
                    
                    //ESCONDER AVISOS
                    $(".qdestaques").hide();
                    
                    //$("#divPayPack").show("slow");
                    $("#divPayPack2").show("slide", { direction: "right" }, 400);
                    
                    //ESCONDER LEGENDA
                    $("#legendBank").hide();

                });

                $("#backPack2").click(function() {
                    
                    //MOSTRAR LEGENDA
                    $("#legendBank").show();
                    
                    $("#divPayPack2").hide();
                    $("#divBuyPack").show("slide", { direction: "left" }, 400);
                    
                });

                $(".buyPack3").click(function() {
                                        
                    //MUDAR PACOTE UNICO
                    $(".uniqPack").attr("id",$(this).attr("id"));
                    
                    //MOSTRAR DIV FORMA DE PAGAMENTO E ESCONDER PACOTES
                    $("#divBuyPack").hide();
                    
                    //ESCONDER AVISOS
                    $(".qdestaques").hide();
                    
                    //$("#divPayPack").show("slow");
                    $("#divPayPack3").show("slide", { direction: "right" }, 400);
                    
                    //ESCONDER LEGENDA
                    $("#legendBank").hide();

                });

                $("#backPack3").click(function() {
                    
                    //MOSTRAR LEGENDA
                    $("#legendBank").show();
                    
                    $("#divPayPack3").hide();
                    $("#divBuyPack").show("slide", { direction: "left" }, 400);
                    
                });
                </script>

                <style>
                  .button_gems {
                  background: url(templates/{#TEMPLATE_DIR}/images/gem-normal.png) no-repeat;
                  height: 93px;
                  width: 216px;
                  cursor: pointer;
                  position: relative;
                  top: 8px;
                  margin-left: 21px;
                  display: inline-block;
                  }

                  .value_gems {
                  font-size: 18px;
                  color: #c36c00;
                  position: relative;
                  top: 19px;
                  width: 134px;
                  float: right;
                  margin-right: 12px;
                  font-weight: bold;
                  text-align: center;
                  text-transform: uppercase;
                  -webkit-touch-callout: none;
                  -webkit-user-select: none;
                  -khtml-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
                  }

                  .button_seeds {
                  background: url(templates/{#TEMPLATE_DIR}/images/seed-normal.png) no-repeat;
                  height: 93px;
                  width: 216px;
                  cursor: pointer;
                  position: relative;
                  top: 8px;
                  margin-right: 22px;
                  float: right;
                  }

                  .gemsouseeds {
                  background: url(templates/{#TEMPLATE_DIR}/images/ortest.png) no-repeat;
                  height: 48px;
                  width: 48px;
                  /* cursor: pointer; */
                  position: relative;
                  top: 78px;
                  margin-left: 221px;
                  margin-top: -50px;
                  }

                  .value_seeds {
                  font-size: 18px;
                  color: #82a614;
                  position: relative;
                  top: 19px;
                  width: 134px;
                  float: left;
                  margin-left: 12px;
                  font-weight: bold;
                  text-align: center;
                  text-transform: uppercase;
                  -webkit-touch-callout: none;
                  -webkit-user-select: none;
                  -khtml-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
                  }
                </style>


            </div>
            <div id="legendBank">

                    <div class="legend" style="margin-bottom: 25px;">
                          <div style="margin-bottom: 8px; margin-top: 10px;">
                           <table width="100%" border="0" cellpadding="2" cellspacing="2">
                    <tbody>
                      <tr>
                        <td scope="col" bgcolor="">* Escolha o plano VIP desejado para prosseguir ao próximo passo...</td>
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
                            <td scope="col" height="20"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>O QUE É VIP?</strong></div></td>
                          </tr>
                          <tr>
                            <td scope="col" bgcolor="">- VIP é um tipo de conta no jogo, onde você terá diversas vantagens. As vantagens estão disponíveis <a href="?page=vip" target="_blank">AQUI</a>.</td>
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
                            <td scope="col" height="20"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>COMO POSSO OBTER VIP?</strong></div></td>
                          </tr>
                          <tr>
                            <td scope="col" bgcolor="">- VIP pode ser comprado com Gems ou Seeds. Para saber o que é Gems e Seeds, <a href="?page=geemseed" target="_blank">CLIQUE AQUI</a>.</span></span></td>
                          </tr>
                        </tbody>
                  </table>
                  </div>
                  </div>
                        
                  <div class="legend">
                              <div style="margin-bottom: 8px; margin-top: 10px;">
                      <table width="100%" border="0" cellpadding="2" cellspacing="2">
                        <tbody>
                          <tr>
                            <td height="20"><div style="font-weight:bold; font-size:14px; color:#B9945A;"><strong>COMO COMPRAR?</strong></div></td>
                          </tr>
                          <tr>
                            <td bgcolor=""><div align="left">- Para comprar, voc&ecirc; precisa escolher seu plano VIP e em seguida a moeda que deseja pagar, sendo ela Gems ou Seeds.<br><br>
                            - Assim que você COMPRAR, o plano VIP cairá na sua conta automaticamente.</div></td>
                          </tr>
                        </tbody>
                  </table>

                    </div>
                </div>
                          

                          
            </div>
        </div>
      </div>

    <div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}