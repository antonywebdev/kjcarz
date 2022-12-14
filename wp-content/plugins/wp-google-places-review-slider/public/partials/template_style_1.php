<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WP_Review_Pro
 * @subpackage WP_Review_Pro/public/partials
 */
 //html code for the template style
$plugin_dir = WP_PLUGIN_DIR;
$imgs_url = esc_url( plugins_url( 'imgs/', __FILE__ ) );

//loop if more than one row
for ($x = 0; $x < count($rowarray); $x++) {
	if(	$currentform[0]->template_type=="widget"){
		?>
		<div class="wprevpro_t1_outer_div_widget w3_wprs-row-padding-small">
		<?php
		} else {
		?>
		<div class="wprevpro_t1_outer_div w3_wprs-row-padding">
		<?php
	}
	//loop 
	foreach ( $rowarray[$x] as $review ) 
	{
		if($review->type=="Facebook"){
			if($review->userpic!=""){
				$userpic = $review->userpic;
			} else {
				$userpic = 'https://graph.facebook.com/v2.2/'.$review->reviewer_id.'/picture?width=60&height=60';
			}
		} else {
			$userpic = $review->userpic;
		}
		
		//star number
		if($review->type=="Yelp"){
			//find business url
			$options = get_option('wprevpro_yelp_settings');
			$burl = $options['yelp_business_url'];
			if($burl==""){
				$burl="https://www.yelp.com";
			}
			$starfile = "yelp_stars_".$review->rating.".png";
			$yelp_logo = '<a href="'.$burl.'" target="_blank" rel="nofollow"><img src="'.$imgs_url.'yelp_outline.png" alt="" class="wprevpro_t1_yelp_logo"></a>';
		} else {
			$starfile = "stars_".$review->rating."_yellow.png";
			$yelp_logo ="";
		}
		
		if(!isset($template_misc_array['showicon'])){
			$template_misc_array['showicon']='';
		}
		
		//google icon
		$typelower = strtolower($review->type);
		if($template_misc_array['showicon']=="no"){
			$yelp_logo = '';
		} else if($template_misc_array['showicon']=="yes"){
			 $yelp_logo = '<img src="'.$imgs_url.''.$typelower.'_small_icon.png" alt="'.$review->type.' Logo" class="wprevpro_t1_site_logo siteicon">';
		 } else {
			 if($review->type=="Facebook") {
				//facebook logo
				$burl = "https://www.facebook.com/pg/".$review->pageid."/reviews/";
				$yelp_logo = '<a href="'.$burl.'" target="_blank" rel="nofollow"><img src="'.$imgs_url.'facebook_small_icon.png" alt="" class="wprevpro_t1_fb_logo"></a>';
			} else if($review->type=="Google") {
			 $burl = $review->from_url;
			$yelp_logo = '<a href="'.$burl.'" target="_blank" rel="nofollow noreferrer" class="wprevpro_t1_site_logo_a"><img src="'.$imgs_url.''.$typelower.'_small_icon.png" alt="'.$review->type.' Logo" class="wprevpro_t1_site_logo siteicon"></a>';
			}
		}
		
		//star alt tag
		$altimgtag = $review->rating.' star review';
		//star html
		$starhtml = '<img src="'.$imgs_url.$starfile.'" alt="'.$altimgtag.'" class="wprevpro_t1_star_img_file">&nbsp;&nbsp;';
		if($review->type=="Facebook"){
			if($review->rating>0){
				$starhtml = '<img src="'.$imgs_url.$starfile.'" alt="'.$altimgtag.'" class="wprevpro_t1_star_img_file">&nbsp;&nbsp;';
			} else if($review->recommendation_type=='positive'){
				$starfile = 'positive-min.png';
				$altimgtag = 'positive review';
				$starhtml = '<img src="'.$imgs_url.$starfile.'" alt="'.$altimgtag.'" class="wprevpro_t1_rec_img_file">&nbsp;&nbsp;';
			} else if($review->recommendation_type=='negative'){
				$starfile = 'negative-min.png';
				$altimgtag = 'negative review';
				$starhtml = '<img src="'.$imgs_url.$starfile.'" alt="'.$altimgtag.'" class="wprevpro_t1_rec_img_file">&nbsp;&nbsp;';
			}
		}
		
		$reviewtext = "";
		if($review->review_text !=""){
			$reviewtext = $review->review_text;
		}
		
		//if read more is turned on then divide then add read more span links
		if(!isset($currentform[0]->read_more_text)){
			$currentform[0]->read_more_text ='';
		}
		if($currentform[0]->read_more_text==''){
			$currentform[0]->read_more_text = 'read more';
		}
		if(	$currentform[0]->read_more=="yes"){
			$readmorenum = 30;
			$countwords = str_word_count($reviewtext);
			
			if($countwords>$readmorenum){
				//split in to array
				$pieces = explode(" ", $reviewtext);
				//slice the array in to two
				$part1 = array_slice($pieces, 0, $readmorenum);
				$part2 = array_slice($pieces, $readmorenum);
				$reviewtext = implode(" ",$part1)."<a class='wprs_rd_more'>... ".$currentform[0]->read_more_text."</a><span class='wprs_rd_more_text' style='display:none;'> ".implode(" ",$part2)."</span>";
			}
		}

		//per a row
		if($currentform[0]->display_num>0){
			$perrow = 12/$currentform[0]->display_num;
		} else {
			$perrow = 4;
		}
		
		//hide date
		if(isset($template_misc_array['showdate']) && $template_misc_array['showdate']=="no"){
			$datehtml = '';
		} else {
			//get and form wp admin date setting
			$datehtml = date_i18n( get_option('date_format'), $review->created_time_stamp );
			//$datehtml = date("n/d/Y",$review->created_time_stamp);
		}
	?>
		<div class="wprevpro_t1_DIV_1<?php if(	$currentform[0]->template_type=="widget"){echo ' marginb10';}?> w3_wprs-col l<?php echo $perrow; ?>">
			<div class="wprevpro_t1_DIV_2 wprev_preview_bg1_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?> wprev_preview_bradius_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>">
				<p class="wprevpro_t1_P_3 wprev_preview_tcolor1_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>">
					<span class="wprevpro_star_imgs_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>"><?php echo $starhtml; ?></span><?php echo stripslashes($reviewtext); ?>
				</p>
				<?php echo $yelp_logo; ?>
			</div><span class="wprevpro_t1_A_8"><img src="<?php echo $userpic; ?>" alt="thumb" class="wprevpro_t1_IMG_4" loading="lazy" /></span> <span class="wprevpro_t1_SPAN_5 wprev_preview_tcolor2_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>"><?php echo stripslashes($review->reviewer_name); ?><br/><span class="wprev_showdate_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>"><?php echo $datehtml; ?></span> </span>
		</div>
	<?php
	}
	//end loop
	?>
	</div>
<?php
}
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
