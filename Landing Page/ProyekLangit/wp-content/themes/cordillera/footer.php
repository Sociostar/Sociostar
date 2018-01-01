<!--Footer-->
		<footer>
        <?php
		$enable_footer_widget_area = cordillera_options_array('enable_footer_widget_area');
		if( $enable_footer_widget_area == 1){
		?>
			<div class="footer-widget-area">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<?php
							if(is_active_sidebar("footer_widget_1")){
	                           dynamic_sidebar("footer_widget_1");
                                  	}
							?>
						</div>
						<div class="col-md-4">
				        <?php
							if(is_active_sidebar("footer_widget_2")){
	                           dynamic_sidebar("footer_widget_2");
                                  	}
							?>
						</div>
						<div class="col-md-4">
							<?php
							if(is_active_sidebar("footer_widget_3")){
	                           dynamic_sidebar("footer_widget_3");
                                  	}
							?>
						</div>
					</div>
				</div>
			</div>
            <?php }?>
			<div class="copyright-area">
				<div class="container text-center">					
					<div class="site-info">
                    <?php printf(__('Powered by <a href="%s" target="_blank">WordPress</a>. Designed by <a href="%s" target="_blank">Magee Themes</a>.','cordillera'),esc_url('http://wordpress.org/'),esc_url('http://www.mageewp.com/'));?>
					</div>
				</div>
			</div>			
		</footer>
    <?php wp_footer();?>
</body>
</html>