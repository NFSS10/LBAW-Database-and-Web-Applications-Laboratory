$(document).ready(checkUploadImage);

function checkUploadImage() {

    $("form#editA_form").submit(function(event) {

        if ($('#upload_image').get(0).files.length === 0) {

                if($("form#editA_form .a_error").children().length == 0) {
                    $("form#editA_form .a_error").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                    $("form#editA_form .a_error").append("<span class='sr-only'>Error:</span>");
                    $("form#editA_form .a_error").append("  É obrigatório fornecer uma imagem.");
                }

                $("form#editA_form  .a_error").show();

                $("form#editA_form  .a_error").delay(2000).fadeOut(2500);
                event.preventDefault();
            }
        }
    )};
