<?php get_header(); ?>

<h1 style="padding-top: 15px;">Search results</h1>

<blockquote><p>There are <b style="color: #ae1923;"><?php 
$search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?></b> total search results for <b>"<?php the_search_query(); ?>"</b>. They include both posts and pages. I hope you found what you were looking for!</blockquote>

<hr />

<?php $posts=query_posts($query_string .
'&posts_per_page=4'); ?>


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

		<a class="readmore" href="'. get_permalink( get_the_ID() ) . '">read more </a><div style="clear: both;"></div>

	</div>

</div>


<div style="clear:both"></div>

<?php endwhile; ?>

<?php else : ?>
	<div class="entry">
<h1>Not found</h1>

<div class="post">
<p>No search results have been found.</p>
<p>You may <a href="http://contact.ricetard.nu" target="_blank">contact me</a> if you are looking for something, or think that this is an error. <a href="http://love.ricetard.nu/" target="_blank">My network</a> also branches out to my various subdomains, which are separated into web/content, fanlistings, and portfolio.</p>
</div>
</div>


<?php endif; ?>

<?php get_footer(); ?>