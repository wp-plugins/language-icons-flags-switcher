<?php

// Register Menu



 add_action( 'admin_menu', 'my_plugin_menu' );

 add_action( 'admin_init', 'register_mysettings' );



function register_mysettings() {

 register_setting( 'myoption-group', 'option_name' );

 register_setting( 'myoption-group', 'option_lr' );

 register_setting( 'myoption-group', 'option_lm' );

 register_setting( 'myoption-group', 'option_lb' );

 register_setting( 'myoption-group', 'option_mt' );

 register_setting( 'myoption-group', 'option_mb' );

 register_setting( 'myoption-group', 'option_rt' );

 register_setting( 'myoption-group', 'option_rm' );

 register_setting( 'myoption-group', 'option_rb' );

 register_setting( 'myoption-group', 'option_1' );

 register_setting( 'myoption-group', 'option_2' );

 register_setting( 'myoption-group', 'option_3' );

 register_setting( 'myoption-group', 'option_4' );

 register_setting( 'myoption-group', 'option_5' );

 register_setting( 'myoption-group', 'option_6' );

 register_setting( 'myoption-group', 'option_7' );

 register_setting( 'myoption-group', 'option_8' );

 register_setting( 'myoption-group', 'option_name1' );

 register_setting( 'myoption-group', 'option_name2' );

 register_setting( 'myoption-group', 'option_name3' );

 register_setting( 'myoption-group', 'option_name4' );

 register_setting( 'myoption-group', 'option_name5' );

 register_setting( 'myoption-group', 'option_name6' );

 register_setting( 'myoption-group', 'option_name7' );

 register_setting( 'myoption-group', 'option_name8' );

}



function my_plugin_menu() {

 add_options_page( 'Language Icons Switcher', 'Language Icons Switcher', 'manage_options', 'my_plugin_menu', 'my_plugin_options' );

}



function my_plugin_options() {

?>





<div class="wrap"><br/>

<h2>Float Flags Links </h2>



<form method ="post" action ="options.php">

<?php settings_fields( 'myoption-group' ); ?>

<?php do_settings_sections( 'myoption-group' ); ?>





<p><h3>1. Select one position for the icons:</h3></p>

		

	<div class = "marginset">



		<input name="option_lr" type="checkbox" value="1" <?php checked( '1', get_option( 'option_lr' ) ); ?> />&nbsp;

		<input name="option_mt" type="checkbox" value="1" <?php checked( '1', get_option( 'option_mt' ) ); ?> />&nbsp;

		<input name="option_rt" type="checkbox" value="1" <?php checked( '1', get_option( 'option_rt' ) ); ?> /><br/>

		<input name="option_lm" type="checkbox" value="1" <?php checked( '1', get_option( 'option_lm' ) ); ?> />&nbsp;

		<input type="checkbox"  disabled />&nbsp;

		<input name="option_rm" type="checkbox" value="1" <?php checked( '1', get_option( 'option_rm' ) ); ?> /><br/>

		<input name="option_lb" type="checkbox" value="1" <?php checked( '1', get_option( 'option_lb' ) ); ?> />&nbsp;

		<input name="option_mb" type="checkbox" value="1" <?php checked( '1', get_option( 'option_mb' ) ); ?> />&nbsp;

		<input name="option_rb" type="checkbox" value="1" <?php checked( '1', get_option( 'option_rb' ) ); ?> />

			



	</div>



	

	<p><code><i>Or you can put manually by using shortcode:</i> [languagelinks] or &lt;?php echo do_shortcode(&#39;[languagelinks]&#39;); ?&gt; to use outside the loop.</code></p><br/>



<p><h3>2. Select the desired languages and add the links to their sites:</h3></p>



			<style>

			img {margin-bottom:-8px;margin-left:5px; margin-right:5px;}

			</style>



	<div class = "marginset">



			<input type="checkbox" name="option_1" value="1" <?php checked( '1', get_option( 'option_1' ) ); ?>><img src="<?php echo plugins_url( 'img/english.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name1" value="<?php echo get_option('option_name1'); ?>"><i>&nbsp; Type the url of the site. i.e. http://www.example.com/english</i><br/>

			<input type="checkbox" name="option_2" value="1" <?php checked( '1', get_option( 'option_2' ) ); ?>><img src="<?php echo plugins_url( 'img/greece.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name2" value="<?php echo get_option('option_name2'); ?>"><br/>

			<input type="checkbox" name="option_3" value="1" <?php checked( '1', get_option( 'option_3' ) ); ?>><img src="<?php echo plugins_url( 'img/germany.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name3" value="<?php echo get_option('option_name3'); ?>"><br/>

			<input type="checkbox" name="option_4" value="1" <?php checked( '1', get_option( 'option_4' ) ); ?>><img src="<?php echo plugins_url( 'img/spain.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name4" value="<?php echo get_option('option_name4'); ?>"><br/>

			<input type="checkbox" name="option_5" value="1" <?php checked( '1', get_option( 'option_5' ) ); ?>><img src="<?php echo plugins_url( 'img/portugal.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name5" value="<?php echo get_option('option_name5'); ?>"><br/>

			<input type="checkbox" name="option_6" value="1" <?php checked( '1', get_option( 'option_6' ) ); ?>><img src="<?php echo plugins_url( 'img/turkey.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name6" value="<?php echo get_option('option_name6'); ?>"><br/>

			<input type="checkbox" name="option_7" value="1" <?php checked( '1', get_option( 'option_7' ) ); ?>><img src="<?php echo plugins_url( 'img/japan.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name7" value="<?php echo get_option('option_name7'); ?>"><br/>

			<input type="checkbox" name="option_8" value="1" <?php checked( '1', get_option( 'option_8' ) ); ?>><img src="<?php echo plugins_url( 'img/israel.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name8" value="<?php echo get_option('option_name8'); ?>"><br/>



<br/>



<a href = "http://www.webcraft.gr/muli"> My language is not here! </a>

		

	</div>



		<br/>

		<br/>

<?php submit_button(); ?>



<?php get_option('option_name'); ?>



		</form>

</div>

<?php }