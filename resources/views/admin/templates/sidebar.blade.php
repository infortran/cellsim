<div class="sidebar" data-color="purple" data-background-color="white" data-image="/images/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
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

            <li class="nav-item {{request()->path() === 'admin/productos' || request()->path() === 'admin/productos/create' ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/productos')}}">
                    <i class="material-icons">store</i>
                    <p>Productos</p>
                </a>
            </li>
            <li class="nav-item {{request()->path() === 'admin/categorias' ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/categorias')}}">
                    <i class="material-icons">list</i>
                    <p>Categorias</p>
                </a>
            </li>
            <li class="nav-item {{request()->path() === 'admin/marcas' ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/marcas')}}">
                    <i class="material-icons">copyright</i>
                    <p>Marcas</p>
                </a>
            </li>

            <li class="nav-item {{request()->path() === 'admin/cuenta' ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin/cuenta')}}">
                    <i class="material-icons">person</i>
                    <p>Cuenta</p>
                </a>
            </li>

        </ul>
    </div>
</div>