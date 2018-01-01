<div class="breadcrumb-box">
            <?php cordillera_get_breadcrumb();?>
        </div>
        <div class="blog-list">
			<div class="container">
            <div class="row">
					<div class="col-md-12">
						<section class="blog-main text-center" role="main">
							
                            <?php 
							if ( have_posts() ) :
							?>
                            <div class="blog-list-wrap">
                    <?php while ( have_posts() ) : the_post(); 
					    get_template_part("content","article");
					?>
                   <?php endwhile;?>
                   </div>
                   <?php endif;?>
                            		<div class="list-pagition text-center">
							<?php if(function_exists("cordillera_native_pagenavi")){cordillera_native_pagenavi("echo",$wp_query);}?>
							</div>
						</section>
					</div>	
				</div>
			</div>	
		</div>