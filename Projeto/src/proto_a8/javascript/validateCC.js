$(document).ready(checkCC);

function checkCC() {

    $("form#changeC_form").submit(function(event) {
        var title = $("#" + this.id + " #titulo_cc").val();
        var description = $("#" + this.id + " #descricao_cc").val();
        var final_date = $("#" + this.id + " #data_final_cc").val();
        var starter_date = $("#" + this.id + " #data_inicio_cc").val();
        console.log(description);

        var d1 = Date.parse(starter_date);
        var d2 = Date.parse(final_date);
        var d3 = Date.now();
        var max_date = new Date();
        max_date.setTime(d1 +  (2 * 24 * 60 * 60 * 1000) - 60 * 60 * 1000);

        if(title.length < 5 || title.length > 20)
        {
            if($("form#changeC_form #cc_alert1").children().length == 0) {
                $("form#changeC_form #cc_alert1").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                $("form#changeC_form #cc_alert1").append("<span class='sr-only'>Error:</span>");
                $("form#changeC_form #cc_alert1").append("  Titulo deve conter entre 5 a 20 caracteres!");
            }

            $("form#changeC_form #cc_alert1").show();

            $("form#changeC_form  #cc_alert1").delay(2000).fadeOut(2500);
            event.preventDefault();
        }

        console.log(description.length);
        if(description.length < 10 || description.length > 300)
        {
            if($("form#changeC_form #cc_alert2").children().length == 0) {
                $("form#changeC_form #cc_alert2").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                $("form#changeC_form #cc_alert2").append("<span class='sr-only'>Error:</span>");
                $("form#changeC_form #cc_alert2").append("  Descrição deve conter entre 10 a 300 caracteres");
            }

            $("form#changeC_form #cc_alert2").show();

            $("form#changeC_form  #cc_alert2").delay(2000).fadeOut(2500);
            event.preventDefault();
        }

        if (d2 < d1 || d2 < d3) {
            if($("form#changeC_form #cc_alert3").children().length == 0) {
                $("form#changeC_form #cc_alert3").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                $("form#changeC_form #cc_alert3").append("<span class='sr-only'>Error:</span>");
                $("form#changeC_form #cc_alert3").append("  Data final tem de ser maior que a data de inicio e data atual!");
            }

            $("form#changeC_form #cc_alert3").show();

            $("form#changeC_form  #cc_alert3").delay(2000).fadeOut(2500);
            event.preventDefault();
        }

        if (d2 > max_date) {
            if($("form#changeC_form #cc_alert3").children().length == 0) {
                $("form#changeC_form #cc_alert3").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                $("form#changeC_form #cc_alert3").append("<span class='sr-only'>Error:</span>");
                $("form#changeC_form #cc_alert3").append("  Data final não pode exceder mais de dois dias da data de inicio!");
            }

            $("form#changeC_form #cc_alert3").show();

            $("form#changeC_form  #cc_alert3").delay(2000).fadeOut(2500);
            event.preventDefault();
        }
        }
    )};
