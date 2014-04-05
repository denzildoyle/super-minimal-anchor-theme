<?php theme_include('header-two'); ?>

<section class="content">

	<?php if(has_posts()): ?>
		<?php posts(); ?>
		<article class="wrap">
			<img src="<?php echo theme_url('/img/how-my-brain-works.png'); ?>">
			<p class="intro">This blog is some of my random taughts and opinions on the world. Here are some things I have in my head...</p>
			<?php $i = 0; while(posts()): $i++; ?>
				<h4><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h>
			<?php endwhile; ?>
		</article>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>