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

