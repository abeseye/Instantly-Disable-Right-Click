<?php
/*
Plugin Name: Instantly Disable Right Click
Plugin URI: 
Description: This plugin disables the right-click menu on your website.
Version: 1.0
Author: SEA Concepts
Author URI: https://www.seaconcepts.com.ng/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function disable_right_click() {
    echo '<script>document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);</script>';
    echo '<style>body {
      -webkit-user-select: none; /* Chrome all / Safari all */
      -moz-user-select: none; /* Firefox all */
      -ms-user-select: none; /* IE 10+ */
      user-select: none; /* Likely future */
    }</style>';
}
add_action( 'wp_head', 'disable_right_click' );
