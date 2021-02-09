<form class="modal fade" id="modal-editar-social-{{$social->pivot->id}}" tabindex="-1" aria-labelledby="socialsEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="socialsEditModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="input-group">
                                @foreach($socials as $_social)
                                    <div class="col-md-4 d-flex align-items-center mb-2 card-social {{$social->id == $_social->id ? 'active' : ''}}" data-social="{{$_social->name}}" data-social-id="{{$_social->id}}" id="card-social-{{$_social->id}}">
                                        <div>
                                            <div class="p-2 btn-{{$_social->name}} icon-socials bg-icon"><i class="fa fa-{{$_social->name}}"></i></div>
                                        </div>
                                        <input type="radio" name="social" value="{{$_social->id}}" id="social-{{$_social->name}}" class="mr-2" {{$social->id == $_social->id ? 'checked' : ''}}>
                                        <div class="disable-select ml-3">{{ucfirst($_social->name)}}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; justify-content: center">
                        <div>
                            <strong class="url-text"></strong>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="url" id="url-social" class="form-control input-url">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="btn-add-social">Guardar</button>
                </div>
            </div>
        </div>
    </form>