<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title(''); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="header">
	        <!-- logo  -->   
	        <div class="logo">
	            <div class="img">
	                <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Inapex"></a>
	            </div>
	        </div> <!-- end logo -->
	        <!-- menu -->
	        <div class="menu">
	            <?php wp_nav_menu( array('theme_location' => 'headernav', 'menu_id' => 'header-menu', 'menu_class' => 'nav-head', 'container' => null, 'fallback_cb' => null, 'depth' => 1) ); ?>
	        </div><!-- end menu -->
	        <div class="socmed">
	            <li><a href="https://www.facebook.com/INAPEX.co.id" target="_blank"><i class="fa fa-facebook"></i></a></li>
	            <li><a href="https://twitter.com/INAPropertiExpo" target="_blank"><i class="fa fa-twitter"></i></a></li>
	            <li><a href="https://www.instagram.com/indonesiapropertiexpo/" target="_blank"><i class="fa fa-instagram"></i></a></li>
	            <li><a href="javasrcipt:;" class="search-btn"><i class="fa fa-search"></i></a></li>
	        </div>
	    </div>

	    <!-- header mobile -->
	    <div class="header-mobile">
	        <div class="container">
	            <div class="logo-mobile">
	                <a href="<?php bloginfo('url'); ?>/">
	                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Inapex">
	                </a>
	            </div>
	            <div class="menu-mobile menu-right">
	                <a href='javascript:;'>
	                    <i class="fa fa-align-justify"></i>
	                </a>
	            </div>
	        </div>

	        <div class="menu-mobile-ins" style="display:none">
	            <div class="container">
	                <div class="search-mobile">
	                    <form action="<?php bloginfo('url'); ?>" method="get">
	                        <input type="text" name="s" placeholder="Search.." autocomplete="off">
	                        <button>
	                            <i class="fa fa-search"></i>
	                        </button>
	                    </form>
	                </div>
	                <?php wp_nav_menu( array('theme_location' => 'headernav', 'menu_id' => 'header-menu', 'menu_class' => 'nav-head', 'container' => null, 'fallback_cb' => null, 'depth' => 1) ); ?>
	            </div>
	        </div>
	    </div><!-- end header mobile -->

	    <div class="spacemenu-mobile"></div>
                           
		<div class="search-field" style="display: none">
		  <div class="container">
		     <form method="get" action="<?php bloginfo('url'); ?>">
		          <div class="search-form">
		              <div class="form">
		                  <input placeholder="Search.." itemprop="query-input" type="text" name="s" required autocomplete="off" focus>
		              </div>
		          <div class="close">
		            <a href="javascript:;" class="closex">
		                <i class="fa fa-close"></i>
		            </a> 
		          </div>
		          </div>
		      </form>
		  </div>
		</div>