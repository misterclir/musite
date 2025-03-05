<?php 
$urlatual = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
    <ul class="nav navbar-nav navbar-right">
                <li>
            <a style="font-weight: bold;" href="?page=register" role="button" aria-expanded="false">
                Criar Conta <span class="label"></span>
            </a>
        </li>
        <li class="dropdown dropdown-hover dropdown-cart">
            <a href="#login1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Login
            </a>
            <div class="dropdown-menu" style="width: 300px;">
                 <div class="row header-login">
                    <form role="form" method="post" action="javascript: Verify ('?page=ajax&amp;url=<?=$urlatual;?>&amp;require=login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get');">
                        <div class="youplay-input">
                            <input type="text" name="login" id="userName" class="form-control" placeholder="Login" onclick="$('.dropdown-cart').addClass('open');" >
                        </div>
                        <div class="youplay-input">
                            <input type="password" name="password" id="userPwd" class="form-control" placeholder="Senha" onclick="$('.dropdown-cart').addClass('open');" >
                        </div>
                        <div class="row">
                            <div class="col-sm-7 small">
                                <div class="youplay-checkbox">
                                    <input class="pull-left" type="checkbox" name="remember" value="yes" id="checkbox1" checked ">
                                    <label for="checkbox1" style="padding-left: 25px;" class="mt-10">Manter conectado</label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div style="cursor:pointer;" onClick="javascript: Verify ('?page=ajax&amp;url=<?=$urlatual;?>&amp;require=login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get');" class="btn btn-default pull-right">Entrar</div>
								<input type="submit" style="display:none;"/>
							</div>
                        </div>
						<div id="ResultAjaxLogin" style="margin-left: 2px; color: #CFB988;"></div>
                        <div class="mt-5 small" style="text-align: center; color: #999">
                            <a href="?page=lostpw">Esqueceu sua senha?</a>
                        </div>
                    </form>
                </div>
            </div>
        </li>
            </ul>