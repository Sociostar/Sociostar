<?php $archive_year  = get_the_time('Y'); ?>
<?php $archive_month = get_the_time('m'); ?>
<article class="entry-box text-left">
								<div class="entry-main">
									<div class="entry-header">
                                        <div class="entry-catagory"><?php the_category(', '); ?></div>                         
                                        <a href="<?php the_permalink();?>"><h1 class="entry-title"><?php the_title();?></h1></a>
                                        <div class="entry-meta">
                                            <div class="entry-date"><a href="<?php echo get_month_link($archive_year, $archive_month);?>"><?php echo get_the_date("M d, Y");?></a></div>
                                            <div class="entry-author"><?php echo get_the_author_link();?></div> 
                                            <div class="entry-comments"><?php  comments_popup_link( __('No comments yet','cordillera'), __('1 comment','cordillera'), __('% comments','cordillera'), 'comments-link', __('No comment','cordillera'));?></div>
                                           <?php edit_post_link( __('Edit','cordillera'), '<div class="entry-edit">', '</div>', get_the_ID() ); ?> 
                                        </div>
                                    </div>
									<div class="entry-summary">
                                    <?php
									if ( has_post_thumbnail()) {
									?>
									<a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail();?>
                                    </a>
                                        <?php }?>
                                        
										<div class="entry-summary"><?php the_excerpt();?></div>
									</div>
									<div class="entry-footer">
										<a href="<?php the_permalink();?>"><div class="entry-more"><?php _e("Read More","cordillera");?>&gt;&gt;</div></a>
									</div>
								</div>
							</article>