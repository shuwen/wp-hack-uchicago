<?php get_header(); ?>

<!-- Row for main content area -->
<section class="hero">
<div class="row">
	<div class="small-12 large-12 columns">
		<h1><?php bloginfo('description'); ?></h1>
	</div>
</div>
</section>

<section>
	<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>

		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>

	</div>
	</div>
</section>

<?php 
	/**
	 * Construct the loop to get page children
	 */
	query_posts(array(
	'orderby' => 'menu_order',
	'showposts' => $showposts,
	'post_parent' => $post->ID,
	'post_type' => 'page'));
?>

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php 
		$long_title = get_post_meta($post->ID, 'long_title', true);
		$entry_title_color = get_post_meta($post->ID, 'entry_title_color', true);
		$entry_text_color = get_post_meta($post->ID, 'entry_text_color', true);
		$entry_bg_color = get_post_meta($post->ID, 'entry_bg_color', true);

		$hide_title = filter_var(get_post_meta($post->ID, 'hide_title', true), FILTER_VALIDATE_BOOLEAN) || false;
	?>

<section class="entry" <?php if ($entry_bg_color) echo 'style="background-color: ' . $entry_bg_color . '; color: ' . $entry_text_color . ';"' ?> >
<div class="row">
	<div class="small-12 large-12 columns">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if( !$hide_title ): ?>
			<h1 class="entry-title" <?php if ($entry_title_color) echo 'style="color: ' . $entry_title_color . ';"' ?> >
				<?php echo ($long_title) ? $long_title : the_title($echo = false); ?>
			</h1>
		<?php endif; ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
	
	</div>
</div>
</section>

	<?php endwhile; ?>
	
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	
<?php endif; // end have_posts() check ?>
		
<?php get_footer(); ?>