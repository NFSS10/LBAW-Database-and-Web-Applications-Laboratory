$(document).ready(function() {
    checkSelectChange();

});

function checkSelectChange() {

    $("#a_mcategory li").click(function(event) {


        if($('#categories_opt li.selected').text() != null)
            $('#categories_opt li.selected').removeClass('selected');

        $(this).addClass('selected');
        selected_option = $('#categories_opt li.selected').text();
        $.post(BASE_URL + "api/auctions/updateSubcategory.php", {main_category: selected_option}, function(data) {
            if(data.length != 0) {

                $("#subcategories_opt").empty();
                for(i = 0; i < data.length; i++)
                {
                    if(i == 0)
                        $("#subcategories_opt").append("<li class='selected'>" +data[i]['nome'] + "</li>");
                    else
                        $("#subcategories_opt").append("<li>" + data[i]['nome'] + "</li>");
                }

            }
        }, "json");


    });
};