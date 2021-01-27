<form action="{{route('social.user.destroy', ['id' => $social->pivot->id])}}" method="POST" class="modal fade" id="modal-eliminar-social-{{$social->pivot->id}}" tabindex="-1" aria-labelledby="modal-eliminar-social" aria-hidden="true">
    <div class="modal-dialog">
        @csrf
        @method('delete')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Red Social</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Estas seguro que quieres eliminar esta red social?</h5>
                <em>
                    <span class="row d-flex align-items-center ml-4">
                        <div class="btn-{{$social->name}} icon-socials"><i class="fa fa-{{$social->name}}"></i></div>
                        <strong class="ml-2">{{'@'.$social->pivot->url}}</strong>
                    </span>

                </em>
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