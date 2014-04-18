<?php get_header(); ?>

	<div id="main-wrapper">
        <div class="wrapper cf">

            <div class="page-content">

	        	<div class="entry-content cf">
	        		
					<?php
						if(have_posts()):
							while(have_posts()):
								the_post();
					?>
					
						
						
						<div>
							<?php the_content(); ?>
						</div>
						
					<?php
							endwhile;
						endif;
					?>
					
					<div class="c-1"></div>
					<div class="c-2"></div>
					<div class="c-3"></div>
					<div class="c-4"></div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>