$(function () {
  // $("#demo").css({ color: 'red' });

  // $("#demo").toggleClass('myHeading')

  // $("#demo")
  //     .text("jQuery is Awesome")
  //     .append(" Something else")
  //     .empty();

  // $("#btn")
  // .on('click', function() {

  // })

  $("#btn").click(function () {
    // $("#demo").toggle()
    // $("#demo").fadeOut();
    // $("#demo2").fadeIn("fast", function() {
    //     $(this).css({ color: 'orange', fontSize: '6rem' })
    // })
    // $("#demo").slideUp();
    // $("#demo2").slideDown("fast", function() {
    //     $(this).css({ color: 'orange', fontSize: '6rem' })
    // })
    // $("#demo").fadeToggle("slow");
    // $("#demo").slideToggle("slow");
  });

  //   AJAX

  $("#getUsersBtn").click(function () {
    $("#loadingIndicator").fadeIn("fast");

    $.get("https://jsonplaceholder.typicode.com/users", function (res) {
      $("#loadingIndicator").fadeOut("fast");

      res.forEach((user) => {
        $("#usersList").append(`<li>${user.name}</li>`);
      });
    });
  });
});
