<div class="modal fade" id="imagePickerModal" tabindex="-1" aria-labelledby="imagePickerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imagePickerModalLabel">Elija una imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select class="image-picker" name="img">
                    @foreach (glob("assets/img/100x100/*") as $index => $filename)
                        <option data-img-src="{{asset($filename)}}" value="{{basename($filename)}}"></option>
                        <img src="{{asset($filename)}}" alt="">
                    @endforeach
                </select>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
            </div>
        </div>
    </div>
</div>