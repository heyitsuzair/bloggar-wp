(function ($) {
  const parentMenu = $(".menu-item-has-children");

  $(parentMenu).on("click", (e) => {
    e.currentTarget.children[1].classList.toggle("fa-angle-up");
    e.currentTarget.children[2].classList.toggle("active");
  });
})(jQuery);
