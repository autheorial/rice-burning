<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="entry">

<h1><?php the_title(); ?></h1></a>

<div class="post">

<?php the_content(); ?>

<?php edit_post_link('Edit', '', ''); ?> 

</div>

<?php comments_template(''); ?>
<?php endwhile; ?>

<?php endif; ?>

</div></div>


<?php get_footer() ?>