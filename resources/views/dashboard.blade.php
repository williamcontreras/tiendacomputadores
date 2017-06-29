<!DOCTYPE html>

<html>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

<head>

	<title></title>
</head>
<body>

<div class="alert alert-info">

  <strong>Info!</strong> esta autenticado pichurria ->{{Auth::user()->name}}{{Auth::user()->idrol}}
  <a href="{{route('salir')}}"class="btn btn-info" role="button">salir</a>
</div>
<div class="page-header">
</div>
</body>
</html>