{#INCLUDE:header}
    {#INCLUDE:menuLeft}

            <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
            <div id="mtwmcih"></div> 
            <div id="mtwmci"> 
                <div class="locationtitle cadastro">
                    <h1>Cadastro</h1>
                </div>
                <script language='JavaScript'> 
                function Enviar_Check(){ 
                    var login = document.getElementById('login').value;
                    var senha = document.getElementById('senha').value;
                    var resenha = document.getElementById('resenha').value;
                    var email = document.getElementById('email').value;
                    var reemail = document.getElementById('reemail').value;
                    var nome = document.getElementById('nome').value;
                    //var telefone = document.getElementById('telefone').value;
                    //var sexo = document.getElementById('sexo').value;
                    //var nascimento_dia = document.getElementById('nascimento_dia').value;
                    //var nascimento_mes = document.getElementById('nascimento_mes').value;
                    //var nascimento_ano = document.getElementById('nascimento_ano').value;
                    //var pergunta = document.getElementById('pergunta').value;
                    //var resposta = document.getElementById('resposta').value;
                    
                    if(login == '' || senha == '' || resenha == '' || email == '' || reemail == '' || nome == '') {
                        alert("Erro: Você deve preencher todos os campos antes de prosseguir.");
                    } else {
                    document.cadastro.submit(); 
                    }
                }
                </script>  
                <div class="sub_wrap">
                    <div style="margin-bottom: 5px;" class="quadrosOut"></div>
                    <div id='resultados'>{#RESULT_REGISTER}</div><br>
                    <form name='cadastro' action='?page=register&write=true' method='post' style="">
					   
                            <div class="legend" style="margin-bottom: 25px;">
                                <h3 class="legend-title"><span style="font-size: 13px;">DADOS DA CONTA</span></h3>
                                    <div style="margin-bottom: 8px; margin-top: 10px;">
                            <table width='100%' border='0'>
							               <tr>
                              <td width="23%" align='right'>Login: </td>
                              <td width="43%"> <input type="hidden" name="indicado_por" value=""><input name='login' id='login' onkeyup="this.value=this.value.toLowerCase()" maxlength='10' type='text' class='inputbox' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;login='+ document.getElementById('login').value, 'resultados', 'get');" /></td>
                              <td width="34%"><div id='login_error'></div></td>
                             </tr>
                             <tr>
                              <td align='right'>Senha: </td>
                              <td><input name='senha' id='senha' maxlength='10' type='password' class='inputbox' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;senha='+ document.getElementById('senha').value+'&amp;resenha='+ document.getElementById('resenha').value, 'resultados', 'get');" autocomplete="new-password"/></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td align='right'>Repetir Senha: </td>
                              <td><input name='resenha' id='resenha' maxlength='10' type='password' class='inputbox' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;senha='+ document.getElementById('senha').value+'&amp;resenha='+ document.getElementById('resenha').value, 'resultados', 'get'); "/></td>
                              <td><div id='senha_error'></div></td>
                             </tr>
                             <tr>
                              <td align='right'>* E-mail:</td>
                              <td><input name='email' id='email' maxlength='200' type='text' class='inputbox' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;email='+ document.getElementById('email').value+'&amp;reemail='+ document.getElementById('reemail').value, 'resultados', 'get'); " /></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td align='right'>Repetir E-mail:</td>
                              <td><input name='reemail' id='reemail' maxlength='200' type='text' class='inputbox' onblur="javascript: Verify ('?page=ajax&amp;require=register&amp;email='+ document.getElementById('email').value+'&amp;reemail='+ document.getElementById('reemail').value, 'resultados', 'get'); "/></td>
                              <td><div id='email_error'></div></td>
                             </tr>
							               <tr>
                              <td align='right'>Nome:</td>
                              <td><input name='nome' id='nome' maxlength='15' type='text' class='inputbox'/></td>
                              <td>&nbsp;</td>
                             </tr>
                             <tr>
                              <td colspan='3'><p class="message"><strong>* <font color="green">Use um e-mail válido</font></strong>, pois você terá que <strong><font color="green">ativar sua conta</font></strong> para poder jogar.</p></td>
                             </tr>
                         </table>
                         </div>
                       </div>    

                      
                         <div class="legend" style="margin-bottom: 15px;">
                                <h3 class="legend-title"><span style="font-size: 13px;">TERMOS DE USO:</span></h3>
                                    <div style="margin-bottom: 8px; margin-top: 10px;">
                         
                         <table width='100%' border='0'>
                             <tr>
                              <td colspan='2' align="center"><iframe src='templates/{#TEMPLATE_DIR}/termos.tpl.php' width='100%' height='100'></iframe></td>
                             </tr>
                             </table>
                            </div>
                           </div>
                            <div align="center">
                                 <input type='button' onclick='Enviar_Check()' value='Criar conta' class='button'>
                             </div>
                            </form>             
                </div> 
            <div id="mtwmcif"></div>
            </div>
            <!-- End Content Main -->
            
            {#INCLUDE:menuRight}
{#INCLUDE:footer}