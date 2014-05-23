<!doctype html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <h1>All the books!</h1>
    @foreach ($books as $book)

    <li>{{ link_to("/books/{$book->isbn}", $book->title) }}</li>

    @endforeach

  </body>
</html>
