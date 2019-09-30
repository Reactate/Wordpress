<?php
/**
* Plugin Name: Wordpress plugin
* Plugin URI: http://www.kezber.com/
* Description: Plugin pour wordpress
* Version: 1.0
* Author: Cédric Lemire
* Author URI: http://www.kezber.com/
**/

function add_content_action( $content ) {
	$content = $content . "Contenu ajouté avec le plugin wordpress.";
	return $content;
}
add_action( 'the_content', 'add_content_action' );
?>