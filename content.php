<?php if( is_single() ) : ?>

                  <div class="single-post">
                     <div class="feature-img">
                     <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>
                     </div>
                     <div class="blog_details">
                        <h2><?php the_title(); ?>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                           <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                        </ul>
                        <p class="excert">
                        <?php the_content(); ?>
                        </p>
                     </div>
                  </div>

<?php else : ?>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-david -->
                        <div class="single-david mb-30">
                            <div class="david-img">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>
                            </div>
                            <div class="david-captoin">
                                <ul class="david-info">
                                    <li><?php echo "<p>", getdate()["month"], " ", getdate()["mday"], ", ", getdate()["year"], "!</p>"; ?></li>
                                    <li> No Comments</li>
                                </ul>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <span>Continue Reading</span>
                            </div>
                        </div>
                    </div>

<?php endif; ?>