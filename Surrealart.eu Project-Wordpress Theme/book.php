<?php
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
						
							the_post();
				?>

<div>
	<?php the_content(); ?>
</div>


<?php
						
					endif;
				?>

				</div>
            
        </div>
    </div>

<?php get_footer(); ?>