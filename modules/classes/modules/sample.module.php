<?php
/**
* Modulo de XXXXXX
*/
class sampleModule implements InterfaceModules
{
    /**
    * Fun��o onde ficam as informa��es principais da classe 
    * 
    */
    public function settings() //Fun��o obrigat�ria
    {                                           
    }
    
    /**
    * Carrega um template para mostrar para o usuario
    */
    public function loadTemplate($name)
    {
        global $ldTpl;
        $ldTpl->open("templates/".TEMPLATE_DIR."/{$name}.tpl.php");
    }
    
    /**
    * Registra variaveis para os templates
    * Exemplo: {#BLABLABLA} significa: Texto definido...
    * Como usar: $this->registerVariable("BLABLABLA", "Texto definido...");
    */
    public function registerVariable($tag, $value)
    {
        global $ldTpl;
        $ldTpl->set($tag, $value);
    }
    
    /**
    * Checa se o usu�rio esta logado, e retorna um objecto com o numero do previlegio dele caso esteja logado.
    */
    public function checkLogin()
    {
         global $ldMssql;
         if(!isset($_SESSION['LOGIN']) && empty($_SESSION['LOGIN']))
            return false;
         $checkPrevilegy = $ldMssql->query("SELECT previlegy FROM dbo.webPrevilegy WHERE username='". $_SESSION['LOGIN'] ."'");
         if(mssql_num_rows($checkPrevilegy) == 0)
            return (int)0;
         else
            return mssql_fetch_object($checkPrevilegy);
    }
    
    /**
    * Aqui voc� monta a estrutura inicial do seu modulo
    */
    public function __construct()
    {
        /**
        * Exemplos de como usar as fun��es base
        * 
        * Registra variaveis para os templates, {#BLABLABLA} significa: Texto definido...
        * Codigo: $this->registerVariable("BLABLABLA", "Texto definido...");
        * 
        * Abrindo o template sampleModule.tpl.php que estana pasta de templates: 
        * Codigo: $this->loadTemplate("sampleModule"); 
        */
    }
}
$sampleModule = new sampleModule();  
?>