<?php theme_include('header'); ?>

		<section class="content wrap"  id="article-<?php echo article_id(); ?>" >
			
			<article>
				<p><?php echo ceil(count_words(article_markdown()) / 33); ?> Min Read</p>
				<?php echo article_markdown(); ?>
			</article>

<!-- 			<section class="footnote">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</section> -->
		</section>

		<?php if(comments_open()): ?>
		<?php endif; ?>

<?php theme_include('footer'); ?>