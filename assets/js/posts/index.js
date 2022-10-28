(function ($) {
  const postContent = $(".post-content");
  const firstPost = $(".first-post-content");

  /**
   * @firstPostAtTop When Mouse Enter The Parent Container Add The Active Class To Image
   */

  Array.from(firstPost).forEach((element) => {
    $(element).on("mouseenter", (e) => {
      console.log(e.currentTarget.children[0].children[0]);
      e.currentTarget.children[0].children[0].classList.add("active");
    });
  });

  /**
   * @firstPostAtTop When Mouse Leave The Parent Container Remove The Active Class From Image
   */

  Array.from(firstPost).forEach((element) => {
    $(element).on("mouseleave", (e) => {
      console.log(e.currentTarget.children[0].children[0]);
      e.currentTarget.children[0].children[0].classList.remove("active");
    });
  });

  /**
   * @mainPosts When Mouse Enter The Parent Container Add The Active Class To Image
   */

  Array.from(postContent).forEach((element) => {
    $(element).on("mouseenter", (e) => {
      e.currentTarget.children[0].children[0].children[0].children[0].classList.add(
        "active"
      );
    });
  });

  /**
   * @mainPosts When Mouse Leave The Parent Container Remove The Active Class From Image
   */

  Array.from(postContent).forEach((element) => {
    $(element).on("mouseleave", (e) => {
      e.currentTarget.children[0].children[0].children[0].children[0].classList.remove(
        "active"
      );
    });
  });
})(jQuery);
