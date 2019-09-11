$(document).ready(checkSubmission);

function checkSubmission() {

    $("form.qp_form2").submit(function(event) {
            var questao = $(".qp_form2 textarea.form-control").val();

            if(questao.length < 10 ) {

                if($('form.qp_form2 #q_error').children().length == 0) {
                    $("form.qp_form2 #q_error").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                    $("form.qp_form2 #q_error").append("<span class='sr-only'>Error:</span>");
                    $("form.qp_form2 #q_error").append("  Questão deve conter no minímo 10 caracteres.");
                }

                $("form.qp_form2 #q_error").show();

                $("form.qp_form2 #q_error").delay(2000).fadeOut(2500);
                event.preventDefault();
            }

        }
    )};

