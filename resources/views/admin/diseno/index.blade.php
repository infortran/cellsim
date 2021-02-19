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
                <form action="{{ $plc ? route('plc.update', $plc->id) : '' }}" class="container-fluid" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Colección de productos Home</h4>
                                    <button type="submit" class="btn btn-contrast">Guardar cambios</button>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-3 col-lg-4">
                                            <div class="banner-col-productos">
                                                <div class="banner-lateral-container">

                                                    @include('home.main.banner-lateral')
                                                </div>
                                                <div>
                                                    <label class="input-img-btn" for="img-file">
                                                        <i class="material-icons">image</i>
                                                        <span>Subir Imagen</span>
                                                    </label>
                                                    <input name="img_banner" type="file" id="img-file" class="d-none">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-xl-8 mt-2">
                                            <div class="row ">
                                                <div class="col-md-6 mb-3">
                                                    <input class="form-control" type="text" id="input-title-section" placeholder="Titulo de la seccion" name="title_section" value="{{$plc->title_section ?? ''}}">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <input class="form-control" type="text" id="input-title-lateral" placeholder="Titulo del banner" name="title_banner" value="{{$plc->title_banner ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <input class="form-control" type="text" id="input-subtitle-lateral" placeholder="Subtitulo del banner" name="subtitle_banner" value="{{$plc->subtitle_banner ?? ''}}">
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="form-control" type="number" id="input-price-lateral" placeholder="Precio del banner" name="price_banner" value="{{$plc->price_banner ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="row mt-4">

                                                <div class="col-12 col-md-9">
                                                    <div class="form-group">
                                                        <label>Cargar productos por categoria</label>
                                                        <select name="categoria_id" class="form-control selectpicker" data-style="btn btn-link" id="">
                                                            <option value="0" selected disabled>Selecciona una categoria</option>
                                                            @foreach($categorias as $categoria)
                                                                <option value="{{$categoria->id}}" {{ $plc ? $plc->categoria->id === $categoria->id ? 'selected' : '' : '' }} {{--$plc->categoria->id === $categoria->id ? 'selected' : '' --}}>{{$categoria->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <div class="form-group">
                                                        <label>Limite</label>
                                                        <input name="max_products" class="form-control mt-5" type="number" min="0" max="10" value="{{$plc->max_products ?? 0}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--Footer Goes Here-->
            @include('admin.templates.footer')
        </div>
    </div>
@endsection