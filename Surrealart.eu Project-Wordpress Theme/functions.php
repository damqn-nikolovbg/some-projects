<?php
	$sidebar_args = array(
		'id' => 'footer_sidebar',
		'name' => 'Footer Sidebar',
		'class'         => 'widget-cols cf',
		'before_widget' => '<section id="footer-posts">',
		'after_widget'  => ' </section>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>'
	);
	
	register_sidebar($sidebar_args);
	
	$custom = array(
		'id' => 'custom',
		'name' => 'Blog Sidebar',
		'class'         => 'widget-cols cf',
		'before_widget' => '<section id="footer-posts">',
		'after_widget'  => ' </section>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>'
	);
	
	 if ( function_exists ('register_sidebar')) { 
			register_sidebar ('custom'); 
		} 
	
	
	/*$blog_args = array(
		'id' => 'blog_sidebar',
		'name' => 'Blog Sidebar'
	);
	
	register_sidebar($blog_args);
	*/
	
	register_nav_menu('top-site-menu', "This is the top site menu(The Main Project)");
	
	/*function damian_adds(){
		wp_enqueue_script('jquery');
		
		wp_register_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-1.4.2.min.js', '', 'null', '');
		wp_register_script( 'round', get_template_directory_uri() . '/js/roundabout.js', '', 'null', '');
		wp_register_script( 'round-shapes', get_template_directory_uri() . '/js/roundabout_shapes.js', '', 'null', '');
		wp_register_script( 'gallery-init', get_template_directory_uri() . '/js/gallery_init.js', '', 'null', '');
		
		wp_enqueue_script('jquery-min');
		wp_enqueue_script('round');
		wp_enqueue_script('round-shapes');
		wp_enqueue_script('gallery-init');
	}
	
	add_action('wp_enqueue_scripts', 'damian_adds');
	*/
	
	function my_custom_post_type() {
		
		$labels = array(
			'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' ),
		);
		
		$args = array(
		  'labels' => $labels,
		  'taxonomies' => array('category'),
		  'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		  'exclude_from_search' => false,
		  'show_in_nav_menus'   => true,
		  'show_in_admin_bar'   => true,
		  'menu_icon'           => null,
		  'label'  => 'Books',
		  
		  'supports' => array(
			  'title',
			  'editor',
			  'excerpt',
			  'author',
			  'thumbnail',
			  'thumbnail',
			  'custom-fields',
			  'page-attributes',
			  'post-formats',
			  'comments' 
			)
		);
		register_post_type( 'book', $args );
	}
	
	add_action( 'init', 'my_custom_post_type' );
	
?>