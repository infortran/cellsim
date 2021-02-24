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
                        <h4>Diseño</h4>
                    </div>
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
                                <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Coleccion de Productos</h4>
                                    <a href="{{ route('plc.create') }}" class="btn btn-contrast" style="cursor: pointer">
                                        <i class="material-icons">add</i>
                                        <span>Agregar colección</span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    @if($plc->count() > 0)
                                        @foreach($plc as $_plc)
                                            <div class="product-row">
                                                <div class="img-container">
                                                    <img src="{{asset('uploads/plc/72X72').'/'. $_plc->img}}" alt="">
                                                </div>
                                                <div class="name">
                                                    {{$_plc->title_banner}}
                                                </div>
                                                <div class="btn-container">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <a href="{{route('plc.edit', $_plc->id)}}" class="btn btn-secondary">
                                                            <i class="material-icons">edit</i>
                                                            Editar
                                                        </a>

                                                        <a class="btn btn-primary px-3 btn-eliminar-plc" style="cursor: pointer" data-toggle="modal" data-target="#modal-eliminar-plc" data-id="{{ $_plc->id }}" data-title="{{ $_plc->title_banner }}">
                                                            <i class="material-icons" style="color: #ffffff">delete</i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    @else
                                        <div class="no-products">
                                            <div class="icon-container">
                                                <div class="icon"></div>
                                                <i class="material-icons">assignment_late</i>
                                            </div>
                                            <div class="title">No hay una Colección de Productos</div>
                                            <div class="text">Puedes agregar una colección pulsando</div>
                                            <a href="{{route('plc.create')}}" class="btn btn-primary">
                                                <i class="material-icons">add</i>
                                                <span>Agregar Colección</span>
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
    @include('admin.diseno.plc.modal-delete')

@endsection