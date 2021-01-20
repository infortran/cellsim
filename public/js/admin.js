$(document).ready(function(){

    let inputTitle = $('#input-title')
    let inputText = $('#input-text')
    let inputPrice = $('#input-price')

    $('#img-file').change(function(){
        const selector = $('#img-input-producto')
        readURL(this, selector)
    })

    inputTitle.click(function(){
        $('.alert-danger').hide()
    })

    inputText.click(function(){
        $('.alert-danger').hide()
    })

    inputPrice.click(function(){
        $('.alert-danger').hide()
    })



    let title = $('#admin-title-huincha');
    let texto = $('#admin-texto-huincha');
    let precio = $('#admin-precio-huincha');

    inputTitle.keyup(function(){
        title.text(inputTitle.val().toUpperCase())
    })
    inputText.keyup(function(){
        texto.text(inputText.val())
    })
    inputPrice.keyup(function(){
        precio.text(formatNumber(inputPrice.val()))
    })

    if($('.wrapper').hasClass('categoria')){
        pickerImageCategoria()
    }

});

const formatNumber = num => {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}

const pickerImageCategoria = () => {
    console.log('holawas')
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
}

const readURL = (input, selector) => {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(selector).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

