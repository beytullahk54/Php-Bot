<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kahramanbey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.css" rel="stylesheet">
    <link href="../public/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet"> 
    
    <!--Font-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../public/img/logo.png" />	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
      
      <!-- Fav and touch icons -->
      <link rel="shortcut icon" href="ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="../public/ico/apple-touch-icon-57-precomposed.png">


      

    <!-- SCRIPT 
    ============================================================-->  
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
      
      
  </head>
  <body>
  <!--HEADER ROW-->
  <div id="header-row">
    <div class="container">
      <div class="row">
              <!--LOGO-->
              <div class="span3"><a class="brand" href="#"><img src="../public/img/logo.png" style="width: 20%"></a></div>
              <!-- /LOGO -->

            <!-- MAIN NAVIGATION -->  
              <div class="span9">
                <div class="navbar  pull-right">
                  <div class="navbar-inner">
                    <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                    <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      
                   
                      <a href="https://github.com/beytullahk54" target="_blank" class="btn ">Github</button></a>
                        <a href="http://kahramanbey.com" target="_blank" class="btn btn-success">Siteme Gİt</button></a>
                 
                    </ul>
                  </div>

                  </div>
                </div>
              </div>
            <!-- MAIN NAVIGATION -->  
      </div>
    </div>
  </div>
  <!-- /HEADER ROW -->

  


  <div class="container" style="margin-top:25px; ">

                    <ul id="eliteregister">
                    	<?php include('../menu.php'); ?>
                    </ul>
		<main>
			  <?php include('bot_cek_meb.php'); ?>
		</main>

    
</div>


<!-- /.Row View -->



<!--Footer
==========================-->

<footer>
    <div class="container">
      <div class="row">
        <div class="span12" style="text-align: center;">Kopyalanamaz © 2018 Kahramanbey | Tüm hakları saklıdır.  <br>
       
        </div>
        
      </div>
    </div>
</footer>

<!--/.Footer-->

  </body>
</html>