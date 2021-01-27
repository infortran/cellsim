<form action="{{ route('social.user.store') }}" id="selectSocial" method="POST">
    @csrf
    <div class="modal fade socialsModal" id="socialsAddModal" tabindex="-1" aria-labelledby="socialsAddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="socialsAddModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="input-group">
                                <div class="d-none">
                                    <div id="data-socials-user" data-socials-user="{{ $socials_user = Auth::user()->socials }}"></div>
                                </div>
                                @foreach($socials as $social)
                                    <div class="col-md-4 d-flex align-items-center mb-2 card-social" data-social="{{$social->name}}" data-social-id="{{$social->id}}" id="card-social-{{$social->id}}">
                                        <div>
                                            <div class="p-2 btn-{{$social->name}} icon-socials bg-icon"><i class="fa fa-{{$social->name}}"></i></div>
                                        </div>
                                        <input type="radio" name="social" value="{{$social->id}}" id="social-{{$social->name}}" class="mr-2">
                                        <div class="disable-select ml-3">{{ucfirst($social->name)}}</div>
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
    </div>
</form>