<!-- Page Content Start -->
<main id="mxd-page-content" class="mxd-page-content inner-page-content">

  <!-- Section - Projects Masonry & Headline #01 Start -->
  <div class="mxd-section mxd-section-inner-headline grid-headline padding-default">
    <div class="mxd-container grid-l-container">

      <!-- Block - Projects Masonry #01 with Section Title Start -->
      <div class="mxd-block loading-wrap">
        <div class="mxd-projects-masonry loading__item">
          <div class="container-fluid p-0">

            <!-- Portfolio Gallery Start -->
            <div class="row g-0 mxd-projects-masonry__gallery" data-masonry='{"percentPosition": true }'>
              <!-- portfolio gallery title -->
              <div class="col-12 col-xl-6 mxd-projects-masonry__title headline-title">
                <div class="mxd-block__inner-headline">
                  <h1 class="inner-headline__title headline-img-before headline-img-07">
                  Портфолио работ
                  </h1>
                </div>
              </div>

              <?php
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              $args  = array(
                'orderby'        => 'date',
                'order'          => 'DESC',
                'posts_per_page' => -1,
                'paged'          => $paged,
                'post_type'      => 'works',
              );

              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                  $query->the_post();
                  ?>
                  <?php get_template_part('components/work-card'); ?>
                  <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
            <!-- Portfolio Gallery End -->

            <!-- Portfolio Link Start -->
            <div class="mxd-projects-masonry__btngroup anim-uni-in-up">
              <a class="btn-rotating btn-rotating-180 ver-02" href="contact.html">
                <!-- SVG rotating text -->
                <svg version="1.1" id="scrollDown" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                  viewBox="0 0 160 160" style="enable-background:new 0 0 160 160;" xml:space="preserve" 
                  class="btn-rotating__text animate-rotation" data-value="360">
                  <defs>
                    <path id="textPath" d="M149.7,80c0,38.5-31.2,69.7-69.7,69.7S10.3,118.5,10.3,80S41.5,10.3,80,10.3S149.7,41.5,149.7,80z"/>
                  </defs>
                  <g>
                    <use xlink:href="#textPath" fill="none"></use>
                    <text>
                      <!-- button text here!!! -->
                      <textPath xlink:href="#textPath">Let's start new project * Let's start new project * </textPath>
                    </text>
                  </g>
                </svg>
                <!-- image -->
                <img class="btn-rotating__image" src="<?php bloginfo('template_directory') ?>/img/star.webp" alt="Object">
              </a>
            </div>
            <!-- Portfolio Link End -->
            
          </div>
        </div>
      </div>
      <!-- Block - Projects Masonry #01 with Section Title Start -->

    </div>
  </div>
  <!-- Section - Projects Masonry & Headline #01 End -->

  <!-- Section - Parallax Divider Start -->
  <div class="mxd-section padding-grid-pre-mtext">
    <div class="mxd-container">
      <div class="mxd-divider">
        <div class="mxd-divider__video">
          <video class="video parallax-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="<?php the_field('raboty_prevyu_video', 'option'); ?>">
            <source type="video/mp4" src="<?php the_field('raboty_bolshoe_video', 'option'); ?>">

          </video>
        </div>
      </div>
    </div>
  </div>
  <!-- Section - Parallax Divider End -->

  <!-- Section - Marquee Text One Line Start -->
  <div class="mxd-section padding-mtext">
    <div class="mxd-container fullwidth-container">

      <!-- Block - Marquee Text One Line Start -->
      <div class="mxd-block">
        <div class="marquee marquee-right--gsap muted-extra">
          <div class="marquee__toright">
            <!-- single item -->
            <div class="marquee__item one-line item-regular text">
              <p class="marquee__text">Clients Approve</p>
              <div class="marquee__image">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                  <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                    c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                    c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                    C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                    c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                    s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                    c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                    "/>
                </svg>
              </div>
            </div>
            <!-- single item -->
            <div class="marquee__item one-line item-regular text">
              <p class="marquee__text">Clients Approve</p>
              <div class="marquee__image">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                  <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                    c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                    c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                    C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                    c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                    s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                    c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                    "/>
                </svg>
              </div>
            </div>
            <!-- single item -->
            <div class="marquee__item one-line item-regular text">
              <p class="marquee__text">Clients Approve</p>
              <div class="marquee__image">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                  <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                    c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                    c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                    C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                    c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                    s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                    c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                    "/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Block - Marquee Text One Line End -->

    </div>
  </div>
  <!-- Section - Marquee Text One Line End -->

  <!-- Section - Testimonials Slider #03 Start -->
  <div class="mxd-section overflow-hidden padding-default">
    <div class="mxd-container grid-container">
      <!-- Block - Testimonials Slider #03 Start -->
      <div class="mxd-block">
        <div class="testimonials-slider-2 no-padding">
          <!-- slider main container -->
          <div class="swiper-testimonials-2 no-padding">
            <!-- additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- single slide -->

              <?php
              //ВЫВОД ЗАПИСЕЙ АСF
              $post_objects = get_field('raboty_spisok_otzyvov','options');
              if( $post_objects ): ?>
              <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>

              <?php 
              //form-done-popup component
              get_template_part('components/testimonials-slider-card'); 
              ?>

              <?php endforeach; ?>

              <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
              <?php endif;

              ?>

              
    
          </div>
            <!-- navigation buttons -->
            <div class="swiper-testimonials__controls">
              <div class="swiper-button-prev mxd-slider-btn mxd-slider-btn-round-prev">
                <a class="btn btn-round btn-round-small btn-outline slide-left anim-no-delay" href="#0">
                  <i class="ph ph-arrow-left"></i>
                </a> 
              </div>
              <div class="swiper-pagination mxd-swiper-pagination-fraction"></div>
              <div class="swiper-button-next mxd-slider-btn mxd-slider-btn-round-next">
                <a class="btn btn-round btn-round-small btn-outline slide-right anim-no-delay" href="#0">
                  <i class="ph ph-arrow-right"></i>
                </a> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Block - Testimonials Slider #03 End -->
    </div>
  </div>
  <!-- Section - Testimonials Slider #03 End -->

  
  <!-- Section - CTA Start -->
  <?php 
  get_template_part('components/cta-section'); 
  ?>
  <!-- Section - CTA End -->

</main>
<!-- Page Content End -->