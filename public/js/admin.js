$(document).ready(function(){

    $('.img-section').addClass('img-banner-admin')

    /*--------<JS ADMIN BANNER>---------*/
    let inputTitle = $('#input-title')
    let inputText = $('#input-text')
    let inputPrice = $('#input-price')

    inputTitle.click(function(){
        $('.alert-danger').hide()
    })

    inputText.click(function(){
        $('.alert-danger').hide()
    })

    inputPrice.click(function(){
        $('.alert-danger').hide()
    })

    $('#input-url').click(function(){
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
    /*--------</JS ADMIN BANNER>---------*/

    /*--------<JS ADMIN BANNER LATERAL>---------*/
    let inputTitleSection = $('#input-title-section')
    let inputTitleLateral = $('#input-title-lateral')
    let inputSubtitleLateral = $('#input-subtitle-lateral')
    let inputPriceLateral = $('#input-price-lateral')

    let titlesection = $('#title-section-lateral');
    let titlelateral = $('#title-lateral');
    let subtitlelateral = $('#subtitle-lateral');
    let preciolateral = $('#precio-lateral');

    inputTitleSection.keyup(function(){
        titlesection.text(inputTitleSection.val())
    })
    inputTitleLateral.keyup(function(){
        titlelateral.text(inputTitleLateral.val().toUpperCase())
    })
    inputSubtitleLateral.keyup(function(){
        subtitlelateral.text(inputSubtitleLateral.val().toUpperCase())
    })
    inputPriceLateral.keyup(function(){
        preciolateral.text(formatNumber(inputPriceLateral.val()))
    })
    /*--------</JS ADMIN BANNER LATERAL>---------*/

    /*--------------<JS ADMIN SOCIAL>---------------*/
    $('.socialsModal').on("hidden.bs.modal", function () {
        $('.card-social').removeClass('active')
        $('.url-text').html("")
        $('.input-url').val("")
    });

    $('.card-social').click(function(){
        $('.card-social').removeClass('active')
        $(this).addClass('active')
        let social = $(this).data('social')
        $('#social-' + social).prop('checked', true)
        if(social === 'linkedin'){
            $('.url-text').html(social+".com"+"/"+"in/")
        } else {
            $('.url-text').html(social+".com"+"/")
        }
    })
    /*--------------</JS ADMIN SOCIAL>---------------*/

    $('.switch-input').click(function(){
        if($(this).prop('checked')){
            $(this).attr('checked', true)
            $(this).val('on')
        }else{
            $(this).attr('checked', false)
            $(this).val('off')
        }
        console.log($(this).val())
    })

    $('.btn-eliminar-tienda').click(function(){
        let tienda_id = $(this).data('id')
        let tienda_title = $(this).data('title')
        let url = 'tienda/'+tienda_id
        $('#modal-eliminar-tienda').attr('action', url)
        document.getElementById('title-modal-tienda').innerHTML = tienda_title
    })

    $('.btn-eliminar-plc').click(function(){
        let plc_id = $(this).data('id')
        let plc_title = $(this).data('title')
        let url = 'diseno/plc/'+plc_id
        $('#modal-eliminar-plc').attr('action', url)
        document.getElementById('title-modal-plc').innerHTML = plc_title
    })

    $('.btn-eliminar-marca').click(function(){
        let marca_id = $(this).data('id')
        let marca_title = $(this).data('title')
        let url = 'marcas/'+marca_id
        $('#modal-eliminar-marca').attr('action', url)
        document.getElementById('title-modal-marca').innerHTML = marca_title
    })

    if($('.wrapper').hasClass('categoria')){
        pickerImageCategoria()
    }

    $('#img-file').change(function(){
        const selector = $('#img-input-producto')
        readURL(this, selector)
    })
});

const formatNumber = num => {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}

const pickerImageCategoria = () => {
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

