<?php get_header(); ?>

<div class="LimitSize">

<h1>Search Results</h1>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
		<?php the_title( '<h2> </h2>'); ?>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>
<?php endif; ?>

</div>


<?php get_footer(); ?>