<?php
/*
    @Configuraчѕes do serial
*/
define("countryPreference", 0x02); // Para Brasil 0x01, Estados Unidos da Amщrica 0x02
define("autenticationCache", true); // Guarda a chave de seguranчa em cache para nуo fazer requisiчѕes a cada pagina acessada. 

/*
	@Banco de dados [Shopping]
*/
define("DB_SHOP_SQL", "ldShopV3");

/*
	@Codificaчуo de items;
	@Para versѕes velhas use: OLD
	@Para versѕes novas use: NEW
*/
define("SYSTEM_ITEMS","NEW");

define("ENCGAMES_S6", false); //Coloque true para versуo Season 6 Epi 3 da ENC Games


/*
    Exemplo de como configurar a opчуo: SYSTEM_DBVERSION
    //1 = (Versѕes antigas sem personal store), 2 = (Versѕes antigas com personal store), 3 = (Versѕes novas com personal store e harmony)  
    
    Para versѕes 97d, use a opчуo numero 1;
    Para versѕes 1.0 use a opчуo numero 2; 
    Para versѕes 1.2n ou acima use a opчуo numero 3; 
*/
define("SYSTEM_DBVERSION", 3); //1 = (Versѕes antigas sem personal store), 2 = (Versѕes antigas com personal store), 3 = (Versѕes novas com personal store e harmony)  

/*
	@Encriptaчуo senha;
*/
define("HASHMD5", FALSE);

/*
	@Colunas e tabelas no SQL;
*/
define("GOLDNAME", "WCoinP"); #Nome da moeda
define("CASHNAME", "WCoinC"); #Nome da moeda
define("GOLDCOLUMN", "WCoinP"); #Nome da coluna da moeda
define("CASHCOLUMN", "WCoinC"); #Nome da coluna da moeda
define("GOLDTABLE", "MEMB_INFO"); #Tabela onde fica a coluna da moeda
define("GOLDMEMBIDENT", "memb___id"); #Coluna identificadora da moeda 
define("MAX_OPTIONS_WITH_GOLD", "4");           
define("MAX_OPTIONS_WITH_CASH", "2");           
define("MULTIPLY_CASH_PRICE", "4");  # Valor dos items em CASH x2; [Pega o valor do items em GOLD e multipica por 2]                          
/*
    @Linguagem do sistema;
    @De acordo com o conteudo da pasta: languages
*/
define("LANGUAGE", "pt-br");

// Importante: O sistema de arquivos do unix щ sensэvel a maiњsculas e minњsculas (case sensitive).
// Nesse caso, por exemplo, o arquivo de linguagem deve ter exatamente o nome "pt-br.php" e nуo "PT-BR.php"


/*
    @Nome da sessуo;
*/
define("SESSION_NAME_SHOP", "iwuhf98f4fv");
                               
/*
    @ Sistema de socket item.
    @ Selecione o seu muserver abaixo
    
    LEGENDA:
       
       0 = Sistema da Webzen original (TNS Games, Diel, Eduardo (welcomevoce, phpnuke))  
       1 = Sistema da SCF / SCFMT (MuMaker)
*/
define("SOCKET_USE_LIB", 0);
define("LOCK_REPEAT_SOCKET", true); //Nуo permitir que sejс vendido item socket com opчѕes repetidas.
define("LOCK_REPEAT_CATEGORIE_SOCKET", false); //Nуo permitir que sejс vendido item socket com categorias repetidas.
define("LOCK_REPEAT_SLOT_SOCKET", true); //Nуo permitir que sejс vendido item socket com slots repetidos.
define("LOCK_REPEAT_SOCKET_TYPE", true); //Nуo permitir que sejс vendido item socket com tipos de sockets repetidos.
define("LOCK_ANCIENT_AND_EXCELLENT", false); //Nуo permitir que sejс vendido item com opчѕes excelentes e ancient juntos.
define("LOCK_SOCKET_AND_HARMONY", false); //Nуo permitir que sejс vendido item com opчѕes sockets e harmony juntos.
define("LOCK_MAX_LEVEL", 15); //Configure aqui o level mсximo que um player pode selecionar na hora de comprar um determinado item.

/*
    @ Sistema de recuperaчуo de itens.
*/
define("RECOVERY_LIMIT_ITEM", 0); // Use essa opчуo para limitar que todos os itens vendidos possam ser recuperados ate X vezes pelo player. Deixe 0 para ilimitado.
define("RECOVERY_LIMIT_MIN_TIME", 15); //Tempo mэnimo a ser aguardado com o player offline para recuperar um item no shopping; Tempo recomendado 15 minutos. (Evitar dupers em versуo com personal store)

define("WZ_GETITEMSERIAL", "WZ_GetItemSerial");
define("HIDDEN_TOTAL_BUYS_CATALOG_ITEM", true);

    // @Ativar/Desativar Modulo de Cupom de desconto
define("ENABLE_CUPOM_MODULE", false);
?>