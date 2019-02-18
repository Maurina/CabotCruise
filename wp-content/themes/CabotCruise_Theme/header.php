<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

       <title>Cabot Cruise <?php wp_title(); ?></title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet">

        <link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet">



        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    </head>

    <body>

<div class="headerLimited">

       <header>

          

            <figure class="logo">

                <img src="<?php echo get_template_directory_uri(); ?>/images/logo1x.png" alt="logo"

                    srcset="<?php echo get_template_directory_uri(); ?>/images/logo1x.png 1x, <?php echo get_template_directory_uri(); ?>/images/logo2x.png 2x, <?php echo get_template_directory_uri(); ?>/images/logo3x.png 3x">

            </figure>
		   
		   <div class="companyName">
		   <h1>Cabot Cruises</h1>
			   <h3>Sail off into the sunset</h3>
		   </div>
		   
 <div class="icons">
		
		   <i class="fab fa-twitter"></i>
		   	<i class="fab fa-facebook-f"></i>
           <i class="fab fa-youtube"></i>
     
		   
			 
		   <div class="searchBox">

                <form method="get" action="/" class="search">

                    <input type="search" placeholder="Search..." name="s">

                    <button type="submit" value=""><i class="fa fa-search"></i></button>

                </form>

            </div><!--end searchBox-->
			</div><!--icons-->
       </header>

</div><!--end headerLimited-->       



    <div class="navBar">

        <nav class="clearfix">

            <button id="hamburgerBtn"></button>

         		<?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?>

        

         

        </nav>

    </div><!--end navBar-->



<main>