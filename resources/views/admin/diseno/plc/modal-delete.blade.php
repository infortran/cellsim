<form action="" method="POST" class="modal fade" id="modal-eliminar-plc" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        @csrf
        @method('delete')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Colección</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Estas seguro que quieres eliminar esta colección?</h5>
                <em><strong id="title-modal-plc"></strong></em>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">
                    <i class="material-icons">delete</i>
                    Eliminar</button>
            </div>
        </div>
    </div>
</form>