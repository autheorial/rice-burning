<div id="prevnext">

<a href="/archives" class="archive">Archives</a></span>
<br />

<?php previous_posts_link('<span class="pright">next &raquo;</span>') ?>
<?php next_posts_link('<span class="pleft">&laquo; back</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="pright">next &raquo;</span>', 'no'); ?>   
<?php next_post('%', '<span class="pleft">&laquo; back</span>', 'no'); ?><?php }?>

</div>

<div id="footer">

<?php get_search_form(); ?>
<br />
<a href="http://flavors.me/bisharp" target="_blank" class="footer"><img title="fictionkin" src="http://i855.photobucket.com/albums/ab118/babygirlsaranghae/bisharp_zpsba4e03e7.gif" border="0"></a>
<a href="http://kingdra.livejournal.com" target="_blank" class="footer"><img title="fight me" src="http://i855.photobucket.com/albums/ab118/babygirlsaranghae/kingdra_zpsbe44847a.gif" border="0"></a>
<a href="http://last.fm/user/ricetard" target="_blank" class="footer"><img title="the most loyal" src="http://i855.photobucket.com/albums/ab118/babygirlsaranghae/sceptile_zps77aa62d3.gif" border="0"></a>
<a href="http://twitter.com/ricetard" target="_blank" class="footer"><img title="my bird jesus" src="http://i855.photobucket.com/albums/ab118/babygirlsaranghae/rsiconani277_zps7302bd96.gif" border="0"></a>
<a href="http://instagram.com/ricetard" target="_blank" class="footer"><img title="prettiest" src="http://i855.photobucket.com/albums/ab118/babygirlsaranghae/dpiconani407_zps2055cc6c.gif" border="0"></a>
<a href="skype:ricetard?add" target="_blank" class="footer"><img title="sky uppercut" src="http://i855.photobucket.com/albums/ab118/babygirlsaranghae/rsiconani257_zps3f3e281f.gif" border="0"></a>
<br />
&copy; ricetard.nu, 2013 - 2014 |  <a href="http://blogmatter.com" target="_blank" class="footer"><img src="http://i855.photobucket.com/albums/ab118/babygirlsaranghae/blogmatter-16_zpsabe261f7.png" style="vertical-align: bottom" border="0"></a> | <a href="http://contact.ricetard.nu" target="blank">contact me</a> | <a href="http://love.ricetard.nu" target="_blank">network</a> | <a href="/rss">rss</a>
| <a href="#" class="smoothup">top &uarr;</a>

</div></div>

</div>

<nav role="bottomnavigation" class="site-navigation bottom-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

</body>

<?php wp_footer(); ?>

</html>