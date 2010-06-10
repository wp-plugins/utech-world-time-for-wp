<?php
/*
Plugin Name: Utech World Time
Plugin URI: http://www.utechworld.com/projects/world-time-for-wp/
Description: Create digital real time world clocks using simple shortcode. E.g. [worldtime places="Brisbane"]. For more details and  <a href="http://wordpress.org/extend/plugins/utech-world-time-for-wp/#compatibility">to rate</a> this plugin please go to the <a href="http://wordpress.org/extend/plugins/utech-world-time-for-wp/">plugin page</a>. Enjoy!
Version:  1.0
Author: Meini
Author URI: http://www.utechworld.com
License: GPL2
*/

/*  Copyright 2010  Meini  (http://www.utechworld.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


// [WorldTime]


/* 

$utech_wt_cCellHeight=$utech_wt_cFontSize+4; 
if ($utech_wt_sec==0){
	$utech_wt_sec=1;
}else{
	$utech_wt_sec=0;
}
 */

require_once ("loc.php");

function utech_wt_main($atts) {
	return utech_wt_output($atts);
}
add_shortcode('worldtime', 'utech_wt_main');

function utech_wt_output($atts){
	extract(shortcode_atts(array(
		'places' => '',
		'base_color' => '',
		'clock_color' => 'fff',
		'base_font_color' => '000',
		'clock_font_color' => '000',
		'border_color' => '',
		'width' => '',
		'sec' => 1,
		'clock_font_size' => 16,
		'base_font_size' => 14,
		'gap' => 5,
		), $atts));

	if ($sec==0){
		$sec=1;
	}else{
		$sec=0;
	}

	//estimate width if none chosen
	if ($width == '') $width = $clock_font_size * 7;

	// retrieve array of places ID  
	$result = utech_wt_get_ids_from_places($places);
	$clock_cell_height=$clock_font_size * 1.1 + 3; 
	
	$p0='<div style="display: inline-table; width: ' . $width . 'px; vertical-align: center; ">';
	$p1='<div align="center" style="background-color:#' . $base_color . '; border: 1px solid #' . $border_color . ';"><iframe src="http://free.timeanddate.com/clock/i1z88tr9/ts' . $sec;
	//$p3= '/tt0/tw1" frameborder="0" width="235" height="18"></iframe>';
	$p2= '/fs' . $clock_font_size . 
		 '/fc'.$clock_font_color .
		 '/tc'.$clock_color.'"/frameborder="0" width="'. $width .'px" height="'. $clock_cell_height .'px"></iframe><br />
		 <a href="http://www.utechworld.com" 
			onmouseover="this.style.color=#'.$base_font_color.';" 
			onmouseout="this.style.color=#'.$base_font_color.';" 
			style="color:#'.$base_font_color.'; 
			font-size:'. $base_font_size .'px;
			text-decoration: none;"
			target="_blank">
			<strong>';
			
	$p3='</strong></a>
		 </div><div style="height:' . $gap . 'px; background-color:transparent"></div> ';
		 
	$p7='</div>';
	
	$txtresult = $p0;
	$i=0;

	
	if($result) {
		$count =count($result);

		foreach($result as $place => $id ){
			if ($i >= 6) break; //limit length of list 
			if(strlen($place)>1){
				$txtresult .=  $p1 . '/n'. $id . $p2 . $place . $p3;
				$i+=1;
			}
		}
	}else{
		$txtresult .= $p1 . $p2 . 'GMT/UTC' . $p3 ;
	}
	
	
	return $txtresult . $p7;
	

}


?>