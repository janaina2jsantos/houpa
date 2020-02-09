 

    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="/" class="waves-effect">
                            <i class="mdi mdi-view-dashboard"></i><span class="badge badge-pill badge-success float-right">3</span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-account-group"></i>
                            <span>Produtos</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('produtos.index') }}">Ver todos</a></li>
                            <li><a href="{{ route('produtos.create') }}">Criar novo</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
