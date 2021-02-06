<?php get_header(); ?>
<?php
/*

template name: blog

*/
?>
<main>
        <!-- Hero Area Start -->
        <div class="hero-area hero-height2 d-flex align-items-center" data-background="<?php bloginfo('template_url'); ?>/img/hero/h2_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Our Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded card-img rounded-0')); ?>
                                    <a href="#" class="blog_item_date">
                                        <h3><?php echo getdate()["mday"]?></h3>
                                        <p><?php echo getdate()["month"]?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <p><?php the_excerpt(); ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                        <?php endwhile; endif;?>
                        <?php wp_reset_query(); ?>
                        <nav class="blog-pagination justify-content-center d-flex">
                        <div class="blog-pagination mb-5">
            <?php next_posts_link( 'Mais antigos' ); ?> <?php previous_posts_link( 'Mais novos' ); ?>
          </div>
                        </nav>
                        </div>
                    </div>
                    <?php get_sidebar();?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>
   <?php get_footer();?>