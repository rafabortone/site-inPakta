$(".header-icon-menu, .header-container nav").click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('.header-container nav').toggleClass('active-menu');
})