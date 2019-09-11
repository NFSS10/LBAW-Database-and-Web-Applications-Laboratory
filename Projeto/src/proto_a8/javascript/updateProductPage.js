$(document).ready(function() {
    checkUpdate();
    setInterval(checkUpdate, 5 * 1000);
});

function checkUpdate()
{
        $.post(BASE_URL + "api/auctions/updateProductPage.php", {auct_id: auction_id}, function(data) {
            if(data.length != 0) {

                if(data['max'] == null)
                    $('#bid_value_p').html(data['preco_inicial'] + " €");
                else
                    $('#bid_value_p').html(data['max'] + " €");


                if($('#bid_value_p').html() != (data['preco_inicial'] + " €"))
                    $('#product_page_bid').attr({min : data['max']});
                else
                    $('#product_page_bid').attr({min : data['preco_inicial']});


                var countDownDate = new Date(data['data_final']).getTime();
                var initialDate = new Date(data['data_inicio']).getTime();

                var x = setInterval(function() {

                    var now = new Date().getTime();

                    var distance = countDownDate - now;
                    var totalTime = (countDownDate - now) * 100 /(countDownDate - initialDate);

                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) + days * 24;
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


                    document.getElementById("timeText").innerHTML = hours + ":"
                        + minutes + ":" + seconds;
                    var elem = document.getElementById("ca");

                    if(totalTime > 100)
                        totalTime = 100;

                    elem.style.width = totalTime + '%';

                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("timeText").innerHTML = "FINISHED";
                        $('.pp_buttons').fadeOut();
                        elem.style.width = 0 + '%';
                    }
                }, 1000);

            }
        }, "json");
}