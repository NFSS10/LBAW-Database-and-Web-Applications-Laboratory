$(document).ready(checkNewProduct);

function checkNewProduct() {

    $("form#new_auction").submit(function(event) {

        var title = $("#new_titulo").val();
        var description = $("#new_descript").val();
        var final_date = $("#new_data_final").val();

        var d2 = Date.parse(final_date);
        var d3 = Date.now();
        var max_date = new Date();
        max_date.setTime(d3 +  (2 * 24 * 60 * 60 * 1000) - 60 * 60 * 1000);

        if(title.length < 5 || title.length > 20)
        {
            if($("form#new_auction #cc_alert1").children().length == 0) {
                $("form#new_auction #cc_alert1").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                $("form#new_auction #cc_alert1").append("<span class='sr-only'>Error:</span>");
                $("form#new_auction #cc_alert1").append("  Titulo deve conter entre 5 a 20 caracteres!");
            }

            $("form#new_auction #cc_alert1").show();

            $("form#new_auction  #cc_alert1").delay(2000).fadeOut(2500);
            event.preventDefault();
        }

        if(description.length < 10 || description.length > 300)
        {
            if($("form#new_auction #cc_alert2").children().length == 0) {
                $("form#new_auction #cc_alert2").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                $("form#new_auction #cc_alert2").append("<span class='sr-only'>Error:</span>");
                $("form#new_auction #cc_alert2").append("  Descrição deve conter entre 10 a 300 caracteres");
            }

            $("form#new_auction #cc_alert2").show();

            $("form#new_auction  #cc_alert2").delay(2000).fadeOut(2500);
            event.preventDefault();
        }

            $("form#new_auction #a_mcategory").each(function (e) {
                var value = $(this).find("ul li.selected").html();
                if (value != undefined) {
                    $(this).find(".btn-select-input").val(value);
                    $(this).find(".btn-select-value").html(value);
                }
            });

            $("form#new_auction #a_scategory").each(function (e) {
                var value = $(this).find("ul li.selected").html();
                if (value != undefined) {
                    $(this).find(".btn-select-input").val(value);
                    $(this).find(".btn-select-value").html(value);
                }
            });


        if (d2 < d3 || d2 > max_date) {
            if($("form#new_auction #cc_alert3").children().length == 0) {
                $("form#new_auction #cc_alert3").append("<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>");
                $("form#new_auction #cc_alert3").append("<span class='sr-only'>Error:</span>");
                $("form#new_auction #cc_alert3").append("  Data final não pode exceder mais de dois dias da data de inicio nem ser inferior à data atual");
            }

            $("form#new_auction #cc_alert3").show();

            $("form#new_auction  #cc_alert3").delay(2000).fadeOut(2500);
            event.preventDefault();
        }

        }
    )};
