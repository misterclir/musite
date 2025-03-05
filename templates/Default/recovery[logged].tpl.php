{#INCLUDE:header}

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
                        <span style="font-family:Lato,sans-serif;color:#fff;font-size:28px;padding-bottom:30px;font-weight:500;line-height:1.1;letter-spacing:.06em;-webkit-font-smoothing:antialiased;">
						Recuperar Senha
						</span>

						<div  style="margin-top:15px;margin-bottom:10px;">
                        <br>Desculpe, você precisa estar deslogado para realizar esta ação, <a href="panel.php?panel=logout">clique aqui</a> para deslogar. E tente novamente.<br><br>
						</div>
                            <div class="row">
                               <center><a href="?page=home" class="btn btn-default">Voltar</a></center>
                            </div>
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