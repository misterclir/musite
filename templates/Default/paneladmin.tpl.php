{#INCLUDE:sidebarAdmin}
	
	<!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->                   
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sair</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Principal</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Contas</div>                                
                                        <div class="widget-subtitle"></div>
                                        <div class="widget-int">{#TOTAL_ACCOUNTS}</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Total Personagens</div>
                                        <div class="widget-subtitle"></div>
                                        <div class="widget-int">{#TOTAL_CHARATERS}</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Recorde Online</div>
                                        <div class="widget-subtitle"></div>
                                        <div class="widget-int">{#RECORD_ONLINE}</div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remover Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-rocket"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">{#TOTAL_ACCOUNTS_VIP_3}</div>
                                    <div class="widget-title">Conta(s)</div>
                                    <div class="widget-subtitle">{#VIP_NAME_3}</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remover Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-unlock-alt"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">{#TOTAL_ACCOUNTS_BANNEDS}</div>
                                    <div class="widget-title">Conta(s)</div>
                                    <div class="widget-subtitle">Bloqueadas</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remover Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Carregando...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remover Widget"><span class="fa fa-times"></span></a>
                                </div>                           
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Informações</h3>
                                        <span>{#SERVER_NAME}</span>
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Minimizar</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remover</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Total de Contas</td>
                                                    <td>{#TOTAL_ACCOUNTS}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total de Personagens</td>
                                                    <td>{#TOTAL_CHARATERS}</td>
                                                </tr>
                                                <tr>
                                                    <td>Recorde Online</td>
                                                    <td>{#RECORD_ONLINE}</td>
                                                </tr>
                                                <tr>
                                                    <td>{#VIP_NAME_1}</td>
                                                    <td>{#TOTAL_ACCOUNTS_VIP_SILVER} <a href="panel.php?panel=paneladmin&amp;option=sincronize&amp;type=1">Sincronizar</a></td>
                                                </tr>
                                                <tr>
                                                    <td>{#VIP_NAME_2}</td>
                                                    <td>{#TOTAL_ACCOUNTS_VIP_GOLD} <a href="panel.php?panel=paneladmin&amp;option=sincronize&amp;type=1">Sincronizar</a></td>
                                                </tr>
                                                <tr>
                                                    <td>{#VIP_NAME_3}</td>
                                                    <td>{#TOTAL_ACCOUNTS_VIP_3} <a href="panel.php?panel=paneladmin&amp;option=sincronize&amp;type=1">Sincronizar</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Personagens Banidos</td>
                                                    <td>{#TOTAL_CHARACTERS_BANNEDS} <a href="panel.php?panel=paneladmin&amp;option=sincronize&amp;type=2">Sincronizar</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Contas Banidos</td>
                                                    <td>{#TOTAL_ACCOUNTS_BANNEDS} <a href="panel.php?panel=paneladmin&amp;option=sincronize&amp;type=2">Sincronizar</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
{#INCLUDE:footerAdmin}