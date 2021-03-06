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
                        <h4>Categorías</h4>
                    </div>
                    <a href="{{url('/admin/categorias/create')}}" class="btn btn-contrast btn-navbar">
                        <i class="material-icons">add</i>
                        <span class="txt-btn-navbar">Agregar Categorías</span>
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
                                    <h4 class="card-title">Categorías</h4>
                                    <p class="card-category">{{$categorias->count() ?? '0'}}</p>
                                </div>
                                <div class="card-body">

                                    @if($categorias->count() > 0)
                                        @foreach($categorias as $categoria)
                                            <div class="product-row">
                                                <img style="display: block;" src="{{asset('assets/img/100X100/categorias').'/'.$categoria->img}}" alt="" class="img-fluid">
                                                <div class="name">
                                                    {{$categoria->name}}
                                                </div>
                                                <div class="btn-container">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <a href="{{route('categorias.edit', $categoria->slug)}}" class="btn btn-secondary">
                                                            <i class="material-icons">edit</i>
                                                            Editar
                                                        </a>

                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                <a class="dropdown-item" href="#modal-eliminar-categoria-{{$categoria->id}}" data-toggle="modal">Eliminar</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @include('admin.categorias.modal-delete')
                                        @endforeach
                                    @else
                                        <div class="no-products">
                                            <div class="icon-container">
                                                <div class="icon"></div>
                                                <i class="material-icons">assignment_late</i>
                                            </div>
                                            <div class="title">No hay categorías</div>
                                            <div class="text">Puedes agregar categorías pulsando</div>
                                            <a href="{{url('/admin/categorias/create')}}" class="btn btn-contrast">
                                                <i class="material-icons">add</i>
                                                <span>Agregar Categorías</span>
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