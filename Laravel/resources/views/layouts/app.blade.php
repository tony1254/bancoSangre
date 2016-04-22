<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Bannco de Sangre</title>
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      

    <link href="\bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="\bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="\bower_components/bootstrap-material-design/dist/css/ripples.min.css" rel="stylesheet">
    <link href="\bower_components/Materialize/dist/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="\bower_components/bootstrap/dist/css/font-awesome.min.css">


<style type="text/css">   
a.nounderline:link   
{   
 text-decoration:none;   
}   
</style>

</head>
<body id="app-layout">

<!-- BARRA MATERIALIZER -->
<nav > 
 <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content  blue darken-4 ">
 <!--          <li><a class="nounderline grey-text text-lighten-5" href="#1!">one</a></li>
          <li><a class="nounderline grey-text text-lighten-5" href="#2!">two</a></li>
          <li class="divider grey-text text-lighten-5"></li>
          <li><a class="nounderline grey-text text-lighten-5" href="#3!">three</a></li> -->
          <li><a href="{{ url('/logout') }}" class="grey-text text-lighten-5"><i class="fa fa-btn fa-sign-out "></i>Logout</a></li>
        </ul>

             



<!-- MENU DE SLIDE BAR -->
    <div class="nav-wrapper blue darken-4" style="display: ">
      <ul class="side-nav  blue darken-4 " id="mobile">
        <li><a class="nounderline grey-text text-lighten-5" href="#">Espacio</a></li>
        
         @if (Auth::guest())
        <li><a class="nounderline grey-text text-lighten-5 "href="{{ url('/login') }}">Login</a></li>
        <li><a class="nounderline grey-text text-lighten-5"href="{{ url('/register') }}">Register</a></li>


        
        @else
       
              <!-- Dropdown Trigger -->
              <li><a class="nounderline dropdown-button grey-text text-lighten-5" href="#!" data-activates="dropdown1">  {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
 
        @endif
      </ul>
    </div>
  </nav>
<br>
<!-- BARRA NORMAL BOOTSTRAP -->
    <nav class="navbar navbar-default blue darken-4 navbar-fixed-top nav-wrapper">
        <div class="container-fluid">
        <div class="navbar-header">
                    
                         <button type="button" data-activates="mobile" class="navbar-toggle collapsed  button-collapse " data-toggle="collapse" >
                    
                      <span class="fa fa-bars fa-3x"></span>
                   <br><br>
                          </button>
                 
                       <ul>
  
                    <li>
                          
                       <a class="brand-logo" href="{{ url('/') }}">
                      <h6>
                    <span class="fa-stack fa-lg  fa-1x ">
                      <i class="fa fa-archive fa-stack-2x "></i>
                      <i class="fa fa-tint fa-stack-2x red-text text-accent-4"></i>

                    </span>
                      </h6>  

                </a>
                    </li>

                </ul>


        </div>
      
             
                    


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}"> </a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}"> </a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}"> Banco de Sangre</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registro</a></li>
                    @else
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu  blue darken-4" role="menu">
                                <li><a href="{{ url('/logout') }}" class="grey-text text-lighten-5"><i class="fa fa-btn fa-sign-out "></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>


        </div>

    </nav>

    
</div>    @yield('content')

    
            <script src="\bower_components/jquery/dist/jquery.min.js"></script>
            <script src="\bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="\bower_components/bootstrap-material-design/dist/js/ripples.min.js"></script>
            <script src="\bower_components/bootstrap-material-design/dist/js/material.min.js"></script>
            <script src="\bower_components/Materialize/dist/js/materialize.min.js"></script>

        <script type="text/javascript">
            $(document).on('ready',function(){
                $(".button-collapse").sideNav();
                $.material.init();

            });
        </script>
</body>
</html>
<!-- 
    <nav class="navbar navbar-default blue darken-4">
        <div class="container">
            <div class="navbar-header">

                Collapsed Hamburger 

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                Branding Image
     -->