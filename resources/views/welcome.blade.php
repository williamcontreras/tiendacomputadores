<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Styles -->
        
    </head>
    <body>
        <div class="container">
        <ul class="list-group">
            @foreach($tareitas as $tarea)

        <li class="list-group-item">

        {{$tarea->cuerpo}}

         </li>   
            @endforeach

        </ul>
            
        </div>
    </body>
</html>
