<?php get_header(); ?>

<!-- Row for main content area -->
<div class="row">
	<div class="small-12 large-8 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<?php $long_title = get_post_meta($post->ID, 'long_title', true); ?>
				<h1 class="entry-title"><?php echo ($long_title) ? $long_title : the_title($echo = false); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
</div>
		
<?php get_footer(); ?>