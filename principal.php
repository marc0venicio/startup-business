<?php get_header();?>
<?php
/*

template name: principal

*/
?>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area  slider-height" style="background-image: url('<?php bloginfo('template_url'); ?>/img/hero/h1_hero.jpg');">
            <div class="slider-active">
                <!-- Single Slider -->
                <?php 
                    // args
                    $my_args_banner = array(
                    'post_type' => 'banners',
                    'posts_per_page' => 3,
                    );

                    // query
                    $my_query_banner = new WP_Query ( $my_args_banner );
                    ?>

                    <?php if( $my_query_banner->have_posts()) : 
                    $banner = $banners[0];
                    $c = 0;
                    while( $my_query_banner->have_posts() ) : 
                    $my_query_banner->the_post(); 
                    ?>
                <div class="single-slider <?php $c++; if($c == 1) { echo ' active'; } ?>">
                    <div class="slider-cap-wrapper">
                          <div class="hero__img">
                          <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded', 'data-animation' =>'fadeInRight', 'data-transition-duration' => '5s') ); ?> 
                          </div>
                          <div class="hero__caption">
                              <h1 data-animation="fadeInLeft" data-delay=".4s"><?php the_title(); ?></h1>
                              <p data-animation="fadeInLeft" data-delay=".6s"><?php the_excerpt(); ?></p>
                              <!-- Hero Btn -->
                              <a href="#" class="hero-btn"  data-animation="fadeInLeft" data-delay=".9s" >
                                  View project
                                  <!-- Arrow SVG icon -->
                                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                 <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
                                         c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
                                         l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
                                         c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"/> </svg>
                             </a>
                          </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
                <!-- Single Slider -->
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="wantToWork-caption">
                            <p>Once you’ve settled on a business</p>
                            <h2>O que a Overlord Intellectus oferece para sua empresa?</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <a href="#" class="btn btn-ans">view more</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->
        <!-- Our Services Start -->
        <div class="our-services  pt-50 pb-150">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-experience"></span>
                            </div>
                            <div class="services-cap">
                                <h5>Criação de sites</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-experience"></span>
                            </div>
                            <div class="services-cap">
                                <h5>Criação de lojas virtuais</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-experience"></span>
                            </div>
                            <div class="services-cap">
                                <h5>Gestão de tráfego</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-experience"></span>
                            </div>
                            <div class="services-cap">
                                <h5>Gestão de redes sociais</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-pay"></span>
                            </div>
                            <div class="services-cap">
                                <h5>SEO</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-good"></span>
                            </div>
                            <div class="services-cap">
                                <h5>Criação de artes para midias sociais</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <span>Nosso diferencial</span>
                <h3>Por que contratar a <br>Overlord Intellectus?</h3>
                <p>Tempor incididunt ut labore et cvhjfhore magna aliqua. Ut<br> enim ad minim veniam, quis.</p>
                 <!-- skill Start -->
                <div class="skill-ara">
                    <div class="skill">
                        <div class="single-skill">
                            <div class="progress-count">
                                <p>User Interface</p><span>75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s" aria-valuenow="25" role="progressbar" style="width: 75%"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single-skill">
                            <div class="progress-count">
                                <p>Digital Marketing</p><span>89%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".7s" role="progressbar" style="width: 89%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single-skill">
                            <div class="progress-count">
                                <p>User Interface</p><span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".6s" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- skill End -->
            </div>

        </div>
        <!-- Visit Our Tailor End -->
        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding3">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="wantToWork-caption">
                            <p>Works That We Done Recently</p>
                            <h2>All startups need to make their business work</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5 col-md-4">
                        <div class="wantToWork-btn f-right">
                            <a href="#" class="btn btn-ans">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->
        <!-- Project Gallery Start -->
        <div class="project-gallery-area">
            <div class="container-full p-0">
                <div class="row no-gutters">
                    <!-- Big img -->
                    <div class="col-lg-5 col-md-4">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-thumb big-img" style="background-image: url(<?php bloginfo('template_url'); ?>/img/gallery/project_list1.png);">
                            </div>
                            <!-- Popup img Link -->
                            <div class="portfolio-content">
                                <a href="<?php bloginfo('template_url'); ?>/img/gallery/project_list1.png" class="img-pop-up">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Small Img -->
                    <div class="col-lg-7 col-md-8">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-thumb small-img"  style="background-image: url(<?php bloginfo('template_url'); ?>/img/gallery/project_list2.png);">
                                    </div>
                                    <!-- Popup img Link -->
                                    <div class="portfolio-content">
                                        <a href="<?php bloginfo('template_url'); ?>/img/gallery/project_list2.png" class="img-pop-up">View Project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-thumb small-img" style="background-image: url(<?php bloginfo('template_url'); ?>/img/gallery/project_list3.png);">
                                    </div>
                                    <!-- Popup img Link -->
                                    <div class="portfolio-content">
                                        <a href="<?php bloginfo('template_url'); ?>/img/gallery/project_list3.png" class="img-pop-up">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-thumb small-img" style="background-image: url(<?php bloginfo('template_url'); ?>/img/gallery/project_list4.png);"></div>
                                    <!-- Popup img Link -->
                                    <div class="portfolio-content">
                                        <a href="<?php bloginfo('template_url'); ?>/img/gallery/project_list4.png" class="img-pop-up">View Project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-thumb small-img" style="background-image: url(<?php bloginfo('template_url'); ?>/img/gallery/project_list5.png);"></div>
                                    <!-- Popup img Link -->
                                    <div class="portfolio-content">
                                        <a href="<?php bloginfo('template_url'); ?>/img/gallery/project_list5.png" class="img-pop-up">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Gallery End -->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container ">
               <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="<?php bloginfo('template_url'); ?>/img/icon/testimonial.png" alt="">
                                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/testmonial/Homepage_testi.png" alt="">
                                        </div>
                                       <div class="founder-text">
                                            <span>Oliva jems</span>
                                            <p>UIX designer</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="<?php bloginfo('template_url'); ?>/img/icon/testimonial.png" alt="">
                                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/testmonial/Homepage_testi.png" alt="">
                                        </div>
                                       <div class="founder-text">
                                            <span>Oliva jems</span>
                                            <p>UIX designer</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!--All startups Start -->
        <div class="all-starups-area fix">
            <!-- left Contents -->
            <div class="starups">
                <div class="starups-details">
                    <span>Features That You Will Get</span>
                    <h3>O que o seu negócio precisa ter para <br>vender mais e ser visto por mais pessoas</h3>
                    <!-- Details -->
                    <div class="starups-list">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
                                <path fill-rule="evenodd"  fill="rgb(4, 219, 236)" d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z"/>
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px" x="9px" y="22.0320000000002px">&#58956;</text>
                                </svg>
                            </li>
                            <li>
                                <p>Facilidade para o cliente encontrar a sua empresa</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
                                <path fill-rule="evenodd"  fill="rgb(4, 219, 236)" d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z"/>
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px" x="9px" y="22.0320000000002px">&#58956;</text>
                                </svg>
                            </li>
                            <li>
                                <p>Menor custo na hora de encontrar possíveis clientes</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
                                <path fill-rule="evenodd"  fill="rgb(4, 219, 236)" d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z"/>
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px" x="9px" y="22.0320000000002px">&#58956;</text>
                                </svg>
                            </li>
                            <li>
                                <p>Aumento das vendas em grande escala</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Right Contents  -->
            <div class="starups-img"></div>
        </div>
        <!--All startups End -->
        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding3">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="wantToWork-caption">
                            <p>Once you’ve settled on a business</p>
                            <h2>Serviços de excelência pra levar sua empresa para outro nível.</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <a href="#" class="btn btn-ans">view more</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->
        <!-- David Droga start -->
        <div class="david-droga-area  pb-160">
            <div class="container">
                <div class="row">
                <?php
                    //argumentos
                    $my_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    );

                    //query
                    $my_query = new WP_Query ($my_args);

                    ?>

                    <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();?>
                    <?php get_template_part('content', get_post_format()); ?>
                    <?php endwhile; endif;?>
            <?php wp_reset_query(); ?> 
            </div>
            </div>
        </div>
        <!-- David Droga End -->
        <!-- Want To Work Start -->
        <div class="wantToWork-area wantToWork-area2 w-padding2" style="background-image: url('<?php bloginfo('template_url'); ?>/img/gallery/section_bg02');">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Envie-nos uma mensagem e faça um orçamento grátis com a gente.</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <a href="#" class="btn btn-black f-right">contact us now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->

    </main>
<?php get_footer();?>