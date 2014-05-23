// click the icon, time to search!
$('div.icon').click(function () {
  $('input#search').focus();
});

function search() {
  // live search
  var search_string = $(this).val();

  if(search_string !== ''){
    alert('string defined');
    $.ajax({
      type:"POST",
      url:"search.php",
      data: { query: query_value },
      cache: false,
      success: function (html) {
        $("ul#results").html(html);
      }
    });
  }return false;
}

$("input#searchField").live("keyup", function (e) {

  clearTimeout($.data(this, "timer"));
  alert('hey!');
  var search_string = $(this).val();

  //adds a small delay to prevent fast typists from breaking search
  if (search_string =='') {
    $("ul#results").fadeOut();
    $("h4#results-text").fadeOut();
  } else {
    $("ul#results").fadeIn();
    $("h4#results-text").fadeIn();
    $(this).data('timer', setTimeout(search, 100));
  };
});
