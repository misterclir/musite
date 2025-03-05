<ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-hover">

            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <div class="pull-left mr-10 angled-img">
                    <img style="height: 35px;" class="img" src="{#MEMB_FOTO}">
                </div>
                {#MEMB_NAME}<span class="caret"></span> <span class="label">{#MEMB_LOGIN}</span>
            </a>
            <div class="dropdown-menu">
                <ul role="menu">
                    <li><a href="panel.php?panel=home">Minha Conta</a>
                    </li>
                    <li><a href="../forum/usercp.php?action=profile">Configurações</a>
                    </li>
                    <li class="divider"></li>

                    <li><a href="../forum/usercp.php?action=avatar">Alterar Foto</a>
                    </li>
                    <li><a href="panel.php?panel=tickets">Meus Tickets</a>
                    </li>
                    <li class="divider"></li>

                    <li><a href="panel.php?panel=buy_vips">Seja VIP</a>
                    </li>
					<li><a href="panel.php?panel=buy_coins">{#CASH_NAME}</a>
                    </li>
                    <li class="divider"></li>
                    {#MENU_LOGIN}
                    <li class="divider"></li>
                    <li><a href="panel.php?panel=logout">Sair</a>

                </li></ul>
            </div>
        </li>
            </ul>