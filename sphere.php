<?php
/*
Plugin Name: Sphere
Plugin URI: http://jsrwebsolutions.com
Description: A customized plugin for sphere website
Version: 1.0
Author: Joel Ramos
Author URI: http://jsrwebsolutions.com
License: GPL2
*/


//main class
class Sphere {
	
	function __construct() {
		
		//database for everthing
		require_once( 'class-database.php' );
		
		//intention
		require_once( 'intention/intention.php' );
		
		//support
		require_once( 'support/support.php' );
		
		//image gallery
		require_once( 'image-gallery/gallery-admin.php' );
		require_once( 'image-gallery/gallery-upload.php' );
		
		//background gallery
		require_once( 'background-option/background-admin.php' );
		require_once( 'background-option/background-upload.php' );
	
		//nav
		require_once( 'nav-menu/nav-database.php' );
		require_once( 'nav-menu/nav-control.php' );
		require_once( 'nav-menu/nav-admin.php' );
		require_once( 'nav-menu/nav.php' );
		
		
		//add menu and sub menu
		add_action('network_admin_menu', array( &$this, 'register_menu_page' ) );
		
		//plugin activation
		register_activation_hook( __FILE__, array( &$this, 'sphere_database_install' ) );
	}
	
	function register_menu_page() {
		
		add_menu_page( 'Sphere', 'Sphere', 'add_users', 'sphere', array( &$this, 'sphere_admin' ), '', 100 );
		
		
		add_submenu_page( 'sphere', 'Intentions', 'Intentions', 'add_users', 'intentions', array( $this, 'sphere_admin' ) );
		add_submenu_page( 'sphere', 'Supports', 'Supports', 'add_users', 'intentions', array( $this, 'sphere_admin' ) );	
		add_submenu_page( 'sphere', 'Signup Option', 'Signup Option', 'add_users', 'signup-option', array( $this, 'sphere_admin' ) );	
		add_submenu_page( 'sphere', 'Activity Log', 'Activity Log', 'add_users', 'activity-log', array( $this, 'sphere_admin' ) );
		add_submenu_page( 'sphere', 'Sphere Stats', 'Sphere Stats', 'add_users', 'sphere-stats', array( $this, 'sphere_admin' ) );
		add_submenu_page( 'sphere', 'Image Gallery', 'Image Gallery', 'add_users', 'image-gallery', array( $this, 'image_gallery' ) );
		add_submenu_page( 'sphere', 'Background Option', 'Background Option', 'add_users', 'background-option', array( $this, 'bg_image_gallery' ) );
		add_submenu_page( 'sphere', 'Nav Menu', 'Nav Menu', 'add_users', 'nav-menu', array( $this, 'nav_menu' ) );
	}
	
	function sphere_admin() {
		
		echo "this is sphere admin";
		
	}
	
	function sphere_database_install() {
		
		//db of gallery upload and bg upload are already created. We just hooked this one on those so no need to create new
		
		//create other db
		$db = new IntentionDatabase;
		$db->create_database();
		
		//create nav db
		$jsr_nav_control = new JSRCustomNavControl;
		$jsr_nav_control->initialize();
		
	}
	
	function bg_image_gallery() {
	
		bg_gallery_option();
		
	}
	
	function image_gallery() {
		
		gallery_option();
		
	}
	
	function nav_menu() {
		
		jsr_custom_menu_manager();
			
	}
	
		
}


$sphere = new Sphere;