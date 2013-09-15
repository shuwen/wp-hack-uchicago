<?php get_header(); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>

<div class="row">
	<div class="small-12 large-offset-3 large-10 columnsn">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
</div>

<div class="row">
	<aside class="small-12 large-3 columns">
		<?php reverie_entry_meta(); ?>
	</aside>

	<div class="small-12 large-9 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	</div>
</div>

<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>