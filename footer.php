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

            $('p').mouseup(function (e){
                if (getSelectionText() != ""){
                    e.preventDefault();
                    window.open( "http://twitter.com/share?text=" + getSelectionText() + "&via=denzildoyle", 'twitter-share', 'width=550,height=235');   
                }
                //TO DO: If the number of chars crosses 140 dont show twitter
            });
        });

        function getSelectionText() {
            var text = "";
            if (window.getSelection) {
                text = window.getSelection().toString();
            } else if (document.selection && document.selection.type != "Control") {
                text = document.selection.createRange().text;
            }
            return text;
        }
	</script>
    </body>
</html>