<div class="sidebar" data-color="purple" data-background-color="white" data-image="/images/sidebar-1.jpg">

    <div class="logo"><a href="https://cellsim.cl" class="simple-text logo-normal">
            CellSIM
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item  {{request()->path() === 'admin' ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item {{request()->path() === 'admin/productos' || request()->path() === 'admin/productos/create' || request()->is('admin/productos/*/edit') ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/productos')}}">
                    <i class="material-icons">store</i>
                    <p>Productos</p>
                </a>
            </li>
            <li class="nav-item {{request()->path() === 'admin/categorias' || request()->is('admin/categorias/create') || request()->is('admin/categorias/*/edit') ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/categorias')}}">
                    <i class="material-icons">list</i>
                    <p>Categorias</p>
                </a>
            </li>
            <li class="nav-item {{request()->path() === 'admin/marcas' || request()->is('admin/marcas/create') || request()->is('admin/marcas/*/edit')? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/marcas')}}">
                    <i class="material-icons">copyright</i>
                    <p>Marcas</p>
                </a>
            </li>

            <li class="nav-item {{request()->path() === 'admin/diseno' || request()->is('admin/diseno/create') || request()->is('admin/diseno/*/edit')? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/diseno')}}">
                    <i class="material-icons">web</i>
                    <p>Diseño</p>
                </a>
            </li>

            <li class="nav-item {{request()->path() === 'admin/cuenta' ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/cuenta')}}">
                    <i class="material-icons">person</i>
                    <p>Cuenta</p>
                </a>
            </li>

        </ul>

        <div style="display:flex;flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top:15px">
            <a href="{{url('/')}}" class="btn btn-primary btn-nav-mobile">
                <i class="material-icons">store</i>
                Ir a la tienda</a>
            <form action="{{route('logout')}}" method="post" style="display:none" id="form-logout">
                @csrf
            </form>
            <button onclick="getElementById('form-logout').submit()" class="btn btn-contrast btn-nav-mobile">
                <i class="material-icons">logout</i>
                Salir</button>
        </div>
    </div>
</div>