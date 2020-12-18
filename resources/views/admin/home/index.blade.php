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
                        <h4>Dashboard</h4>

                    </div>
                    <a href="{{url('/')}}" class="btn btn-primary btn-nav-desktop" style="margin-left: auto;margin-right: 10px">
                        <i class="material-icons">store</i>
                        Ir a la tienda</a>
                    <form action="{{route('logout')}}" method="post" style="display:none" id="form-logout">
                        @csrf
                    </form>
                    <button onclick="getElementById('form-logout').submit()" class="btn btn-contrast btn-nav-desktop">
                        <i class="material-icons">logout</i>
                        Salir</button>
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">Productos</p>
                                    <h3 class="card-title">{{$productos->count()}}

                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-success">add</i>
                                        <a href="{{url('/admin/productos/create')}}">Nuevo producto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">list</i>
                                    </div>
                                    <p class="card-category">Categorias</p>
                                    <h3 class="card-title">{{$categorias->count()}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-success">add</i>
                                        <a href="{{url('/admin/categorias/create')}}">Nueva categoria</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">copyright</i>
                                    </div>
                                    <p class="card-category">Marcas</p>
                                    <h3 class="card-title">{{$marcas->count()}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-success">add</i>
                                        <a href="{{url('/admin/marcas/create')}}">Nueva marca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary" style="display:flex;">
                                    <div>
                                        <h4 class="card-title">Sliders página principal</h4>
                                        <p class="card-category">{{$sliders->count()}}</p>
                                    </div>
                                    <a style="margin-left: auto" href="{{route('sliders.create')}}" class="btn btn-contrast">
                                        <i class="material-icons">add</i>
                                        Nuevo Slider
                                    </a>
                                </div>
                                <div class="card-body">
                                            @if($sliders->count() > 0)
                                                @foreach($sliders as $slider)
                                            <div class="product-row">
                                                <div class="img-container">
                                                    <img src="{{asset('uploads/sliders/72x72').'/'.$slider->img}}" alt="{{$slider->title}}">
                                                </div>
                                                <div class="name">
                                                    {{$slider->title}}
                                                </div>
                                                <div class="btn-container">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-secondary">
                                                            <i class="material-icons">edit</i>
                                                            Editar
                                                        </a>

                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                <a class="dropdown-item" href="#modal-eliminar-slider-{{$slider->id}}" data-toggle="modal">Eliminar</a>
                                                                <a class="dropdown-item" href="#">Desactivar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                    @include('admin.sliders.modal-delete')
                                        @endforeach
                                                @else
                                        <div class="no-products">
                                            <div class="icon-container">
                                                <div class="icon"></div>
                                                <i class="material-icons">image_not_supported</i>
                                            </div>
                                            <div class="title text-primary">No hay Sliders</div>
                                            <div class="text">Puedes agregar un Slider pulsando...</div>
                                            <a href="{{route('sliders.create')}}" class="btn btn-primary">
                                                <i class="material-icons">image</i>
                                                <span>Agregar Slider</span>
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
        </div>
    </div>
    <!--Fixed plugin Goes Here-->
    @endsection