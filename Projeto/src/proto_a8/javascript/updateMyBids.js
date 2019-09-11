$(document).ready(function() {
    checkUpdateBids();
    setInterval(checkUpdateBids, 5 * 1000);
});

function checkUpdateBids() {

    $.post(BASE_URL + "api/users/updateMyBids.php", {user_id: user_id, limit:limit, offset: offset}, function(data) {
        if(data.length != 0) {

        for(i = 0; i < data.length; i++)
        {
            $('#myBidsValue' + i).html(data[i]['my_bid']);

            var old_max_val = $('#myBidsMaxV' + i).html();
            if(old_max_val != data[i]['max_valor'])
            {
                $('#myBidsMaxV' + i).html(data[i]['max_valor']);
                $('#myBidsButton' + i).val(data[i]['max_valor']);
                $('#myBidsButton' + i).attr({min : data[i]['max_valor']});
            }
        }
        }
    }, "json");


}