<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />  

	<title>Painel GameMaster {#SERVER_NAME}</title>
	
	<link rel="stylesheet" href="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/js/hideshow.js" type="text/javascript"></script>
	<script src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="templates/<?php echo TEMPLATE_DIR; ?>/new_panel/js/jquery.equalHeight.js"></script>

	<script type="text/javascript" src="templates/darkstyle/js/functions.js"></script>  

<script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>


</head>
<body>

	<header id="header">
		<hgroup>
		  <h1 class="site_title"><a href="?page=panelgamemaster">Painel do GM</a>            </h1>
		  <h2 class="section_title">Conte&uacute;do</h2>
            <div class="btn_view_site"><a href="?page=home">Voltar ao Site</a></div>
      </hgroup>
</header>
    <!-- end of header bar -->
    <section id="secondary_bar">
      <div class="user">
        <p>Seja bem-vindo
          <?php
$name = mssql_query("Select top 1 memb_name from muonline.dbo.memb_info where memb___id='".$_SESSION['LOGIN']."'");
$name_r = mssql_fetch_row($name);
echo "$name_r[0] !</p>";
?>
          <!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
        </p>
      </div>
      <div class="breadcrumbs_container">
        <article class="breadcrumbs"><a href="?page=paneladmin">Painel do GameMaster</a></article></div>
    </section>
    <!-- end of secondary bar -->
    <aside id="sidebar" class="column">
      <center>
        <br/>
        <font color="#888888"><a href="javascript: void(0);">Clique aqui</a> para cadastrar uma promo&ccedil;&atilde;o!</font><br/>
        <p></p>
      </center>
      <hr/>
      <h3>Menu</h3>
      <ul class="toggle">
        <li class="icn_categories"><a href="?page=panelgamemaster&amp;option=MANAGER_BAN_ACCOUNT">Banir/Desbanir conta</a></li>
        <li class="icn_categories"><a href="?page=panelgamemaster&amp;option=MANAGER_BAN_CHARACTER">Banir/Desbanir personagem</a></li>
      </ul>
      <h3>Suporte</h3>
      <ul class="toggle">
        <li class="icn_categories"><a href="?page=panelgamemaster&amp;option=COMPLAINTS">Denuncias</a></li>
        <li class="icn_categories"><a href="?page=panelgamemaster&amp;option=TICKETS_OPERATION">Tickets Abertos</a></li>
        <li class="icn_categories"><a href="?page=panelgamemaster&amp;option=TICKETS_COMPLETING">Tickets Encerrados</a></li>
      </ul>
		<h3>Opções</h3>
		<ul class="toggle">
			<li class="icn_security"><a href="javascript: Security(0);" onclick="alert('Nunca informe seus dados à ninguém, nem mesmo aos membros da Equipe. \n\n Você faz sua segurança, a equipe {#SERVER_NAME} agradece!');">Segurança</a></li>
			<li class="icn_jump_back"><a href="?page=logout">Sair (Deslogar-se)</a></li>
		</ul>
<br/><br/><br/>

	</aside><!-- end of sidebar -->
