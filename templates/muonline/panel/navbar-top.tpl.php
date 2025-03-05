      <!--
         Top Navbar
       -->
       <nav class="navbar-top navbar-dark">
         <div class="nav-wrapper">
          <!-- Sidebar toggle -->
          <a href="#" class="yay-toggle">
           <div class="burg1"></div>
           <div class="burg2"></div>
           <div class="burg3"></div>
         </a>
         <!-- Sidebar toggle -->

         <!-- Logo --> 
         <a href="?page=panelstaff" class="brand-logo">
          <img src="templates/{#TEMPLATE_DIR}/panel/assets/_con/images/logo-white.png" alt="Con">
         </a>
         <!-- /Logo -->

         <!-- Menu -->
         <ul>
           <li class="user">
            <a class="dropdown-button" data-activates="user-dropdown" href="#!"><img src="{#MEMB_FOTO}" alt="{#MEMB_NAME}" class="circle"> {#MEMB_NAME} <i class="mdi-navigation-expand-more right"></i></a>
            <ul id="user-dropdown" class="dropdown-content">
             <li><a href="#!"><i class="fa fa-user"></i> Perfil</a></li>
             <li><a href="#!"><i class="fa fa-envelope"></i> Mensagens </a></li>
             <li><a href="?panel=paneluser&option=MODIFY_DATA"><i class="fa fa-cogs"></i> Configurações</a></li>
             <li class="divider"></li>
             <li><a href="?panel=logout"><i class="fa fa-sign-out"></i> Deslogar</a></li>
           </ul>
         </li>
       </ul>
       <!-- /Menu -->

     </div>
   </nav>
      <!-- /Top Navbar -->