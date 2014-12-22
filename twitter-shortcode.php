<?php
/*
Plugin Name: Twitter Feed Shortcode
Plugin URI:
Description: Adds a favicon to your page.
interface
Version: 1.0
Author: Stephen Punwasi
License: GPLv2
*/

add_shortcode('tf', 'pkwst_twitter_shortcode');

function pkwst_twitter_shortcode($atts){
  $output = '<a href="http://twitter.com/fizwomack">Twitter Feed</a>';
  return $output;
}


?>
