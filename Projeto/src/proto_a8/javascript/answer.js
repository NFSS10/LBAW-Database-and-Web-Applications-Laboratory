$(document).ready(checkSubmission);

function checkSubmission() {

    $("form.ap_form").submit(function(event) {
            var resposta = $("#" + this.id + " textarea.form-control").val();

            console.log(resposta);
            if(resposta == "" ) {

                if($("form#" + this.id + " .a_error").children().length == 0) {
                    console.log("entrou");
                    $("form#" + this.id + " .a_error").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                    $("form#" + this.id + " .a_error").append("<span class='sr-only'>Error:</span>");
                    $("form#" + this.id + " .a_error").append("  A resposta deve conter algum conteudo.");
                }

                $("#" + this.id + " .a_error").show();

                $("#" + this.id + " .a_error").delay(2000).fadeOut(2500);
                event.preventDefault();
            }
        }
    )};

