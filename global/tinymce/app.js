$(document).foundation();

$('[data-app-dashboard-toggle-shrink]').on('click', function(e) {
  e.preventDefault();
  $(this).parents('.app-dashboard').toggleClass('shrink-medium').toggleClass('shrink-large');
});

// more click
$('.card-profile-stats-more-link').click(function(e){
  e.preventDefault();
  if ( $(".card-profile-stats-more-content").is(':hidden') ) {
    $('.card-profile-stats-more-link').find('i').removeClass('fa-angle-down').addClass('fa-angle-up');
  } else {
    $('.card-profile-stats-more-link').find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
  }
  $(this).next('.card-profile-stats-more-content').slideToggle();
});

$(document).ready(function () {
  var btns = document.querySelectorAll(".btn");
  var texts = document.querySelectorAll(".expland");
  var tempScrollTop;
  console.log("a");
  btns.forEach(function (el) {
      el.addEventListener("click", function () {
          var tempScrollTop = $(window).scrollTop();
          var elem = el.text;
          if (elem == "Read more") {
              //Stuff to do when btn is in the read more state
              el.innerHTML = 'Read less';
              texts.forEach(function (txt) {
                  if ((txt.id).includes(el.id)) {
                      $("#" + txt.id + "").slideDown();
                  }
              });
              // $(texts[0].id).slideDown();
          } else {
              //Stuff to do when btn is in the read less state
              el.innerHTML = 'Read more';
              texts.forEach(function (txt) {
                  if ((txt.id).includes(el.id)) {
                      $("#" + txt.id + "").slideUp();
                  }
              });
              // $(texts[0].id).slideUp();
          }
      });
      $(window).scrollTop(tempScrollTop);
  });
});
$(".browse-button input:file").change(function() {
    $("input[name='attachment']").each(function() {
        var fileName = $(this).val().split('/').pop().split('\\').pop();
        $(".filename").val(fileName);
        $(".browse-button-text").html('<i class="fas fa-exchange-alt"></i><input id="avatarField" type="file" accept=".jpg,.png" name="attachment" /> Change');
        $(".clear-button").show();
    });
    $('input[type=file]').change(function() {
        console.log(this.files[0].mozFullPath);
    });
});
var tgt;
document.getElementById('avatarField').onchange = function(evt) {
    tgt = evt.target || window.event.srcElement,
        files = tgt.files;

}
$('.avatar-button').click(function() {
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function() {
            document.getElementById('avatar').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
        $('.filename').val("");
        $('.clear-button').hide();
        $('.browse-button input:file').val("");
        $(".browse-button-text").html('<i class="fa fa-folder-open"></i> Browse');
    } else {}
});
