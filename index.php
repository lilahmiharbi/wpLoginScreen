<?php
	/*
	Plugin Name: WPLS - User Login Page
	Plugin URI:
	Description: Customize user login page. Change login logo, background
	Version: 1.0
	Author: Halil İbrahim Garbetoğlu
	Author URI:
	License: GNU
	*/
	
	
	global $wpdb;
	
	include "includes/setup.php";
	
	register_activation_hook(__FILE__, array('WplsSetup', 'install'));
	register_deactivation_hook(__FILE__, array('WplsSetup', 'install'));
	
	add_action('admin_menu', 'adminMenu');
	function adminMenu()
	{
		add_menu_page('WP Login Screen', 'WP Login Screen', 'manage_options', 'wp-login-screen', 'wplsHome', 'dashicons-wordpress', '1');
	}
	
	function wplsHome()
	{
		include "templates/wpls-settings.php";
		
		
		switch ($_GET['tab']){
			case "background":
				include "admin/settings-background.php";
				break;
			case "login_form":
				include "admin/settings-loginform.php";
				break;
			case "templates":
				include "admin/settings-templates.php";
				break;
			default:
				include "admin/settings-home.php";
				break;
		}
	}
	