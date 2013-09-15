<?php get_header(); ?>

<!-- Row for main content area -->
<div class="hero">
<div class="row">
	<div class="small-12 large-12 columns">
		<h1><?php bloginfo('description'); ?></h1>
	</div>
</div>
</div>

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

	<div class="row">
	<div class="small-12 large-12 columns">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
	
	</div>
	</div>

	<?php endwhile; ?>
	
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	
<?php endif; // end have_posts() check ?>
		
<?php get_footer(); ?>