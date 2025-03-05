{{#INCLUDE:header}
  {#INCLUDE:menuLeft}

<?php 
$urlatual = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
    <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    <div id="mtwmci"> 
<section class="content-wrap full youplay-login">
    <div class="youplay-banner banner-top">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-blog-bg.jpg')"></div>

    <div class="info">
        <div>
            <div class="container align-center">
                                    <div class="youplay-form">
                        <span style="font-family:Lato,sans-serif;color:#fff;font-size:28px;padding-bottom:30px;font-weight:500;line-height:1.1;letter-spacing:.06em;-webkit-font-smoothing:antialiased;">
						
						</span>
						<div class="sub_wrap">
            <div id="etc">
                    <h1 class="topomenumeio">RECUPERAR SENHA</h1><br>
					<form action="?page=lostpw[send]&amp;type=password&amp;Write=true" method="post">
                    <p>
                        <br>
						<label>Digite o seu login:</label>
						<br>
						<br>
						<div class="youplay-input">
                        <input name="account" id="account" type="text" placeholder="Seu Login" />
						</div>
                    </p>
                            <div class="row">
                                <input type='submit' value='Recuperar' class='button' style="margin-top: 6px;"/>
                            </div>
                </form>
                    </div>
                    <div class="mt-5">
                        
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
<div id="mtwmcif"></div>
    </div>
    <!-- End Content Main -->

    {#INCLUDE:menuRight}
{#INCLUDE:footer}