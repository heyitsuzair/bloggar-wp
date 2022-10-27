(function ($) {
  const parentMenu = $(".menu-item-has-children");

  Array.from(parentMenu).forEach((element) => {
    $(element).on("mouseenter", (e) => {
      e.currentTarget.children[1].classList.toggle("fa-angle-up");
      e.currentTarget.children[2].classList.toggle("active");
    });
  });

  if (window.innerWidth > 768) {
    Array.from(parentMenu).forEach((element) => {
      $(element).on("mouseenter", (e) => {
        e.currentTarget.children[1].classList.add("fa-angle-up");
        e.currentTarget.children[2].classList.add("active");
      });
    });
    Array.from(parentMenu).forEach((element) => {
      $(element).on("mouseleave", (e) => {
        e.currentTarget.children[1].classList.remove("fa-angle-up");
        e.currentTarget.children[2].classList.remove("active");
      });
    });
  }
})(jQuery);
