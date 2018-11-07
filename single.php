<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="entry">

<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php if(the_title( '', '', false ) !='') the_title(); else echo 'Untitled';?></h1></a>

<div class="com"><?php comments_popup_link('0', '1', '%');?></div>

<div class="dog"><?php edit_post_link('Edit', '', ' <span style="color:#ae1923;">&bull;</span> '); ?>
	<span class="ndcomm"><?php comments_popup_link('no comments', '1 comment', '% comments');?> <span style="color:#ae1923;">&bull;</span></span> 
	<?php the_time('F jS, Y') ?> at <?php the_time('h:iA') ?> 
	<span style="color:#ae1923;">&bull;</span> 
	<?php the_category(', ') ?> 
	<br /><span class="tags"><?php the_tags('(#',' #', ')'); ?></span>
</div> 

<div class="post">

<?php the_content( ); ?> 

</div>

<?php comments_template(''); ?>

<?php endwhile; ?>

<?php endif; ?>

</div>

<?php if ( $user_ID ) : ?>
</div>

<?php else : ?>
</div></div>

<?php endif; ?>

<?php get_footer() ?>