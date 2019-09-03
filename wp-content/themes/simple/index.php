<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	  
	  <?php get_header(); ?>
      
      <div class="main">
      	<div class="container">
         <?php if(have_posts()) : ?>
			<?php while(have_posts()): the_post(); ?>
            	<h3>
            		<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
            		</a>
            	</h3>
            	<div class="meta">
         			Created By <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
         		</div>
            	<?php the_content(); ?>
         	<?php endwhile; ?>
         <?php else : ?>
            <?php echo wpautop('Sorry, No posts were found'); ?>
         <?php endif; ?>
     	</div>
      </div>

      <?php get_footer(); ?> 

	  <?php wp_footer(); ?>

</body>
</html>


