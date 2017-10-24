<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.theme.min.css">
    <script type=text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type=text/javascript" src="bootstrap/js/bootstrap.min.js"></script>  
    @yield('head')

    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" >LARAVEL</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <!--<li><a href="#contact">Contact</a></li> -->
            
          </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Home</a></li>
            <li><a href="/docentes">Docentes</a></li>
            <li><a href="/celulares">Productos</a></li>
                <li><a href="/about">About</a></li>
            
              <!--<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>-->
              <!--<li><a href="../navbar-static-top/">Static top</a></li>-->
              <!--<li><a href="../navbar-fixed-top/">Fixed top</a></li>-->
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top: 50px">

     @yield('content')
        
      </div>
 
  </body>
</html>
