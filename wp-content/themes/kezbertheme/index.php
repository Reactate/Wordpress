<?php get_header(); ?>
<div class="col-sm-8 blog-main">
 
 <?php 
	if(is_front_page() || is_page('about-us')){
	?>
		<div class="blog-post">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<div>
				<?php the_post(); ?>
				<?php the_content(); ?>
			</div>
		</div>
	<?php
	} else if(is_page('news')) {
	?>
		<div class="blog-post">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<div>
			<?php
				$posts = get_posts('order=ASC');
				if ( $posts ) {
					foreach ( $posts as $post ) :
						setup_postdata( $post ); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php
					endforeach; 
					wp_reset_postdata();
				}
			?>
			</div>
		</div>
	<?php
	} else {
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
			?>
			<div class="blog-post">
				<h2 class="blog-post-title"><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
				</div>
			</div>
			<?php
			endwhile;
			?>
			<nav>
					<?php
					//previous_post_link('<span>%link</span>')
					if(previous_post_link()  != "") {
					?>
						<li><?php previous_post_link('<span>%link</span>'); ?></li>
					<?php
					}
					if(get_next_post_link() != "" && get_previous_post_link() != "") {
						echo("<span> - </span>");
					}
					if(next_post_link() != "") {
					?>
						<li><?php next_post_link('<span>%link</span>'); ?></li>
					<?php
					}
					?>
			</nav>
			<?php
		}
	}
?>
</div>
<?php get_footer(); ?>