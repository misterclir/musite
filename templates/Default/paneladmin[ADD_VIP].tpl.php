{#INCLUDE:sidebarAdmin}
	
	<!-- PAGE CONTENT -->
            <div class="page-content">
                
                {#INCLUDE:headerAdmin}
                    
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" action="panel.php?panel=paneladmin&amp;option=ADD_VIP&amp;Write=true" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Adicionar VIP</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body form-group-separated">

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Login</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="account" class="form-control" placeholder="Digite o Login">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">A&ccedil;&atilde;o</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select name="flat" class="form-control select" style="cursor: pointer;">
	                                            <option value="1">{#VIP_NAME_1}</option>
	                                            <option value="2">{#VIP_NAME_2}</option>
	                                            <option value="3">{#VIP_NAME_3}</option>
	                                            <option value="4">{#VIP_NAME_4}</option>
	                                            <option value="5">{#VIP_NAME_5}</option>
                                            </select>
                                            <span class="help-block">Clique Para Escolher</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Dias</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="days" class="form-control" placeholder="Digite A Quantidade de Dias">
                                            </div>
                                            <span class="help-block">(Digite A Quantidade de Dias)</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-footer">                                   
                                    <button class="btn btn-primary pull-right">Adicionar</button>
                                </div>
                            </div>
                            </form>

							{#RESULTTPL}
                            
                        </div>
                    </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
{#INCLUDE:footerAdmin}