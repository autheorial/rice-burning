<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php the_post(); ?>
<div class="entry">

<h1 class="entry-title"><?php the_title(); ?></h1>

<div class="post">

		<h3>Most Recent</h3>
		<ul>
			<?php wp_get_archives('type=postbypost&limit=5'); ?>
		</ul>

<h3>Months</h3>
		
		<ul>
		<?php wp_get_archives('type=monthly&show_post_count=true' ); ?>	
		</ul>	

<h3>Categories</h3>
		<ul>
			<?php
$categories = get_categories();
foreach ($categories as $cat) {
	if ($cat->category_parent != 0) {
		echo '<span style="padding-left:10px;">';
	}
	echo '<li><b><a href="'.get_option('home').get_option('category_base').'/category/'.$cat->category_nicename.'/">'.$cat->cat_name.'</b></a>';
	if ($cat->category_description != '') {
		echo ' - '.$cat->category_description;
	}
	if ($cat->category_parent != 0) {
		echo '</span>';
	}
	echo '</li>';
}
?>
		</ul>

<h3>Tags</h3>

<?php wp_tag_cloud('number=0'); ?>

<h3>etc.</h3>

<p>You can subscribe to my blog through the <a href="/rss">RSS</a> feed. Feel free to <a href="http://contact.ricetard.nu" target="_blank">contact me</a> for any reason.</p>
		
</div></div>

<?php get_footer(); ?>