<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
 
?>

<?php get_header(); ?>

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                <h2 class="mb-0"><?php the_title(); ?></h2>
                <?php echo get_the_date('d/m/y'); ?>
                </div>
            </div>
        </div>
    </div> 
        

    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="index.html">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">News</span>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 mb-4">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format()); ?>
                        <?php endwhile; ?>
                    <?php else : get_404_template();  endif; ?>
                </div>    
            </div>
        </div>
    </div>

<?php get_footer(); ?>