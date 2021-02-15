<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Ubicacion de las tiendas</h4>
                        <button class="btn btn-contrast" style="cursor: pointer" data-toggle="modal" data-target="#ubicationModalAdd">
                            <i class="material-icons">add</i>
                            <span>Agregar ubicacion</span>
                        </button>
                    </div>
                    <div class="card-body">
                        @foreach($tiendas as $tienda)
                        <div class="product-row">
                            <img style="display: block;" src="{{ asset('uploads/tiendas/72X72' . '/' . $tienda->img) }}" alt="" class="img-fluid">
                            <div class="name">
                                {{ $tienda->title }}
                            </div>
                            <div class="btn-container">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <a href="" class="btn btn-secondary">
                                        <i class="material-icons">edit</i>
                                        Editar
                                    </a>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="" data-toggle="modal">Eliminar</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                            <!--div class="no-products">
                                <div class="icon-container">
                                    <div class="icon"></div>
                                    <i class="material-icons">assignment_late</i>
                                </div>
                                <div class="title">No hay categorías</div>
                                <div class="text">Puedes agregar categorías pulsando</div>
                                <a href="" class="btn btn-contrast">
                                    <i class="material-icons">add</i>
                                    <span>Agregar Categorías</span>
                                </a>
                            </div-->
                        @include('admin.account.modal-ubication-add')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>