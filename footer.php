			<!-- footer -->

			<div class="row">
			<footer class="footer col-lg-12" role="contentinfo">
				<div class="footer-widgets">
				<div class="container">
					<div class="widget-left col-lg-4 col-md-4 col-sm-5 col-sm-offset-3  col-md-offset-0 col-lg-offset-0">
						<?php if ( is_active_sidebar( 'footer_left_wid' ) ) : ?>
							<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'footer_left_wid' ); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>
					</div>
					<div class="widget-center col-lg-4 col-md-4 col-sm-5 col-sm-offset-3  col-md-offset-0 col-lg-offset-0">
						<?php if ( is_active_sidebar( 'footer_center_wid' ) ) : ?>
							<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'footer_center_wid' ); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>
					</div>
					<div class="widget-right col-lg-4 col-md-4 col-sm-5 col-sm-offset-3  col-md-offset-0 col-lg-offset-0" >
						<?php if ( is_active_sidebar( 'footer_right_wid' ) ) : ?>
							<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'footer_right_wid' ); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>
					</div>
				</div>
				</div>
				<!-- copyright -->
				<div class="row">
					<div class="copyright col-lg-12 col-md-12 col-sm-12  col-xs-12">
						<p>
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> <!-- <?php _e('Powered by', 'html5blank'); ?>
							<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>. -->
						</p>
					</div>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<script type="text/javascript">
			jQuery(document).ready(function($){
	            // Прокрутка страницы наверх
	            var top_show = 550; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
	            var delay = 1000; // Задержка прокрутки
	            $(window).scroll(function () { // При прокрутке попадаем в эту функцию
	                /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
	                if ($(this).scrollTop() > top_show) $('#button-up').fadeIn();
	                else $('#button-up').fadeOut();
	            });
	            $('#button-up').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
	                /* Плавная прокрутка наверх */
	                $('body, html').animate({
	                    scrollTop: 0
	                }, delay);
	            });
	        });
        </script>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
