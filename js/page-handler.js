$(document).ready(function() {
  $.ajax({
      url: './data_processing/text_file.php'
  }).done(function(data) {
    $(".template-canvas").append(data);
  }).fail(function(data) {
    console.log(data);
  });

  // $.ajax({
  //     url: './data_processing/text_file.php'
  // }).done(function(data) {
  //   result = $(data).find(".result");
  //   console.log(result);
  //   $(".template-canvas").append(result);
  // }).fail(function(data) {
  //   console.log(data);
  // });

});
