<?php

function Ffll_fucntion () {

$op1 = get_option('option_lr');

$op2 = get_option('option_lm');

$op3 = get_option('option_lb');

$op4 = get_option('option_mt');

$op5 = get_option('option_mb');

$op6 = get_option('option_rt');

$op7 = get_option('option_rm');

$op8 = get_option('option_rb');

if ($op1 == 1) { ?><div class ="op1"><?php }

elseif ($op2 == 1) { ?><div class ="op2"><?php }

elseif ($op3 == 1) { ?><div class ="op3"><?php }

elseif ($op4 == 1) { ?><div class ="op4"><?php }

elseif ($op5 == 1) { ?><div class ="op5"><?php }

elseif ($op6 == 1) { ?><div class ="op6"><?php }

elseif ($op7 == 1) { ?><div class ="op7"><?php }

elseif ($op8 == 1) { ?><div class ="op8"><?php } 

else { ?><div class ="op9"><?php }

$opt1 = get_option('option_1');

$opt2 = get_option('option_2');

$opt3 = get_option('option_3');

$opt4 = get_option('option_4');

$opt5 = get_option('option_5');

$opt6 = get_option('option_6');

$opt7 = get_option('option_7');

$opt8 = get_option('option_8');

if ($opt1  == 1) {?><a href ="<?php echo get_option('option_name1'); ?>"><?php echo '<img src="' . plugins_url( 'img/english.png' , __FILE__ ) . '" > '; ?></a><?php } if ($opt2  == 1) {?>

<a href ="<?php echo get_option('option_name2'); ?>"><?php echo '<img src="' . plugins_url( 'img/greece.png', __FILE__ ) . '" > '; ?></a><?php } if ($opt3 == 1) {?>

<a href ="<?php echo get_option('option_name3'); ?>"><?php echo '<img src="' . plugins_url( 'img/germany.png', __FILE__ ) . '" > '; ?></a><?php } if ($opt4 == 1) {?>

<a href ="<?php echo get_option('option_name4'); ?>"><?php echo '<img src="' . plugins_url( 'img/spain.png', __FILE__ ) . '" > '; ?></a><?php } if ($opt5 == 1) {?>

<a href ="<?php echo get_option('option_name5'); ?>"><?php echo '<img src="' . plugins_url( 'img/portugal.png', __FILE__ ) . '" > '; ?></a><?php } if ($opt6 == 1) {?>

<a href ="<?php echo get_option('option_name6'); ?>"><?php echo '<img src="' . plugins_url( 'img/turkey.png', __FILE__ ) . '" > '; ?></a><?php }if ($opt7 == 1) {?>

<a href ="<?php echo get_option('option_name7'); ?>"><?php echo '<img src="' . plugins_url( 'img/japan.png', __FILE__ ) . '" > '; ?></a><?php } if ($opt8 == 1) {?>

<a href ="<?php echo get_option('option_name8'); ?>"><?php echo '<img src="' . plugins_url( 'img/israel.png', __FILE__ ) . '" > '; ?></a><?php } else {} }?>