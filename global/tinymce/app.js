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
