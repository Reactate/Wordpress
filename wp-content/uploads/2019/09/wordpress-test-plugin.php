<?php
function add_content_action( $content ) {
	$content = $content . "Content edited by Kezber plugin";
	return $content;
}
add_action( 'the_content', 'add_content_action' );
?>