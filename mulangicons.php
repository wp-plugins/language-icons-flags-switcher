<?php

/**
 * @package Multisite Language Icons Switcher
 * @version 1.0
 */

/*

Plugin Name: Floating Flags Links

Plugin URI: http://www.webcraft.gr/muli

Description: This plugin helps you to add icons with links on the site.

Author: Vasilis Triantafyllou

Version: 1.0

Author URI: http://www.webcraft.gr

*/



 

add_action('wp_footer', 'Ffll_fucntion');

require ('settingsmenu.php');	

require ('funct.php');

add_shortcode( 'languagelinks', 'Ffll__langshort' );

function Ffll__langshort ($atts) {

$opt1 = get_option('option_1');

$opt2 = get_option('option_2');

$opt3 = get_option('option_3');

$opt4 = get_option('option_4');

$opt5 = get_option('option_5');

$opt6 = get_option('option_6');

$opt7 = get_option('option_7');

$opt8 = get_option('option_8');

if ($opt1 == 1) { ?><a href ="<?php echo get_option('option_name1'); ?>"><?php return '<img src="' . plugins_url( 'img/english.png' , __FILE__ ) . '" > '; ?></a><?php }

if ($opt2 == 1) { ?><a href ="<?php echo get_option('option_name2'); ?>"><?php return '<img src="' . plugins_url( 'img/greece.png' , __FILE__ ) . '" > '; ?></a><?php }

if ($opt3 == 1) { ?><a href ="<?php echo get_option('option_name3'); ?>"><?php return '<img src="' . plugins_url( 'img/germany.png' , __FILE__ ) . '" > '; ?></a><?php }

if ($opt4 == 1) { ?><a href ="<?php echo get_option('option_name4'); ?>"><?php return '<img src="' . plugins_url( 'img/spain.png' , __FILE__ ) . '" > '; ?></a><?php }

if ($opt5 == 1) { ?><a href ="<?php echo get_option('option_name5'); ?>"><?php return '<img src="' . plugins_url( 'img/portugal.png' , __FILE__ ) . '" > '; ?></a><?php }

if ($opt6 == 1) { ?><a href ="<?php echo get_option('option_name6'); ?>"><?php return '<img src="' . plugins_url( 'img/turkey.png' , __FILE__ ) . '" > '; ?></a><?php }

if ($opt7 == 1) { ?><a href ="<?php echo get_option('option_name7'); ?>"><?php return '<img src="' . plugins_url( 'img/japan.png' , __FILE__ ) . '" > '; ?></a><?php }

if ($opt8 == 1) { ?><a href ="<?php echo get_option('option_name8'); ?>"><?php return '<img src="' . plugins_url( 'img/israel.png' , __FILE__ ) . '" > '; ?></a><?php }

else {} }



    add_action( 'admin_enqueue_scripts', 'safely_add_stylesheet_to_admin' );

    /**
     * Add stylesheet to the page
     */

    function safely_add_stylesheet_to_admin() {

        wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );

    }



    add_action( 'wp_enqueue_scripts', 'safely_add_stylesheet' );

    /**
     * Add stylesheet to the page
     */

    function safely_add_stylesheet() {

        wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );

    }