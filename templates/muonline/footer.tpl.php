            <div style="clear:both;"></div>
        </div>
        <!-- End Main -->
    </div>
	
	
<!--POPUP-->	
<script>
  $(function() {
    $( "#dialog" ).dialog({
        autoOpen: true,
		resizable: false,
        width: 490,
		buttons: {
        "Fechar": function() {
        $(this).dialog("close");
        }
        }
		});
  }); 
</script>  
	
<!-- <script type="text/javascript">
window.alert("\n\n");
</script>-->

<!--margin-left-(img)/2 + 30px | margin-top-(img)/2 | default: -356 x -169-->

<style type="text/css">
#popup{
	position: absolute;
	left: 50%;
	top: 50%;
	margin-left:-356px;
	margin-top:-169px;
	display: none;
	z-index: 10000;
	cursor: pointer;
}
#datenumber{
	position: absolute;
	line-height: 48px;
    font-size: 37px;
	font-family: "OPTIMUSPRINCEPSSEMIBOLD";
	color:#FFDE5B;
	text-align: center;
    text-shadow: 1px 1px 1px #000; 
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	A:link {text-decoration: none} 
	A:visited {text-decoration: none} 
	A:active {text-decoration: none} 
	A:hover {text-decoration: none}
}
#dayhour{
	position: absolute;
	line-height: 48px;
    font-size: 21px;
	color:#FFDE5B;
	font-family: "OPTIMUSPRINCEPSSEMIBOLD";
	text-align: center;
    text-shadow: 1px 1px 1px #000; 
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>


<script language="javascript" type="">
function fechar(){
document.getElementById('popup').style.display = 'none';
}
</script>


    <!-- End WebSite Content -->

    <!-- Footer -->
    <div id="mtbackgroundfooter">
        <div id="mtbackgroundfooterc">
            <div id="copy">
				<p>Deus é o maior em todas as coisas, sem ele nada é possível.</p>
                <p>Copyright - Website refeito por Felipe Bruno @ {#SERVER_NAME} - 2016 ~ <?php echo date('Y');?></p>
                <p>Layout desenhado por Gabriel David</p>
            </div>
            <!--
           <div id="psalm">
                <p>"Felizes sÃ£o os que ouvem a palavra de Deus e a guardam!"</p>
            </div> 
            -->
            <a href="javascript: void();" id="footadm"></a>
        </div>
    </div>
    <!-- End Footer -->
</body>
</html>