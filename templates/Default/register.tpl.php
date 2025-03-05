{#INCLUDE:header}
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
						

<section class="content-wrap">


    <!-- Banner -->
<div class="youplay-banner banner-top youplay-banner-parallax small">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-blog-bg.jpg')">
    </div>
    <div class="info">
        <div>
            <div class="container">
                <h1 class="mb-0">Cadastro</h1>
                <h3 class="mt-5">Game e Forum tudo em uma única conta</h3>
            </div>
        </div>
    </div>
</div>
<!-- /Banner -->
<div class="container youplay-news mb-70">
    <div class="col-md-12">
        
<!-- Billing Information -->
<h2 class="mt-0">Informações</h2>

                        <div id='resultados'></div>
                        {#RESULT_REGISTER}
                        <form name='cadastro' action='?page=register&write=true' class='register-form' method='post'>
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

    <div class="row">
        <div class="col-md-6 input-email">
            <p>Email:</p>
            <div class="youplay-input">
			<input name='email' id='email' maxlength='40' type='text' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;email='+ document.getElementById('email').value+'&amp;reemail='+ document.getElementById('reemail').value, 'resultados', 'get'); " /></td>
            </div>
        </div>
        <div class="col-md-6 input-email-confirmation">
            <p>Confirme o email:</p>
            <div class="youplay-input">
                <input name='reemail' id='reemail' maxlength='40' type='text' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;email='+ document.getElementById('email').value+'&amp;reemail='+ document.getElementById('reemail').value, 'resultados', 'get'); "/></td>
			</div>
				<div id='email_error' class="error-label"></div>
		</div>
    </div>

    <div class="row">
        <div class="col-md-4 input-password">
            <p>Senha:</p>
            <div class="youplay-input">
                <input name='senha' id='senha' maxlength='10' type='password' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;senha='+ document.getElementById('senha').value+'&amp;resenha='+ document.getElementById('resenha').value, 'resultados', 'get'); "/>
			</div>
        </div>
        <div class="col-md-4 input-password-confirmation">
            <p>	Confirmar Senha:</p>
            <div class="youplay-input">
                <input name='resenha' id='resenha' maxlength='10' type='password' class='' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;senha='+ document.getElementById('senha').value+'&amp;resenha='+ document.getElementById('resenha').value, 'resultados', 'get'); "/></td>
			</div>
            <div id='senha_error' class="error-label"></div>
        </div>
        <div class="col-md-4 input-security-code">
            <div class="g-recaptcha" style="width:80%;margin:0 auto;padding-bottom:5px;" data-sitekey="6LdiQycUAAAAAEhzsOARPtMAdzbE3XzVBVKZg-38"></div>
        </div>
    </div>

    <div class="youplay-checkbox input-agree-terms">
        <input type="checkbox" name="agree_terms" id="checkbox1" checked onchange="checkAgreeTerms()">
        <label for="checkbox1">Eu concordo com os termos de uso do servidor</label>
        <div class="error-label"></div>
    </div>
	
	    <div class="align-right">
<button type='button' onclick='Enviar_Check()' class='btn btn-lg pull-right mt-20'>Criar Conta</button>
                      </form>
</div>
</div></div>
    

{#INCLUDE:footer}