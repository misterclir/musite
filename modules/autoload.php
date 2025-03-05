<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

/*
	@Function autoload class;
*/
function __autoload($classes) {
    /* Diretorios das classes */
    $diretorios = array('modules/classes/', 'modules/classes/webshop/', '../modules/classes/');
    
    foreach ($diretorios as $valor) {
        if (file_exists($valor . $classes . '.class.php')) {
            require_once $valor . $classes . '.class.php';
        }
    }
}
?>