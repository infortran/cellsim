@extends('admin.templates.main')

@section('content')
    <div class="wrapper ">
        <!--Sidebar Goes Here-->
        @include('admin.templates.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <h4>Productos</h4>
                    </div>
                    <a href="{{route('productos.create')}}" class="btn btn-contrast btn-navbar">
                        <i class="material-icons">add</i>
                        <span class="txt-btn-navbar">Nuevo</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Productos</h4>
                                    <p class="card-category">{{$productos->count()}}</p>
                                </div>
                                <div class="card-body">
                                    @if($productos->count() > 0)
                                    @foreach($productos as $producto)
                                        <div class="product-row">
                                            <div class="img-container">
                                                <img src="{{asset('uploads/productos/72X72').'/'. $producto->img}}" alt="">
                                            </div>
                                            <div class="name">
                                                {{$producto->name}}
                                            </div>
                                            <div class="btn-container">
                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                    <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-secondary">
                                                        <i class="material-icons">edit</i>
                                                        Editar
                                                    </a>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <a class="dropdown-item" href="#modal-eliminar-producto-{{$producto->id}}" data-toggle="modal">Eliminar</a>
                                                            <a class="dropdown-item" href="#">Desactivar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @include('admin.productos.modal-delete')
                                        @endforeach

                                    @else
                                    <div class="no-products">
                                        <div class="icon-container">
                                            <div class="icon"></div>
                                            <i class="material-icons">assignment_late</i>
                                        </div>
                                        <div class="title">No hay productos</div>
                                        <div class="text">Puedes agregar productos pulsando</div>
                                        <a href="{{url('/admin/productos/create')}}" class="btn btn-primary">
                                            <i class="material-icons">add</i>
                                            <span>Agregar Productos</span>
                                        </a>
                                    </div>
                                        @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Footer Goes Here-->
            @include('admin.templates.footer')
        </div>
    </div>


@endsection