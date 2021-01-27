<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Datos de la tienda</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <!--div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Company (disabled)</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tu nombre</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div-->
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" class="form-control" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Direccion</label>
                                        <input type="text" class="form-control" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Telefono</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <!--div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">C</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div-->
                            </div>
                            <!--div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>A</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                            <button type="submit" class="btn btn-contrast pull-right">Modificar Perfil</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>