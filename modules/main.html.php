<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title>Alex Mallory<?php if(!empty($pagetitle)) { echo " | ".$pagetitle; } ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--
    <link href="/bootstrap/css/carousel.css" rel="stylesheet">
    -->
    <link href="/bootstrap/css/custom.css" rel="stylesheet"></href>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="topbanner">
      <img src="/images/header1260x240.jpeg" class="img-responsive topbanner">
      <div class="container"><div class="bannername">Alex Mallory</div></div>
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($nav=="home") { echo 'class="active"'; } ?>><a href="/">Home</a></li>
            <li <?php if($nav=="news") { echo 'class="active"'; } ?>><a href="/news">News</a></li>
            <li <?php if($nav=="contact") { echo 'class="active"'; } ?>><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav><!-- navbar -->


    <!-- main page -->
    <div class="container clearfix">
        <div class="row">
            <div class="col-sm-8 col-xs-12 pull-right white">
              <?php
                //  **********************************
                //      include page content here
                //  **********************************
                if(!empty($pagepath)) {
                    include($pagepath);
                }
              ?>
            </div><!-- rhs white section -->
            <div class="col-sm-4 headshot pull-left">
                <span style="font-size:20px;">
                <p>I tell stories of people who have faced war and other trauma in order to reach a greater understanding of the human capacity for empathy.</p>
                <p>I work frequently with military veterans to help bring their voices to the forefront of communities nationwide.</p>
                </span>
                <img src="/images/headshot.jpg" class="img-responsive headshot">
                <br>
                <p>Alex Mallory is a theatrical director in New York City. She has held artistic leadership positions with <a href="http://www.poetictheater.com" target="_blank">Poetic Theater Productions</a>, <a href="http://www.veteranartistprogram.org" target="_blank">Veteran Artist Program</a>, and Culture Project. She received a B.A. in Drama from Stanford University, where she was the recipient of the Louis Sudler Prize in Creative Arts and the Sherifa Omade Edoga Prize for work involving social issues.</p>
            </div><!-- left info panel -->
        </div><!-- main content row -->
    </div><!-- main content container -->
    
    <footer class="stickyfooter">
        <div class="container">
            <p class="pull-right">
                <a href="http://www.facebook.com/alex.mallory" target="_blank">
                    <img src="/images/social/round/facebook.png" class="social" alt="Facebook">
                </a>
                &nbsp;
                <a href="http://www.twitter.com/alexmallory" target="_blank">
                    <img src="/images/social/round/twitter.png" class="social" alt="Twitter">
                </a>
            </p>
            &copy; 2015 Alex Mallory
            <br>
            <i>Dijla Wal Furat</i> photos by Bjorn Bolinder. <i>Goliath</i> and <i>faith</i> photos by Hunter Canning. <i>Ravel</i> photos by Gary Weingarten.
        </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>