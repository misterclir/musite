<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="iso-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="MuUltimate Server" />
<meta name="keywords" content="MuOnline, Mu, MuSite, Site, Mu Site, RPG, MMORPG" />
<meta name="Author" content="MuUltimate" />
<base href="/">
<title>{#TITLE_SITE}</title>
  <link rel="icon" type="image/png" href="templates/{#TEMPLATE_DIR}/assets/images/icon.png">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/bower_components/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/youplay/css/youplay.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/{#TEMPLATE_DIR}/assets/css/custom.css" />
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/ajax.js"></script>
  <script>var onReady = []; </script>
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
                <li><a href="../forum/forumdisplay.php?fid=2">Noticias</a></li>
                <li><a href="../forum/forumdisplay.php?fid=3">Manutenções</a></li>
                <li><a href="../forum/forumdisplay.php?fid=4">Eventos</a></li>
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
<?php if(SHOPPING_NUMBER >= 1): ?>
        <li class="dropdown dropdown-hover ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Loja <span class="caret"></span> <span class="label">shopping online</span>
            </a>
            <div class="dropdown-menu">
                <ul role="menu">
                    <li><a href="{#SHOPPING_LINK}">Loja {#SHOPPING_NAME}</a>
                    </li>
                    <?php if(SHOPPING_NUMBER >= 2): ?>
					<li>
					<a href="{#SHOPPING_LINK2}">Loja {#SHOPPING_NAME2}</a>
                    </li>
					<?php endif; ?>
					<?php if(SHOPPING_NUMBER >= 3): ?>
                    <li>
					<a href="{#SHOPPING_LINK3}">Loja {#SHOPPING_NAME3}</a>
                    </li>
					<?php endif; ?>
                </ul>
            </div>
        </li>
<?php endif; ?>
        <li class="dropdown dropdown-hover ">
            <a href="../forum" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Comunidade <span class="caret"></span> <span class="label">forum</span>
            </a>
            <div class="dropdown-menu">
                <ul role="menu">
                    <li><a href="../forum/forumdisplay.php?fid=1">Notícias</a>
                    </li>
                    <li><a href="../forum/forumdisplay.php?fid=6">Suporte</a>
                    </li>
                    <li><a href="../forum/forumdisplay.php?fid=11">Tutoriais Geral</a>
                    </li>
                    <li><a href="../forum/forumdisplay.php?fid=12">Tutoriais do jogo</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
                <li>
            <a style="font-weight: bold;" href="?page=register" role="button" aria-expanded="false">
                Criar Conta <span class="label"></span>
            </a>
        </li>
            </ul>
</div>    </div>
</nav>

<!-- Main Content -->
<style>
body {overflow-y: hidden!important;}
</style>
<?php 
$urlatual = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<section class="content-wrap full youplay-login">
    <div class="youplay-banner banner-top">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-blog-bg.jpg')"></div>

    <div class="info">
        <div>
            <div class="container align-center">
                                    <div class="youplay-form">
						<h5>Erro: Você deve estar logado para acessar essa página.</h5>
                        <h1>Login</h1>

                        <form role="form" method="post" action="javascript: Verify ('?page=ajax&amp;url=<?=$urlatual;?>&amp;require=login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get');">
                        <div class="youplay-input">
                                <input type="text" name="login" id="userName" class="form-control" placeholder="Login" onclick="$('.dropdown-cart').addClass('open');" >
                        </div>
                            <div class="youplay-input">
                                <input type="password" name="password" id="userPwd" class="form-control" placeholder="Senha" onclick="$('.dropdown-cart').addClass('open');" >
                        </div>
                                                                                    
                            <div class="row">
                                <div class="col-md-5 small">
                                    <div class="youplay-checkbox">
                                        <input type="checkbox" name="remember" value="yes" id="checkbox1" checked ">
                                        <label for="checkbox1" class="mt-10">Manter conectado</label>
                                    </div>
                                </div>
                            <div class="col-md-7">
                                <div style="cursor:pointer;" onClick="javascript: Verify ('?page=ajax&amp;url=<?=$urlatual;?>&amp;require=login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get');" class="btn btn-default pull-right">Entrar</div>
								<input type="submit" style="display:none;"/>
							</div>
                            </div>
                        </form>

						<div id="ResultAjaxLogin" style="margin-left: 2px; color: #CFB988;"></div>
                    </div>
                    <div class="mt-5">
                        <a href="?page=lostpw" style="text-decoration: none" class="mr-20 small">Recuperar senha</a>
                        <a href="?page=register" style="text-decoration: none" class="small">Criar nova conta</a>
                    </div>
                            </div>
        </div>
    </div>
</div></section>

  <!-- jQuery -->
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Hexagon Progress -->
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/HexagonProgress/jquery.hexagonprogress.min.js"></script>


  <!-- Bootstrap -->
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Jarallax -->
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/jarallax/dist/jarallax.min.js"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/smoothscroll-for-websites/SmoothScroll.js"></script>

  <!-- Owl Carousel -->
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

  <!-- Countdown -->
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
  <!-- Youplay -->
  <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/youplay/js/youplay.min.js"></script>


<script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            parallax:         true,
            navbarSmall:      false,
            fadeBetweenPages: true,
        });
    }
</script>


<script>
    for(var i in onReady) onReady[i]();
</script>

</body>

</html>