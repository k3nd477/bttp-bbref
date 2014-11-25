<?php
/**
 * Plugin Name: Banished to the Pen - Baseball Reference Plugin
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the plugin.
 * Version: 0.1
 * Author: Kendall Guillemette
 * Author URI: http://vigilanteweb.com
 * License: GPL2
 */
 

function bttp_bbref_player_id($atts) {
	$str = '';
	extract( shortcode_atts( array(
		  'bbref_id' => '',
			'milb' => false,
			'linktext' => '',
		), $atts ) );

// MiLB => http://www.baseball-reference.com/minors/player.cgi?id=bryant001kri
// MLB  => http://www.baseball-reference.com/players/b/bondsba01.shtml

	$str = '<a href="';
	$str .= ( $milb ) ? 'http://www.baseball-reference.com/minors/player.cgi?id=' . $bbref_id : 'http://www.baseball-reference.com/players/' . $bbref_id[0] . '/' . $bbref_id . '.shtml';
	$str .= '">';
	$str .= $linktext;
	$str .= '</a>';

  return $str;
}

add_shortcode( 'bttp_bbref', 'bttp_bbref_player_id' );