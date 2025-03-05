        <!--
         Yay Sidebar
       -->
       <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">
         <div class="top">
          <div>
           <!-- Sidebar toggle -->
           <a href="#" class="yay-toggle">
            <div class="burg1"></div>
            <div class="burg2"></div>
            <div class="burg3"></div>
          </a>
          <!-- Sidebar toggle -->

          <!-- Logo --> 
          <a href="#!" class="brand-logo">
            <img src="templates/{#TEMPLATE_DIR}/panel/assets/_con/images/logo-white.png" alt="Con">
          </a>
          <!-- /Logo -->

        </div>
      </div>
      <div class="nano">
        <div class="nano-content">
         <ul>
          <li class="yay-user-info">
           <a href="#">
            <img src="{#MEMB_FOTO}" alt="{#MEMB_NAME}" class="circle">
            <h3 class="yay-user-info-name"><i class="fa fa-user" style="margin: 0px;"></i>{#MEMB_NAME}</h3>
            <div class="yay-user-location">{#MEMB_MAIL}</div>
          </a>
        </li>
        <li><a href="?panel=paneluser" class="waves-effect waves-blue"><i class="ion ion-reply"></i> Voltar Painel de Usuário</a></li>
        <li class="label"><b>Ferramentas</b></li>
        <li <?php echo "". (($_GET['option'])==false? " class='active'" : " " ) .""; ?>>
          <a href="?panel=panelstaff" class="waves-effect waves-blue"><i class="fa fa-dashboard"></i> Painel de Controle</a>
        </li>

        <li <?php echo "".(($_GET['option'])=='GERATE_BACKUPS' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-database"></i> Banco de Dados <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='GERATE_BACKUPS' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=GERATE_BACKUPS" class="waves-effect waves-blue"><i class="fa fa-cloud-upload"></i> Gerar Backups</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='GAME_MSG_ALL' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='GAME_MSG_SPECIFIC' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='GAME_DISCONNECT' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='GAME_CHAT_SERVER' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="ion-ios-game-controller-b"></i> Ferramentas <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='GAME_MSG_ALL' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=GAME_MSG_ALL" class="waves-effect waves-blue"><i class="ion-android-globe"></i> Global Pra Todos</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='GAME_MSG_SPECIFIC' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=GAME_MSG_SPECIFIC" class="waves-effect waves-blue"><i class="fa fa-user"></i> Global Por Login</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='GAME_DISCONNECT' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=GAME_DISCONNECT" class="waves-effect waves-blue"><i class="fa fa-plug"></i> Desconectar Contas</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='GAME_CHAT_SERVER' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=GAME_CHAT_SERVER" class="waves-effect waves-blue"><i class="ion-chatbubbles"></i> Chat em Tempo Real</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='EDIT_ACCOUNT' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='DELETE_ACCOUNT' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='MANAGER_BAN_ACCOUNT' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='MANAGER_ACCOUNTS_TRANSFER_CASH' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-user"></i> Contas <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='EDIT_ACCOUNT' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=EDIT_ACCOUNT" class="waves-effect waves-blue"><i class="ion-edit"></i> Editar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='DELETE_ACCOUNT' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DELETE_ACCOUNT" class="waves-effect waves-blue"><i class="fa fa-user-times"></i> Deletar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='MANAGER_BAN_ACCOUNT' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=MANAGER_BAN_ACCOUNT" class="waves-effect waves-blue"><i class="ion-asterisk"></i> Banir / Desbanir</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='MANAGER_ACCOUNTS_TRANSFER_CASH' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=MANAGER_ACCOUNTS_TRANSFER_CASH" class="waves-effect waves-blue"><i class="ion-loop"></i> Liberar Transferências</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='EDIT_CHARACTER' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='DELETE_CHARACTER' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='MANAGER_BAN_CHARACTER' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-child"></i> Personagem <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='EDIT_CHARACTER' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=EDIT_CHARACTER" class="waves-effect waves-blue"><i class="ion-edit"></i> Editar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='DELETE_CHARACTER' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DELETE_CHARACTER" class="waves-effect waves-blue"><i class="fa fa-user-times"></i> Deletar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='MANAGER_BAN_CHARACTER' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=MANAGER_BAN_CHARACTER" class="waves-effect waves-blue"><i class="ion-asterisk"></i> Banir / Desbanir</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='ADD_VIP' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='DELETE_VIP' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='TRANSFORM_VIP' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-action-stars"></i> Vips / Associados <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='ADD_VIP' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=ADD_VIP" class="waves-effect waves-blue"><i class="ion-android-add-circle"></i> Adicionar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='DELETE_VIP' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DELETE_VIP" class="waves-effect waves-blue"><i class="ion-android-cancel"></i> Remover</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='TRANSFORM_VIP' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=TRANSFORM_VIP" class="waves-effect waves-blue"><i class="ion-loop"></i> Converter</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='ADD_NOTICE' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='REMOVE_NOTICE' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='MODIFY_NOTICE' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-editor-insert-comment"></i> Notícias <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='ADD_NOTICE' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=ADD_NOTICE" class="waves-effect waves-blue"><i class="mdi-content-add"></i> Adicionar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='REMOVE_NOTICE' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=REMOVE_NOTICE" class="waves-effect waves-blue"><i class="mdi-content-clear"></i> Deletar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='MODIFY_NOTICE' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=MODIFY_NOTICE" class="waves-effect waves-blue"><i class="mdi-editor-mode-edit"></i> Editar</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='ADD_POLL' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='REMOVE_POLL' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='MODIFY_POLL' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-search"></i> Enquetes <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='ADD_POLL' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=ADD_POLL" class="waves-effect waves-blue"><i class="mdi-content-add"></i> Adicionar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='REMOVE_POLL' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=REMOVE_POLL" class="waves-effect waves-blue"><i class="mdi-content-clear"></i> Deletar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='MODIFY_POLL' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=MODIFY_POLL" class="waves-effect waves-blue"><i class="mdi-editor-mode-edit"></i> Editar</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='ADD_CASH' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='REMOVE_CASH' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-money"></i> Moedas <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='ADD_CASH' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=ADD_CASH" class="waves-effect waves-blue"><i class="mdi-content-add"></i> Adicionar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='REMOVE_CASH' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=REMOVE_CASH" class="waves-effect waves-blue"><i class="mdi-content-clear"></i> Remover</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='DEPOSITS_IN_OPERATION' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='DEPOSITS_COMPLETING' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='DEPOSITS_FALSE' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-dollar"></i> Financeiro <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='DEPOSITS_IN_OPERATION' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DEPOSITS_IN_OPERATION" class="waves-effect waves-blue"><i class="ion-help"></i> Dep. Andamento</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='DEPOSITS_COMPLETING' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DEPOSITS_COMPLETING" class="waves-effect waves-blue"><i class="ion-checkmark-round"></i> Dep. Concluido</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='DEPOSITS_FALSE' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DEPOSITS_FALSE" class="waves-effect waves-blue"><i class="ion-close-round"></i> Dep. Falsos</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='ADD_AUCTIONS' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='EDIT_AUCTIONS' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='DELETE_AUCTIONS' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='CLOSE_AUCTIONS' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-gavel"></i> Leilões <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='ADD_AUCTIONS' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=ADD_AUCTIONS" class="waves-effect waves-blue"><i class="mdi-content-add"></i> Adicionar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='EDIT_AUCTIONS' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=EDIT_AUCTIONS" class="waves-effect waves-blue"><i class="mdi-editor-mode-edit"></i> Editar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='DELETE_AUCTIONS' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DELETE_AUCTIONS" class="waves-effect waves-blue"><i class="mdi-content-clear"></i> Deletar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='CLOSE_AUCTIONS' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=CLOSE_AUCTIONS" class="waves-effect waves-blue"><i class="mdi-av-not-interested"></i> Fechar</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='COMPLAINTS' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='TICKETS_OPERATION' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='TICKETS_COMPLETING' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-support"></i> Suporte <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='COMPLAINTS' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=COMPLAINTS" class="waves-effect waves-blue"><i class="ion-speakerphone"></i> Denuncias</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='TICKETS_OPERATION' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=TICKETS_OPERATION" class="waves-effect waves-blue"><i class="ion-android-open"></i> Tickets Abertos</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='TICKETS_COMPLETING' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=TICKETS_COMPLETING" class="waves-effect waves-blue"><i class="ion-checkmark"></i> Tickets Encerrados</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='VERIFY_UPDATE' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='GOLDEN_ARCHER' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-action-polymer"></i> Outros <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='VERIFY_UPDATE' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=VERIFY_UPDATE" class="waves-effect waves-blue"><i class="fa fa-refresh"></i> Atualizações</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='GOLDEN_ARCHER' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=GOLDEN_ARCHER" class="waves-effect waves-blue"><i class="mdi-action-polymer"></i> Golden Archer</a>
            </li>
          </ul>
        </li>

        <li class="label"><b>Staff</b></li>
        <li <?php echo "".(($_GET['option'])=='EVENTS_SEND' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='EVENTS_VIEW' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='EVENTS_VIEW_ALL' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="ion-android-calendar"></i> Eventos <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='EVENTS_SEND' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=EVENTS_SEND" class="waves-effect waves-blue"><i class="fa fa-send"></i> Enviar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='EVENTS_VIEW' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=EVENTS_VIEW" class="waves-effect waves-blue"><i class="fa fa-send-o"></i> Enviados</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='EVENTS_VIEW_ALL' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=EVENTS_VIEW_ALL" class="waves-effect waves-blue"><i class="mdi-action-view-headline"></i>Vizualizar Todos</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='ADD_POINTS_EVENTS' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='REMOVE_POINTS_EVENTS' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="ion-android-calendar"></i> Pontos Eventos <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='ADD_POINTS_EVENTS' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=ADD_POINTS_EVENTS" class="waves-effect waves-blue"><i class="fa fa-send"></i> Adicionar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='REMOVE_POINTS_EVENTS' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=REMOVE_POINTS_EVENTS" class="waves-effect waves-blue"><i class="fa fa-send-o"></i> Remover</a>
            </li>
          </ul>
        </li>

        <li <?php echo "".(($_GET['option'])=='DIVULGATION_SEND' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='DIVULGATION_VIEW' ? " class='open'" : " " ).""; ?>
          <?php echo "".(($_GET['option'])=='DIVULGATION_VIEW_ALL' ? " class='open'" : " " ).""; ?>>
          <a href="#" class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-notification-sms"></i> Divulgações <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li <?php echo "". (($_GET['option'])=='DIVULGATION_SEND' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DIVULGATION_SEND" class="waves-effect waves-blue"><i class="fa fa-send"></i> Enviar</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='DIVULGATION_VIEW' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DIVULGATION_VIEW" class="waves-effect waves-blue"><i class="fa fa-send-o"></i> Enviados</a>
            </li>
            <li <?php echo "". (($_GET['option'])=='DIVULGATION_VIEW_ALL' ? " class='active'" : " " ) .""; ?>>
              <a href="?panel=panelstaff&amp;option=DIVULGATION_VIEW_ALL" class="waves-effect waves-blue"><i class="mdi-action-view-headline"></i>Vizualizar Todos</a>
            </li>
          </ul>
        </li>
        <br />
    </ul>
  </div>
</div>
</aside>
<!-- /Yay Sidebar -->