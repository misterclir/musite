<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldDownloads" ) == false ) {
	class ldDownloads {
		public function __construct()
		{
			global $ldTpl;
			$ldTpl->set("DOWNLOAD_GAMEFULL_LINK1",DOWNLOAD_GAMEFULL_LINK1);
			$ldTpl->set("DOWNLOAD_GAMEFULL_LINK2",DOWNLOAD_GAMEFULL_LINK2);
			$ldTpl->set("DOWNLOAD_GAMEFULL_LINK3",DOWNLOAD_GAMEFULL_LINK3);
			$ldTpl->set("DOWNLOAD_GAMELITE_LINK1",DOWNLOAD_GAMELITE_LINK1);
			$ldTpl->set("DOWNLOAD_GAMELITE_LINK2",DOWNLOAD_GAMELITE_LINK2);
			$ldTpl->set("DOWNLOAD_GAMELITE_LINK3",DOWNLOAD_GAMELITE_LINK3);
			$ldTpl->set("DOWNLOAD_GAMELITE_SERV1",DOWNLOAD_GAMELITE_SERV1);
			$ldTpl->set("DOWNLOAD_GAMELITE_SERV2",DOWNLOAD_GAMELITE_SERV2);
			$ldTpl->set("DOWNLOAD_GAMELITE_SERV3",DOWNLOAD_GAMELITE_SERV3);
			$ldTpl->set("DOWNLOAD_GAMEFULL_SERV1",DOWNLOAD_GAMEFULL_SERV1);
			$ldTpl->set("DOWNLOAD_GAMEFULL_SERV2",DOWNLOAD_GAMEFULL_SERV2);
			$ldTpl->set("DOWNLOAD_GAMEFULL_SERV3",DOWNLOAD_GAMEFULL_SERV3);
			$ldTpl->set("DOWNLOAD_FULL_SIZE",DOWNLOAD_FULL_SIZE);
			$ldTpl->set("DOWNLOAD_LITE_SIZE",DOWNLOAD_LITE_SIZE);
		}
	}	
}

?>