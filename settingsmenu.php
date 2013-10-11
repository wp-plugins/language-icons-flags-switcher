<?php

// Register Menu



 add_action( 'admin_menu', 'my_plugin_menu' );

 add_action( 'admin_init', 'register_mysettings_language' );



function register_mysettings_language() {

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

 register_setting( 'myoption-group', 'option_9' );

 register_setting( 'myoption-group', 'option_10' );

 register_setting( 'myoption-group', 'option_11' );
 
 register_setting( 'myoption-group', 'option_12' );
 
 register_setting( 'myoption-group', 'option_13' );
 
 register_setting( 'myoption-group', 'option_14' );
 
 register_setting( 'myoption-group', 'option_15' );
 
 register_setting( 'myoption-group', 'option_16' );
 
 register_setting( 'myoption-group', 'option_17' );
 
 register_setting( 'myoption-group', 'option_18' );
 
 register_setting( 'myoption-group', 'option_19' );
 
 register_setting( 'myoption-group', 'option_20' );
 
 register_setting( 'myoption-group', 'option_21' );
 
 register_setting( 'myoption-group', 'option_22' );
 
 register_setting( 'myoption-group', 'option_23' );
 
 register_setting( 'myoption-group', 'option_24' );

 register_setting( 'myoption-group', 'option_name1' );

 register_setting( 'myoption-group', 'option_name2' );

 register_setting( 'myoption-group', 'option_name3' );

 register_setting( 'myoption-group', 'option_name4' );

 register_setting( 'myoption-group', 'option_name5' );

 register_setting( 'myoption-group', 'option_name6' );

 register_setting( 'myoption-group', 'option_name7' );

 register_setting( 'myoption-group', 'option_name8' );

 register_setting( 'myoption-group', 'option_name9' );

 register_setting( 'myoption-group', 'option_name10' );

 register_setting( 'myoption-group', 'option_name11' );
 
 register_setting( 'myoption-group', 'option_name12' );
 
 register_setting( 'myoption-group', 'option_name13' );
 
 register_setting( 'myoption-group', 'option_name14' );
 
 register_setting( 'myoption-group', 'option_name15' );
 
 register_setting( 'myoption-group', 'option_name16' );
 
 register_setting( 'myoption-group', 'option_name17' );
 
 register_setting( 'myoption-group', 'option_name18' );
 
 register_setting( 'myoption-group', 'option_name19' );
 
 register_setting( 'myoption-group', 'option_name20' );
 
 register_setting( 'myoption-group', 'option_name21' );
 
 register_setting( 'myoption-group', 'option_name22' );
 
 register_setting( 'myoption-group', 'option_name23' );
 
 register_setting( 'myoption-group', 'option_name24' );

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


<i>&nbsp; Type the url of the site. i.e. http://www.example.com/english in the textfield</i><br/><br/>
	<div class = "marginset">


<DIV STYLE = "WIDTH:50%;float:left;">
			<input type="checkbox" name="option_1" value="1" <?php checked( '1', get_option( 'option_1' ) ); ?>><img src="<?php echo plugins_url( 'img/english.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name1" value="<?php echo get_option('option_name1'); ?>"><br/>
	
			<input type="checkbox" name="option_2" value="1" <?php checked( '1', get_option( 'option_2' ) ); ?>><img src="<?php echo plugins_url( 'img/greece.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name2" value="<?php echo get_option('option_name2'); ?>"><br/>

			<input type="checkbox" name="option_3" value="1" <?php checked( '1', get_option( 'option_3' ) ); ?>><img src="<?php echo plugins_url( 'img/germany.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name3" value="<?php echo get_option('option_name3'); ?>"><br/>

			<input type="checkbox" name="option_4" value="1" <?php checked( '1', get_option( 'option_4' ) ); ?>><img src="<?php echo plugins_url( 'img/spain.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name4" value="<?php echo get_option('option_name4'); ?>"><br/>

			<input type="checkbox" name="option_5" value="1" <?php checked( '1', get_option( 'option_5' ) ); ?>><img src="<?php echo plugins_url( 'img/portugal.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name5" value="<?php echo get_option('option_name5'); ?>"><br/>

			<input type="checkbox" name="option_6" value="1" <?php checked( '1', get_option( 'option_6' ) ); ?>><img src="<?php echo plugins_url( 'img/turkey.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name6" value="<?php echo get_option('option_name6'); ?>"><br/>

			<input type="checkbox" name="option_7" value="1" <?php checked( '1', get_option( 'option_7' ) ); ?>><img src="<?php echo plugins_url( 'img/japan.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name7" value="<?php echo get_option('option_name7'); ?>"><br/>

			<input type="checkbox" name="option_8" value="1" <?php checked( '1', get_option( 'option_8' ) ); ?>><img src="<?php echo plugins_url( 'img/israel.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name8" value="<?php echo get_option('option_name8'); ?>"><br/>

			<input type="checkbox" name="option_9" value="1" <?php checked( '1', get_option( 'option_9' ) ); ?>><img src="<?php echo plugins_url( 'img/arabic.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name9" value="<?php echo get_option('option_name9'); ?>"><br/>

			<input type="checkbox" name="option_10" value="1" <?php checked( '1', get_option( 'option_10' ) ); ?>><img src="<?php echo plugins_url( 'img/swedish.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name10" value="<?php echo get_option('option_name10'); ?>"><br/>

			<input type="checkbox" name="option_11" value="1" <?php checked( '1', get_option( 'option_11' ) ); ?>><img src="<?php echo plugins_url( 'img/french.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name11" value="<?php echo get_option('option_name11'); ?>"><br/>
			
			<input type="checkbox" name="option_24" value="1" <?php checked( '1', get_option( 'option_24' ) ); ?>><img src="<?php echo plugins_url( 'img/danish.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name24" value="<?php echo get_option('option_name24'); ?>"><br/>

</div>
<div style = "float:right;width:50%;">
			
			<input type="checkbox" name="option_12" value="1" <?php checked( '1', get_option( 'option_12' ) ); ?>><img src="<?php echo plugins_url( 'img/italy.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name12" value="<?php echo get_option('option_name12'); ?>"><br/>
			
			<input type="checkbox" name="option_13" value="1" <?php checked( '1', get_option( 'option_13' ) ); ?>><img src="<?php echo plugins_url( 'img/dutch.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name13" value="<?php echo get_option('option_name13'); ?>"><br/>
			
			<input type="checkbox" name="option_14" value="1" <?php checked( '1', get_option( 'option_14' ) ); ?>><img src="<?php echo plugins_url( 'img/korea.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name14" value="<?php echo get_option('option_name14'); ?>"><br/>
			
			<input type="checkbox" name="option_15" value="1" <?php checked( '1', get_option( 'option_15' ) ); ?>><img src="<?php echo plugins_url( 'img/china.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name15" value="<?php echo get_option('option_name15'); ?>"><br/>
			
			<input type="checkbox" name="option_16" value="1" <?php checked( '1', get_option( 'option_16' ) ); ?>><img src="<?php echo plugins_url( 'img/poland.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name16" value="<?php echo get_option('option_name16'); ?>"><br/>
			
			<input type="checkbox" name="option_17" value="1" <?php checked( '1', get_option( 'option_17' ) ); ?>><img src="<?php echo plugins_url( 'img/cyprus.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name17" value="<?php echo get_option('option_name17'); ?>"><br/>
			
			<input type="checkbox" name="option_18" value="1" <?php checked( '1', get_option( 'option_18' ) ); ?>><img src="<?php echo plugins_url( 'img/czech.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name18" value="<?php echo get_option('option_name18'); ?>"><br/>
			
			<input type="checkbox" name="option_19" value="1" <?php checked( '1', get_option( 'option_19' ) ); ?>><img src="<?php echo plugins_url( 'img/russia.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name19" value="<?php echo get_option('option_name19'); ?>"><br/>

			<input type="checkbox" name="option_20" value="1" <?php checked( '1', get_option( 'option_20' ) ); ?>><img src="<?php echo plugins_url( 'img/usa.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name20" value="<?php echo get_option('option_name20'); ?>"><br/>
			
			<input type="checkbox" name="option_21" value="1" <?php checked( '1', get_option( 'option_21' ) ); ?>><img src="<?php echo plugins_url( 'img/malaysia.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name21" value="<?php echo get_option('option_name21'); ?>"><br/>
			
			<input type="checkbox" name="option_22" value="1" <?php checked( '1', get_option( 'option_22' ) ); ?>><img src="<?php echo plugins_url( 'img/singapore.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name22" value="<?php echo get_option('option_name22'); ?>"><br/>
			
			<input type="checkbox" name="option_23" value="1" <?php checked( '1', get_option( 'option_23' ) ); ?>><img src="<?php echo plugins_url( 'img/thai.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name23" value="<?php echo get_option('option_name23'); ?>"><br/>

<br/><br/><br/>

</div>

		

	</div>


<div style = "clear:both;"></div>
		<br/>

<a style = "text-align:right;" href = "http://www.webcraft.gr/muli"> My language is not here! </a>



<?php submit_button(); ?>



<?php get_option('option_name'); ?>



		</form>

</div>

<?php }