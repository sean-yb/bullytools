		</div> <!-- end #container -->
			<footer role="contentinfo">
				<div class="container">
					<div id="inner-footer" class="clearfix">
			          <div id="widget-footer" class="clearfix row">
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
			            <?php endif; ?>
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
			            <?php endif; ?>
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
			            <?php endif; ?>
			          </div>
						
						<nav class="clearfix">
							<?php //wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
						</nav>
				
						
					
					</div> <!-- end #inner-footer -->
				</div>
				<p class="attribution">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?></p>
			</footer> <!-- end footer -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>