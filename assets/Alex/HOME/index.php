<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TimeMachine</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/main.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="#Accueil"><span class="fa fa-camera"></span> TimeMachine</a>
                </div>
        <!-- <= Menu -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Hello</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Top 10 <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#continent">Par Continents</a></li>
                        <li><a href="#country">Par Pays</a></li>
                        <li><a href="#city">Par Villes</a></li>
                        <li class="divider"></li>
                        <li><a href="#theme">Par Thèmes</a></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </ul>
        <!-- Menu => -->
            <ul class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">User<span></span></a> <!-- About Me -->
                </li>
                <li>
                    <a class="page-scroll" href="#social">Why</a>
                </li>
                <li>
                    <a class="page-scroll" href="#download">About Us</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a> 
                </li>
                <li>
                    <button id="btn-co" href="modal_co.php" data-toggle="modal" data-target="#login-modal" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span>&nbsp Connexion</button>
                </li>
            </ul>
        </div>
    </div>

            </div>
        </nav>
        
        <!-- Section "slogan"-->
        <section id="moto" class="content-section text-center">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>TimeMachine</h1>
                        <p class="lead">Where past and present mingle</p>
                    </div>
                </div><!-- /.container -->
        </section>

        <!-- Section frise slogan -->
        <section id="frise" class="content-section text-center">
            <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                    </div>
            </div>      
        </section>

        <!-- Section carousel -->
        <section id="carousel" class="content-section text-center">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        
                            <!-- images slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                <img src="la.jpg" alt="Los Angeles">
                                </div>

                                <div class="item">
                                <img src="chicago.jpg" alt="Chicago">
                                </div>

                                <div class="item">
                                <img src="ny.jpg" alt="New York">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                            Try it Yourself »
                    </div>
                </div><!-- /.container -->
        </section>

    <!-- Section Map -->
        <section id="map" class="content-section text-center">
            <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                    <img src="img/map.jpg" alt="planisphère" class="img-responsive">
                    </div>
            </div>      
        </section>

    <!-- Footer -->
        <footer>
            <div class="separator-wave">
                <div class="separator-wave-inner"> 
                </div>
            </div>
            <div class="container text-center">
                <p>&copy; 2017 - TimeMachine</p>
            </div>
        </footer>

        <!-- Script custom -->
        <script src="js/script.js"></script>

        <!-- jQuery -->
        <script src="vendor/jquery/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

        <script src="https://use.fontawesome.com/dbb72ac4f9.js"></script>

        <!--<script src="../js/bootstrap.min.js"></script>-->
    </body>
</html>