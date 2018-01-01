<?php
/**
 * The Template for displaying page.
 *
 */

get_header(); ?>
<div id="404-page" class="404-page">
<div class="breadcrumb-box">
             <?php cordillera_get_breadcrumb();?>
        </div>
        <div class="blog-detail right-aside">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <section class="blog-main text-center" role="main">
                            <article class="post-entry text-left">
                                <div class="entry-main">
                                  <?php 
									$page_404_content = cordillera_options_array('page_404_content');
									echo esc_html($page_404_content) ;
									?>
                                </div>
                            </article>
                        </section>
                    </div>
                    <div class="col-md-3">
                        <aside class="blog-side left text-left">
                            <div class="widget-area">
                               <?php get_sidebar( '404' ); ?>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>  
        </div>

<?php get_footer(); ?>