<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Design</title>

  <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="/components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">


    <!-- google fonts -->

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    

   <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="/components/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Design</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
               
               
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#categories"> Categories <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="categories" class="collapse">
                           
                                  <li><a href="/categories/view"><i class="fa fa-eye fa-fw"></i>View</a></li>
                                  <li><a href="/category/create"><i class="fa fa-plus fa-fw"></i>Add</a></li>
                           
                            
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#subcategories"> Sub Categories <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="subcategories" class="collapse">
                           
                                 <li><a href="/subcategories"><i class="fa fa-eye fa-fw"></i>View</a></li>
                                   <li><a href="/subcategory/create"><i class="fa fa-plus fa-fw"></i>Add</a></li>
                           
                           
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#house"> House <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="house" class="collapse">
                           
                                 <li><a href="/houses/view"><i class="fa fa-eye fa-fw"></i>View</a></li>
                                 <li><a href="/house/create"><i class="fa fa-plus fa-fw"></i>Add</a></li>
                           
                           
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container">


               @yield('content')

             

              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jquery min -->
        <script type="text/javascript" src="/components/jquery/dist/jquery.min.js"></script>

        <!-- bootstrap min -->
        <script type="text/javascript" src="/components/bootstrap/dist/js/bootstrap.min.js"></script>

    

</body>

</html>
