(function ($) {
  const postContent = $(".post-content");

  /**
   * @eventListener When Mouse Enter The Parent Container Add The Active Class To Image
   */

  Array.from(postContent).forEach((element) => {
    $(element).on("mouseenter", (e) => {
      e.currentTarget.children[0].children[0].children[0].children[0].classList.add(
        "active"
      );
    });
  });

  /**
   * @eventListener When Mouse Leave The Parent Container Remove The Active Class From Image
   */

  Array.from(postContent).forEach((element) => {
    $(element).on("mouseleave", (e) => {
      e.currentTarget.children[0].children[0].children[0].children[0].classList.remove(
        "active"
      );
    });
  });
})(jQuery);
