<?php
/*
Plugin Name: Seamless Dazzle
Plugin URI:  http://www.dazzleafrica.org
Description: Custom modifications for Dazzle Africa Donations
Version:     0.1-alpha
Author:      Rob Hayden
Author URI:  http://www.vmware.com
Text Domain: seamless dazzle
Domain Path: /lang
 */
 
 function generateGivingLevels($array){
	$newGivingLevels = array (10,25,50,100,200,500,1000,5000);
	return $newGivingLevels;
 }
 function changeDefaultSelection ($array){
	  $array['elements']['dgx_donate_giving_level_10']['select'] = false;
	  $array['elements']['dgx_donate_giving_level_50']['select'] = true;
	  return $array;
 }
 function hideDonorSection ($array){
	 return array();
 }
 
 add_filter( 'dgx_donate_giving_levels', 'generateGivingLevels');
 add_filter( 'seamless_donations_form_donation_section', 'changeDefaultSelection');
 add_filter( 'seamless_donations_form_donor_section', 'hideDonorsection');
