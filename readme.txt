=== Utech World Time ===
Contributors: Meini - Utech Computer Solutions
Credits: timeanddate.com
Tags: world, clock, clocks, time, times, zone, international, daylight, saving, utc, gmt, shortcode
Requires at least: 2.0.2
Tested up to: 3.0 RC2
Stable tag: 1.0


Creates real time customizable digital world clocks of any location of your choice on your posts or pages using simple shortcode. 


== Description ==

Creates digital real time world clocks on your posts or pages using simple shortcode. The customizable clocks show the name and current time of the location of your choice.

* The clocks display the current time, even if the user's computer clock is wrong.
* Automatic adjustment for Daylight Saving Time
* All major time zones supported
* Customizable and easy to use with shortcode


**Quick Start**

* Put the following shortcode anywhere on your post or page to create a GMT/UTC clock:

    `[worldtime]`  

	
* Use the 'places' parameter to specify the clock's time zone:

    `[worldtime places="Paris"]`  

	
* List several places separated by a comma. This will create multiple world clocks in a stack (currently maximum 6)

    `[worldtime places="Rome, New York"]`  


The name of the location has to match exactly with a name in the list of the locations. For a complete list of all locations visit 
http://www.utechworld.com/locations/
	

Please note currently there are only up to 6 clocks supported in a stack. Also please limit the total number of clocks per page to 6, see below for further details.


**Complete list of parameters of this version**

`places`
takes a list of comma separated towns

`base_color`
background color e.g. base_color=fff 
for white

`base_font_color`
location font color e.g. base_color=000
for black

`base_font_size`
location font size

`clock_color`
time background color

`clock_font_color`
clock font color

`clock_font_size`
clock font size

`gap`
space (in pixels) between individual clocks in a stack

`width`
overrides width in pixels

`sec`
will hide seconds if set to 0, e.g. sec=0


== Installation ==

1. You can use the WordPress installer, or you can install the plugin
manually by uploading the entire plugin folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place shortcode in your post or page, eg. `[worldtime places="Brisbane"]`

== Frequently Asked Questions ==

= Why am I only allowed to put 6 clocks on a single page? =

This plugin utilizes services provided by [TimeAndDate.com](http://timeanddate.com) and is made possible with their friendly permission.

TimeAndDate's condition of use stipulates a **maximum of 6 clocks** per page. In future this limit will be removed however for now it is important to stick to it as each clock creates a connection to their server (and ours). TimeAndDate also requires a separate link to their site if more than two clocks are used.

= Any other questions? =

Please visit the [plugin page](http://www.utechworld.com/projects/world-time-for-wp/) for further questions or comments.


== Screenshots ==

Please visit the [plugin page](http://www.utechworld.com/projects/world-time-for-wp/) to see the clocks in action.


== Change log ==

= 1.0 =
June 10, 2010
* Significantly improved page load speed
* Simplified usage
* Improved reliability

= 0.1.1 beta =
March 29, 2010
* Updated description only, no change to code

= 0.1 beta =
March 29, 2010
* Initial release


== What else you need to know ==

This plugin utilizes services provided by [TimeAndDate.com](http://timeanddate.com) and is brought to you with their friendly permission.

TimeAndDate's condition of use stipulates a maximum of 6 clocks per page. In future this limit will be removed however for now it is important to stick to it as each clock creates a connection to their server (and ours). TimeAndDate also requires a separate link to their site if more than two clocks are used.

