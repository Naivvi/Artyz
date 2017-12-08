<?php



	function register_resources(){

		//add menu to system
		register_nav_menu('main-menu','Main Menu');

		//register services
		$arg = array(
			'labels' => array(
				'name'=> 'Intro',
				'singular_name' => 'Intro',
				'menu_name' => 'Intro'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('intro',$arg);

		$arg = array(
			'labels' => array(
				'name'=> 'Contact',
				'singular_name' => 'Contact',
				'menu_name' => 'Contact'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('contact',$arg);

		$arg = array(
			'labels' => array(
				'name'=> 'Blog',
				'singular_name' => 'Blog',
				'menu_name' => 'Blog'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('Blog',$arg);



	}
	add_action('init','register_resources');


	function add_menu_li_class($classes,$item,$args){

		$classes[] = 'nav-item';

		return $classes;
	}
	add_filter('nav_menu_css_class','add_menu_li_class',10,4);


	function add_menu_anchor_class($attrs,$item,$args){

		$attrs['class'] = 'nav-link';

		return $attrs;
	}
	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,4);


	function testrender() {
						while( have_posts() ) {
					the_post();
					get_template_part( 'content', 'page' );
				}
	}

	add_theme_support( 'infinite-scroll', array(
    'container' => 'container',
    'render'    => 'testrender',
		'footer' => false,

));

add_filter('show_admin_bar', '__return_false');

?>
