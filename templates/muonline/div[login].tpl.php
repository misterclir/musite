<div id="mtwmrlogincout">
    <input type="text" id="userName" class="inputGray" value="Login" onfocus="emptyInput(this);" onblur="writeDefault(this);" />
    <input type="password" id="userPwd" class="inputGray" value="Senha" onfocus="emptyInput(this);" onblur="writeDefault(this);" />

    <div id="ResultAjaxLogin"></div>
    
    <button id="ButtonLogin" style="height:55px; width:89px; margin-bottom:14px; margin-left:0px;" onclick="javascript: Verify('?page=ajax&amp;require=login&amp;userName=' + document.getElementById('userName').value + '&amp;userPwd=' + document.getElementById('userPwd').value, 'ResultAjaxLogin', 'get');">
        <span>Login</span>
    </button>

    <a style="margin-top:11px; margin-left:3px;" href="?page=lostpw" id="recoveryPassword">&raquo; Recuperar Senha</a>
    <a style="margin-left:3px;" href="?page=register" id="register">&raquo; Efetuar Cadastro</a>
    <div style="clear:both;"></div>
</div>
<script>
    $("#userPwd").keypress(function (e) {
        if (e.which == 13) {
            $("#ButtonLogin").click();
        }
    });
</script>