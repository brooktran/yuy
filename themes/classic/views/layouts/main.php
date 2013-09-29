<!DOCTYPE html>
<html lang="zh">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo yii::app()->theme->baseUrl ?>/assets/bootstrap/ico/favicon.png">
	
	<title>玉缘后台管理</title>

	<!-- Bootstrap core CSS -->
    <link href="<?php echo yii::app()->theme->baseUrl ?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo yii::app()->theme->baseUrl ?>/assets/css.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/html5shiv.js"></script>
      <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
	
	
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top</a></li>
            
             <?php if(Yii::app()->user->isGuest):?>
            	<li><a href="<?php echo Yii::app()->createUrl('site/login')?>">登陆</a></li>
            <?php endif?>
            <?php if(!Yii::app()->user->isGuest):?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php Yii::app()->user->name?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <?php endif?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <?php echo $content; ?>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/jquery.js"></script>
    <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/bootstrap.min.js"></script>
  </body>
</html>