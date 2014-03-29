<?php get_header();?>
<div id = "main" class = "group">
	<div id = "blog" class = "left-col">
		<?php if(have_posts()): while(have_posts()): the_post();?>
	
		<div id = "post" class = "group">
			<h2><?php the_title();?></a></h2>
			<div id = "post-thumb">
				<?php the_post_thumbnail('medium'); ?>
			</div>
			<div class = "byline">escrito por <?php the_author_posts_link(); ?>
				el <a href = "<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></div>
			<?php the_content('Read More...'); ?>
		<?php endwhile;?>
		
		<?php endif; ?>
		<div class = "nav">
			<?php previous_posts_link('« Newer Entries'); ?> / <?php next_posts_link('Siguiente'); ?> 
		</div>
		
		</div><!--Fin de post-->	
	</div><!--Fin de blog-->
</div><!--Fin de main-->

<?php get_sidebar();?>
<?php get_footer();?>