<!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> <strong>Sair</strong> ?</div>
                    <div class="mb-content">
                        <p>Você tem certeza que deseja sair?</p>                    
                        <p>Pressione Não e contine logado. Pressione Sim para continuar.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="panel.php?panel=logout" class="btn btn-success btn-lg">Sim</a>
                            <button class="btn btn-default btn-lg mb-control-close">Não</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="templates/{#TEMPLATE_DIR}/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="templates/{#TEMPLATE_DIR}/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='templates/{#TEMPLATE_DIR}/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='templates/{#TEMPLATE_DIR}/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='templates/{#TEMPLATE_DIR}/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='templates/{#TEMPLATE_DIR}/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/settings.js"></script>
        
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/plugins.js"></script>        
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/actions.js"></script>
        
        <script type="text/javascript" src="templates/{#TEMPLATE_DIR}/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>