<!doctype html>
<html>
	<head>
		<title>Hello</title>
	</head>
	<body>
		<h1>Welcome to the Library</h1>


@foreach($results as $result)

	<li>{{$result->title}} - {{$result->fname}} {{$result->lname}}</li>

@endforeach

	</body>
</html>
