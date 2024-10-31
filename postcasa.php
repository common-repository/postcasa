<?php
/*
Plugin Name: Postcasa Shortcode
Plugin URI: http://blog.miloco.com/postcasa
Description: A simple [Shortcode] to add flash based Picasa slideshows directly inline with your posts.  All you have to do is put the Album RSS feed between the shortcode, add any options that you would like and presto!  Now there is a Picasa slideshow in your post.
Version: 1.0
Author: Andrew Milo
Author URI: http://blog.miloco.com/
*/

/*  Copyright 2008	Andrew Milo	(email : miloa@miloco.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// [postcasa width= height= size=(small,medium,large,xl,xll) bgcolor=(hex) align=(left,center,right) showcaptions=(yes)] RSS Link [/postcasa] -> proper picasa embed code for inline slideshow
function postcasa_shortcode($attr, $content) {
	$postcasa_width = $attr['width'];
	$postcasa_height = $attr['height'];
	$postcasa_size = $attr['size'];
	if ($postcasa_size == '') {} else {
		switch ($postcasa_size) {
			case "small":
				$postcasa_width = "144";
				$postcasa_height = "96";
				break;
			case "medium":
				$postcasa_width = "288";
				$postcasa_height = "192";
				break;
			case "large":
				$postcasa_width = "400";
				$postcasa_height = "267";
				break;
			case "xl":
				$postcasa_width = "600";
				$postcasa_height = "400";
				break;
			case "xxl":
				$postcasa_width = "800";
				$postcasa_height = "533";
				break;
		} // switch ($postcasa_size)
	}  // if $postcasa_size == ''
	
	if ($postcasa_width == '' && $postcasa_height == '') {  // we received no explicit size, so set default of medium
		$postcasa_width = "288";
		$postcasa_height = "192";
	} // if ($postcasa_width == '' && postcasa_height == '')

	if ($attr['align'] == '') {$postcasa_align = "left";} else {$postcasa_align = $attr['align'];}
	if ($attr['bgcolor'] == '') {$postcasa_bg = "0x000000";} else {$postcasa_bg = "0x" . $attr['bgcolor'];}

	$postcasa_flashvars = "host=picasaweb.google.com&RGB=".$postcasa_bg;
	if ($attr['showcaptions'] == "yes") {$postcasa_flashvars .= "&captions=1";}
	$postcasa_raw_feed = str_replace("&amp;", "&", $content);
	$postcasa_fixed_feed = str_replace("feed/base/user","feed/api/user", $postcasa_raw_feed);
	$postcasa_feed = urlencode($postcasa_fixed_feed);
	$postcasa_flashvars .= "&feed=" . $postcasa_feed;
	$postcasa_embed = "<p class=\"postcasa\" align=\"".$postcasa_align."\"><embed type=\"application/x-shockwave-flash\" src=\"http://picasaweb.google.com/s/c/bin/slideshow.swf\" width=\"".$postcasa_width."\" height=\"".$postcasa_height."\" flashvars=\"".$postcasa_flashvars."\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\"></embed></p>";
    return "$postcasa_embed";
}
add_shortcode('postcasa', 'postcasa_shortcode');
?>