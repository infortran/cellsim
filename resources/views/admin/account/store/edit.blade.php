@extends('admin.templates.main')

@section('content')
    <div class="wrapper ">
        <!--Sidebar Goes Here-->
        @include('admin.templates.sidebar')
        <form action="{{route('tienda.update', $tienda->id)}}" method="POST" enctype="multipart/form-data"  class="main-panel">
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
                                @method('put')
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
                                    <h4 class="card-title">Editar tienda</h4>
                                </div>
                                <div class="card-body" style="margin-top: 20px">

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img style="max-height: 150px; display: block; margin: 0 auto;" id="img-input-producto" src="{{asset('uploads/tiendas/300X300/'.$tienda->img)}}" alt="" class="img-fluid">
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

                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Titulo</label>
                                                            <input name="title" type="text" class="form-control" value="{{ $tienda->title }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 switch-desktop">
                                                        <div class="d-flex align-items-center flex-column">
                                                            <label class="switch" style="zoom: 70%">
                                                                <input class="switch-input" name="status" type="checkbox" value="{{ $tienda->status === 1 ? 'on' : 'off'}}" {{ $tienda->status === 1 ? 'checked' : ''}}>
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
                                                            <input name="direction" type="text" class="form-control" value="{{ $tienda->direction }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Ciudad</label>
                                                            <input name="city" type="text" class="form-control" value="{{ $tienda->city }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Pais</label>
                                                            <input name="country" type="text" class="form-control" value="{{ $tienda->country }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Telefono</label>
                                                            <input name="phone" type="text" class="form-control" value="{{ $tienda->phone }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Horario</label>
                                                            <input name="schedule" type="text" class="form-control" value="{{ $tienda->schedule }}">
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