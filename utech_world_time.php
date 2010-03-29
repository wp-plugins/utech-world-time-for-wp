<?php
/*
Plugin Name: Utech World Time
Plugin URI: http://www.utechworld.com/projects/world-time-for-wp/
Description: Create real time world clocks using simple shortcode. E.g. [worldtime places="Brisbane"]. See readme.txt or plugin page for more details.
Version:  0.1.1
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



function utechworldtime_func($atts) {
	extract(shortcode_atts(array(
		'places' => '',
		'lcount' => 0,
		'height' => 0,
		'base_color' => 'fff',
		'clock_color' => 'fff',
		'base_font_color' => '000',
		'clock_font_color' => '000',
		'width' => 100,
		'sec' => 1,
		'clock_font_size' => 16,
		'base_font_size' => 14,
		'gap' => 5,
		'exact' => 0
	), $atts));

	//count number of places
	if ($lcount==0) $lcount=count(split(',', $places));

	//work out theoretical height of iframe
	$fheight=(($clock_font_size +4 + $base_font_size + 4+$gap ) * $lcount)-$gap + $lcount;
	if ($height > 0) {
		// in case smaller list height is desired then make sure it is wide enough for vertical scroll bar otherwise we get ugly horizontal scroller
		if ($height < $fheight) $list_width+=20; 
		$fheight=$height;
	}

	//and create iframe html to retrieve clock
	return '<iframe src="http://www.mandronline.com/wp/wt/wt.php/?Loc='. $places
		.'&cbc='. $clock_color 
		.'&cfc='. $clock_font_color 
		.'&cfs='. $clock_font_size 
		.'&pbc='. $base_color 
		.'&pfc='. $base_font_color 
		.'&pfs='. $base_font_size 
		.'&w='. $width 
		.'&g='. $gap 
		.'&s='. $sec
		.'&x='. $exact
		.'" frameborder="0" width="'. $width .'" height="'. $fheight .'" ></iframe>';
}
add_shortcode('worldtime', 'utechworldtime_func');
?>