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
                            <form class="card">
                                <div class="card-header card-header-primary" style="display: flex;">
                                    <h4 class="card-title">Agregar nuevo producto</h4>
                                    <div style="margin-left: auto">
                                        <label class="switch" >
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                        <div>En stock</div>
                                    </div>


                                </div>
                                <div class="card-body" style="margin-top: 20px">

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Nombre</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Cantidad</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Descripcion</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Precio</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Precio Anterior</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Categoría</label>
                                                            <select class="form-control selectpicker" data-style="btn btn-link" id="">
                                                                <option selected disabled>Selecciona una categoría</option>
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Marca</label>
                                                            <select class="form-control selectpicker" data-style="btn btn-link" id="">
                                                                <option selected disabled>Selecciona una marca</option>
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="/images/city.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="input-img-btn" for="img-file">
                                                        <i class="material-icons">image</i>
                                                        <span>Subir Imagen</span>
                                                    </label>
                                                    <input type="file" id="img-file" class="d-none">
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary pull-right">
                                            <i class="material-icons">save</i>
                                            Guardar</button>
                                        <div class="clearfix"></div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!--Footer Goes Here-->
            @include('admin.templates.footer')
        </div>
    </div>


@endsection