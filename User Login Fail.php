<?php

/*Plugin Name: User Login Fail Display
Plugin URI: http://patcosta.com/Willie_and_Joe_Studios.html
Description: Displays Exterminate and a Dalek upon user login failure
Version: 1.0
Author: Pat Costa
Author URI: http://patcosta.com/Willie_and_Joe_Studios.html
License: GPLv2
*/
function failed_login_display ($display_phrase) { 
	echo "<p id=say> LOGIN FAILURE! EXTERMINATE! EXTERMINATE! </p>";

	return $display_phrase;
}

add_filter('login_errors', 'failed_login_display');

function display_dalek($display_dalek) {
	echo '<img src="' .plugins_url('Daleks.jpg',__FILE__).'">';
    return $display_dalek;	
}
add_filter('login_errors', 'display_dalek');



function display_phrase_css() {
	echo "
	<style type='text/css'>
	#say {
	  text-align: left; 
	  color: red;
	  font-size: 38px;
	}
</style>";
}
add_filter ('login_errors', 'display_phrase_css')


?>