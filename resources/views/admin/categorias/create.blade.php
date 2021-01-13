@extends('admin.templates.main')

@section('content')
    <div class="wrapper ">
        <!--Sidebar Goes Here-->
        @include('admin.templates.sidebar')
        <form action="{{route('categorias.store')}}" method="POST" class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <h4>Categorias</h4>
                    </div>
                    <button type="submit" class="btn btn-contrast pull-right">
                        <i class="material-icons">save</i>
                        Guardar</button>
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
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-header card-header-primary" style="display: flex;">
                                    <h4 class="card-title">Agregar nueva categoría</h4>
                                </div>
                                <div class="card-body" style="margin-top: 20px; margin-left: 20px">
                                    <div class="row">
                                        <div>
                                            <img class="img-categoria" data-toggle="modal" data-target="#imagePickerModal" src="{{asset('images/placeholder.jpg')}}" style="width: 100px; height: 100px; object-fit: cover; cursor: pointer;" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Nombre</label>
                                                        <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Descripcion</label>
                                                        <input name="text" type="text" class="form-control" value="{{old('description')}}">
                                                    </div>
                                                </div>
                                            </div>

                                                <!-- Modal -->
                                                @include('admin.categorias.modal-imagepicker')

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Footer Goes Here-->
            @include('admin.templates.footer')
        </form>
    </div>


@endsection