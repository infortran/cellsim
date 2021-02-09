<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Redes sociales de la tienda</h4>
                        <button type="button" class="btn btn-contrast open-modal" data-toggle="modal" data-target="#socialsAddModal"><i class="material-icons">add</i> Agregar red social</button>
                    </div>
                    <div class="card-body">
                        @foreach(Auth::user()->socials as $social)
                            <div class="product-row grid-socials">
                                <a href="{{ $social->url.$social->pivot->url }}" target="_blank">
                                    <div class="header-grid-social">
                                        <div>
                                            <div class="btn-{{$social->name}} icon-socials"><i class="fa fa-{{$social->name}}"></i></div>
                                        </div>
                                        <div class="pl-3">
                                            {{'@'.$social->pivot->url}}
                                        </div>
                                    </div>

                                </a>
                                <div class="btn-container">
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <a href="#modal-editar-social-{{$social->pivot->id}}" class="btn btn-secondary open-modal" data-toggle="modal" style="cursor: pointer">
                                            <i class="material-icons">edit</i>
                                            Editar
                                        </a>

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#modal-eliminar-social-{{$social->pivot->id}}" data-toggle="modal">Eliminar</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('admin.account.modal-socials-add')
@foreach(Auth::user()->socials as $social)
    @include('admin.account.modal-socials-edit')
    @include('admin.account.modal-socials-delete')
@endforeach