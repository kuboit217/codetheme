<?php 
function theme_setup(){
	register_nav_menu('top-menu',__('menu Chính'));
	//thêm thumbnails vào bài vi
	add_theme_support( 'post-thumbnails' );
}
add_action('init','theme_setup');
