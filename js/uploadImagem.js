$(function() {
    $('#image').change(function() {
        $('#formUpload').ajaxForm({
            beforeSubmit: function() {
                $(".container-progress-bar").fadeIn(100);
            },
            uploadProgress: function(event, position, total, percentComplete) {
                $(".container-percent span").html(percentComplete);
                $(".progress-bar").width(percentComplete + "%");
            },
            complete: function(retorno) {
                $(".container-progress-bar").fadeOut(100);
                $(".progress-bar").delay(110).width(0);
                var src = retorno.responseText;
                //src = src.replace("..\\", "");
                $(".imagem-uploaded").attr("src", src);
            }
        }).submit();
    });
});