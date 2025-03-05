<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="iso-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="LexMu Server" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="MuOnline, Mu, MuSite, Site, Mu Site, RPG, MMORPG" />
<meta name="Author" content="Felipe Bruno" />
<base href="/">
<title>{#TITLE_SITE}</title>
  <link rel="icon" type="image/png" href="templates/Default/assets/images/icon.png">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="templates/Default/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/Default/assets/bower_components/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/Default/assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/Default/assets/youplay/css/youplay.min.css" />
  <link rel="stylesheet" type="text/css" href="templates/Default/assets/css/custom.css" />
  <link rel="stylesheet" type="text/css" href="templates/Default/assets/css/WebShop.css" />
  <link rel="stylesheet" type="text/css" href="templates/Default/assets/css/slider2.css" />
  <link rel="stylesheet" type="text/css" href="templates/Default/assets/css/slider.css" />
  <script type="text/javascript" src="templates/Default/js/ajax.js"></script>
  <script type="text/javascript" src="templates/Default/js/jquery-2.1.1.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,400" rel="stylesheet">
  <script>var onReady = []; </script>
</head>
<body style="margin:0!important;">
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
        </ul>
		<script language='JavaScript'> 
                        function Enviar_Check(){ 
                          var login = document.getElementById('login').value;
                          var senha = document.getElementById('senha').value;
                          var resenha = document.getElementById('resenha').value;
                          var email = document.getElementById('email').value;
                          var reemail = document.getElementById('reemail').value;
                          var nome = document.getElementById('nome').value;
                           if(login == '' || senha == '' || resenha == '' || email == '' || reemail == '' || nome == '') {
                               alert("Erro: Você deve preencher todos os campos antes de prosseguir.");
                           } else {
                               document.cadastro.submit(); 
                           }
                        }
                        </script>
<div style="width:98%;min-height:96%;background:rgba(30,30,50,.5);position:relative;margin:1% auto;">
		  <div class="col-md-7" >
		  <center style="background:rgba(2,2,25,.5);"><a href="?page=home" target="_BLANK" style="text-decoration:none;"><h1 style="margin-top:12px;margin-bottom:-5px;">Inauguração <img src="templates/{#TEMPLATE_DIR}/assets/images/logo.png" alt=""></h1><h4 style="background:rgba(255,100,100,.5);">Clique aqui para ir ao site</h4></a></center>
<div class="countdown  style-1" id="youplay_countdown_id_1" data-end="2017-06-16 14:00" data-timezone="America/Sao_Paulo"></div>

			<center><h2>Baixe o jogo e cadastre-se ao lado!</h2><br>
			<a class="btn btn-default" target="_blank" style="background: rgba(2,2,25,.3);width:60%;margin-bottom:10px;" href=<?=DOWNLOAD_GAMELITE_LINK1?>'>
                                    <i class="fa fa-cloud-download" style="font-size: 25px;" aria-hidden="true"></i> <br/>
                                    Servidor MEGA.NZ
                                </a><br>
			<a class="btn btn-default" target="_blank" style="background: rgba(2,2,25,.3);width:60%;margin-bottom:10px;" href=<?=DOWNLOAD_GAMELITE_LINK2?>'>
                                    <i class="fa fa-cloud-download" style="font-size: 25px;" aria-hidden="true"></i> <br/>
                                    Servidor Google Drive
                                </a><br><br>
								<audio autoplay loop controls><source src="templates/Default/assets/music.mp3" type="audio/mp3"></audio>
								</center>
			

		  </div>
      <script type="text/javascript">
        jQuery(function() {
          jQuery("#youplay_countdown_id_1").each(function() {
              var tz = jQuery(this).attr('data-timezone');
              var end = jQuery(this).attr('data-end');
                  end = moment.tz(end, tz).toDate();
              jQuery(this).countdown(end, function(event) {
                
        jQuery(this).html(
          event.strftime([
            '<div class="countdown-item">',
                '<span>Dias</span>',
                '<span><span>%D</span></span>',
            '</div>',
            '<div class="countdown-item">',
                '<span>Horas</span>',
                '<span><span>%H</span></span>',
            '</div>',
            '<div class="countdown-item">',
                '<span>Minutos</span>',
                '<span><span>%M</span></span>',
            '</div>',
            '<div class="countdown-item">',
                '<span>Segundos</span>',
                '<span><span>%S</span></span>',
            '</div>'
          ].join(''))
        );
              });
          })
        })
      </script>
	  
		<div class="col-md-5" style="padding:0;margin:0;">
            <ul class="pricing-table" style="background:rgba(2,2,25,.6);">
			<div id='resultados'></div>
			<div class="row" style="max-width:70%;margin:0 auto;padding-top:5px;">{#RESULT_REGISTER}</div>
              <li class="plan-name" style="padding:15px!important;">
                Cadastro Rápido
              </li>
			  <form name='cadastro' action='?page=fastreg&write=true' class='register-form' method='post'>
              <div style="padding: 10px 25px;margin-top:-25px!important;">
    <div class="row">
        <div class="col-md-6 input-user">
            <p>Login:</p>
            <div class="youplay-input">
			<input name='login' id='login' onkeyup="this.value=this.value.toLowerCase()" maxlength='10' type='text' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;login='+ document.getElementById('login').value, 'resultados', 'get'); "/>
			</div>
			<div id='login_error' class='error_label'></div>
        </div>
        <div class="col-md-6 input-name">
            <p>Apelido:</p>
            <div class="youplay-input">
			<input name='nome' id='nome' maxlength='10' type='text' class='' />
            </div>
        </div>
    </div>
            <p>Email:</p>
            <div class="youplay-input">
			<input name='email' id='email' maxlength='40' type='text' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;email='+ document.getElementById('email').value+'&amp;reemail='+ document.getElementById('reemail').value, 'resultados', 'get'); " /></td>
            </div>
            <p>Confirme o email:</p>
            <div class="youplay-input">
                <input name='reemail' id='reemail' maxlength='40' type='text' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;email='+ document.getElementById('email').value+'&amp;reemail='+ document.getElementById('reemail').value, 'resultados', 'get'); "/></td>
			</div>
				<div id='email_error' class="error-label"></div>
				
    <div class="row" style="margin-top:-15px!important;">
        <div class="col-md-6 input-password">
            <p>Senha:</p>
            <div class="youplay-input">
                <input name='senha' id='senha' maxlength='10' type='password' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;senha='+ document.getElementById('senha').value+'&amp;resenha='+ document.getElementById('resenha').value, 'resultados', 'get'); "/>
			</div>
        </div>
        <div class="col-md-6 input-password-confirmation">
            <p>	Confirmar Senha:</p>
            <div class="youplay-input">
                <input name='resenha' id='resenha' maxlength='10' type='password' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;senha='+ document.getElementById('senha').value+'&amp;resenha='+ document.getElementById('resenha').value, 'resultados', 'get'); "/></td>
			</div>
            <div id='senha_error' class="error-label"></div>
        </div>
    </div>
	<div class="g-recaptcha" style="width:80%;margin:0 auto;padding-bottom:5px;" data-sitekey="6Len4yQUAAAAAN0u4wD2urKHiMG2SeACKYw_SbbW"></div>
	    <div class="youplay-checkbox input-agree-terms">
        <input type="checkbox" name="agree_terms" id="checkbox1" checked onchange="checkAgreeTerms()">
        <label for="checkbox1">Eu concordo com os termos de uso do servidor</label>
        <div class="error-label"></div>
    </div>
              </div>
              <li class="plan-action" style="margin-top:-40px!important;">
                <button type='button' onclick='Enviar_Check()' class="btn btn-default" href="#">Cadastrar-me</button>
              </li>
            </ul>
        </div><br><br>
		<center><h3>Bate-Papo LexMu</h3>
		<div style="width:540px;height:405px;border-radius:8px;border:rgba(2,2,25,.6) 2px double;"><embed wmode="transparent" src="http://www.xatech.com/web_gear/chat/chat.swf" quality="high" width="540" height="405" name="chat" FlashVars="id=218667372&rl=Brazilian" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://xat.com/update_flash.php" />
		</div></center><br>
		</div>

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