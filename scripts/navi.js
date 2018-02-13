$(".hamburger").click(function () {
  $(".menu").toggleClass("expandMenu");
  $(".menu").toggleClass("button-height");
  $(".siteHeader").toggleClass("mobile-height");
  $(".hamburger").toggleClass("is-active");
});