<form action="{{route('sliders.destroy', $slider->id)}}" method="POST" class="modal fade" id="modal-eliminar-slider-{{$slider->id}}" tabindex="-1" aria-labelledby="modal-eliminar-slider" aria-hidden="true">
    <div class="modal-dialog">
        @csrf
        @method('delete')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Estas seguro que quieres eliminar este slider?</h3>
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