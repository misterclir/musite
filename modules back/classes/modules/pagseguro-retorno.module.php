<?php

require('../../settings.php');
require('security.module.php');
$ldSecurity = new ldSecurity();
if (!$_POST['notificationCode']) die();
elseif ($PANELUSER_PREMISSIONS['PAGSEGURO'][0] == 0) die("Modulo desabilitado");

$notificationCode = preg_replace('/[^[:alnum:]-]/', '', $_POST['notificationCode']);


$data['token'] = PAGSEGURO_TOKEN;
$data['email'] = PAGSEGURO_MAIL;

$data = http_build_query($data);

$url = 'https://ws.pagseguro.uol.com.br/v3/transactions/notifications/'.$notificationCode.'?'.$data;

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
$xml= curl_exec($curl);

curl_close($curl);

$xml= simplexml_load_string($xml);

$reference = $xml -> reference;
$status = $xml -> status;
$ValorFinal = $xml -> grossAmount;

if($reference && $status) {
$conn = @mssql_connect( @HOST , @USER , @PWD );
$db = @mssql_select_db( @DATABASE , @$conn );

$checkPedidoQ = mssql_query("SELECT * FROM ".DATABASE.".dbo.webPagSeguro WHERE id = '".$reference."'");
$checkPedido = mssql_num_rows($checkPedidoQ);
$getLogin = mssql_fetch_object($checkPedidoQ);

if($checkPedido > 0) {
$UpdatePedido = mssql_query("UPDATE ".DATABASE.".dbo.webPagSeguro SET status = '".$status."' WHERE id = '".$reference."'"); }
}
if($ValorFinal > 0){
//Caso Promoções
if($ValorFinal > 0 && $ValorFinal < 51  ) $Multiply = $PAGSEGURO['PROMO']['1-50'];
elseif($ValorFinal > 50 && $ValorFinal < 101  ) $Multiply = $PAGSEGURO['PROMO']['51-100'];
elseif($ValorFinal > 100 && $ValorFinal < 151  ) $Multiply = $PAGSEGURO['PROMO']['101-150'];
elseif($ValorFinal > 150 && $ValorFinal < 301  ) $Multiply = $PAGSEGURO['PROMO']['151-300'];
elseif($ValorFinal > 300  ) $Multiply = $PAGSEGURO['PROMO']['301'];
else $Multiply = '1';
$Amount = $ValorFinal*$PAGSEGURO['price']*$Multiply;
$AmountCash = number_format($Amount, 0);} else $AmountCash = "0";
if($checkPedido > 0 && $status == "3"){
$UpdateCredit = mssql_query("UPDATE ".DATABASE_ACCOUNTS.".dbo.".PAGSEGURO_TABLE." SET ".PAGSEGURO_COLUMN." = ".PAGSEGURO_COLUMN."+'".$AmountCash."' WHERE memb___id = '".$getLogin->Login."'");
$SendNotification = mssql_query("INSERT INTO ".DATABASE.".dbo.webNotificationPanel (destiny, date, message, ready) VALUES ('".$getLogin->Login."', GETDATE(), 'Sua ultima compra no valor de R$".$ValorFinal." foi Aprovada', '0')");
}
if($status == "7") {$SendNotification = mssql_query("INSERT INTO ".DATABASE.".dbo.webNotificationPanel (destiny, date, message, ready) VALUES ('".$getLogin->Login."', GETDATE(), 'Sua ultima compra no valor de R$".$ValorFinal." foi Cancelada', '0')");}
?>