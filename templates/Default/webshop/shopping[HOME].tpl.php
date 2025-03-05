{#INCLUDE:header}
<section class="content-wrap">


    <!-- Banner -->
<div class="youplay-banner banner-top youplay-banner-parallax small">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-blog-bg.jpg')">
    </div>

    <div class="youplay-user-navigation">
        <div class="container" id="!">
            <ul>
                <li class=""><a href="panel.php?panel=home">Minha Conta</a>
                </li>
                </li>
                <li class="active"><a href="panel.php?panel=buy_vips">Seja VIP</a>
                </li>
                <li class=""><a href="panel.php?panel=buy_coins">{#CASH_NAME}</a>
                </li>
                <li class=""><a href="panel.php?panel=settings">Configurações</a>
                </li>
                <li class=""><a href="index.php">Voltar ao site</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="info">
        <div>
            <div class="container youplay-user">
                <a href="../forum/usercp.php?action=avatar" class="angled-img" style="width:auto;">
                    <div class="img">
                        <img style="height: 150px; width: auto;" src="{#MEMB_FOTO}" alt="">
                    </div>
                </a>
                <!--
                    -->
                <div class="user-data">
                    <h2>{#MEMB_NAME}</h2>
                    <div class="location"> {#MEMB_LOGIN} </div>
                    <div class="activity">
                        <div>
                            <div class="num">{#ACCOUNT_CASH}</div>
                            <div class="title">{#CASH_NAME}</div>
                        </div>
                        <div>
                            <div class="num">{#ACCOUNT_CASH2}</div>
                            <div class="title">{#CASH_NAME2}</div>
                        </div>
                        <div>
                            <div class="num">{#ACCOUNT_POINTS}</div>
                            <div class="title">{#POINTS_NAME}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /Banner -->


<div class="container youplay-content">

    <div class="row">
        <div class="col-md-9">
<h3 class="mt-0 mb-20">Shopping</h3>
    <div class="row vertical-gutter">
	<div style="margin-top:30px">
                Selecione o tipo de produtos a ser exibido abaixo: 
				<div style="margin:0 auto; width:290px;">
					<p>
						<button class="btn  btn-sm" onclick="javascript: document.getElementById('my-hr').style.display = 'block';document.getElementById('divSets').style.display = 'block';document.getElementById('divDefesa').style.display = 'none';document.getElementById('divAtaque').style.display = 'none'; "> Sets </button>
						<button class="btn  btn-sm" onclick="javascript: document.getElementById('my-hr').style.display = 'block';document.getElementById('divSets').style.display = 'none';document.getElementById('divDefesa').style.display = 'block';document.getElementById('divAtaque').style.display = 'none'; "> Defesa </button>
						<button class="btn  btn-sm" onclick="javascript: document.getElementById('my-hr').style.display = 'block';document.getElementById('divSets').style.display = 'none';document.getElementById('divDefesa').style.display = 'none';document.getElementById('divAtaque').style.display = 'block'; "> Ataque </button>
					</p>
				</div>
                <hr id="my-hr" style="margin-top:-10px;width:85%;margin:0 auto;display:none;"></hr>
				<div id="divSets" style="margin:0 auto;width:500px;display:none;">
					<p>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Helms', 'Result_Ajax_Catalog', 'get');"> Helms </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Armors', 'Result_Ajax_Catalog', 'get');"> Armors </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Pants', 'Result_Ajax_Catalog', 'get');"> Pants </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Gloves', 'Result_Ajax_Catalog', 'get');"> Gloves </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Boots', 'Result_Ajax_Catalog', 'get');"> Boots </button>
					</p><br>
				</div>
				<div id="divDefesa" style="margin:0 auto;width:500px;display:none;">
					<p>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Shields', 'Result_Ajax_Catalog', 'get');"> Shields </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Wings', 'Result_Ajax_Catalog', 'get');"> Wings </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Rings', 'Result_Ajax_Catalog', 'get');"> Rings </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Pendants', 'Result_Ajax_Catalog', 'get');"> Pendants </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Guards/Pets', 'Result_Ajax_Catalog', 'get');"> Pets </button>
					</p><br>
				</div>
				<div id="divAtaque" style="margin:0 auto;width:500px;display:none;">
					<p>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Swords', 'Result_Ajax_Catalog', 'get');"> Swords </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Axes', 'Result_Ajax_Catalog', 'get');"> Axes </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Maces', 'Result_Ajax_Catalog', 'get');"> Maces </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Staffs', 'Result_Ajax_Catalog', 'get');"> Staffs </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Spears', 'Result_Ajax_Catalog', 'get');"> Spears </button>
					</p>
					<p style="margin:0 auto; width:320px;">
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Scepters', 'Result_Ajax_Catalog', 'get');"> Scepters </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Crossbows', 'Result_Ajax_Catalog', 'get');"> Crossbows </button>
						<button class="btn  btn-sm" onclick="javascript: Verify ('shop.php?AjaxFunctions=TRUE&amp;Function=CatalogSystem&amp;ShowCatalogType=Bows', 'Result_Ajax_Catalog', 'get');"> Bows </button>
					</p><br>
				</div>
						<div id="Result_Ajax_Catalog"></div>
				</div>
</div>
                
                

        </div>

		{#INCLUDE:leftPanel}

    </div>

</div>
    

{#INCLUDE:footer}