<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <!-- META SECTION -->
        <title>Painel Admin {#SERVER_NAME}</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="templates/{#TEMPLATE_DIR}/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="templates/{#TEMPLATE_DIR}/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                   
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="panel.php?panel=paneladmin#!">{#SERVER_NAME}</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{#MEMB_FOTO}" alt="{#MEMB_NAME}"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{#MEMB_FOTO}" alt="{#MEMB_NAME}"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">{#MEMB_NAME}</div>
                                <div class="profile-data-title">{#MEMB_LOGIN}</div>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Menu de Navegação</li>

                    <li class="xn-openable active">
                        <a href="#"><span class="fa fa-dashboard"></span> <span class="xn-text">Principal</span></a>
                        <ul>
                            <li><a href="panel.php?panel=paneladmin#!"><span class="xn-text">Página inicial do painel</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=VERIFY_UPDATE"><span class="xn-text">Verificar atualização</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=GERATE_BACKUPS"><span class="xn-text">Gerar Backups</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=GOLDEN_ARCHER"><span class="xn-text">Golden Archer</span></a></li>
                        </ul>
                    </li>  

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Gerenciar Contas</span></a>
                        <ul>
                            <li><a href="panel.php?panel=paneladmin&option=EDIT_ACCOUNT"><span class="xn-text">Editar conta</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=DELETE_ACCOUNT"><span class="xn-text">Deletar conta</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=MANAGER_BAN_ACCOUNT"><span class="xn-text">Banir/Desbanir conta</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=MANAGER_ACCOUNTS_TRANSFER_CASH"><span class="xn-text">Liberar / Travar transferir {#CASH_NAME} & {#CASH_NAME2}</span></a></li>  
                            <li><a href="panel.php?panel=paneladmin&option=ADD_VIP"><span class="xn-text">Adicionar Vip</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=DELETE_VIP"><span class="xn-text">Remover Vip</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=TRANSFORM_VIP"><span class="xn-text">Editar Vip</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=ADD_CASH"><span class="xn-text">Adicionar Golds</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=REMOVE_CASH"><span class="xn-text">Remover Golds</span></a></li>
                        </ul>
                    </li> 

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Gerenciar Personagens</span></a>
                        <ul>
                            <li><a href="panel.php?panel=paneladmin&option=EDIT_CHARACTER"><span class="xn-text">Editar personagem</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=DELETE_CHARACTER"><span class="xn-text">Deletar personagem</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=MANAGER_BAN_CHARACTER"><span class="xn-text">Banir/Desbanir personagem</span></a></li>
                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-ticket"></span> <span class="xn-text">Suporte</span></a>
                        <ul>
                            <li><a href="panel.php?panel=paneladmin&option=COMPLAINTS"><span class="xn-text">Denúncias</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=TICKETS_OPERATION"><span class="xn-text">Tickets Abertos</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=TICKETS_COMPLETING"><span class="xn-text">Tickets Encerrados</span></a></li>
                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-link"></span> <span class="xn-text">Gerenciar Site</span></a>
                        <ul>
                            <li><a href="panel.php?panel=paneladmin&option=ADD_POLL"><span class="xn-text">Adicionar Enquete</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=REMOVE_POLL"><span class="xn-text">Remover Enquete</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=MODIFY_POLL"><span class="xn-text">Alterar Enquete</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=ADD_AUCTIONS"><span class="xn-text">Adicionar Leilão</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=EDIT_AUCTIONS"><span class="xn-text">Remover Leilão</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=DELETE_AUCTIONS"><span class="xn-text">Alterar Leilão</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=CLOSE_AUCTIONS"><span class="xn-text">Fechar Leilão</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=ADD_NOTIFICATION"><span class="xn-text">Enviar Notificação</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=REMOVE_NOTIFICATION"><span class="xn-text">Remover Notificação</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=EDIT_NOTIFICATION"><span class="xn-text">Alterar Notificação</span></a></li>
                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-money"></span> <span class="xn-text">Gerenciar Depósitos</span></a>
                        <ul>
                            <li><a href="panel.php?panel=paneladmin&option=DEPOSITS_IN_OPERATION"><span class="xn-text">Depósitos Em Andamento</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=DEPOSITS_COMPLETING"><span class="xn-text">Depósitos Conluídos</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=DEPOSITS_FALSE"><span class="xn-text">Depósitos Falsos</span></a></li>
                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-gamepad"></span> <span class="xn-text">Ferramentas do Jogo</span></a>
                        <ul>
                            <li><a href="panel.php?panel=paneladmin&option=GAME_MSG_ALL"><span class="xn-text">Enviar Mensagem Para Todos Online</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=GAME_MSG_SPECIFIC"><span class="xn-text">Enviar Mensagem Para Alguns Logins</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=GAME_DISCONNECT"><span class="xn-text">Desconectar Contas Onlines</span></a></li>
                            <li><a href="panel.php?panel=paneladmin&option=GAME_CHAT_SERVER"><span class="xn-text">Ver Chat Em Tempo Real</span></a></li>
                        </ul>
                    </li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->