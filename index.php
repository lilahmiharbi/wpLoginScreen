<?php
/*
Plugin Name: WP Login Screen
Plugin URI:
Description: Wordpress giriş ekranını özelleştirmeye yarayan eklenti.
Version: 1.0
Author: Halil İbrahim Garbetoğlu
Author URI:
License: GNU
*/



function onayMenu(){
	add_menu_page('WP Login Screen', 'WP Login Screen', 'manage_options', 'wp-login-screen', 'wpLoginScreen', 'dashicons-yes-alt', '3');
    add_submenu_page( 'onaylamalar', 'Dosya Onayları', 'Dosya Onayları', 'manage_options', 'dosya-onaylari', 'dosya');
}




add_action('admin_menu', 'onayMenu');