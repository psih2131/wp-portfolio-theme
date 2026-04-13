<?php
/*
Template Name: Home
*/
?>

<?php get_header() ?>

<!-- Page Content Start -->
<main id="mxd-page-content" class="mxd-page-content">

  <!-- Hero Section Start -->
  <?php
  if( have_rows('sekcziya_1_hero') ):
  while ( have_rows('sekcziya_1_hero') ) : the_row();
  ?>

  <section class="mxd-section">
    <div class="mxd-hero-06">
      <div class="mxd-hero-06__wrap loading-wrap">
        <div class="mxd-hero-06__top">
          <div class="mxd-hero-06__content">
            <div class="mxd-hero-06__video">
              <video class="video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="<?php the_sub_field('prevyu_dlya_video'); ?>">
                <source type="video/mp4" src="<?php the_sub_field('fonovoe_video'); ?>">

              </video>
              <div class="hero-06-video__cover"></div>
            </div>
            <div class="mxd-hero-06__data">
              <div class="mxd-hero-06__list">
                <div class="mxd-paragraph__lists">
                  <div class="container-fluid p-0">
                    <div class="row g-0">
                      <div class="col-6 col-lg-4 col-xl-2 loading__item">
                        <ul>
                          <?php if(have_rows( 'spisok_servisov')): ?>
                          <?php 
                          while( have_rows('spisok_servisov') ): the_row();
                          if( get_row_index() % 2 == 0 ){
                          ?>

                          
                          <li>
                            <p class="t-small"><?php the_sub_field('nazvanie_serviya'); ?></p>
                          </li>

                          <?php
                          } else {
                          ?>

                          <?php

                          }

                          endwhile;
                          ?>

                          <?php endif; ?>

                        </ul>
                      </div>
                      <div class="col-6 col-lg-4 col-xl-2 loading__item">
                        <ul>
                           <?php if(have_rows( 'spisok_servisov')): ?>
                            <?php 
                            while( have_rows('spisok_servisov') ): the_row();
                            if( get_row_index() % 2 == 1 ){
                            ?>

                            
                            <li>
                              <p class="t-small"><?php the_sub_field('nazvanie_serviya'); ?></p>
                            </li>

                            <?php
                            } else {
                            ?>

                            <?php

                            }

                            endwhile;
                            ?>

                            <?php endif; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mxd-hero-06__headline">
                <div class="hero-06-headline__descr">
                  <p class="loading__item"><?php the_sub_field('privetstvennoe_soobshhenie'); ?></p>

                  <?php if ( get_sub_field('ssylka_na_prezentacziyu') ) { ?>
                  <div class="hero-06-headline__btn loading__item">
                    <a href="<?php the_sub_field('ssylka_na_prezentacziyu'); ?>" class="btn-rotating btn-rotating-blur-outline ver-04 permanent-desktop">
                      <!-- SVG rotating text -->
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                        viewBox="0 0 160 160" style="enable-background:new 0 0 160 160;" xml:space="preserve" 
                        class="btn-rotating__text animate-rotation" data-value="360">
                        <defs>
                          <path id="textPath" d="M149.7,80c0,38.5-31.2,69.7-69.7,69.7S10.3,118.5,10.3,80S41.5,10.3,80,10.3S149.7,41.5,149.7,80z"/>
                        </defs>
                        <g>
                          <use xlink:href="#textPath" fill="none"></use>
                          <text>
                            <!-- button text here!!! -->
                            <textPath xlink:href="#textPath">Download CV * Download CV * Download CV * </textPath>
                          </text>
                        </g>
                      </svg>
                      <!-- image -->
                      <img class="btn-rotating__image" src="https://dummyimage.com/300x300/5d5d5d/838383" alt="Object">
                    </a>
                  </div>
                  <?php } ?>

                </div>
                <div class="hero-06-headline__content">
                  <h1 class="hero-06-headline__title">
                    <?php
                    //ПОВТОРИТЕЛЬ ACF
                    if( have_rows('dvizhushhijsya_tekst') ):
                    while ( have_rows('dvizhushhijsya_tekst') ) : the_row();
                    ?>

                    <?php the_sub_field('tekst'); ?> ,

                    <?php
                    endwhile;
                    else :
                    // вложенных полей не найдено
                    endif;
                    ?>
                  </h1>
                  <div class="mxd-hero-06__marquee loading__item">
                    <div class="marquee marquee-right--gsap permanent-desktop">
                      <div class="marquee__toright" style="translate: none; rotate: none; scale: none; transform: translate3d(11.3417%, 0px, 0px);">


                        <?php
                        //ПОВТОРИТЕЛЬ ACF
                        if( have_rows('dvizhushhijsya_tekst') ):
                        while ( have_rows('dvizhushhijsya_tekst') ) : the_row();
                        ?>

                       
                        <!-- single item -->
                        <div class="marquee__item one-line item-regular text">
                          <p class="marquee__text"><?php the_sub_field('tekst'); ?></p>
                          <div class="marquee__image">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                              <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                                c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                                c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                                C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                                c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                                s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                                c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                                "></path>
                            </svg>
                          </div>
                        </div>

                        <?php
                        endwhile;
                        else :
                        // вложенных полей не найдено
                        endif;
                        ?>
                        
                  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mxd-hero-06__bottom loading__fade">
          <div class="mxd-hero-06__mark">
            <div class="mxd-hero__mark">
              <span class="mark-icon"></span>
              <span class="mark-text"><?php the_sub_field('plashka_dostupnosti'); ?></span>
            </div>
          </div>
          <div class="mxd-hero-06__more">
            <a class="btn btn-line-medium btn-anim btn-anim-medium slide-down" href="#projects">
              <span class="btn-caption">Прокрутите, чтобы увидеть больше</span>
              <i class="ph-bold ph-arrow-elbow-right-down"></i>
            </a>
          </div>
        </div>
        <div class="mxd-hero-06__btn-mobile">
          <a href="#0" class="btn-rotating btn-rotating-blur-outline ver-04 permanent-desktop">
            <!-- SVG rotating text -->
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
              viewBox="0 0 160 160" style="enable-background:new 0 0 160 160;" xml:space="preserve" 
              class="btn-rotating__text animate-rotation" data-value="360">
              <defs>
                <path id="textPathDownloadCV" d="M149.7,80c0,38.5-31.2,69.7-69.7,69.7S10.3,118.5,10.3,80S41.5,10.3,80,10.3S149.7,41.5,149.7,80z"/>
              </defs>
              <g>
                <use xlink:href="#textPathDownloadCV" fill="none"></use>
                <text>
                  <!-- button text here!!! -->
                  <textPath xlink:href="#textPathDownloadCV">Download CV * Download CV * Download CV * </textPath>
                </text>
              </g>
            </svg>
            <!-- image -->
            <img class="btn-rotating__image" src="<?php bloginfo('template_directory') ?>/img/star-cv.webp" alt="Object">
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php
  endwhile;
  else :
  // вложенных полей не найдено
  endif;
  ?>
  <!-- Hero Section End -->



  <!-- Section - Projects Pinned #01 Start -->
  <?php
  if( have_rows('sekcziya_2_-_raboty') ):
  while ( have_rows('sekcziya_2_-_raboty') ) : the_row();
  ?>

  <section id="projects" class="mxd-section padding-hero-06 padding-default">
    <div class="mxd-container grid-container">

      <!-- Block - Projects Pinned #01 with Section Title Start -->
      <div class="mxd-block">
        <div class="mxd-pinned-projects">
          <div class="container-fluid px-0">
            <div class="row gx-0">
              <div class="col-12 col-xl-5 mxd-pinned-projects__static">
                <div class="mxd-pinned-projects__static-inner no-margin">

                  <!-- Section Title Start -->
                  <div class="mxd-section-title no-margin-desktop">
                    <div class="container-fluid p-0">
                      <div class="row g-0">
                        <div class="col-12 mxd-grid-item no-margin">
                          <div class="mxd-section-title__title">
                            <h2 class="reveal-type"><?php the_sub_field('zagolovok'); ?></h2>
                          </div>
                        </div>
                        <div class="col-12 mxd-grid-item no-margin">
                          <div class="mxd-section-title__descr">
                            <p class="anim-uni-in-up"><?php the_sub_field('podzagolovok'); ?></p>
                          </div>
                        </div>
                        <div class="col-12 mxd-grid-item no-margin">
                          <div class="mxd-section-title__controls anim-uni-in-up">
                            <a class="btn btn-anim btn-default btn-outline slide-right-up" href="<?php echo get_post_type_archive_link('works'); ?>">
                              <span class="btn-caption"><?php the_sub_field('tekst_knopki'); ?></span>
                              <i class="ph-bold ph-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Section Title End -->

                </div>
              </div>
              <div class="col-12 col-xl-7 mxd-pinned-projects__scroll">
                <div class="mxd-pinned-projects__scroll-inner mxd-grid-item no-margin">

                  <?php
                  //ВЫВОД ЗАПИСЕЙ АСF
                  $post_objects = get_sub_field('raboty');
                  if( $post_objects ): ?>
                  <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                  <?php 
                  $work_image = get_field('osnovnoe_izobrazhenie_kartochki');
                  ?>

                  <!-- item -->
                  <div class="mxd-project-item">
                    <a class="mxd-project-item__media anim-uni-in-up" href="<?php the_permalink() ?>">
                      <div class="mxd-project-item__preview preview-image-1 parallax-img-small" style="background-image: url('<?php echo $work_image['url']; ?>')"></div>
                      <div class="mxd-project-item__tags">
                        <?php
                        $work_terms = get_the_terms( get_the_ID(), 'tegs-works' );
                        if ( ! empty( $work_terms ) && ! is_wp_error( $work_terms ) ) :
                            foreach ( $work_terms as $work_term ) :
                                ?>
                                <span class="tag tag-default tag-permanent"><?php echo esc_html( $work_term->name ); ?></span>
                                <?php
                            endforeach;
                        endif;
                        ?>
                     
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="<?php the_permalink() ?>"><?php the_title() ?></a>
                      </div>
                    </div>
                  </div>
                  <!-- item -->

                  <?php endforeach; ?>

                  <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                  <?php endif;

                  ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Block - Projects Pinned #01 with Section Title Start -->

    </div>
  </section>

  <?php
  endwhile;
  else :
  // вложенных полей не найдено
  endif;
  ?>
  
  <!-- Section - Projects Pinned #01 End -->


  <!-- Section - Marquee Text One Line Start -->
  <section class="mxd-section padding-mtext-pre-title">
    <div class="mxd-container fullwidth-container">

      <!-- Block - Marquee Text One Line Start -->
      <div class="mxd-block">
        <div class="marquee marquee-right--gsap muted-extra">
          <div class="marquee__toright">
            <!-- single item -->
            <div class="marquee__item one-line item-regular text">
              <p class="marquee__text">About Me</p>
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
              <p class="marquee__text">About Me</p>
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
              <p class="marquee__text">About Me</p>
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
              <p class="marquee__text">About Me</p>
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
  </section>
  <!-- Section - Marquee Text One Line End -->



  <!-- Section - Services Cards Start -->
  <div class="mxd-section overflow-hidden padding-pre-title">
        <div class="mxd-container grid-container">

          <!-- Block - Services Cards #02 Start -->
          <div class="mxd-block">
            <div class="mxd-services-cards-s">
              <div class="container-fluid px-0">
                <div class="row gx-0">

                <?php
                $services_cards = get_field( 'sekcziya_3_servisy' );
                $normalize_service_image = static function ( $image, $fallback = '' ) {
                  if ( is_array( $image ) && ! empty( $image['url'] ) ) {
                    return array(
                      'url' => $image['url'],
                      'alt' => isset( $image['alt'] ) ? $image['alt'] : '',
                    );
                  }
                  if ( is_numeric( $image ) ) {
                    $attachment_id = (int) $image;
                    return array(
                      'url' => (string) wp_get_attachment_image_url( $attachment_id, 'full' ),
                      'alt' => (string) get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ),
                    );
                  }
                  if ( is_string( $image ) && '' !== $image ) {
                    return array(
                      'url' => $image,
                      'alt' => '',
                    );
                  }
                  return array(
                    'url' => $fallback,
                    'alt' => '',
                  );
                };
                ?>

                <?php if ( ! empty( $services_cards[0] ) ) :
                  $service = $services_cards[0];
                  $image   = $normalize_service_image( isset( $service['izobrazhenie'] ) ? $service['izobrazhenie'] : null );
                  ?>
                <!-- item -->
                <div class="col-12 col-xl-8 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in-right">
                    <div class="mxd-services-cards-s__inner justify-between bg-base-tint radius-l padding-4">
                      <div class="mxd-services-cards-s__title">
                        <h3 class="anim-uni-in-up"><?php echo esc_html( $service['zagolovok'] ?? '' ); ?></h3>
                      </div>
                      <div class="mxd-services-cards-s__info width-50">
                        <div class="mxd-services-cards-s__tags">
                        <?php if ( ! empty( $service['tegi'] ) && is_array( $service['tegi'] ) ) :
                          foreach ( $service['tegi'] as $tag_row ) :
                            ?>
                        <span class="tag tag-default tag-outline anim-uni-in-up"><?php echo esc_html( $tag_row['tekst_tega'] ?? '' ); ?></span>
                            <?php
                          endforeach;
                        endif; ?>
   
                        </div>
                        <p class="anim-uni-in-up"><?php echo esc_html( $service['opisanie'] ?? '' ); ?></p>
                      </div>
                      <div class="mxd-services-cards-s__image image-right">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if ( ! empty( $services_cards[1] ) ) :
                  $service = $services_cards[1];
                  $image   = $normalize_service_image(
                    isset( $service['izobrazhenie'] ) ? $service['izobrazhenie'] : null,
                    get_template_directory_uri() . '/img/about-2.webp'
                  );
                  ?>
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in-left">
                    <div class="mxd-services-cards-s__inner justify-end bg-accent radius-l padding-4">
                      <div class="mxd-services-cards-s__title">
                        <h3 class="opposite anim-uni-in-up"><?php echo esc_html( $service['zagolovok'] ?? '' ); ?></h3>
                      </div>
                      <div class="mxd-services-cards-s__info">
                        <div class="mxd-services-cards-s__tags">
                          <?php if ( ! empty( $service['tegi'] ) && is_array( $service['tegi'] ) ) :
                            foreach ( $service['tegi'] as $tag_row ) :
                              ?>
                          <span class="tag tag-default tag-outline-opposite anim-uni-in-up"><?php echo esc_html( $tag_row['tekst_tega'] ?? '' ); ?></span>
                              <?php
                            endforeach;
                          endif; ?>
                        </div>
                        <p class="t-opposite anim-uni-in-up"><?php echo esc_html( $service['opisanie'] ?? '' ); ?></p>
                      </div>
                      <div class="mxd-services-cards-s__image image-top-right">
                        <img class="mxd-move" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if ( ! empty( $services_cards[2] ) ) :
                    $service = $services_cards[2];
                    $image   = $normalize_service_image(
                      isset( $service['izobrazhenie'] ) ? $service['izobrazhenie'] : null,
                      get_template_directory_uri() . '/img/about-3.webp'
                    );
                    ?>
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in-right">
                    <div class="mxd-services-cards-s__inner bg-additional radius-l padding-4">
                      <div class="mxd-services-cards-s__title">
                        <h3 class="anim-uni-in-up"><?php echo esc_html( $service['zagolovok'] ?? '' ); ?></h3>
                      </div>
                      <div class="mxd-services-cards-s__info">
                        <div class="mxd-services-cards-s__tags">
                          <?php if ( ! empty( $service['tegi'] ) && is_array( $service['tegi'] ) ) :
                            foreach ( $service['tegi'] as $tag_row ) :
                              ?>
                          <span class="tag tag-default tag-outline anim-uni-in-up"><?php echo esc_html( $tag_row['tekst_tega'] ?? '' ); ?></span>
                              <?php
                            endforeach;
                          endif; ?>
                        </div>
                        <p class="t-bright anim-uni-in-up"><?php echo esc_html( $service['opisanie'] ?? '' ); ?></p>
                      </div>
                      <div class="mxd-services-cards-s__image image-bottom">
                        <img class="mxd-rotate-slow" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if ( ! empty( $services_cards[3] ) ) :
                    $service = $services_cards[3];
                    $image   = $normalize_service_image(
                      isset( $service['izobrazhenie'] ) ? $service['izobrazhenie'] : null,
                      get_template_directory_uri() . '/img/about-4.webp'
                    );
                    ?>
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in">
                    <div class="mxd-services-cards-s__inner bg-base-opp radius-l padding-4">
                      <div class="mxd-services-cards-s__title">
                        <h3 class="opposite anim-uni-in-up"><?php echo esc_html( $service['zagolovok'] ?? '' ); ?></h3>
                      </div>
                      <div class="mxd-services-cards-s__info">
                        <div class="mxd-services-cards-s__tags">
                          <?php if ( ! empty( $service['tegi'] ) && is_array( $service['tegi'] ) ) :
                            foreach ( $service['tegi'] as $tag_row ) :
                              ?>
                          <span class="tag tag-default tag-outline-opposite anim-uni-in-up"><?php echo esc_html( $tag_row['tekst_tega'] ?? '' ); ?></span>
                              <?php
                            endforeach;
                          endif; ?>
                        </div>
                        <p class="t-opposite anim-uni-in-up"><?php echo esc_html( $service['opisanie'] ?? '' ); ?></p>
                      </div>
                      <div class="mxd-services-cards-s__image image-bottom image-bottom-2">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if ( ! empty( $services_cards[4] ) ) :
                    $service = $services_cards[4];
                    $image   = $normalize_service_image(
                      isset( $service['izobrazhenie'] ) ? $service['izobrazhenie'] : null,
                      get_template_directory_uri() . '/img/about-5.webp'
                    );
                    ?>
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-services-cards-s__item mxd-grid-item anim-uni-scale-in-left">
                    <div class="mxd-services-cards-s__inner justify-end bg-base-tint radius-l padding-4">
                      <div class="mxd-services-cards-s__title">
                        <h3 class="anim-uni-in-up"><?php echo esc_html( $service['zagolovok'] ?? '' ); ?></h3>
                      </div>
                      <div class="mxd-services-cards-s__info">
                        <div class="mxd-services-cards-s__tags">
                          <?php if ( ! empty( $service['tegi'] ) && is_array( $service['tegi'] ) ) :
                            foreach ( $service['tegi'] as $tag_row ) :
                              ?>
                          <span class="tag tag-default tag-outline anim-uni-in-up"><?php echo esc_html( $tag_row['tekst_tega'] ?? '' ); ?></span>
                              <?php
                            endforeach;
                          endif; ?>
                        </div>
                        <p class="anim-uni-in-up"><?php echo esc_html( $service['opisanie'] ?? '' ); ?></p>
                      </div>
                      <div class="mxd-services-cards-s__image image-top">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Services Cards #02 End -->

        </div>
      </div>
      <!-- Section - Services Cards End -->
      

      <?php
      //ПОВТОРИТЕЛЬ ACF
      if( have_rows('sekcziya_4_-_o_nas') ):
      while ( have_rows('sekcziya_4_-_o_nas') ) : the_row();
      ?>

      <!-- Section - About Start -->
      <section class="mxd-section padding-default">
        <div class="mxd-container grid-container">
        
          <!-- Block - About Description with H2 Title and Paragraph Start -->
          <div class="mxd-block">
            <div class="container-fluid px-0">
              <div class="row gx-0">
                <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                  <div class="mxd-block__name">
                    <h2 class="reveal-type anim-uni-in-up"><?php the_sub_field('zagolovok'); ?></h2>
                  </div>
                </div>
                <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                  <div class="mxd-block__content">
                    <div class="mxd-block__paragraph">
                      <p class="t-large t-bright anim-uni-in-up"><?php the_sub_field('tekst'); ?></p>
                      <div class="mxd-paragraph__lists">
                        <div class="container-fluid p-0">
                          <div class="row g-0">
                            <div class="col-6 col-xl-5">
                              <ul>
                              <?php if(have_rows( 'spisok_servisov')): ?>
                              <?php 
                              while( have_rows('spisok_servisov') ): the_row();
                              if( get_row_index() % 2 == 0 ){
                              ?>

                              
                              <li>
                                  <p class="anim-uni-in-up"><?php the_sub_field('tekst'); ?></p>
                              </li>

                              <?php
                              } else {
                              ?>

                              <?php

                              }

                              endwhile;
                              ?>

                              <?php endif; ?>

                              </ul>
                            </div>
                            <div class="col-6 col-xl-5">
                              <ul>
                              <?php if(have_rows( 'spisok_servisov')): ?>
                              <?php 
                              while( have_rows('spisok_servisov') ): the_row();
                              if( get_row_index() % 2 == 1 ){
                              ?>

                              
                              <li>
                                  <p class="anim-uni-in-up"><?php the_sub_field('tekst'); ?></p>
                              </li>

                              <?php
                              } else {
                              ?>

                              <?php

                              }

                              endwhile;
                              ?>

                              <?php endif; ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mxd-paragraph__controls anim-uni-in-up">
                        <a class="btn btn-anim btn-default btn-outline slide-right-up" href="about-us.html">
                          <span class="btn-caption"><?php the_sub_field('tekst_knopki'); ?></span>
                          <i class="ph-bold ph-arrow-up-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - About Description with H2 Title and Paragraph End -->

        </div>
      </section>
      <!-- Section - About End -->

      <?php
      endwhile;
      else :
      // вложенных полей не найдено
      endif;
      ?>
      

      <!-- Section - Projects List #01 Start -->

      <?php
      //ПОВТОРИТЕЛЬ ACF
      if( have_rows('sekcziya_5_-_vse_servisy') ):
      while ( have_rows('sekcziya_5_-_vse_servisy') ) : the_row();
      ?>

      <section class="mxd-section overflow-hidden padding-grid-pre-mtext">
        <div class="mxd-container grid-container">

          <!-- Block - Section Title Start -->
          <div class="mxd-block">
            <div class="mxd-section-title">
              <div class="container-fluid p-0">
                <div class="row g-0">
                  <div class="col-12 col-xl-6 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrtitle">
                      <h2 class="reveal-type anim-uni-in-up"><?php the_sub_field('zagolovok'); ?></h2>
                    </div>
                  </div>
                  <div class="col-12 col-xl-2 mxd-grid-item no-margin"></div>
                  <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrcontrols pre-title anim-uni-in-up">
                      <a class="btn btn-anim btn-default btn-outline slide-right-down" href="/kontakty">
                        <span class="btn-caption"><?php the_sub_field('tekst_knopki'); ?></span>
                        <i class="ph-bold ph-arrow-down-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Section Title End -->

          <!-- Block - Projects List #01 Start -->
          <div class="mxd-block">
            <div class="mxd-projects-list hover-reveal">
              <!-- item -->
              <?php
              //ПОВТОРИТЕЛЬ ACF
              $counter = 0;
              if( have_rows('spisok_servisov') ):
              while ( have_rows('spisok_servisov') ) : the_row();
              $counter++;
              $image = get_sub_field('izobrazhenie');
              ?>

              <a class="mxd-projects-list__item hover-reveal__item" >
                <div class="mxd-projects-list__border anim-uni-in-up"></div>
                <div class="hover-reveal__content hover-reveal-280x340">
                  <img class="hover-reveal__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
                <div class="mxd-projects-list__inner">
                  <div class="container-fluid px-0">
                    <div class="row gx-0">
                      <div class="col-12 col-xl-8 mxd-grid-item no-margin">
                        <div class="mxd-projects-list__title anim-uni-in-up">
                          <div class="mxd-projects-list__icon">
                            <i class="ph ph-arrow-right"></i>
                          </div>
                          <p><?php the_sub_field('nazvanie'); ?></p>
                        </div>
                        <div class="mxd-projects-list__image anim-uni-in-up">
                          <img src="https://dummyimage.com/1200x800/4d4d4d/838383" alt="Project Preview">
                        </div>
                      </div>
                      <div class="col-6 col-md-6 col-xl-2 mxd-grid-item no-margin">
                        <div class="mxd-projects-list__tagslist">
                          <ul>
                            <li class="anim-uni-in-up">
                              <p class="t-small"><?php the_sub_field('opisanie'); ?></p>
                            </li>
                            <!-- <li class="anim-uni-in-up">
                              <p class="t-small">Development</p>
                            </li> -->
                          </ul>
                        </div>
                        
                      </div>
                      <div class="col-6 col-md-6 col-xl-2 mxd-grid-item no-margin">
                        <div class="mxd-projects-list__date anim-uni-in-up">
                          <p class="t-small"><?php echo $counter; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mxd-projects-list__border anim-uni-in-up"></div>
              </a>

              <?php
              endwhile;
              else :
              // вложенных полей не найдено
              endif;
              ?>
              
            </div>
          </div>
          <!-- Block - Projects List #01 End -->

        </div>
      </section>

      <?php
      endwhile;
      else :
      // вложенных полей не найдено
      endif;
      ?>

      <!-- Section - Projects List #01 End -->


      <!-- Section - Parallax Divider Start -->
      <?php
      //ПОВТОРИТЕЛЬ ACF
      if( have_rows('sekcziya_6_-_video_blok') ):
      while ( have_rows('sekcziya_6_-_video_blok') ) : the_row();
      ?>

      <section class="mxd-section padding-grid-pre-pinned">
      <div class="mxd-container">
      <div class="mxd-divider">
        <div class="mxd-divider__video">
          <video class="video parallax-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="<?php the_sub_field('prevyu'); ?>">
            <source type="video/mp4" src="<?php the_sub_field('video'); ?>">
          </video>
        </div>
      </div>
      </div>
      </section>

      <?php
      endwhile;
      else :
      // вложенных полей не найдено
      endif;
      ?>

      <!-- Section - Parallax Divider End -->

      <!-- Section - Tech Stack Start -->
      <?php
      //ПОВТОРИТЕЛЬ ACF
      if( have_rows('sekcziya_7_-_stek') ):
      while ( have_rows('sekcziya_7_-_stek') ) : the_row();
      ?>

      <section class="mxd-section padding-grid-pre-mtext">
        <div class="mxd-container grid-container">
        
          <!-- Block - Tech Stack Cards with H2 Title Start -->
          <div class="mxd-block">
            <div class="container-fluid px-0">
              <div class="row gx-0">
                <div class="col-12 col-xl-5 mxd-grid-item">
                  
                  <!-- Section Title Start -->
                  <div class="mxd-section-title pre-grid no-margin-desktop">
                    <div class="container-fluid p-0">
                      <div class="row g-0">
                        <div class="col-12">
                          <div class="mxd-section-title__title">
                            <h2 class="reveal-type"><?php the_sub_field('zagolovok'); ?></h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Section Title End -->
                  
                </div>
                <div class="col-12 col-xl-7">

                  <!-- Tech Stack Cards Start -->
                  <div class="mxd-tech-stack-cards">
                    <div class="container-fluid p-0">
                      <div class="row g-0">

                      <?php
                      //ПОВТОРИТЕЛЬ ACF
                      if( have_rows('spisok_tehnologij') ):
                      while ( have_rows('spisok_tehnologij') ) : the_row();
                      ?>

                      <!-- item -->
                      <div class="col-12 col-md-6 col-xxl-4 mxd-tech-stack-cards__item mxd-grid-item animate-card-3">
                          <div class="mxd-tech-stack-cards__inner">
                            <div class="mxd-tech-stack-cards__logo">
                            <?php the_sub_field('svg'); ?>
                              <!-- <img class="inject-me" src="img/tech/01_angular.svg" alt="Tech Stack Logo"> -->
                            </div>
                            <div class="mxd-tech-stack-cards__title">
                              <p class="t-bright t-caption"><?php the_sub_field('nazvanie'); ?></p>
                            </div>
                          </div>
                        </div>

                      <?php
                      endwhile;
                      else :
                      // вложенных полей не найдено
                      endif;
                      ?>

          
                      </div>
                    </div>
                  </div>
                  <!-- Tech Stack Cards End -->

                </div>
              </div>
            </div>
          </div>
          <!-- Block - Tech Stack Cards with H2 Title End -->

        </div>
      </section>

      <?php
      endwhile;
      else :
      // вложенных полей не найдено
      endif;
      ?>
      
      <!-- Section - Tech Stack End -->

      <!-- Section - Marquee Text One Line Start -->
      <section class="mxd-section padding-mtext-pre-grid">
        <div class="mxd-container fullwidth-container">

          <!-- Block - Marquee Text One Line Start -->
          <div class="mxd-block">
            <div class="marquee marquee-right--gsap muted-extra">
              <div class="marquee__toright">
                <!-- single item -->
                <div class="marquee__item one-line item-regular text">
                  <p class="marquee__text">Understanding Your Industry</p>
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
                  <p class="marquee__text">Understanding Your Industry</p>
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
      </section>
      <!-- Section - Marquee Text One Line End -->

      <!-- Section - Statistics Simple Start -->    
      <section class="mxd-section padding-default">
        <div class="mxd-container grid-container">

          <!-- Block - Statistics Cards Start -->
          <div class="mxd-block">
            <div class="mxd-stats-simple">
              <div class="container-fluid p-0">
                <div class="row g-0 mxd-stats-simple">

                  <?php
                  //ПОВТОРИТЕЛЬ ACF
                  $counter = 0;
                  if( have_rows('sekcziya_8_-_czifry') ):
                  while ( have_rows('sekcziya_8_-_czifry') ) : the_row();
                  $image = get_sub_field('kartinka');
                  $counter++;
                  ?>

                  <!-- item -->
                  <div class="col-12 col-lg-3 mxd-stats-simple__item mxd-grid-item">
                      <div class="mxd-stats-simple__inner animate-card-4">
                        <!-- counter -->
                        <div class="mxd-counter">
                          <p id="stats-counter-<?php echo $counter; ?>" class="mxd-stats-number mxd-stats-simple__counter">0</p>
                        </div>
                        <!-- image -->
                        <img class="mxd-stats-simple__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <!-- description -->
                        <p class="mxd-stats-simple__descr t-140 t-bright"><?php the_sub_field('tekst'); ?></p>
                      </div>
                    </div>

                  <?php
                  endwhile;
                  else :
                  // вложенных полей не найдено
                  endif;
                  ?>

                  
        
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Statistics Cards End -->

        </div>
      </section>
      <!-- Section - Statistics Simple End -->


      <!-- Section - Testimonials Slider #03 Start -->
      <section class="mxd-section overflow-hidden padding-default">
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
      </section>
      <!-- Section - Testimonials Slider #03 End -->

      <!-- Section - Blog Preview Start -->
      <?php
      //ПОВТОРИТЕЛЬ ACF
      if( have_rows('sekcziya_10_-_blog') ):
      while ( have_rows('sekcziya_10_-_blog') ) : the_row();
      ?>

      <section class="mxd-section padding-blog">
        <div class="mxd-container grid-container">

          <!-- Block - Section Title Start -->
          <div class="mxd-block">
            <div class="mxd-section-title pre-grid">
              <div class="container-fluid p-0">
                <div class="row g-0">
                  <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrtitle">
                      <h2 class="reveal-type anim-uni-in-up"><?php the_sub_field('zagolovok'); ?></h2>
                    </div>
                  </div>
                  <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrdescr">
                      <p class="anim-uni-in-up"><?php the_sub_field('podzagolovok'); ?></p>
                    </div>
                  </div>
                  <div class="col-12 col-xl-3 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrcontrols anim-uni-in-up">
                      <a class="btn btn-anim btn-default btn-outline slide-right-up" href="<?php echo get_post_type_archive_link('blog'); ?>">
                        <span class="btn-caption"><?php the_sub_field('tekst_knopki'); ?></span>
                        <i class="ph-bold ph-arrow-up-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Section Title End -->

          <!-- Block - Blog Preview Cards Start -->
          <div class="mxd-block">
            <div class="mxd-blog-preview">
              <div class="container-fluid p-0">
                <div class="row g-0">

                <?php
                //ВЫВОД ЗАПИСЕЙ АСF
                $post_objects = get_sub_field('posty');
                if( $post_objects ): ?>
                <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <?php 
                $img = get_field('kartinka');
                ?>

                <!-- item -->
                <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
                    <a class="mxd-blog-preview__media" href="blog-article.html">
                      <div class="mxd-blog-preview__image blog-preview-image-2 parallax-img-small">
                        <img class="parallax-img-small" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                      </div>
                      <div class="mxd-preview-hover">
                        <i class="mxd-preview-hover__icon">
                          <img src="<?php bloginfo('template_directory') ?>/img/icons/icon-eye.svg" alt="Eye Icon">
                        </i>
                      </div>
                      <div class="mxd-blog-preview__tags">
                        <?php
                        $post_terms = get_the_terms( get_the_ID(), 'category-blog' );
                        if ( ! is_wp_error( $post_terms ) && ! empty( $post_terms ) ) :
                          foreach ( $post_terms as $post_term ) :
                            ?>
                        <span class="tag tag-default tag-permanent"><?php echo esc_html( $post_term->name ); ?></span>
                            <?php
                          endforeach;
                        endif;
                        ?>
                      </div>
                    </a>
                    <div class="mxd-blog-preview__data">
                      <a class="anim-uni-in-up" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                  </div>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                <?php endif;

                ?>
                  
                  
           
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Blog Preview Cards End -->

        </div>
      </section>

      <?php
      endwhile;
      else :
      // вложенных полей не найдено
      endif;
      ?>
      
      <!-- Section - Blog Preview End -->

    <!-- Section - CTA Start -->
    <?php 
    get_template_part('components/cta-section'); 
    ?>
    <!-- Section - CTA End -->

</main>
<!-- Page Content End -->

<?php get_footer() ?>