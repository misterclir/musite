<?php

require('../../settings.php');
require('security.module.php');
$ldSecurity = new ldSecurity();
if($_POST['form'] != "014") die();
if ($PANELUSER_PREMISSIONS['PAGSEGURO'][0] == 0) die("Modulo desabilitado");

$Valor = preg_replace('/[^[:alnum:]-]/', '', $_POST['Valor']);
$pedido = preg_replace('/[^[:alnum:]-]/', '', $_POST['idPedido']);
$login = preg_replace('/[^[:alnum:]-]/', '', $_POST['login']);

$data['token'] = PAGSEGURO_TOKEN;
$data['email'] = PAGSEGURO_MAIL;
$data['currency'] = 'BRL';
$data['itemId1'] = '1';
$data['itemQuantity1'] = '1';
$data['itemDescription1'] = 'Doaчуo com login: '.$login;
$data['itemAmount1'] = $Valor.".00";
$data['reference'] = $pedido;

$data = http_build_query($data);

$url = 'https://ws.pagseguro.uol.com.br/v2/checkout';

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
$xml= curl_exec($curl);

curl_close($curl);

$xml= simplexml_load_string($xml);
echo $xml -> code;

?>