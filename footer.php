		<div class="wrap">
            <footer id="bottom">
                <small>&copy; <?php echo date('Y'); ?><?php echo site_name(); ?>. All rights reserved.</small>

                <ul role="navigation">
                    <?php if(site_meta('twitter_account')): ?>
                    <li><a href="https://twitter.com/<?php echo site_meta('twitter_account'); ?>">@<?php echo site_meta('twitter_account'); ?></a></li>
                    <?php endif; ?>

                    <li><a href="/" title="Return to my website.">Home</a></li>
                </ul>
            </footer>
        </div>
    </div>

	<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function(){
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
 
                var target = this.hash,
                $target = $(target);
 
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 1000, 'swing', function () {
                    window.location.hash = target;
                });
            });
        });
	</script>
    </body>
</html>