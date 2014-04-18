<?php
/**
* Template Name: The Main Project Page Template
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
					$args = array(
						'posts_per_page' => 10,
						'post_type' => 'book'
					);
					query_posts($args);
									if(have_posts()):
										while(have_posts()):
											the_post();
				?>

<div id="posts-list" class="cf"> 
				
					<article>
						<div class="feature-image">
							<!--<a href="single.html" ><img src="img/dummies/560x300a.jpg" alt="Thumbnail" /></a>-->
							<!--<div class="entry-date"><div class="month">JAN</div><div class="number">23</div></div> -->
						</div>
						<div class="excerpt">
							<a href="single.html" class="post-heading" ><?php the_title(); ?></a>
							<p>
								<?php the_content(); ?>
							</p>
						</div>
						<div class="meta">
							<span class="user"><a href="#"><?php the_author(); ?> </a></span>
						</div>
						<i class="tape"></i>
					</article>
</div>
	
	

				<?php
						endwhile;
					endif;
	
				?>

				</div>
            
        </div>
    </div>

<?php get_footer(); ?>