$(document).ready(function(){


    /*--------JS ADMIN BANNER---------*/
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
    /*--------JS ADMIN BANNER---------*/





    /*--------------JS ADMIN CUENTA---------------*/
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

    if($('.wrapper').hasClass('cuenta')){
        let socialsUser = $('#data-socials-user').data('socials-user')
        let socialsUserId = [];

        socialsUser.forEach(item => {
            socialsUserId.push(item.id);
        })

        $('.open-modal').click(function(){
            $('.card-social').each(function (){
                if(socialsUserId.includes($(this).data('social-id'))){
                    $(this).remove()
                }
            })
        })
    }
    /*--------------JS ADMIN CUENTA---------------*/

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

