<?php if (!function_exists('enigma_parallax_info_page')) {
	function enigma_parallax_info_page() {
	$page1=add_theme_page(__('Welcome to Enigma Parallax', 'enigma-parallax'), __('Pro Themes & Plugin', 'enigma-parallax'), 'edit_theme_options', 'enigma-parallax', 'parallax_display_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'parallax_admin_info');
	}	
}
add_action('admin_menu', 'enigma_parallax_info_page');

function parallax_admin_info(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/css/bootstrap.css');
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin-themes.css');
	wp_enqueue_style('font-awesome',  get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.css');

	//JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js');
	wp_enqueue_script('script-menu', get_template_directory_uri().'/core/admin/js/script.js');
	
} 
if (!function_exists('parallax_display_theme_info_page')) {
	function parallax_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
		
<div class="wrapper">
<!-- Header -->
<header>

<div class="container-fluid p_header">
	<div class="container">
		<div class="row p_head">
		<div class="col-md-4"></div>
			<div class="col-md-4">
			<img style="width:268px;height:193px" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
				
			</div>
		<div class="col-md-4"></div>	
		</div>
	</div>
</div>
<nav class="navbar navbar-default menu">
		<div class="container-fluid">
			<div class="container">
				<div class="row spa-menu-head">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="theme-menu active" id="theme"><button class="btn tp">Themes</button></li>
							<li class="theme-menu" id="plugin"><button class="btn tp">Plugins</button></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
<!-- Header -->
<!-- Themes & Plugin -->
<div class="container-fluid space p_front theme active">
	<div class="container">	
		<div class="row p_head theme">
			<div class="col-xs-12 col-md-8 col-sm-6">
				<h1 class="section-title">WordPress Themes</h1>
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/corporal.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Corporal- Ultimate Multi-Purpose WordPress Theme</a></h2>
						<p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business,
						WordPress, Corporate, dark, real estate, shop, restaurant, ele…</p>
						<div>
						<p><strong>Description: </strong>
						Corporal Premium  is a responsive and fully customizable template for Business and Multi-purpose theme.
						The Theme has You can use it for your business, portfolio, blogging or any type of site.Custom menus to 
						choose the menu in Primary Location that is in Header area of the site. </div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number">$<span>25</span></span>
				</div>
				<div class="btn-group-vertical">
					<a class="btn btn-primary btn-lg" href="http://demo.weblizar.com/corporal-premium/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/corporal-premium">Buy Now</a>
				</div>			
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/explora.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Explora- Ultimate Multi-Purpose WordPress Theme</a></h2>
						<p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business,
						WordPress, Corporate, dark, real estate, shop, restaurant, ele…</p>
						<div>
						<p><strong>Description: </strong>
						Explora Premium is a multi-purpose responsive theme coded & designed with a lot of care and love. You can use it
						for your business, portfolio, blogging or any type of site. </div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number">$<span>25</span></span>
				</div>
				<div class="btn-group-vertical">
					<a class="btn btn-primary btn-lg" href="http://demo.weblizar.com/explora-premium/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/explora-premium">Buy Now</a>
				</div>			
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/BeautySpa.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">BeautySpa- Beauty Salon Theme</a></h2>
						<p><strong>Tags: </strong>Customize Front Page, Multilingual, Complete Documentation, Theme Option Panel, Unlimited Color Skins, Multiple Background Patterns, Multiple Theme Templates, 5 Portfolio Layout, 3 Page Layout and many more.</p>
					<div>
						<p><strong>Description: </strong>
						BeautySpa is versatile business WordPress theme suitable for spa, spa salon, sauna, massage , medical business, massage center, beauty center, eCommerce and beauty salon websites.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number">$<span>39</span></span>
				</div>
				<div class="btn-group-vertical">
					<a class="btn btn-primary btn-lg" href="http://demo.weblizar.com/beautyspa-premium/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/themes/beautyspa-premium/">Buy Now</a>
				</div>			
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Scorline.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Scoreline- Business and Multi-purpose Theme</a></h2>
						<p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business,
						WordPress, Corporate, dark, real estate, shop, restaurant, ele</p>
						<div>
						<p><strong>Description: </strong>
						Scoreline is a responsive and fully customizable template for Business and Multi-purpose theme.The Theme has You can use it for your business, portfolio, blogging or any type of site.</p>
						</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number">$<span>29</span></span>
				</div>
				<div class="btn-group-vertical">
					<a class="btn btn-primary btn-lg" href="http://demo.weblizar.com/scoreline-premium/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/themes/scoreline-premium/">Buy Now</a>
				</div>			
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Healthcare.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Healthcare- Medical & Multi-Purpose WordPress Theme</a></h2>
						<p><strong>Tags: </strong>Team , Doctors template & Details, Dr. Departments & Detail View, 3 Contact Page Template, Custom Shortcodes, Woo-commerce compatibility, 2 Home page Template, Wordpress.</p>
						<div>
						<p><strong>Description: </strong>
						Healthcare is a perfect solution for any medical and healthcare-related businesses. It is a fully dynamic, well structured and beautiful WordPress theme which is specifically designed for hospitals, health clinics, dentists and everyone else involved in health services.</p>
						</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number">$<span>39</span></span>
				</div>
				<div class="btn-group-vertical">
					<a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/healthcare/">Detail</a>
					<a class="btn btn-success btn-lg" href="http://demo.weblizar.com/healthcare-premium/">Buy Now</a>
				</div>				
			</div>
		</div>
		
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Enigma.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Enigma- Modern & Clean Designed Multi-Purpose WordPress Theme</a></h2>
						<p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business,
						WordPress, Corporate, dark, real estate, shop, restaurant.</p>
						<div>
						<p><strong>Description: </strong>
						Enigma is a Full Responsive Multi-Purpose Theme suitable for Business , corporate office and others .Cool Blog Layout and full width page also present.</p>
						</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number">$<span>39</span></span>
				</div>
				<div class="btn-group-vertical">
					<a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/enigma-premium/">Detail</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/themes/enigma-premium/">Buy Now</a>
				</div>			
			</div>
		</div>
	</div>
</div>
<!----Plugin----->
<div class="container-fluid space p_front plugin">
	<div class="container">
		<div class="row p_head theme">
			<div class="col-xs-12 col-md-8 col-sm-6">
				<h1 class="section-title">WordPress Plugins</h1>
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/pinterest-feed-pro.jpg" class="img-responsive" alt="Coming-Soon-Page"/>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="#">Pinterest Feed Pro </a></h2>
						<p><strong>Features: </strong>
						<ul>
						<li>Pinterest Feed Shortcode</li>
						<li>Pinterest Profile</li>
						<li>Pinterest Pin Slider</li>
						<li>Multilingual & Translation Ready</li>
						<li>Multi Site Supportt</li>
						<li>Pinterest Pins</li>
						<li>Easy to use user friendly interface</li>
						<li>Site Speed Up</li>
						</ul>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number"><span>$18</span></span>
				</div>
				<div class="btn-group-vertical">
					<a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/pinterest-feed-pro/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/pinterest-feed-pro/">Buy Now</a> 
				</div>			
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/appointment-scheduler-pro.jpg" class="img-responsive" alt="Coming-Soon-Page"/>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Appointment Schedulr Pro </a></h2>
						<p><strong>Features: </strong>
						<ul>
						<li>Experience Responsive Scheduling</li>
						<li>Unlimited Bookings</li>
						<li>Unlimited Services</li>
						<li>Unlimited Staff</li>
						<li>Free Bookings</li>
						<li>Premium Booking</li>
						<li>Statistical Administrator Dashboard</li>
						<li>Notification</li>
						<li>Admin Notification</li>
						<li>Staff Notification</li>
						</ul>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number"><span>$40</span></span>
				</div>
				<div class="btn-group-vertical">
					<a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/appointment-scheduler-pro/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/appointment-scheduler-pro/">Buy Now</a> 
				</div>			
			</div>
		</div>
		
		
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Search-Engine-Optimizer-new.jpg" class="img-responsive" alt="Coming-Soon-Page"/>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">SEO Image Optimizer Pro </a></h2>
						<p><strong>Features: </strong>
						<ul>
						<li>WooCommerce Product Images SEO</li>
						<li>Auto Fill Title & Alt Tag</li>
						<li>Custom Title & Alt Tag</li>
						<li>Featured Images SEO</li>
						<li>Magical Reset</li>
						<li>Delimiter Removal</li>
						<li>Image Compression</li>
						<li>Site Speed Up</li>
						</ul>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number"><span>$11</span></span>
				</div>
				<div class="btn-group-vertical">
					<a target="_blank" class="btn btn-primary btn-lg" href="http://demo.weblizar.com/seo-image-optimizer-pro/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/seo-image-optimizer-pro">Buy Now</a> 
				</div>			
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/newsletter.png" class="img-responsive" alt="Coming-Soon-Page"/>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Newsletter Subscription Form Pro </a></h2>
						<p><strong>Features: </strong>
						<ul>
						<li>Multiple Pro Template</li>
						<li>News Letter Subscription</li>
						<li>Download Subscriber List</li>
						<li>Auto & Manual Notification</li>
						<li>Major Browser Compatible</li>
						<li>Multi Site and Multilingual</li>
						<li>Customized Form</li>
						<li>Forms shotcode</li>
						</ul>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number"><span>$7</span></span>
				</div>
				<div class="btn-group-vertical">
					<a target="_blank" class="btn btn-primary btn-lg" href="http://demo.weblizar.com/newsletter-subscription-form-pro/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/newsletter-subscription-form-pro">Buy Now</a> 
				</div>			
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Comingsoon.jpg" class="img-responsive" alt="Coming-Soon-Page"/>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Responsive Coming Soon Page</a></h2>
						<p><strong>Features: </strong>
						<ul>
						<li>Bootstrap Based Responsive Plugin Settings Panel</li>
						<li>Compatible With Most WordPress Theme</li>
						<li>Image background</li>
						<li>Color background</li>
						<li>Multiple Color Skins Selection</li>
						<li>News Letter Subscriber Forms</li>
						<li>Subscriber Notification</li>
						<li>Export & Import Subscribers List</li>
						</ul>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number"><span>$24</span></span>
				</div>
				<div class="btn-group-vertical">
					<a target="_blank" class="btn btn-primary btn-lg" href="http://demo.weblizar.com/coming-soon-page-pro/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/coming-soon-page-maintenance-mode-pro/">Buy Now</a>
				</div>			
			</div>
		</div>
		
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/gallery-pro.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Gallery Pro- Gallery Layout with Various Fonts</a></h2>
						<p><strong>Features: </strong>
						<ul>
						<li>Gallery Layout</li>
						<li>Color Scheme</li>
						<li>Light Box</li>
						<li>All Gallery Shortcode</li>
						<li>Single Gallery Shortcode</li> 
						<li>Number of Gallery Layout</li>
						<li>Number of Hover Color and so on..</li>
						</ul>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number">$<span>9</span></span>
				</div>
				<div class="btn-group-vertical">
					<a class="btn btn-primary btn-lg" href="http://demo.weblizar.com/gallery-pro-by-weblizar/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/gallery-pro/">Buy Now</a>
				</div>			
			</div>
		</div>
		<div class="row p_plugin blog_gallery">
			<div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
				<div class="img-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/images/responsive-photo-pro.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
				<div class="row p-box">
					<h2><a href="">Responsive Photo Gallery Pro- A Highly Animated Image Gallery Plugin</a></h2>
						<p><strong>Features: </strong>
						<ul>
						<li>Number of Lightbox Styles</li>
						<li>Drag and Drop image Position</li>
						<li>Multiple Image uploader</li>
						<li>Shortcode Button on post or page</li>
						<li>Unique settings for each gallery</li>
						<li>Hide/Show gallery Title and label and so on..</li>
						</ul>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
				<div class="price">
					<span class="currency">USD</span>
					<span class="price-number">$<span>10</span></span>
				</div>
				<div class="btn-group-vertical">
					<a class="btn btn-primary btn-lg" href="http://demo.weblizar.com/responsive-photo-gallery-pro/">Demo</a>
					<a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/responsive-photo-gallery-pro/">Buy Now</a>
				</div>			
			</div>
		</div>
	</div>
</div>
	<div id="theme-author">
		<p><?php printf(__('%1s is proudly brought to you by %2s. If you like this WordPress theme, %3s.', 'enigma-parallax'),
			$theme_data->Name,
			'<a target="_blank" href="https://weblizar.com/" title="weblizar">Weblizar</a>',
			'<a target="_blank" href="https://wordpress.org/support/view/theme-reviews/weblizar" title="Enigma Parallax Review">' . __('rate it', 'enigma-parallax') . '</a>'); ?>
		</p>
	</div>
</div>
<?php
	}
}
?>