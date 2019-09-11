$(function() {

    $('.checkboxTransitions :checkbox').change(function() {

        var vendaChecked = $('input[name="venda"]:checked').length;
        var compraChecked = $('input[name="compra"]:checked').length;

        window.location.href =  'https://gnomo.fe.up.pt/~lbaw1646/up201403381/proto/' + 'pages/users/myTransactionsHist.php?page=1&vendaChecked=' + vendaChecked + '&compraChecked=' + compraChecked;
    });
});