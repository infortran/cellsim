@extends('admin.templates.main')

@section('content')
    <div class="wrapper ">
        <!--Sidebar Goes Here-->
        @include('admin.templates.sidebar')
        <form action="{{route('tienda.store')}}" method="POST" enctype="multipart/form-data"  class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <h4>Tiendas</h4>
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
                            <div class="card" >
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
                                    <h4 class="card-title">Agregar una tienda</h4>
                                </div>
                                <div class="card-body" style="margin-top: 20px">

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img style="max-height: 150px; display: block; margin: 0 auto;" id="img-input-producto" src="{{asset('images/placeholder.jpg')}}" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="input-img-btn" for="img-file">
                                                        <i class="material-icons">image</i>
                                                        <span>Subir Imagen</span>
                                                    </label>
                                                    <input name="img" type="file" id="img-file" class="d-none">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <!-- Aqui este switch tendra un display none hasta que la resolucion de pantalla sea mobile -->
                                                    <div class="col-md-3 switch-mobile">
                                                        <div class="d-flex align-items-center flex-column">
                                                            <label class="switch" style="zoom: 70%">
                                                                <input name="status" type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <div>Abierto</div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Titulo</label>
                                                            <input name="title" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 switch-desktop">
                                                        <div class="d-flex align-items-center flex-column">
                                                            <label class="switch" style="zoom: 70%">
                                                                <input name="status" type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <div>Abierto</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Direccion</label>
                                                            <input name="direction" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Ciudad</label>
                                                            <input name="city" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Pais</label>
                                                            <input name="country" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Telefono</label>
                                                            <input name="phone" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Horario</label>
                                                            <input name="schedule" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

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