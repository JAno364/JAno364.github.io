<?php get_header();?>
<div id = "main" class = "group">
	<div id = "blog" class = "left-col">
		<?php if(have_posts()): for($i=0; $i<4 && have_posts(); $i++): the_post();?>
		
			<?php if($i == 0): ?>
				<div id = "post0" class = "group">
					<div id = "post-thumb">
						<?php the_post_thumbnail(array(300, 300)); ?>
					</div>
					<h1><a href = "<?php the_permalink(); ?>"><?php the_title();?></a></h1>
					<div class = "group">escrito por <?php the_author_posts_link(); ?>
					el <a href = "<?php the_permalink(); ?>"><?php the_time('d F Y'); ?></a></div>
					<div id = "content"><?php the_excerpt(); ?></div>
				</div><!--Fin post0-->
			<?php endif;?>
			
			<div id = "post1">
				<?php if($i == 1): ?>
					<div class = "second-post">
						<div id = "post-thumb2">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<h1><a href = "<?php the_permalink(); ?>"><?php the_title();?></a></h1>
						<div class = "group">escrito por <?php the_author_posts_link(); ?>
						el <a href = "<?php the_permalink(); ?>"><?php the_time('d F Y'); ?></a></div>
						<div id = "content"><?php the_excerpt(); ?></div>
					</div><!--Fin post1-->
				<?php endif;?>
				
				<?php if($i == 2): ?>
					<div class = "second-post">
						<div id = "post-thumb2">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<h1><a href = "<?php the_permalink(); ?>"><?php the_title();?></a></h1>
						<div class = "group">escrito por <?php the_author_posts_link(); ?>
						el <a href = "<?php the_permalink(); ?>"><?php the_time('d F Y'); ?></a></div>
						<div id = "content"><?php the_excerpt(); ?></div>
					</div><!--Fin post2-->
				<?php endif;?>
				
				<?php if($i == 3): ?>
					<div class = "second-post">
						<div id = "post-thumb2">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<h1><a href = "<?php the_permalink(); ?>"><?php the_title();?></a></h1>
						<div class = "group">escrito por <?php the_author_posts_link(); ?>
						el <a href = "<?php the_permalink(); ?>"><?php the_time('d F Y'); ?></a></div>
						<div id = "content"><?php the_excerpt(); ?></div>
					</div><!--Fin post3-->			
				<?php endif;?>
			</div> <!--Fin post1-->
		<?php endfor; else: ?>
			<p><?php _e('No posts were found.'); ?></p>
		<?php endif; ?>
		
		</div><!--Fin de post-->	
	</div><!--Fin de blog-->
</div><!--Fin de main-->

<?php get_sidebar();?>
<?php get_footer();?>