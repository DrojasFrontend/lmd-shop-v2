console.log("🚀 Init... 🚀");

jQuery(document).ready(function ($) {
  $(".menu__item-link").click(function (e) {
    e.preventDefault();

    // Obtén la submenu asociada al enlace clicado
    var submenu = $(this).siblings(".submenu");

    // Si la submenu ya tiene la clase 'active', quítala; de lo contrario, agrégala
    if (submenu.hasClass("active")) {
      submenu.removeClass("active");
    } else {
      // Remueve la clase 'active' de todas las demás submenus
      $(".submenu").removeClass("active");
      submenu.addClass("active");
    }
  });
});
