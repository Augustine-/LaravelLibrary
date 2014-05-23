<!DOCTYPE html>
<html>
<head>
    <title>Test Searchbar</title>
    {{ HTML::style('css/main.css') }}
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Load Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold" type="text/css" />
	<!-- Load jQuery library -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="main">
    <div class="icon"></div>
    <h1 class="title">Lets find some books!</h1>
    <h5 class="title"></h5>
    <input id="searchField" type="text" />
    <h4 id="results-text">
      <div id="rows"></div>
      <strong id="search-string"></h4>
      </div>
  </body>
</html>

<script>
// click the icon, time to search!
$('div.icon').click(function () {
  $('input#search').focus();
});

function search(str) {
  // live search
  var search_string = str;

  if(search_string !== ''){
    $.ajax({
      type:"post",
      url:"/results?q="+str,
      data: search_string,
      cache: false,
      success: function (array) {
        console.log(array);
        array.forEach(function (entry) {
          var row = "<li>" + entry['title'] + "</li>"
          $('#rows').append(row);
        });

      }
    });
  }return false;
}

$("input#searchField").live("keyup", function (e) {
e.preventDefault();
  clearTimeout($.data(this, "timer"));

  var search_string = $(this).val();

    if (e.keyCode == 13){
      $('#rows').html('');
      search(search_string); }
});
</script>
