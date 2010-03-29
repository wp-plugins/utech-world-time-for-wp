=== Utech World Time ===
Contributors: meini www.utechworld.com
Credits: timeanddate.com
Tags: world, clock, clocks, time, times, zone, international, daylight, saving, utc, gmt, shortcode
Requires at least: 2.0.2
Tested up to: 2.9.2
Stable tag: 0.1 beta 


Creates real time customizable world clocks of any location of your choice on your posts or pages using simple shortcode. 


== Description ==

Creates real time world clocks on your posts or pages using simple shortcode. The customizable clocks show the name and current time of the location of your choice.

    * The clocks display the current time, even if the user's computer clock is wrong.
    * Automatic adjustment for Daylight Saving Time
    * All major time zones supported
    * Customizable and easy to use with shortcode


**Quick Start**

* Put the following shortcode anywhere on your post or page to create a GMT/UTC clock:

	`[worldtime]`
	
* Use the 'places' parameter to specify the clock's time zone:

	`[worldtime places="Paris"]`
	
* List several places sperated by a comma. This will create multiple world clocks in a stack (currently maximum 6)

	`[worldtime places="Rome, New York"]`

Please note, the name of the location has to match exactly with a name in the list of our (ever expanding) database, if it is not found you will either default to the GMT/UTC clock or it will return a list of possible matches e.g. London will produce two clocks. See below on how to deal with this situation.
	

**Advanced**

* Use only the beginning of a name to list all places starting with the same characters. (This behaviour can be controlled with the `exact` parameter, see below).
For instance to create a list of world clocks for Paris, New Delhi, New Orleans, New York, and Newark, you can do this:

	`[worldtime places="Paris, New"]`

* Or to list all names starting with 'Z'
	
	`[worldtime places="Z"]` 

Please note currently there are only up to 6 clocks supported in a stack. Also please limit the total number of clocks per page to 6, see below for further details.

* Utech World Time estimates the number of returned items and adjusts the height of the list accordingly. 
If you need to vary the list height, use the parameter lcount, which indicates the number of clocks shown.

	`[worldtime places="London" lcount=2]` 

* Alternatively you can adjust the height of the list in pixels with the height parameter. 
If both the lcount and height parameter are used, then Utech World Time will use whichever results in a taller list.

	`[worldtime places="New" height=500]` 


**Complete list of parameters of this version**

`places`
-Takes a list of comma seperated towns

`lcount`
- overrides the height of the list (number of clocks)

`height`
- overrides the height of the list (pixels)

`base_color`
- background color e.g. base_color=fff

`base_font_color`
- location font color e.g. base_color=000

`base_font_size`
- location font size

`clock_color`
- time background color e.g. base_color=bbb

`clock_font_color`
- clock font color e.g. base_color=666

`clock_font_size`
- clock font size

`gap`
- space between individual clocks in a stack

`width`
- overrides width in pixels

`sec`
- will hide seconds if set to 0, e.g. sec=0

`exact`
- will only find exact matches of places if set to anything other than 0, e.g. exact=1
This is useful for places like for instance London which would otherwise produce 2 clocks: London and London (Canada)


== Installation ==


1. You can use the WordPress installer, or you can install the plugin
manually by uploading the entire plugin folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place shortcode in your post or page, eg. `[worldtime places="Brisbane"]`

== Frequently Asked Questions ==

= Why am I only allowed to put 6 clocks on a single page? =

This plugin utilizes services provided by [TimeAndDate.com](http://timeanddate.com) and is made possible with their friendly permission.

TimeAndDate’s condition of use stipulates a **maximum of 6 clocks** per page. In future this limit will be removed however for now it is important to stick to it as each clock creates a connection to their server (and ours). TimeAndDate also requires a separate link to their site if more than two clocks are used.

= Any other questions? =

Please visit the [plugin page](http://www.utechworld.com/projects/world-time-for-wp/) for further questions or comments.


== Screenshots ==

Please visit the [plugin page](http://www.utechworld.com/projects/world-time-for-wp/) to see the clocks in action.


== Changelog ==

= 0.1 beta =
* Initial release

== Upgrade Notice ==

= 0.1 beta =
Initial release


== What else you need to know ==

This plugin utilizes services provided by [TimeAndDate.com](http://timeanddate.com) and is brought to you with their friendly permission.

TimeAndDate’s condition of use stipulates a maximum of 6 clocks per page. In future this limit will be removed however for now it is important to stick to it as each clock creates a connection to their server (and ours). TimeAndDate also requires a separate link to their site if more than two clocks are used.

