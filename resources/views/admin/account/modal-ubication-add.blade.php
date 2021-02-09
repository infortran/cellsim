<form action="" id="" method="POST">
    @csrf
    <div class="modal fade" id="ubicationModalAdd" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Agregar ubicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                                                <input name="enabled" type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                            <div>Abierto</div>
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Titulo</label>
                                            <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                        </div>
                                    </div>

                                    <div class="col-md-3 switch-desktop">
                                        <div class="d-flex align-items-center flex-column">
                                            <label class="switch" style="zoom: 70%">
                                                <input name="enabled" type="checkbox" checked>
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
                                            <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Ciudad</label>
                                            <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Pais</label>
                                            <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Telefono</label>
                                            <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Horario</label>
                                            <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>