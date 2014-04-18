<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <title>Home + <?php wp_title(); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/loopedslider.min.js"></script> 
	
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.2.min.js"></script> 

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/roundabout.js"></script>
	
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/roundabout_shapes.js"></script>
  
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gallery_init.js"></script> 
	
	
	<?php wp_head(); ?>
	
</head>
<body>
    <header id="the-header">
        <div class="wrapper cf">
            <div id="logo-header">
                <a href="index.php" title="surrealart">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-1.png" alt="" width="388" height="83"/>
                </a>
            </div>
        </div>
		
		<?php 
			wp_nav_menu(array(
				'theme_location' => 'top-site-menu',
				'container' => 'nav',
				'container_id' => 'main-nav',
				'container_class' => 'wrapper',
				'menu_id' => 'nav',
				'before' => '<div class="current-cursor"></div>'
			));
		?>
		
<!--
        <nav id="main-nav" class="cf">
            <div class="wrapper cf">
                <ul id="nav">
                    <li>
                        <div class="current-cursor"></div>
                        <a href="index.html" title="home">HOME</a>
                    </li>
                     <li>
                        <div class="current-cursor"></div>
                        <a href="about.html" title="about">ABOUT</a>
                    </li>
                     <li>
                        <div class="current-cursor"></div>
                        <a href="artists.html" title="artists">ARTISTS</a>
                    </li>
                     <li>
                        <div class="current-cursor"></div>
                        <a href="other.html" title="other">OTHER</a>
                    </li>
                     <li>
                        <div class="current-cursor"></div>
                        <a href="contacts.html" title="contacts">CONTACT</a>
                    </li>
                     <li>
                        <div class="current-cursor"></div>
                        <a href="blog.html" title="github">BLOG</a>
                    </li>
                </ul>
            </div>
        </nav>
-->

    </header>

    