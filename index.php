<?php get_header(); ?>
<?php
  // The Loop
  if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<h1><?php the_title(); ?></h1>
  	<section>
  		<?php the_content(); ?>
  	</section>
 <?php endwhile; else:
  	echo 'no posts';
  endif;
  ?>
<?php get_footer(); ?>