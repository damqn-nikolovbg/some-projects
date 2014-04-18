<?php
/**
* Template Name: The Main Project Page01 Template
*/

	get_header();
?>

	 <div id="main-wrapper">
        <div class="wrapper cf">

             <div id="main-content">
			 
			 <header id="body-header">
                    <h2><?php the_title(); ?></h2>
                </header>
				
				
<?php
	
	if(have_posts()):
		while(have_posts()):
			the_post();
?>

				
				
				<div><?php the_content(); ?></div>

<?php
		endwhile;
	endif;
	
?>
				</div>
            
        </div>
    </div>

<?php get_footer(); ?>				