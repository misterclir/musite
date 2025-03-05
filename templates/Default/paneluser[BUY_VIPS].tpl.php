{#INCLUDE:header}
<section class="content-wrap">


    <!-- Banner -->
<div class="youplay-banner banner-top youplay-banner-parallax small">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-bg.jpg')">
    </div>

    <div class="youplay-user-navigation">
        <div class="container" id="!">
            <ul>
                <li class=""><a href="panel.php?panel=home">Minha Conta</a>
                </li>
                </li>
                <li class="active"><a href="panel.php?panel=buy_vips#!">Seja VIP</a>
                </li>
                <li class=""><a href="panel.php?panel=buy_coins#!">{#CASH_NAME}</a>
                </li>
                <li class=""><a href="../forum/usercp.php?action=profile">Configurações</a>
                </li>
                <li class=""><a href="index.php">Voltar ao site</a>
                </li>
            </ul>
        </div>
    </div>
{#INCLUDE:panelSide}
<?php if(isset($_GET['Write']) == false): ?>
<h3 class="mt-40 mb-20">Comprar Vip</h3>
<?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>
    <div class="row vertical-gutter">
        <div class="col-md-4">
            <ul class="pricing-table">
                <li class="plan-name">{#VIP_NAME_1}</li>
                <li class="plan-price" style="font-size: 17px;">
                    <a href="index.php?page=vips" style="text-decoration:none;">Vantagens <span style="font-size:10px">Clique Aqui.</span></a>
                </li>
                <li>
					Ajude-nos a crescer!
                    <span style="" class="badge bg-default  badge-float">Seja {#VIP_NAME_1}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </li>
                <li class="plan-action">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalVip1">Comprar {#VIP_NAME_1}</button>
				</li>
            </ul>
        </div>
      <!-- Modal -->
      <div class="modal fade" id="ModalVip1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Comprar {#VIP_NAME_1}</h4>
            </div>
            <div class="modal-body">
						<form action='panel.php?panel=buy_vips&amp;Write=true#!' id='Compras' method='post'>
						Seu saldo &eacute; de: <strong>{#CASH_AMOUNT}</strong> {#CASH_NAME}<br />
						 <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_1}?</strong><br /><br />
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip11' value='1:30' checked='checked'/>
						  <label for='vip11' class="mt-10">&nbsp;{#VIP_NAME_1} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPSILVER_30_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio'id='vip12' value='1:90' />
						  <label for='vip12' class="mt-10">&nbsp;{#VIP_NAME_1} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_90_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip13' value='1:180' />
						  <label for='vip13' class="mt-10">&nbsp;{#VIP_NAME_1} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPSILVER_180_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip14' value='1:365' />
						  <label for='vip14' class="mt-10">&nbsp;{#VIP_NAME_1} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPSILVER_365_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Finalizar Compra</button>
			  </form>
            </div>
          </div>
        </div>
      </div>
<?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>
        <div class="col-md-4">
            <ul class="pricing-table">
                <li class="plan-name">{#VIP_NAME_2}</li>
                <li class="plan-price" style="font-size: 17px;">
                    <a href="index.php?page=vips" style="text-decoration:none;">Vantagens <span style="font-size:10px">Clique Aqui.</span></a>
                </li>
                <li>
					Ajude-nos a crescer!
                    <span style="" class="badge bg-default  badge-float">Seja {#VIP_NAME_2}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </li>
                <li class="plan-action">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalVip2">Comprar {#VIP_NAME_2}</button>
				</li>
            </ul>
        </div>
      <!-- Modal -->
      <div class="modal fade" id="ModalVip2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Comprar {#VIP_NAME_2}</h4>
            </div>
            <div class="modal-body">
						<form action='panel.php?panel=buy_vips&amp;Write=true#!' id='Compras' method='post'>
						Seu saldo &eacute; de: <strong>{#CASH_AMOUNT}</strong> {#CASH_NAME}<br />
						 <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_2}?</strong><br /><br />
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip21' value='2:30' checked='checked'/>
						  <label for='vip21' class="mt-10">&nbsp;{#VIP_NAME_2} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIPGOLD_30_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio'id='vip22' value='2:90' />
						  <label for='vip22' class="mt-10">&nbsp;{#VIP_NAME_2} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_90_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip23' value='2:180' />
						  <label for='vip23' class="mt-10">&nbsp;{#VIP_NAME_2} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIPGOLD_180_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip24' value='2:365' />
						  <label for='vip24' class="mt-10">&nbsp;{#VIP_NAME_2} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIPGOLD_365_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Finalizar Compra</button>
			  </form>
            </div>
          </div>
        </div>
      </div>
<?php endif; ?>
<?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>
        <div class="col-md-4">
            <ul class="pricing-table">
                <li class="plan-name">{#VIP_NAME_3}</li>
                <li class="plan-price" style="font-size: 17px;">
                    <a href="index.php?page=vips" style="text-decoration:none;">Vantagens <span style="font-size:10px">Clique Aqui.</span></a>
                </li>
                <li>
					Ajude-nos a crescer!
                    <span style="" class="badge bg-default  badge-float">Seja {#VIP_NAME_3}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </li>
                <li class="plan-action">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalVip3">Comprar {#VIP_NAME_3}</button>
				</li>
            </ul>
        </div>
      <!-- Modal -->
      <div class="modal fade" id="ModalVip3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Comprar {#VIP_NAME_3}</h4>
            </div>
            <div class="modal-body">
						<form action='panel.php?panel=buy_vips&amp;Write=true#!' id='Compras' method='post'>
						Seu saldo &eacute; de: <strong>{#CASH_AMOUNT}</strong> {#CASH_NAME}<br />
						 <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_3}?</strong><br /><br />
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip31' value='3:30' checked='checked'/>
						  <label for='vip31' class="mt-10">&nbsp;{#VIP_NAME_3} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP3_30_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio'id='vip32' value='3:90' />
						  <label for='vip32' class="mt-10">&nbsp;{#VIP_NAME_3} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP3_90_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip33' value='3:180' />
						  <label for='vip33' class="mt-10">&nbsp;{#VIP_NAME_3} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP3_180_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip34' value='3:365' />
						  <label for='vip34' class="mt-10">&nbsp;{#VIP_NAME_3} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP3_365_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Finalizar Compra</button>
			  </form>
            </div>
          </div>
        </div>
      </div>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>
    <div class="row vertical-gutter">
        <div class="col-md-4">
            <ul class="pricing-table">
                <li class="plan-name">{#VIP_NAME_4}</li>
                <li class="plan-price" style="font-size: 17px;">
                    <a href="index.php?page=vips" style="text-decoration:none;">Vantagens <span style="font-size:10px">Clique Aqui.</span></a>
                </li>
                <li>
					Ajude-nos a crescer!
                    <span style="" class="badge bg-default  badge-float">Seja {#VIP_NAME_4}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </li>
                <li class="plan-action">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalVip4">Comprar {#VIP_NAME_4}</button>
				</li>
            </ul>
        </div>
      <!-- Modal -->
      <div class="modal fade" id="ModalVip4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Comprar {#VIP_NAME_4}</h4>
            </div>
            <div class="modal-body">
						<form action='panel.php?panel=buy_vips&amp;Write=true#!' id='Compras' method='post'>
						Seu saldo &eacute; de: <strong>{#CASH_AMOUNT}</strong> {#CASH_NAME}<br />
						 <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_4}?</strong><br /><br />
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip41' value='4:30' checked='checked'/>
						  <label for='vip41' class="mt-10">&nbsp;{#VIP_NAME_4} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP4_30_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio'id='vip42' value='4:90' />
						  <label for='vip42' class="mt-10">&nbsp;{#VIP_NAME_4} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP4_90_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip43' value='4:180' />
						  <label for='vip43' class="mt-10">&nbsp;{#VIP_NAME_4} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP4_180_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip44' value='4:365' />
						  <label for='vip44' class="mt-10">&nbsp;{#VIP_NAME_4} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP4_365_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Finalizar Compra</button>
			  </form>
            </div>
          </div>
        </div>
      </div>
<?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>
        <div class="col-md-4">
            <ul class="pricing-table">
                <li class="plan-name">{#VIP_NAME_5}</li>
                <li class="plan-price" style="font-size: 17px;">
                    <a href="index.php?page=vips" style="text-decoration:none;">Vantagens <span style="font-size:10px">Clique Aqui.</span></a>
                </li>
                <li>
					Ajude-nos a crescer!
                    <span style="" class="badge bg-default  badge-float">Seja {#VIP_NAME_4}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </li>
                <li class="plan-action">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalVip5">Comprar {#VIP_NAME_5}</button>
				</li>
            </ul>
        </div>
      <!-- Modal -->
      <div class="modal fade" id="ModalVip5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Comprar {#VIP_NAME_5}</h4>
            </div>
            <div class="modal-body">
						<form action='panel.php?panel=buy_vips&amp;Write=true#!' id='Compras' method='post'>
						Seu saldo &eacute; de: <strong>{#CASH_AMOUNT}</strong> {#CASH_NAME}<br />
						 <strong>Por quanto tempo voc&ecirc; deseja ser {#VIP_NAME_5}?</strong><br /><br />
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip51' value='5:30' checked='checked'/>
						  <label for='vip51' class="mt-10">&nbsp;{#VIP_NAME_5} 30 dias (1 M&ecirc;s): <strong>{#CASH_AMOUNT_VIP5_30_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio'id='vip52' value='5:90' />
						  <label for='vip52' class="mt-10">&nbsp;{#VIP_NAME_5} 90 dias (3 Meses): <strong>{#CASH_AMOUNT_VIP5_90_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip53' value='5:180' />
						  <label for='vip53' class="mt-10">&nbsp;{#VIP_NAME_5} 180 dias (6 Meses): <strong>{#CASH_AMOUNT_VIP5_180_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
						  <div class="youplay-radio">
						  <input name='vip' type='radio' id='vip54' value='5:365' />
						  <label for='vip54' class="mt-10">&nbsp;{#VIP_NAME_5} 365 dias (1 Ano): <strong>{#CASH_AMOUNT_VIP5_365_DAYS}</strong> {#CASH_NAME}</label>
						  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Finalizar Compra</button>
			  </form>
            </div>
          </div>
        </div>
      </div>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php endif; ?>
<?php if(isset($_GET['Write']) == TRUE): ?><div class="alert alert-success" role="alert">{#RespostWrite}</div><?php endif; ?>
                
                

        </div>

		{#INCLUDE:leftPanel}

    </div>

</div>
    

{#INCLUDE:footer}