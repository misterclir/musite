{#INCLUDE:header} 

        <!-- Body -->
        <div id="subbody">

        <!-- Left Wrap --> 
            <!-- Body Left -->
            {#INCLUDE:menuLeft}
            <!-- //Body Left --> 
        <!-- //Left Wrap -->

        <!-- Right Wrap -->
        <div id="subright">
                                             
            <!-- Location & Sub Title -->
            <div class="locationtitle">
                <div class="location">
                    <a class="home" href="?">IN�CIO</a> &gt; <strong>PAINEL DO USU�RIO</strong>
                </div>
                <h3 class="subtitle">Painel do usu�rio</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelUser} 
                            
                    <h1 style="margin-top: 20px;">Confirmar pagamento</h1>
                    <br />
                    
                    <script type="text/javascript">
                    function show_hide_blocks(name) { 
                        if(name == "Opt_Bradesco") {
                            document.getElementById('Opt_Bradesco').style.display = 'block'; 
                            document.getElementById('Opt_Bradesco_nterminal').disabled = ''; 
                            document.getElementById('Opt_Bradesco_ntransferencia').disabled = ''; 
                            document.getElementById('Opt_Bradesco_agencia_acolhedora').disabled = ''; 
                            document.getElementById('Opt_Bradesco_nsequencia').disabled = ''; 
                        } else {
                            document.getElementById('Opt_Bradesco').style.display = 'none';
                            document.getElementById('Opt_Bradesco_nterminal').disabled = 'disabled'; 
                            document.getElementById('Opt_Bradesco_ntransferencia').disabled = 'disabled'; 
                            document.getElementById('Opt_Bradesco_agencia_acolhedora').disabled = 'disabled'; 
                            document.getElementById('Opt_Bradesco_nsequencia').disabled = 'disabled';
                        } 
                        if(name == "Opt_Itau") {
                            document.getElementById('Opt_Itau').style.display = 'block'; 
                            document.getElementById('Opt_Itau_ctr').disabled = ''; 
                            document.getElementById('Opt_Itau_caixa_eletronico').disabled = ''; 
                        } else {
                            document.getElementById('Opt_Itau').style.display = 'none';
                            document.getElementById('Opt_Itau_ctr').disabled = 'disabled'; 
                            document.getElementById('Opt_Itau_caixa_eletronico').disabled = 'disabled';
                        } 
                        if(name == "Opt_BBrasil") {
                            document.getElementById('Opt_BBrasil').style.display = 'block'; 
                            document.getElementById('Opt_BBrasil_nenvelope').disabled = ''; 
                            document.getElementById('Opt_BBrasil_ndocumento').disabled = ''; 
                        } else {
                            document.getElementById('Opt_BBrasil').style.display = 'none';
                            document.getElementById('Opt_BBrasil_nenvelope').disabled = 'disabled'; 
                            document.getElementById('Opt_BBrasil_ndocumento').disabled = 'disabled';
                        } 
                        if(name == "Opt_CXEcon") {
                            document.getElementById('Opt_CXEcon').style.display = 'block'; 
                            document.getElementById('Opt_CXEcon_nterminal').disabled = ''; 
                        } else {
                            document.getElementById('Opt_CXEcon').style.display = 'none';
                            document.getElementById('Opt_CXEcon_nterminal').disabled = 'disabled'; 
                        } 
                        if(name == "Opt_Loterica") {
                            document.getElementById('Opt_Loterica').style.display = 'block'; 
                            document.getElementById('Opt_Loterica_ncontrole').disabled = ''; 
                            document.getElementById('Opt_Loterica_nterminal').disabled = ''; 
                        } else {
                            document.getElementById('Opt_Loterica').style.display = 'none';
                            document.getElementById('Opt_Loterica_ncontrole').disabled = 'disabled'; 
                            document.getElementById('Opt_Loterica_nterminal').disabled = 'disabled'; 
                        } 
                        if(name == "Opt_CXAqui") {
                            document.getElementById('Opt_CXAqui').style.display = 'block'; 
                            document.getElementById('Opt_CXAqui_noperador').disabled = '';  
                        } else {
                            document.getElementById('Opt_CXAqui').style.display = 'none';
                            document.getElementById('Opt_CXAqui_noperador').disabled = 'disabled'; 
                        }
                        return true;
                    }
                    </script>
                    
                    <div id="etc">
                        
                        <div class="legend" style="margin-bottom: 25px;">
                            <h3 class="legend-title"><span style="font-size: 13px;">Digite os dados abaixo:</span></h3>
                            <div style="margin-bottom: 8px; margin-top: 10px;">
                                
                                <div class="qdestaques2"><strong>Aten��o:</strong> A m� utiliza��o deste servi�o pode causar o bloqueio permanente de sua conta.</div>
                                      
                                <form method="post" enctype="multipart/form-data" action="?page=paneluser&amp;option=CONFIRM_PAYMENT&amp;Write=true" id="FormConfirm">   
                                <table cellpadding="0" cellspacing="2" width="100%">
                                    <tr>
                                        <td style="width:65%; background: none;" valign="top">
                                            Quantia de {#CASH_NAME}<br /><input name="golds" type="text" class="inputbox" value="0"  maxlength="10" /> <a href="javascript:void(0);" onclick="javascript:alert('Coloque a quantidade de {#CASH_NAME} aqui.');">[?]</a><br />
                                            Qual banco voc� usou<br />
                                                <input name="bank" type="radio" value="Banco Bradesco ou Banco Postal" onclick="javascript:show_hide_blocks('Opt_Bradesco');" /> Banco Bradesco ou Banco Postal<br />
                                                <input name="bank" type="radio" value="Banco Itau" onclick="javascript:show_hide_blocks('Opt_Itau');" /> Banco Ita�<br />
                                                <input name="bank" type="radio" value="Banco do Brasil" onclick="javascript:show_hide_blocks('Opt_BBrasil');" /> Banco do Brasil<br />
                                                <input name="bank" type="radio" value="Caixa Economica Federal" onclick="javascript:show_hide_blocks('Opt_CXEcon');" /> Caixa Econ�mica Federal<br />
                                                <input name="bank" type="radio" value="Loterica" onclick="javascript:show_hide_blocks('Opt_Loterica');" /> Lot�rica<br />
                                                <input name="bank" type="radio" value="Caixa Aqui" onclick="javascript:show_hide_blocks('Opt_CXAqui');" /> Caixa Aqui<br />
                                        </td>
                                        <td style="width:35%; background: none;">
                                            <div id="Opt_Bradesco" style="display:none;">
                                                N�mero terminal<br /><input name="nterminal" class="inputbox" id="Opt_Bradesco_nterminal" type="text" maxlength="15" /><br />
                                                N�mero transfer�ncia<br /><input name="ntransferencia" class="inputbox" id="Opt_Bradesco_ntransferencia" type="text" maxlength="15" /><br />
                                                Ag�ncia acolhedora<br /><input name="agencia_acolhedora" class="inputbox" id="Opt_Bradesco_agencia_acolhedora" type="text" maxlength="15" /><br />
                                                N�mero Sequ�ncia<br /><input name="nsequencia" class="inputbox" id="Opt_Bradesco_nsequencia" type="text" maxlength="15" /><br />
                                            </div>
                                            <div id="Opt_Itau" style="display:none;">
                                                CTR<br /><input name="ctr" id="Opt_Itau_ctr" class="inputbox" type="text" maxlength="15" /><br />
                                                Caixa Eletr�nico<br /><input name="caixa_eletronico" class="inputbox" id="Opt_Itau_caixa_eletronico" type="text" maxlength="15" value="Ex: 123456/1234" /><br />
                                            </div>
                                            <div id="Opt_BBrasil" style="display:none;">
                                                N�mero Envelope<br /><input name="nenvelope" class="inputbox" id="Opt_BBrasil_nenvelope" type="text" maxlength="15" /><br />
                                                N�mero Documento<br /><input name="ndocumento" class="inputbox" id="Opt_BBrasil_ndocumento" type="text" maxlength="15" /><br />
                                            </div>
                                            <div id="Opt_CXEcon" style="display:none;">
                                                N�mero do terminal<br /><input name="nterminal" class="inputbox" id="Opt_CXEcon_nterminal" type="text" maxlength="15" /><br />
                                            </div>
                                            <div id="Opt_Loterica" style="display:none;">
                                                N�mero de controle<br /><input name="ncontrole" class="inputbox" id="Opt_Loterica_ncontrole" type="text" maxlength="15" /><br />
                                                N�mero do terminal<br /><input name="nterminal" class="inputbox" id="Opt_Loterica_nterminal" type="text" maxlength="15" /><br />
                                            </div>
                                            <div id="Opt_CXAqui" style="display:none;">
                                                N�mero do operador<br /><input name="noperador" class="inputbox" id="Opt_CXAqui_noperador" type="text" maxlength="15" /><br />
                                            </div>
                                            
                                            Data<br /><input name="data" type="text" class="inputbox" value="Ex: 01/01/2000" maxlength="10" /><br />
                                            Hora<br /><input name="hora" type="text" class="inputbox" value="Ex: 00:00:00" maxlength="8" /><br />
                                            Valor pago<br /><input name="valor" type="text" class="inputbox" value="R$ 0.00" maxlength="10" /><br />
                                            
                                            Pago em<br /><select name="pago_em" class="inputbox" /><option></option><option value="Atendente">Atendente</option><option value="Auto Atendimento">Auto Atendimento</option><option value="Trans. Eletr�nica">Trans. Eletr�nica</option></select><br />
                                            Anexo Comprovante<br /><input type="file" name="image" id="image" size="10" /> <a href="javascript:void(0);" onclick="javascript: document.getElementById('image').value = '';">[x]</a>&nbsp;<a href="javascript:void(0);" onclick="javascript:alert('Somente fotos com a extenss�o JPG.');">[?]</a><br />   
                                            Coment�rio<br /><textarea rows="5" style="width:200px" name="comment">M�ximo 200 caracters.</textarea>
                                        </td>  
                                    </tr>
                                </table>
                                <input type="submit" value="Enviar Confirma��o" class="button" style="margin-top: 6px;"/> 
                                </form>
                                                                
                                <div class="quadrosOut">
                                    {#RespostWrite}
                                </div>
                                
                             </div>
                        </div>

                    
                        
                    </div>                           
                   
                </div>           
            </div>
            <!-- //Content -->

        </div>
        <!-- //Right Wrap -->
               
    </div>     
    <!-- //Body -->

     
        <!-- Footer -->
                          
<div id="subbottomPanel"></div>
{#INCLUDE:footer}
