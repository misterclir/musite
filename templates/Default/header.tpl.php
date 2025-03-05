<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="iso-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="MuEffect Season 4 é um servidor custom com diversos recursos, como novos itens e sistema de eventos automaticos!" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="MuOnline, Mu, MuSite, Site, Mu Site, RPG, MMORPG" />
<meta name="Author" content="Felipe Bruno" />
<base href="/musite/">
<title>{#TITLE_SITE}</title>
  <link rel="icon" type="image/png" href="templates/{#TEMPLATE_DIR}/assets/images/icon.png">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/bower_components/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/youplay/css/youplay.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/css/custom.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/css/WebShop.css" />
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/ajax.js"></script>
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/jquery-2.1.1.min.js"></script>
  <script>var onReady = []; </script>

  <meta itemprop="name" content="{#SERVER_NAME}"/>
  <meta itemprop="description" content="MuEffect Season 4 é um servidor custom com diversos recursos, como novos itens e sistema de eventos automaticos!"/>
  <meta itemprop="image" content="http://mueffect.top/images/site/banner.jpg"/>
  <meta itemprop="url" content="http://mueffect.top"/>
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="{#SERVER_NAME}"/>
  <meta property="og:description" content="MuEffect Season 4 é um servidor custom com diversos recursos, como novos itens e sistema de eventos automaticos!"/>
  <meta property="og:image" content="http://mueffect.top/images/site/banner.jpg"/>
  <meta property="og:url" content="http://mueffect.top"/>
  <meta property="og:site_name" content="{#TITLE_SITE}"/>
  <meta property="og:locale" content="pt_BR"/>
  <meta property="article:author" content="{#FACEBOOK_LINK}"/>
  <meta property="article:publisher" content="{#FACEBOOK_LINK}"/>
</head>
<body>

  <!-- Preloader -->
  <div class="page-preloader preloader-wrapp">
    <img src="templates/{#TEMPLATE_DIR}/assets/images/logo.png" alt="">
    <div class="preloader"></div>
  </div>
  <!-- /Preloader -->

  <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="?page=home">
          <img src="templates/{#TEMPLATE_DIR}/assets/images/logo.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Sobre <span class="caret"></span> <span class="label">informações</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="?page=downloads">Downloads</a></li>
                <li><a href="?page=register">Cadastro</a></li>
                <li><a href="?page=info">Informações</a></li>
                <li><a href="?page=vips">Vantagens VIP</a></li>
                <li><a href="panel.php?panel=open_ticket">Contato</a></li>
              </ul>
              <ul role="menu">
                <li><a href="../forum/forumdisplay.php?fid=2">Atualizações</a></li>
                <li><a href="../forum/forumdisplay.php?fid=3">Novidades</a></li>
                <li><a href="../forum/forumdisplay.php?fid=4">Moderação</a></li>
                <li><a href="../forum/forumdisplay.php?fid=5">Promoções</a></li>
              </ul>
            </div>
          </li>
        <li class="dropdown dropdown-hover ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Ranking <span class="caret"></span> <span class="label">os melhores</span>
            </a>
            <div class="dropdown-menu">
                <ul role="menu">
                    <li><a href="?page=rankreset">Top Resets</a>
                    </li>
                                        <li><a href="?page=rankpk">Top Assassino</a>
                    </li>
                    <li><a href="?page=rankguild">Top Guild</a>
                    </li>
                    <li><a href="?page=rankduel">Top Duelos</a>
                    </li>
                    <li><a href="?page=rankhour">Top Horas Online</a>
                    </li>
                </ul>
                <ul role="menu">
                    <li><a href="?page=rankbc">Top Blood Castle</a>
                    </li>
                    <li><a href="?page=rankds">Top Devil Square</a>
                    </li>
                    <li><a href="?page=rankcc">Top Chaos Castle</a>
                    </li>
                    <li><a href="?page=rankit">Top Illusion Temple</a>
                    </li>
                </ul>
            </div>
        </li>
<?php //if(SHOPPING_NUMBER >= 1): ?>
        <li class="dropdown dropdown-hover ">
            <a href="panel.php?panel=CatalogSystem">
                Loja <span class="caret"></span> <span class="label">shopping online</span>
            </a>
<!--            <div class="dropdown-menu">
                <ul role="menu">
                    <li><a href="{#SHOPPING_LINK}">Loja {#SHOPPING_NAME}</a>
                    </li>
                    <?php// if(SHOPPING_NUMBER >= 2): ?>
					<li>
					<a href="{#SHOPPING_LINK2}">Loja {#SHOPPING_NAME2}</a>
                    </li>
					<?php //endif; ?>
					<?php //if(SHOPPING_NUMBER >= 3): ?>
                    <li>
					<a href="{#SHOPPING_LINK3}">Loja {#SHOPPING_NAME3}</a>
                    </li>
					<?php //endif; ?>
                </ul>
            </div> -->
        </li>
<?php //endif; ?>
        <li class="dropdown dropdown-hover ">
            <a href="../forum" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Comunidade <span class="caret"></span> <span class="label">forum</span>
            </a>
            <div class="dropdown-menu">
                <ul role="menu">
                    <li><a href="../forum/forumdisplay.php?fid=1">Notícias</a>
                    </li>
                    <li><a href="../forum/forumdisplay.php?fid=8">Suporte</a>
                    </li>
                    <li><a href="../forum/forumdisplay.php?fid=9">Tutoriais Geral</a>
                    </li>
                    <li><a href="../forum/forumdisplay.php?fid=10">Tutoriais do jogo</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
			{#DIV[LOGIN_LOGOUT]} 
</div>    </div>
</nav>
