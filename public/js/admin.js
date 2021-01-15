$(document).ready(function(){
    $('#img-file').change(function(){
        const selector = $('#img-input-producto')
        readURL(this, selector)
    })

    $('#input-title').click(function(){
        $('.alert-danger').hide()
    })

    $('#input-text').click(function(){
        $('.alert-danger').hide()
    })

    $('#input-price').click(function(){
        $('.alert-danger').hide()
    })

    $(".image-picker").val(0);
    let fileImg = $('.img-categoria').attr('src').replace(/.*(\/|\\)/, '');
    $(".image-picker").imagepicker();


    if(fileImg != 'placeholder.jpg'){
        $('.selected').removeClass('selected');
        let srcImg = $('.img-categoria').attr('src');

        let imgSelectedParent = $('.image_picker_image[src="'+srcImg+'"]')[0].parentElement;
        imgSelectedParent.classList.add('selected');

        let selectedImgRoute = $('.selected img').attr('src');
        $('.img-categoria').attr('src', selectedImgRoute);

        $(".image-picker").val(fileImg);

    }

    $("#imagePickerModal").on("hidden.bs.modal", function () {
        let selectedImgRoute = $('.selected img').attr('src');
        $('.img-categoria').attr('src', selectedImgRoute);
    });

});

const readURL = (input, selector) => {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(selector).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

