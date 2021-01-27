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
                            @include('admin.account.modal-socials-add')
                            @include('admin.account.socials-grid')
                            <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>