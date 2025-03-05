<!-- Footer -->
<footer class="youplay-footer-parallax">
    <div class="wrapper" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/footer-bg.jpg')">

        <!-- Social Buttons -->
        <div class="social">
            <div class="container">
                <h3>Colabore com o {#SERVER_NAME}</h3>

                <div class="social-icons">
                    <div class="social-icon">
                        <a href="{#FACEBOOK_LINK}">
                            <i class="fa fa-facebook-square"></i>
                            <span>Curta nossa página</span>
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="forum">
                            <i class="fa fa-group"></i>
                            <span>Participe do Forum</span>
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="panel.php?panel=buy_vips">
                            <i class="fa fa-diamond"></i>
                            <span>Seja um player VIP</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <small>Equipe {#SERVER_NAME} &copy; 2016. Todos direitos reservados <br> MuSite v2.7.x by F-Team - Leandro Daldegam.</small>
            </div>
        </div>
        <!-- /Copyright -->

    </div>
</footer>
<!-- /Footer --></section>

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
<script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="templates/{#TEMPLATE_DIR}/assets/bower_components/moment-timezone/builds/moment-timezone-with-data.min.js"></script>


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