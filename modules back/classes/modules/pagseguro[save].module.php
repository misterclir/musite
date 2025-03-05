<?php

require('../../settings.php');
require('security.module.php');
$ldSecurity = new ldSecurity();
if($_POST['form'] != "547") die();
if ($PANELUSER_PREMISSIONS['PAGSEGURO'][0] == 0) die("Modulo desabilitado");

$login = preg_replace('/[^[:alnum:]-]/', '', $_POST['login']);

$conn = @mssql_connect( @HOST , @USER , @PWD );
$db = @mssql_select_db( @DATABASE , @$conn );

$InsertPedido = mssql_query("INSERT INTO ".DATABASE.".dbo.webPagSeguro (Login, Status) VALUES ('".$login."', '1')");

$GetPedidosQ = mssql_query("SELECT * FROM ".DATABASE.".dbo.webPagSeguro ORDER BY id DESC");
$GetPedidos = mssql_fetch_object($GetPedidosQ);

echo $GetPedidos->id;
?>