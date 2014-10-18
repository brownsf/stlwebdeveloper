<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 10/11/2014
 * Time: 9:26 PM
 */

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );