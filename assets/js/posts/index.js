(function ($) {
  const postContent = $(".post-content");
  const postThumnailParentImg = $(".post-thumbnail-parent img");

  /**
   * @eventListener When Mouse Enter The Parent Container Add The Active Class To Image
   */

  $(postContent).on("mouseenter", () => {
    postThumnailParentImg.addClass("active");
  });

  /**
   * @eventListener When Mouse Leave The Parent Container Remove The Active Class From Image
   */

  $(postContent).on("mouseleave", () => {
    postThumnailParentImg.removeClass("active");
  });
})(jQuery);
