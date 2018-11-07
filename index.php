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

		<?php the_excerpt(); ?>

	</div>

</div>


<?php endwhile; ?>




<?php else : ?>

<div class="entry">

<h1>Error</h1>

<div class="post">

<p>This page does not exist! If you've clicked on a broken link, feel free to <a href="http://contact.ricetard.nu">contact me</a> :)</p>

<p>You can try looking in the <a href="/archives">archives or searching</a> if you are looking for a particular post. <a href="http://love.ricetard.nu/" target="_blank">My network</a> also branches out to my various subdomains, which are separated into web/content, fanlistings, and portfolio.</p>

</div>

</div>


<?php endif; ?>

<?php get_footer() ?>