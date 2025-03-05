{#INCLUDE:sidebarAdmin}
	
	<!-- PAGE CONTENT -->
            <div class="page-content">
                	{#INCLUDE:headerAdmin}                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" action="panel.php?panel=paneladmin&option=ADD_POL&action=insert" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Adicionar Enquetes</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body form-group-separated">

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Pergunta da enquete</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="question" maxlength="50" class="form-control" placeholder="Digite a  Pergunta da enquete">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Resposta 1</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="answer[]" maxlength="50" class="form-control" placeholder="Digite a Resposta 1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Resposta 2</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="answer[]" maxlength="50" class="form-control" placeholder="Digite a Resposta 2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Resposta 3</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="answer[]" maxlength="50" class="form-control" placeholder="Digite a Resposta 3">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Resposta 4</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="answer[]" maxlength="50" class="form-control" placeholder="Digite a Resposta 4">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Resposta 5</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="answer[]" maxlength="50" class="form-control" placeholder="Digite a Resposta 5">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-footer">                                   
                                    <button class="btn btn-primary pull-right">Cadastrar</button>
                                </div>
                            </div>
                            </form>

							{#POLL_RESULT_ADMIN}
                            
                        </div>
                    </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
{#INCLUDE:footerAdmin}