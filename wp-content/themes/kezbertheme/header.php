<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<?php
function get_first_post_link() {
    global $wpdb, $table_prefix;
    $result = $wpdb->get_row("select * from {$table_prefix}posts where post_type = 'post' and post_status = 'publish' ORDER BY `{$table_prefix}posts`.`ID` ASC LIMIT 1");
    if($result) {
        return get_permalink( $result->ID );
    }
}
?>
<body <?php body_class(); ?>>
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item" href="/">Home</a>
			<span> - </span>
			<a class="blog-nav-item" href="/index.php/news">News</a>
			<span> - </span>
            <a class="blog-nav-item" href="/index.php/about-us/">About us</a>
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Kezbertheme</h1>
    </div>

    <div class="row">