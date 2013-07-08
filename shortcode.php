<?php function langshort( $atts ){
if ($opt1  == 1) {
?><a href ="<?php echo get_option('option_name1'); ?>"><?php echo '<img src="' . plugins_url( 'img/english.png' , __FILE__ ) . '" > '; ?></a><?php
}
if ($opt2  == 1) {
?><a href ="<?php echo get_option('option_name2'); ?>"><?php echo '<img src="' . plugins_url( 'img/greece.png' , __FILE__ ) . '" > '; ?></a><?php
}
if ($opt3 == 1) {
?><a href ="<?php echo get_option('option_name3'); ?>"><?php echo '<img src="' . plugins_url( 'img/germany.png' , __FILE__ ) . '" > '; ?></a><?php
}
if ($opt4  == 1) {
?><a href ="<?php echo get_option('option_name4'); ?>"><?php echo '<img src="' . plugins_url( 'img/spain.png' , __FILE__ ) . '" > '; ?></a><?php
}
if ($opt5  == 1) {
?><a href ="<?php echo get_option('option_name5'); ?>"><?php echo '<img src="' . plugins_url( 'img/portugal.png' , __FILE__ ) . '" > '; ?></a><?php
}
if ($opt6 == 1) {
?><a href ="<?php echo get_option('option_name6'); ?>"><?php echo '<img src="' . plugins_url( 'img/turkey.png' , __FILE__ ) . '" > '; ?></a><?php
}if ($opt7  == 1) {
?><a href ="<?php echo get_option('option_name7'); ?>"><?php echo '<img src="' . plugins_url( 'img/japan.png' , __FILE__ ) . '" > '; ?></a><?php
}
if ($opt8  == 1) {
?><a href ="<?php echo get_option('option_name8'); ?>"><?php echo '<img src="' . plugins_url( 'img/israel.png' , __FILE__ ) . '" > '; ?></a><?php
}
else {}
}