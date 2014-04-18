<?php
/**
* Template Name: The Main Project Blog Template
*/

get_header();
?>
<h2>The Blog (Demo 2) </h2>
<?php 
	$blog_query = new WP_Query('post_type=book');
	
	if($blog_query->have_posts()):
		while($blog_query->have_posts()):
			$blog_query->the_post();
?>

<div id="posts-list" class="cf"> 
				
					<article>
						<div class="feature-image">
							<a href="single.html" ><img src="img/dummies/560x300a.jpg" alt="Thumbnail" /></a>
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
	
	wp_reset_query();
?>

<?php get_footer(); ?>