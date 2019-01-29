<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<form action="{{route('subirFoto')}}" enctype="multipart/form-data" method="POST">
		@csrf
 		Seleccionar imagen: <input name="foto" size="35" type="file"/><br/>
 		<input type="submit" name="submit" value="Subir"/>
	</form>
</body>
</html>