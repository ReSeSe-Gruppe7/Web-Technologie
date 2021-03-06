<!doctype html>
<html lang="en">
	<head>
    <link rel='icon' type='image/png' href='../img/cloud.png'/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="citation_authors" content="Badr Mouslik, Rheinhold Marber, Selcan Cali">
	<meta name="citation_keywords" content="Weather Wetter vorhersage Climat meteo">
	<meta charset="utf-8">
	<title>Weather Information Center</title>
	<link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../css/bootstrap/weather_center.css" rel="stylesheet" type="text/css"/>
    <link href="../css/bootstrap/footer.css" rel="stylesheet" type="text/css"/>
	<!--<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>-->
    <script type="text/javascript" src="../js/jquery-2.0.0.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/background_image.js"></script>
	</head>
<body id="body">



<div id="fb-root"></div>  

<script>(function(d, s, id) {  
          var js, fjs = d.getElementsByTagName(s)[0];  
          if (d.getElementById(id)) return;  
          js = d.createElement(s); js.id = id;  
          js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";  
          fjs.parentNode.insertBefore(js, fjs);  
          }(document, 'script', 'facebook-jssdk'));
</script>
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>




	<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="#">WIC</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="./index.php"><i class="icon-home icon-white"></i>Home</a></li>
                        <li><a href="mapController.php">Map</a></li>
                        <li><a href="enterform.php">Weather information</a></li>
                        <li><a href="showform.php">Weather measures</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>


                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Social
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="socials"><!-- Place this tag where you want the +1 button to render -->  
                                    <g:plusone annotation="inline" width="150"></g:plusone>  
                                </li> 
                                <li class="socials"><div class="fb-like" data-send="false" data-width="150" data-show-faces="true"></div></li>
                                <li class="socials"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>