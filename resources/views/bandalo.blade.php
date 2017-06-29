<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body style="background-color: #ffffff;">
	<div class="alert alert-warning">
  <strong>Info!</strong> esta autenticado pichurria-bandalo ->{{Auth::user()->name}}{{Auth::user()->idrol}}
  <a href="{{route('salir')}}"class="btn btn-info" role="button">salir</a>
</div>
<div class="page-header">
</div>
</body>
</html>



