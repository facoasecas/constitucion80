<?php $title="CONSTITUCIÓN 1980";?>
<?php $description="Una lectura crítica a la Constitución de Dictadura, desde su República Democrática";?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="author" content="faco">
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo $title;?></title>
	<link rel="icon" href="http://presta.do/openday.png" sizes="32x32" type="image/png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400,300,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,400,700' rel='stylesheet' type='text/css'>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
.fill{
background:linear-gradient(rgba(14, 83, 138, 0.5),rgba(14, 83, 138, 0.5)), url('images/header-<?php echo rand(1,5);?>.jpg');
background-repeat:no-repeat;
background-position:bottom left;
-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
-o-background-size: cover;
}

</style>




    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><?echo $title;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
                <li><a class="page-scroll" href="index.php#actualidad"><?php echo date('F Y');?></a></li>
                <li><a class="page-scroll" href="index.php#anecdotario">ANECDOTARIO</a></li>
                <li><a class="page-scroll" href="index.php#opinion">OPINIÓN</a></li>
                <li><a class="page-scroll" href="index.php#historia">HISTORIA</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>