<!doctype html>
<html>
<head>
<title>Mira mi Login</title>
</head>
<body style="width: 100%; background: #0073e6;">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
 



@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<style type="text/css">
  .container{
background: #b3d9ff;
margin-top:40px;width: 30%;
border: 10px solid #66b3ff;
border-radius: 5px;
padding-top: 50px;


  }
.form-horizontal{

  background-color: #EDEDED;
    padding-top: 2px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}
.well{

margin-top:2px;
}

</style>



<div class="container">
 
      
            
  <h4 class="well" id="tonta">Tienda de computadores.</h4>
            	{!! Form::open(['autocomplete'=>'off', 'route'=>'login', 'class' => 'form-horizontal','method'=>'POST']) !!}
  		        {{ csrf_field() }}
         
  		        <div class="form-group row col-lg-10">
           	  {!! Form::label('email', 'email:', ['class' => 'col-lg-2 col-form-label']) !!}
           	  </div >
               <div >
              {!! Form::email('email', null, ['class' => 'form-control input-sm chat-input', 'placeholder' => 'email' ,'required','autocomplete'=>'off' ]) !!}
              </div> 
              <div class="form-group row col-lg-10">      
              {!! Form::label('password', 'contraseña:', ['class' => 'col-lg-2 col-form-label']) !!}
      	     </div >

             <div>
           <input type="text" style="display: none">

             </div>
 
             
              <div> 
              {!! Form::password('password',['class' => 'form-control input-sm chat-input ', 'placeholder' => 'Pasaporte', 'type' => 'password','required','autocomplete'=>'new-password','id'=>'patricio']) !!} 
           
              </div>
              <div>
   
              <input type="password" style="display: none">
             </div> 
              <br>
                
              <div class="wrapper">
              {{ Form::submit('Dentrar sumerse!', ['class' => 'btn btn-primary btn-md'] ) }}
				      {{ Form::close() }}

              </div>



        </div>


 



  </div>
 </div>


<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>



<script type="text/javascript">



$(document).ready(function(){
alert('perro');
  
});    
        
 

</script>


</body>