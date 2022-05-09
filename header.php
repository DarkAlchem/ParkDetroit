<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="http://webfonts.creativecloud.com/c/68d481/1w;open-sans,1,VvG:V:i3,VvD:V:i4,VvF:V:n3,VvH:V:n4,Vv8:V:n7;open-sans-condensed,1,Wkw:V:n7;source-sans-pro,1,bmg:V:n3/d" media="all">
    <script src="http://webfonts.creativecloud.com/source-sans-pro:n3:all;open-sans:n7,n4,n3,i4,i3:all;open-sans-condensed:n7:all.js" type="text/javascript"></script>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>
      <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo('name'); ?>
    </title>
    
    <link rel="shortcut icon" href="<?php bloginfo('template_directory' );?>/img/favicon.png">

    <!-- Bootstrap 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/s.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class='container logo-container'>
      <div class='row'>
        <div class='col-sm-5'>
          <a href="http://www.parkdetroit.us/"><img class='img-responsive' src='<?php bloginfo('template_directory' );?>/images/main-logo.png'></a>
        </div>
        <div class='col-sm-7 button-column'>
          <div>
            <a href="https://detroit.ppprk.com/apps/v7/mobilepayweb/"><button class='pay-button'>Pay for Parking</button></a>
            <a href="http://duncan.imageenforcement.com/AdminReviewSites/DetroitReview"><button href="https://www.dspayments.com/Detroit" class='pay-button'>Pay or Contest Ticket Online</button></a>
          </div>
        </div>
      </div>
    </div>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
          <!-- <a class ="navbar-brand" href="#"><?php bloginfo('name' );?></a>-->
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<?php
          $args = array (
             'menu'       => 'header-menu',
             'menu_class' => 'nav navbar-nav',
             'container'  => 'false'
           );
          wp_nav_menu( $args );
          ?>
				</div>
			</div>
		</nav>