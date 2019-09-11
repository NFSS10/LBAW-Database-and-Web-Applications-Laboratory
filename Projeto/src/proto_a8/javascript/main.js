BASE_URL = 'https://gnomo.fe.up.pt/~lbaw1646/up201404380/src/proto_a8/';

$(document).ready(function() {
  initMessageClosers();
});

function initMessageClosers() {
  $('.close').click(function() {
    $(this).parent().fadeOut();
  });
}
