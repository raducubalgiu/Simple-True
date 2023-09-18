// STICKY NAVIGATION

window.addEventListener("scroll", () => {
  const headerNavi = document.querySelector(".header__navigation-bottom");

  headerNavi.classList.toggle("sticky", window.scrollY > 100);
});

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $("#back-topus").fadeIn();
    } else {
      $("#back-topus").fadeOut();
    }
  });

  $("#back-topus").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
  });
});
