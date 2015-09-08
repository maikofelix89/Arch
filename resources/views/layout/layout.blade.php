
<!DOCTYPE html>
<html ng-app="app">
    <head>
        <title>Design</title>

        <!-- favicon -->
        <link rel="icon" href="/images/favicon.ico" type="image/ico" sizes="16x16">

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- custom css -->
        <link rel="stylesheet" type="text/css" href="/css/site.css">

        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="/components/bootstrap/dist/css/bootstrap.min.css">
        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="/components/font-awesome/css/font-awesome.min.css">
    
        <!-- jasny bootstrap -->
        <link rel="stylesheet" type="text/css" href="/components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">

         <!-- google fonts -->
      
       <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

          <!-- jquery min -->
        <script type="text/javascript" src="/components/jquery/dist/jquery.min.js"></script>

         <!-- angular js -->

        <script type="text/javascript" src="/components/angular/angular.min.js"></script>


        <script type="text/javascript" src="/components/angular-animate/angular-animate.min.js"></script>

    



       
    </head>
    <body>

    <!-- navbar -->
    <nav class="navbar navbar-inverse" id="mynavbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
         
      
       <li><a href="../auth/login">Home</a></li>
       <li><a href="../auth/register">About Us</a></li>
        
            
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
                 <ul class="dropdown-menu" role="menu">
                     <li><a href="/categories/view">View</a></li>
                     <li><a href="/category/create">Add</a></li>

                 </ul>
             </li>

              <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sub Categories <span class="caret"></span></a>
                 <ul class="dropdown-menu" role="menu">
                     <li><a href="/subcategories">View</a></li>
                     <li><a href="/subcategory/create">Add</a></li>

                 </ul>
             </li>

              <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Houses <span class="caret"></span></a>
                 <ul class="dropdown-menu" role="menu">
                     <li><a href="/houses/view">View</a></li>
                     <li><a href="/house/create">Add</a></li>

                 </ul>
             </li>
             </ul>
     
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    @yield('content')
        



        <!-- scripts at the bottom to load after everything else -->

      

        <!-- bootstrap min -->
        <script type="text/javascript" src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
    
        <!-- jasny bootstrap js -->
        <script type="text/javascript" src="/components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript">
   


    </script>

      


    </body>
</html>
