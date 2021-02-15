@extends('admin.templates.main')

@section('content')
    <div class="wrapper ">
        <!--Sidebar Goes Here-->
        @include('admin.templates.sidebar')
        <form action="{{route('sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data"  class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a href="{{url('/admin')}}" title="Volver">
                            <h4>< Sliders</h4>
                        </a>

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
                                <div class="card-header card-header-primary" style="display: flex;">
                                    <h4 class="card-title">Agregar nuevo slider</h4>
                                </div>
                                <div class="card-body" style="margin-top: 20px">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Titulo</label>
                                                            <input name="title" type="text" class="form-control" value="{{$slider->title}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Precio</label>
                                                            <input name="price" type="number" class="form-control" value="{{$slider->price}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Subtitulo</label>
                                                            <input name="subtitle" type="text" class="form-control" value="{{$slider->subtitle}}" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Texto</label>
                                                            <input name="text" type="text" class="form-control" value="{{$slider->text}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Producto enlace</label>
                                                            <select name="producto_id" class="form-control selectpicker" data-style="btn btn-link" id="">
                                                                <option value="0" disabled>Selecciona un producto para enlazar</option>
                                                                @foreach($productos as $producto)
                                                                    @if($slider->producto_id === $producto->id)
                                                                        <option value="{{$producto->id}}" selected>{{$producto->name}}</option>
                                                                    @else
                                                                        <option value="{{$producto->id}}">{{$producto->name}}</option>
                                                                    @endif
                                                                    @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img id="img-input-producto" src="{{asset('uploads/sliders/1000X1000' . '/' . $slider->img)}}" alt="" class="img-fluid">
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
                                        </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
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