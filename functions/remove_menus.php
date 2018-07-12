<?php

/**
 * Remove Elements from Menu
 * Hides undesired elements from the menu
 *
 * @return  void
 * @since   1.0
 * @uses    default disabled
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/admin_menu
 */
function dl_remove_menus(){
	
	remove_menu_page( 'index.php' );					//Dashboard
	remove_menu_page( 'edit.php' );						//Posts
	remove_menu_page( 'upload.php' );					//Media
	remove_menu_page( 'edit.php?post_type=page' );		//Pages
	remove_menu_page( 'edit-comments.php' );			//Comments
	remove_menu_page( 'themes.php' );					//Appearance
	remove_menu_page( 'plugins.php' );					//Plugins
	remove_menu_page( 'users.php' );					//Users
	remove_menu_page( 'tools.php' );					//Tools
	remove_menu_page( 'options-general.php' );			//Settings
	
}

// add_action( 'admin_menu', 'dl_remove_menus' );
