<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('title', 'Inova') }}</title>
    {!! MaterializeCSS::include_full() !!}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/materialicons.css') }}">
    <!-- <script src="{{ url('css/materialicons.css') }}"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script> -->

</head>



<body>
<div class="nav-content navses">
         <ul class=" right personsize">
          @if(Auth::check())
          <li id="btnlogin" ><a class="sti" href="{{ url('login') }}">
            <!-- {{Auth::user()->email}}INICIAR SESIÒN  -->
        
              
              {{Auth::user()->email}} / <a class="sti" href="">Salir<i class="material-icons right" >exit_to_app</i> </a> 
             
      
          </a></li>
            
           @else
            <li id="btnlogin" ><a class="sti" href="{{ url('login') }}"><i class="material-icons right" >person</i>INICIAR SESIÓN</a></li>
            @endif  
          </ul>
        </div>

          <nav>
    <div class="nav-wrapper navpr">
       <a href="{{ url('/') }}"><img class="imglog brand-logo" src="{{asset('img/logo.jpg')}}"></a>
          <ul class="left titulos" >
                <li><a href="{{ url('categoria') }}" >Inicio<i class="material-icons left">home</i></a></li>
                 @if(Auth::check()  && Auth::user()->type=="Admin")
                <li style="background-color:black;box-shadow:3px 2px 10px white;"> <a  href="{{ url('warehouses/create') }}">Almacén</a>
                  </li>
                @endif
                 
                 @if(Auth::check()  && Auth::user()->type=="Admin")
                <li style="background-color:black;box-shadow:3px 2px 10px white;"> <a  href="{{ url('/orders') }}">Ordenes</a>
                  </li>
                @endif
           </ul>
               <ul class="auto">
                 <li>
                   <div class="input-field">
                    <i class="material-icons prefix">search</i>
          <input type="text" style="color:black; background-color:white; height:25px; " id="autocomplete-input" class="autocomplete">
                  </div>
                </li>
              </ul>
      </div>
    </div>
  </nav>


        <main class="py-4">
            @yield('content')
             <!-- <script src="{{ url('js/app.js') }}"></script> -->
        </main>
  
               <footer class="page-footer " id="cfft"">
                <div class="container">
            <div class="row">
              <div class="col l4 s12" style="color:white; font-weight:bold;">
               
              </div>
               <div class="col l5 s12" style="color:white; font-weight:bold;">
               
              </div>
              
            </div>
          </div>

              </footer> 
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>