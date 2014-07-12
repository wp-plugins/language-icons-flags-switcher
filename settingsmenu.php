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

 register_setting( 'myoption-group', 'option_float' );

 register_setting( 'myoption-group', 'option_inline' );


/* START OF DIMITRIOS TESTS */

$number_of_options = 44;

/* END OF DIMITRIOS TESTS */


/*  START OF SQUEEZING opts*/

for ($i=1;$i<=$number_of_options;$i++){


register_setting( 'myoption-group', 'option_'.$i );
register_setting( 'myoption-group', 'option_name'.$i );
register_setting( 'myoption-group', 'option_order'.$i );


}

/* END OF SQUEEZING opts */


 
}


function my_plugin_menu() {

 add_options_page( 'Flag Icons', 'Flag Icons', 'manage_options', 'my_plugin_menu', 'my_plugin_options' );

}



function my_plugin_options() {

?>





<div class="wrap"><br/>

<h2>Flag Icons </h2>



<form method ="post" action ="options.php">

<?php settings_fields( 'myoption-group' ); ?>

<?php do_settings_sections( 'myoption-group' ); ?>





<p><h3>1. Select ONE position for the icons & styling options:</h3></p>

		<i>If any box is checked then nothing will show up</i>

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


<br/>
<br/>
<input name="option_float" type="checkbox" value="1" <?php checked( '1', get_option( 'option_float' ) ); ?> />&nbsp;Make Icons Static or Float.
<br/>
<br/>
<input name="option_inline" type="checkbox" value="1" <?php checked( '1', get_option( 'option_inline' ) ); ?> />&nbsp;Align Icons Vertically or Horizontically.

			



	</div>



	

	<p><code><i>Or you can put manually by using shortcode:</i> [languagelinks] or &lt;?php echo do_shortcode(&#39;[languagelinks]&#39;); ?&gt; to use outside the loop.</code></p><br/>



<p><h3>2. Select the desired languages,add the links to their sites & select the order to appear:</h3></p>



			<style>

			img {margin-bottom:-8px;margin-left:5px; margin-right:5px;}

			</style>


<i>&nbsp; Type the url of the site. i.e. http://www.example.com/english in the textfield</i><br/><br/>
	<div class = "marginset">


<DIV STYLE = "WIDTH:50%;float:left;">

			<input type="checkbox" name="option_28" value="1" <?php checked( '1', get_option( 'option_28' ) ); ?>><img src="<?php echo plugins_url( 'img/argentina.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name28" value="<?php echo get_option('option_name28'); ?>"><input type="number" value="<?php if(trim(get_option('option_order28'))==''){echo "0";}else{echo get_option('option_order28');}?>"  name="option_order28"><br/>
			
			<input type="checkbox" name="option_40" value="1" <?php checked( '1', get_option( 'option_40' ) ); ?>><img src="<?php echo plugins_url( 'img/belgium.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name40" value="<?php echo get_option('option_name40'); ?>"><input type="number" value="<?php if(trim(get_option('option_order40'))==''){echo "0";}else{echo get_option('option_order40');}?>"  name="option_order40" ><br/>
			
			<input type="checkbox" name="option_44" value="1" <?php checked( '1', get_option( 'option_44' ) ); ?>><img src="<?php echo plugins_url( 'img/bosnia.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name44" value="<?php echo get_option('option_name44'); ?>"><input type="number" name="option_order44" value="<?php if(trim(get_option('option_order44'))==''){echo "0";}else{echo get_option('option_order44');}?>"><br/>
			
			<input type="checkbox" name="option_27" value="1" <?php checked( '1', get_option( 'option_27' ) ); ?>><img src="<?php echo plugins_url( 'img/brazil.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name27" value="<?php echo get_option('option_name27'); ?>"><input type="number" name="option_order27" value="<?php if(trim(get_option('option_order27'))==''){echo "0";}else{echo get_option('option_order27');}?>"><br/>
			
			<input type="checkbox" name="option_36" value="1" <?php checked( '1', get_option( 'option_36' ) ); ?>><img src="<?php echo plugins_url( 'img/bulgaria.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name36" value="<?php echo get_option('option_name36'); ?>"><input type="number" value="<?php if(trim(get_option('option_order36'))==''){echo "0";}else{echo get_option('option_order36');}?>"  name="option_order36"><br/>
			
			<input type="checkbox" name="option_35" value="1" <?php checked( '1', get_option( 'option_35' ) ); ?>><img src="<?php echo plugins_url( 'img/canada.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name35" value="<?php echo get_option('option_name35'); ?>"><input type="number" value="<?php if(trim(get_option('option_order35'))==''){echo "0";}else{echo get_option('option_order35');}?>"  name="option_order35"><br/>
			
			<input type="checkbox" name="option_15" value="1" <?php checked( '1', get_option( 'option_15' ) ); ?>><img src="<?php echo plugins_url( 'img/china.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name15" value="<?php echo get_option('option_name15'); ?>"><input type="number" value="<?php if(trim(get_option('option_order15'))==''){echo "0";}else{echo get_option('option_order15');}?>"  name="option_order15"><br/>
			
			<input type="checkbox" name="option_17" value="1" <?php checked( '1', get_option( 'option_17' ) ); ?>><img src="<?php echo plugins_url( 'img/cyprus.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name17" value="<?php echo get_option('option_name17'); ?>"><input type="number" value="<?php if(trim(get_option('option_order17'))==''){echo "0";}else{echo get_option('option_order17');}?>"  name="option_order17"><br/>
			
			<input type="checkbox" name="option_18" value="1" <?php checked( '1', get_option( 'option_18' ) ); ?>><img src="<?php echo plugins_url( 'img/czech.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name18" value="<?php echo get_option('option_name18'); ?>"><input type="number" value="<?php if(trim(get_option('option_order18'))==''){echo "0";}else{echo get_option('option_order18');}?>"  name="option_order18"><br/>
			
			<input type="checkbox" name="option_24" value="1" <?php checked( '1', get_option( 'option_24' ) ); ?>><img src="<?php echo plugins_url( 'img/danish.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name24" value="<?php echo get_option('option_name24'); ?>"><input type="number" value="<?php if(trim(get_option('option_order24'))==''){echo "0";}else{echo get_option('option_order24');}?>"  name="option_order24"><br/>
			
			<input type="checkbox" name="option_42" value="1" <?php checked( '1', get_option( 'option_42' ) ); ?>><img src="<?php echo plugins_url( 'img/dominician.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name42" value="<?php echo get_option('option_name42'); ?>"><input type="number" value="<?php if(trim(get_option('option_order42'))==''){echo "0";}else{echo get_option('option_order42');}?>"  name="option_order42"><br/>
			
			<input type="checkbox" name="option_13" value="1" <?php checked( '1', get_option( 'option_13' ) ); ?>><img src="<?php echo plugins_url( 'img/dutch.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name13" value="<?php echo get_option('option_name13'); ?>"><input type="number" value="<?php if(trim(get_option('option_order13'))==''){echo "0";}else{echo get_option('option_order13');}?>"  name="option_order13"><br/>
							
			<input type="checkbox" name="option_1" value="1" <?php checked( '1', get_option( 'option_1' ) ); ?>><img src="<?php echo plugins_url( 'img/english.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name1" value="<?php echo get_option('option_name1'); ?>"><input type="number" value="<?php if(trim(get_option('option_order1'))==''){echo "0";}else{echo get_option('option_order1');}?>"  name="option_order1"><br/>
	
		    <input type="checkbox" name="option_37" value="1" <?php checked( '1', get_option( 'option_37' ) ); ?>><img src="<?php echo plugins_url( 'img/estonia.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name37" value="<?php echo get_option('option_name37'); ?>"><input type="number" value="<?php if(trim(get_option('option_order37'))==''){echo "0";}else{echo get_option('option_order37');}?>"  name="option_order37"><br/>
	
			<input type="checkbox" name="option_25" value="1" <?php checked( '1', get_option( 'option_25' ) ); ?>><img src="<?php echo plugins_url( 'img/finland.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name25" value="<?php echo get_option('option_name25'); ?>"><input type="number" value="<?php if(trim(get_option('option_order25'))==''){echo "0";}else{echo get_option('option_order25');}?>"  name="option_order25"><br/>
	
			<input type="checkbox" name="option_11" value="1" <?php checked( '1', get_option( 'option_11' ) ); ?>><img src="<?php echo plugins_url( 'img/french.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name11" value="<?php echo get_option('option_name11'); ?>"><input type="number" value="<?php if(trim(get_option('option_order11'))==''){echo "0";}else{echo get_option('option_order11');}?>"  name="option_order11"><br/>
	
		    <input type="checkbox" name="option_3" value="1" <?php checked( '1', get_option( 'option_3' ) ); ?>><img src="<?php echo plugins_url( 'img/germany.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name3" value="<?php echo get_option('option_name3'); ?>"><input type="number" value="<?php if(trim(get_option('option_order3'))==''){echo "0";}else{echo get_option('option_order3');}?>"  name="option_order3"><br/>
	
			<input type="checkbox" name="option_2" value="1" <?php checked( '1', get_option( 'option_2' ) ); ?>><img src="<?php echo plugins_url( 'img/greece.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name2" value="<?php echo get_option('option_name2'); ?>"><input type="number" value="<?php if(trim(get_option('option_order2'))==''){echo "0";}else{echo get_option('option_order2');}?>"  name="option_order2"><br/>

			<input type="checkbox" name="option_41" value="1" <?php checked( '1', get_option( 'option_41' ) ); ?>><img src="<?php echo plugins_url( 'img/hongkong.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name41" value="<?php echo get_option('option_name41'); ?>"><input type="number" value="<?php if(trim(get_option('option_order41'))==''){echo "0";}else{echo get_option('option_order41');}?>"  name="option_order41"><br/>
			
			<input type="checkbox" name="option_33" value="1" <?php checked( '1', get_option( 'option_33' ) ); ?>><img src="<?php echo plugins_url( 'img/hungary.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name33" value="<?php echo get_option('option_name33'); ?>"><input type="number" value="<?php if(trim(get_option('option_order33'))==''){echo "0";}else{echo get_option('option_order33');}?>"  name="option_order33"><br/>
			
			<input type="checkbox" name="option_29" value="1" <?php checked( '1', get_option( 'option_29' ) ); ?>><img src="<?php echo plugins_url( 'img/india.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name29" value="<?php echo get_option('option_name29'); ?>"><input type="number" value="<?php if(trim(get_option('option_order29'))==''){echo "0";}else{echo get_option('option_order29');}?>"  name="option_order29"><br/>
			
			<input type="checkbox" name="option_32" value="1" <?php checked( '1', get_option( 'option_32' ) ); ?>><img src="<?php echo plugins_url( 'img/ireland.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name32" value="<?php echo get_option('option_name32'); ?>"><input type="number" value="<?php if(trim(get_option('option_order32'))==''){echo "0";}else{echo get_option('option_order32');}?>"  name="option_order32"><br/>


			
								
			
</div>
<div style = "float:right;width:50%;">


			<input type="checkbox" name="option_8" value="1" <?php checked( '1', get_option( 'option_8' ) ); ?>><img src="<?php echo plugins_url( 'img/israel.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name8" value="<?php echo get_option('option_name8'); ?>"><input type="number" value="<?php if(trim(get_option('option_order8'))==''){echo "0";}else{echo get_option('option_order8');}?>"  name="option_order8"><br/>
						
			<input type="checkbox" name="option_12" value="1" <?php checked( '1', get_option( 'option_12' ) ); ?>><img src="<?php echo plugins_url( 'img/italy.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name12" value="<?php echo get_option('option_name12'); ?>"><input type="number" value="<?php if(trim(get_option('option_order12'))==''){echo "0";}else{echo get_option('option_order12');}?>"  name="option_order12"><br/>
			
			<input type="checkbox" name="option_7" value="1" <?php checked( '1', get_option( 'option_7' ) ); ?>><img src="<?php echo plugins_url( 'img/japan.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name7" value="<?php echo get_option('option_name7'); ?>"><input type="number" value="<?php if(trim(get_option('option_order7'))==''){echo "0";}else{echo get_option('option_order7');}?>"  name="option_order7"><br/>			

			<input type="checkbox" name="option_14" value="1" <?php checked( '1', get_option( 'option_14' ) ); ?>><img src="<?php echo plugins_url( 'img/korea.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name14" value="<?php echo get_option('option_name14'); ?>"><input type="number" value="<?php if(trim(get_option('option_order14'))==''){echo "0";}else{echo get_option('option_order14');}?>"  name="option_order14"><br/>

			<input type="checkbox" name="option_38" value="1" <?php checked( '1', get_option( 'option_38' ) ); ?>><img src="<?php echo plugins_url( 'img/latvia.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name38" value="<?php echo get_option('option_name38'); ?>"><input type="number" value="<?php if(trim(get_option('option_order38'))==''){echo "0";}else{echo get_option('option_order38');}?>"  name="option_order38"><br/>

			<input type="checkbox" name="option_39" value="1" <?php checked( '1', get_option( 'option_39' ) ); ?>><img src="<?php echo plugins_url( 'img/lithuania.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name39" value="<?php echo get_option('option_name39'); ?>"><input type="number" value="<?php if(trim(get_option('option_order39'))==''){echo "0";}else{echo get_option('option_order39');}?>"  name="option_order39"><br/>

			<input type="checkbox" name="option_21" value="1" <?php checked( '1', get_option( 'option_21' ) ); ?>><img src="<?php echo plugins_url( 'img/malaysia.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name21" value="<?php echo get_option('option_name21'); ?>"><input type="number" value="<?php if(trim(get_option('option_order21'))==''){echo "0";}else{echo get_option('option_order21');}?>"  name="option_order21"><br/>
			
			<input type="checkbox" name="option_43" value="1" <?php checked( '1', get_option( 'option_43' ) ); ?>><img src="<?php echo plugins_url( 'img/moldova.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name43" value="<?php echo get_option('option_name43'); ?>"><input type="number" value="<?php if(trim(get_option('option_order43'))==''){echo "0";}else{echo get_option('option_order43');}?>"  name="option_order43"><br/>

			<input type="checkbox" name="option_26" value="1" <?php checked( '1', get_option( 'option_26' ) ); ?>><img src="<?php echo plugins_url( 'img/norway.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name26" value="<?php echo get_option('option_name26'); ?>"><input type="number" value="<?php if(trim(get_option('option_order26'))==''){echo "0";}else{echo get_option('option_order26');}?>"  name="option_order26"><br/>

			<input type="checkbox" name="option_16" value="1" <?php checked( '1', get_option( 'option_16' ) ); ?>><img src="<?php echo plugins_url( 'img/poland.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name16" value="<?php echo get_option('option_name16'); ?>"><input type="number" value="<?php if(trim(get_option('option_order16'))==''){echo "0";}else{echo get_option('option_order16');}?>"  name="option_order16"><br/>
		
			<input type="checkbox" name="option_5" value="1" <?php checked( '1', get_option( 'option_5' ) ); ?>><img src="<?php echo plugins_url( 'img/portugal.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name5" value="<?php echo get_option('option_name5'); ?>"><input type="number" value="<?php if(trim(get_option('option_order5'))==''){echo "0";}else{echo get_option('option_order5');}?>"  name="option_order5"><br/>

			<input type="checkbox" name="option_30" value="1" <?php checked( '1', get_option( 'option_30' ) ); ?>><img src="<?php echo plugins_url( 'img/romania.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name30" value="<?php echo get_option('option_name30'); ?>"><input type="number" value="<?php if(trim(get_option('option_order30'))==''){echo "0";}else{echo get_option('option_order30');}?>"  name="option_order30"><br/>
			
			<input type="checkbox" name="option_19" value="1" <?php checked( '1', get_option( 'option_19' ) ); ?>><img src="<?php echo plugins_url( 'img/russia.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name19" value="<?php echo get_option('option_name19'); ?>"><input type="number" value="<?php if(trim(get_option('option_order19'))==''){echo "0";}else{echo get_option('option_order19');}?>"  name="option_order19"><br/>
			
			<input type="checkbox" name="option_9" value="1" <?php checked( '1', get_option( 'option_9' ) ); ?>><img src="<?php echo plugins_url( 'img/arabic.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name9" value="<?php echo get_option('option_name9'); ?>"><input type="number" value="<?php if(trim(get_option('option_order9'))==''){echo "0";}else{echo get_option('option_order9');}?>"  value="<?php if(trim(get_option('option_order9'))==''){echo "0";}else{echo get_option('option_order27');}?>" name="option_order9"><br/>
			
			<input type="checkbox" name="option_22" value="1" <?php checked( '1', get_option( 'option_22' ) ); ?>><img src="<?php echo plugins_url( 'img/singapore.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name22" value="<?php echo get_option('option_name22'); ?>"><input type="number" value="<?php if(trim(get_option('option_order22'))==''){echo "0";}else{echo get_option('option_order22');}?>" value="<?php if(trim(get_option('option_order27'))==''){echo "0";}else{echo get_option('option_order27');}?>" name="option_order22"><br/>
			
			<input type="checkbox" name="option_34" value="1" <?php checked( '1', get_option( 'option_34' ) ); ?>><img src="<?php echo plugins_url( 'img/slovakia.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name34" value="<?php echo get_option('option_name34'); ?>"><input type="number" value="<?php if(trim(get_option('option_order34'))==''){echo "0";}else{echo get_option('option_order34');}?>"  name="option_order34"><br/>
			
			<input type="checkbox" name="option_4" value="1" <?php checked( '1', get_option( 'option_4' ) ); ?>><img src="<?php echo plugins_url( 'img/spain.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name4" value="<?php echo get_option('option_name4'); ?>"><input type="number" value="<?php if(trim(get_option('option_order4'))==''){echo "0";}else{echo get_option('option_order4');}?>"  name="option_order4"><br/>

			<input type="checkbox" name="option_10" value="1" <?php checked( '1', get_option( 'option_10' ) ); ?>><img src="<?php echo plugins_url( 'img/swedish.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name10" value="<?php echo get_option('option_name10'); ?>"><input type="number" value="<?php if(trim(get_option('option_order10'))==''){echo "0";}else{echo get_option('option_order10');}?>"  name="option_order10"><br/>
			
			<input type="checkbox" name="option_23" value="1" <?php checked( '1', get_option( 'option_23' ) ); ?>><img src="<?php echo plugins_url( 'img/thai.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name23" value="<?php echo get_option('option_name23'); ?>"><input type="number" value="<?php if(trim(get_option('option_order23'))==''){echo "0";}else{echo get_option('option_order23');}?>"  name="option_order23" ><br/>
										
			<input type="checkbox" name="option_6" value="1" <?php checked( '1', get_option( 'option_6' ) ); ?>><img src="<?php echo plugins_url( 'img/turkey.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name6" value="<?php echo get_option('option_name6'); ?>"><input type="number" value="<?php if(trim(get_option('option_order6'))==''){echo "0";}else{echo get_option('option_order6');}?>" name="option_order6" ><br/>
			
			<input type="checkbox" name="option_20" value="1" <?php checked( '1', get_option( 'option_20' ) ); ?>><img src="<?php echo plugins_url( 'img/usa.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name20" value="<?php echo get_option('option_name20'); ?>"><input type="number" value="<?php if(trim(get_option('option_order20'))==''){echo "0";}else{echo get_option('option_order20');}?>" name="option_order20" ><br/>
			
			<input type="checkbox" name="option_31" value="1" <?php checked( '1', get_option( 'option_31' ) ); ?>><img src="<?php echo plugins_url( 'img/wales.png' , __FILE__ ); ?>" ><input type="url" placeholder="Enter a valid url address" name="option_name31" value="<?php echo get_option('option_name31'); ?>"><input type="number" value="<?php if(trim(get_option('option_order31'))==''){echo "0";}else{echo get_option('option_order31');}?>" name="option_order31" ><br/>
			


			</div>
<br/><br/><br/>

</div>

		

	</div>


<div style = "clear:both;"></div>
		<br/>

<a style = "text-align:right;" href = "http://www.webcraft.gr/muli" target = "blank"> My language is not here! </a>



<?php submit_button(); ?>



<?php get_option('option_name'); ?>



		</form>

</div>

<?php }