<?php

/**
 * @package Multisite Language Icons Switcher
 * @version 1.1
 */

/*

Plugin Name: Floating Flags Links

Plugin URI: http://www.webcraft.gr/muli

Description: This plugin helps you to add icons with links on the site.

Author: Vasilis Triantafyllou

Version: 1.1

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

$opt9 = get_option('option_9');

$opt10 = get_option('option_10');

$opt11 = get_option('option_11');

$opt12 = get_option('option_12');

$opt13 = get_option('option_13');

$opt14 = get_option('option_14');

$opt15 = get_option('option_15');

$opt16 = get_option('option_16');

$opt17 = get_option('option_17');

$opt18 = get_option('option_18');

$opt19 = get_option('option_19');

$opt20 = get_option('option_20');

$opt21 = get_option('option_21');

$opt22 = get_option('option_22');

$opt23 = get_option('option_23');

$opt24 = get_option('option_24');

$opt25 = get_option('option_25');

$opt26 = get_option('option_26');

$opt27 = get_option('option_27');

$opt28 = get_option('option_28');

$opt29 = get_option('option_29');

$opt30 = get_option('option_30');

$opt31 = get_option('option_31');

$opt32 = get_option('option_32');

$opt33 = get_option('option_33');

$opt34 = get_option('option_34');

$opt35 = get_option('option_35');

$opt36 = get_option('option_36');

$opt37 = get_option('option_37');

$opt38 = get_option('option_38');

$opt39 = get_option('option_39');



if ($opt1 == 1) { ?><a href ="<?php echo get_option('option_name1'); ?>"><?php echo '<img alt = "English" title = "English" src="' . plugins_url( 'img/english.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt2 == 1) { ?><a href ="<?php echo get_option('option_name2'); ?>"><?php echo '<img alt = "Greece" title = "Greece" src="' . plugins_url( 'img/greece.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt3 == 1) { ?><a href ="<?php echo get_option('option_name3'); ?>"><?php echo '<img alt = "Germany" title = "Germany"  src="' . plugins_url( 'img/germany.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt4 == 1) { ?><a href ="<?php echo get_option('option_name4'); ?>"><?php echo '<img alt = "Spain" title = "Spain"  src="' . plugins_url( 'img/spain.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt5 == 1) { ?><a href ="<?php echo get_option('option_name5'); ?>"><?php echo '<img alt = "Portugal" title = "Portugal"  src="' . plugins_url( 'img/portugal.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt6 == 1) { ?><a href ="<?php echo get_option('option_name6'); ?>"><?php echo '<img alt = "Turkey" title = "Turkey"  src="' . plugins_url( 'img/turkey.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt7 == 1) { ?><a href ="<?php echo get_option('option_name7'); ?>"><?php echo '<img alt = "Japan" title = "Japan"  src="' . plugins_url( 'img/japan.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt8 == 1) { ?><a href ="<?php echo get_option('option_name8'); ?>"><?php echo '<img alt = "Israel" title = "Israel"  src="' . plugins_url( 'img/israel.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt9 == 1) { ?><a href ="<?php echo get_option('option_name9'); ?>"><?php echo '<img alt = "Arabic" title = "Arabic"   src="' . plugins_url( 'img/arabic.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt10 == 1) { ?><a href ="<?php echo get_option('option_name10'); ?>"><?php echo '<img alt = "Swedish" title = "Swedish"  src="' . plugins_url( 'img/swedish.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt11 == 1) { ?><a href ="<?php echo get_option('option_name11'); ?>"><?php echo '<img alt = "France" title = "France"  src="' . plugins_url( 'img/french.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt12 == 1) { ?><a href ="<?php echo get_option('option_name12'); ?>"><?php echo '<img alt = "Italy" title = "Italy"  src="' . plugins_url( 'img/italy.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt13 == 1) { ?><a href ="<?php echo get_option('option_name13'); ?>"><?php echo '<img alt = "Dutch" title = "Dutch"  src="' . plugins_url( 'img/dutch.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt14 == 1) { ?><a href ="<?php echo get_option('option_name14'); ?>"><?php echo '<img alt = "Korea" title = "Korea"  src="' . plugins_url( 'img/korea.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt15 == 1) { ?><a href ="<?php echo get_option('option_name15'); ?>"><?php echo '<img alt = "China" title = "China"  src="' . plugins_url( 'img/china.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt16 == 1) { ?><a href ="<?php echo get_option('option_name16'); ?>"><?php echo '<img alt = "Poland" title = "Poland"  src="' . plugins_url( 'img/poland.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt17 == 1) { ?><a href ="<?php echo get_option('option_name17'); ?>"><?php echo '<img alt = "Cyprus" title = "Cyprus"  src="' . plugins_url( 'img/cyprus.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt18 == 1) { ?><a href ="<?php echo get_option('option_name18'); ?>"><?php echo '<img alt = "Czech" title = "Czech"  src="' . plugins_url( 'img/czech.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt19 == 1) { ?><a href ="<?php echo get_option('option_name19'); ?>"><?php echo '<img alt = "Russia" title = "Russia"  src="' . plugins_url( 'img/russia.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt20 == 1) { ?><a href ="<?php echo get_option('option_name20'); ?>"><?php echo '<img alt = "Usa" title = "Usa"  src="' . plugins_url( 'img/usa.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt21 == 1) { ?><a href ="<?php echo get_option('option_name21'); ?>"><?php echo '<img alt = "Malaysia" title = "Malaysia"  src="' . plugins_url( 'img/malaysia.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt22 == 1) { ?><a href ="<?php echo get_option('option_name22'); ?>"><?php echo '<img alt = "Singapore" title = "Singapore"  src="' . plugins_url( 'img/singapore.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt23 == 1) { ?><a href ="<?php echo get_option('option_name23'); ?>"><?php echo '<img alt = "Thailand" title = "Thailand"  src="' . plugins_url( 'img/thai.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt24 == 1) { ?><a href ="<?php echo get_option('option_name24'); ?>"><?php echo '<img alt = "Danish" title = "Danish"  src="' . plugins_url( 'img/danish.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt25 == 1) { ?><a href ="<?php echo get_option('option_name25'); ?>"><?php echo '<img alt = "Finland" title = "Finland"  src="' . plugins_url( 'img/finland.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt26 == 1) { ?><a href ="<?php echo get_option('option_name26'); ?>"><?php echo '<img alt = "Norway" title = "Norway"  src="' . plugins_url( 'img/norway.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt27 == 1) { ?><a href ="<?php echo get_option('option_name27'); ?>"><?php echo '<img alt = "Brazil" title = "Brazil"  src="' . plugins_url( 'img/brazil.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt28 == 1) { ?><a href ="<?php echo get_option('option_name28'); ?>"><?php echo '<img alt = "Argentina" title = "Argentina"  src="' . plugins_url( 'img/argentina.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt29 == 1) { ?><a href ="<?php echo get_option('option_name29'); ?>"><?php echo '<img alt = "India" title = "India"  src="' . plugins_url( 'img/india.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt30 == 1) { ?><a href ="<?php echo get_option('option_name30'); ?>"><?php echo '<img alt = "Romania" title = "Romania"  src="' . plugins_url( 'img/romania.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt31 == 1) { ?><a href ="<?php echo get_option('option_name31'); ?>"><?php echo '<img alt = "Wales" title = "Wales"  src="' . plugins_url( 'img/wales.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt32 == 1) { ?><a href ="<?php echo get_option('option_name32'); ?>"><?php echo '<img alt = "Ireland" title = "Ireland" src="' . plugins_url( 'img/ireland.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt33 == 1) { ?><a href ="<?php echo get_option('option_name33'); ?>"><?php echo '<img alt = "Hungary" title = "Hungary"  src="' . plugins_url( 'img/hungary.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt34 == 1) { ?><a href ="<?php echo get_option('option_name34'); ?>"><?php echo '<img alt = "Slovakia" title = "Slovakia"  src="' . plugins_url( 'img/slovakia.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt35 == 1) { ?><a href ="<?php echo get_option('option_name35'); ?>"><?php echo '<img alt = "Canada" title = "Canada"  src="' . plugins_url( 'img/canada.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt36 == 1) { ?><a href ="<?php echo get_option('option_name36'); ?>"><?php echo '<img alt = "Bulgaria" title = "Bulgaria"  src="' . plugins_url( 'img/bulgaria.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt37 == 1) { ?><a href ="<?php echo get_option('option_name37'); ?>"><?php echo '<img alt = "Estonia" title = "Estonia"  src="' . plugins_url( 'img/estonia.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt38 == 1) { ?><a href ="<?php echo get_option('option_name38'); ?>"><?php echo '<img alt = "Latvia" title = "Latvia"  src="' . plugins_url( 'img/latvia.png' , __FILE__ ) . '" >'; ?></a> <?php }

if ($opt39 == 1) { ?><a href ="<?php echo get_option('option_name39'); ?>"><?php echo '<img alt = "Lithuania" title = "Lithuania"  src="' . plugins_url( 'img/lithuania.png' , __FILE__ ) . '" >'; ?></a> <?php }
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