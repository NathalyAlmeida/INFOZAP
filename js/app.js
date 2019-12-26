$(function() {
  "use strict";
  /* Exibe o menu do usuário */
  $("#menu-user").on("click", function(e) {
    $(".dropdown-menu").toggleClass("active");
  });

  /* Exibe o menu da sidebar */
  $(".dropdown").on("click", function(e) {
    let link = $(this);
    let icon = $(this).find("i:last-child");

    /* Se tiver a seta pra baixo */
    if ($(icon).hasClass("fa-chevron-down")) {
      $(icon)
        .removeClass("fa-chevron-down")
        .addClass("fa-chevron-up");
    } else if ($(icon).hasClass("fa-chevron-up")) {
      $(icon)
        .removeClass("fa-chevron-up")
        .addClass("fa-chevron-down");
    }

    let drop = $(this)
      .parent()
      .find("ul");
    $(drop).toggleClass("active");
  });
});
