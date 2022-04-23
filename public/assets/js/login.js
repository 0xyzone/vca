// $(function () {
//   $("#uname").keyup(function () {
//     var btnSubmit = $("#login");

//     if ($(this).val().trim() != "") {
//       btnSubmit.removeAttr("disabled");
//     } else {
//       btnSubmit.attr("disabled", "disabled");
//     }
//   });
// });
$(function () {
    ($("#uname") && $("#password")).keyup(function () {
      var btnSubmit = $("#login");
  
      if (($(this).val().trim() != "") && ($("#uname").val().trim() != "") ) {
        btnSubmit.removeAttr("disabled");
      } else {
        btnSubmit.attr("disabled", "disabled");
      }
    });
  });
