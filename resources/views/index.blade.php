<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<div class="container">
		<h1>Publicaciones</h1>
		@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-body">
				{{$post->title}}
			</div>
		</div>
		@endforeach
	</div>
</body>
</html>