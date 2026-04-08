<main id="mxd-page-content" class="mxd-page-content inner-page-content">

  <!-- Section - Blog Article Start -->
  <div class="mxd-section padding-pre-title">
    <div class="mxd-container grid-container">
      <div class="mxd-article-area loading-wrap">

        <!-- Article Container Start -->
        <div class="mxd-article-container mxd-grid-item no-margin">

          <!-- Article Start -->
          <article class="mxd-article">

            <!-- Article Headline Start -->
            <div class="mxd-article__headline">
              <div class="mxd-article__meta">
                <div class="mxd-article__breadcrumbs loading__item">
                  <span>
                    <a href="<?php echo home_url(); ?>">Главная</a>
                  </span>
                  <span>
                    <a href="<?php echo get_post_type_archive_link('blog'); ?>">Блог</a>
                  </span>
                  <span class="current-item">
                    <?php the_title(); ?>
                  </span>
                </div>
                <div class="mxd-article__data loading__item">
                  <span class="meta-date">
                    <?php echo esc_html( wp_date( 'j F Y', get_post_timestamp() ) ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 20 20">
                      <path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/>
                    </svg>
                  </span>

                  <?php if ( get_field('vremya_neobhodimoe_na_chtenie_posta_v_minutah') ) { ?>
                  <span class="meta-time"><?php the_field('vremya_neobhodimoe_na_chtenie_posta_v_minutah'); ?> мин.</span>
                  <?php } ?>
                  
                </div>
              </div>
              <div class="mxd-article__title loading__item">
                <h1 class="h1-small"><?php the_title(); ?></h1>
              </div>
              <div class="mxd-article__tags loading__item">
                <?php
                $blog_terms = get_the_terms( get_the_ID(), 'category-blog' );

                if ( ! empty( $blog_terms ) && ! is_wp_error( $blog_terms ) ) :
                  foreach ( $blog_terms as $blog_term ) :
                    ?>
                    <span class="tag tag-default tag-outline tag-link-outline">
                      <a href="<?php echo esc_url( get_term_link( $blog_term ) ); ?>"><?php echo esc_html( $blog_term->name ); ?></a>
                    </span>
                    <?php
                  endforeach;
                endif;
                ?>
              </div>
            </div>
            <!-- Article Headline End -->

            <!-- Article Thumb Start -->
            <div class="mxd-article__thumb loading__fade">
              <?php 
              //вывод изображения с alt атрибутом если массив изображения
              $image = get_field('bolshoe_izobrazhenie_dlya_posta');
              if( !empty($image) ): ?>
              <img  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
              
            </div>
            <!-- Article Thumb End -->

            <!-- Article Content Start -->
            <div class="mxd-article__content">
              <div class="mxd-article__block">
                <?php if ( get_field('opisanie') ) { ?>
                <p class="t-large mxd-article__excerpt"><?php the_field('opisanie'); ?></p>
                <?php } ?>
                
                <?php the_field('tekst_posta'); ?>
              </div>
            </div>
            <!-- Article Content End -->

          </article>
          <!-- Article End -->

          <!-- Article Navigation Start -->
          <div class="mxd-article-navigation">
            <div class="container-fluid p-0">
            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>
            <div class="row g-0">
              <?php if ( $prev_post ) : ?>
                <div class="col-6 mxd-article-navigation__navitem left">
                  <a class="btn btn-line-small btn-muted anim-no-delay slide-left" href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>">
                    <i class="ph ph-arrow-left"></i>
                    <span class="btn-caption">Prev</span>
                  </a>
                  <a class="mxd-article-navigation__link" href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>">
                    <span><?php echo esc_html( get_the_title( $prev_post ) ); ?></span>
                  </a>
                </div>
              <?php endif; ?>
              <?php if ( $next_post ) : ?>
                <div class="col-6 mxd-article-navigation__navitem right">
                  <a class="btn btn-line-small btn-muted anim-no-delay slide-right" href="<?php echo esc_url( get_permalink( $next_post ) ); ?>">
                    <span class="btn-caption">Next</span>
                    <i class="ph ph-arrow-right"></i>
                  </a>
                  <a class="mxd-article-navigation__link" href="<?php echo esc_url( get_permalink( $next_post ) ); ?>">
                    <span><?php echo esc_html( get_the_title( $next_post ) ); ?></span>
                  </a>
                </div>
              <?php endif; ?>
            </div>
          </div>
          </div>
          <!-- Article Navigation End -->



        </div>
        <!-- Article Container End -->

      </div>
    </div>
  </div>
  <!-- Section - Blog Article End -->

  <!-- Section - More on Topic Start -->
  <div class="mxd-section padding-blog">
    <div class="mxd-container grid-container">

      <!-- Block - Section Title Start -->
      <div class="mxd-block">
        <div class="mxd-section-title pre-grid">
          <div class="container-fluid p-0">
            <div class="row g-0">
              <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                <div class="mxd-section-title__hrtitle">
                  <h2 class="reveal-type anim-uni-in-up">Похожие статьи</h2>
                </div>
              </div>
              <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                <!-- <div class="mxd-section-title__hrdescr">
                  <p class="anim-uni-in-up">Inspiring ideas, creative insights, and the latest 
                    in design and tech. Fueling innovation for your digital journey.</p>
                </div> -->
              </div>
              <div class="col-12 col-xl-3 mxd-grid-item no-margin">
                <div class="mxd-section-title__hrcontrols anim-uni-in-up">
                  <a class="btn btn-anim btn-default btn-outline slide-right-up" href="<?php echo get_post_type_archive_link('blog'); ?>">
                    <span class="btn-caption">Все статьи</span>
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
            $post_objects = get_field('rekomenduemye_posty');
            if( $post_objects ): ?>
            <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>

            <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
                <a class="mxd-blog-preview__media" href="<?php the_permalink(); ?>">
                  <div class="mxd-blog-preview__image blog-preview-image-1 parallax-img-small">
                  <?php 
                  //вывод изображения с alt атрибутом если массив изображения
                  $image = get_field('kartinka');
                  if( !empty($image) ): ?>
                  <img class="parallax-img-small" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                    
                  </div>
                  <div class="mxd-preview-hover">
                    <i class="mxd-preview-hover__icon">
                      <img src="<?php bloginfo('template_directory') ?>/img/icons/icon-eye.svg" alt="Eye Icon">
                    </i>
                  </div>
                  <div class="mxd-blog-preview__tags">
                    <?php
                    $card_terms = get_the_terms( get_the_ID(), 'category-blog' );
                    if ( empty( $card_terms ) || is_wp_error( $card_terms ) ) {
                      $card_terms = get_the_terms( get_the_ID(), 'category' );
                    }

                    if ( ! empty( $card_terms ) && ! is_wp_error( $card_terms ) ) :
                      foreach ( $card_terms as $card_term ) :
                        ?>
                        <span class="tag tag-default tag-permanent"><?php echo esc_html( $card_term->name ); ?></span>
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
  </div>
  <!-- Section - More on Topic End -->

  <!-- Section - CTA Start -->
  <?php 
  get_template_part('components/cta-section'); 
  ?>
  <!-- Section - CTA End -->

</main>
