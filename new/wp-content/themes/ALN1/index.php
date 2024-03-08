<?php get_header(); ?>
<?php get_sidebar(); ?>
<article>
<?php if (have_posts()) :
		while (have_posts()) :
			the_post(); ?>
	<h2 id="post-<?php the_ID();?>">
		<a href="<?php the_permalink();?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
	<?php if (has_post_thumbnail()) : ?>
		<?php the_post_thumbnail('large');?>
	<?php endif; ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>
</article>
<?php get_footer(); ?>