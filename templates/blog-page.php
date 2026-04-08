<!-- Page Content Start -->
<main id="mxd-page-content" class="mxd-page-content inner-page-content">

  <!-- Section - Inner Page Headline Start -->
  <div class="mxd-section mxd-section-inner-headline padding-blog-default-pre-grid">
    <div class="mxd-container grid-container">
    
      <!-- Block - Inner Page Headline Start -->
      <div class="mxd-block loading-wrap">
        <div class="container-fluid px-0">
          <div class="row gx-0">

            <!-- Inner Headline Name Start -->
            <div class="col-12"></div>
            <!-- Inner Headline Name Start -->

            <!-- Inner Headline Content Start -->
            <div class="col-12 col-xl-10 mxd-grid-item no-margin">
              <div class="mxd-block__content">
                <div class="mxd-block__inner-headline loading__item">

                  	<h1 class="inner-headline__title headline-img-before headline-img-06">
                  		<?php 
                      $image = get_field('blog_kartinka_ryadom_s_zagolovkom', 'option');
                      if ( is_array( $image ) && ! empty( $image['url'] ) ) : ?>
                      <img class="inner-headline__title-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>" />
                      <?php endif; ?>

                  		<?php the_field('blog_zagolovok', 'option'); ?>	
                  	</h1>
                  	
                </div>
              </div>
            </div>
            <!-- Inner Headline Content End -->

            <!-- Inner Headline Aside Start -->
            <div class="col-12"></div>
            <!-- Inner Headline Aside End -->

          </div>
          <div class="row g-0">
            <div class="col-12"></div>

            <!-- Inner Headline Paragraph & Data Start -->
            <div class="col-12 col-xl-8 mxd-grid-item no-margin">
              <div class="inner-headline__blogtags loading__item">
                <?php
                $blog_categories = get_terms(
                  array(
                    'taxonomy'   => 'category-blog',
                    'hide_empty' => true,
                  )
                );

                if ( ! is_wp_error( $blog_categories ) && ! empty( $blog_categories ) ) :
                  foreach ( $blog_categories as $blog_category ) :
                    $term_link = get_term_link( $blog_category );
                    if ( is_wp_error( $term_link ) ) {
                      continue;
                    }
                    ?>
                    <span class="tag tag-default tag-outline tag-link-outline">
                      <a href="<?php echo esc_url( $term_link ); ?>"><?php echo esc_html( $blog_category->name ); ?></a>
                    </span>
                    <?php
                  endforeach;
                endif;
                ?>
              </div>
            </div>
            <!-- Inner Headline Paragraph & Data End -->

            <!-- Inner Headline Tags Start -->
            <div class="col-12 col-xl-4 mxd-grid-item no-margin">
              <div class="inner-headline__breadcrumbs loading__fade">
                <div class="breadcrumbs__nav">
                  <span>
                    <a href="<?php echo home_url(); ?>">Главная</a>
                  </span>
                  <span class="current-item">Блог
                    <!-- <a href="#0">Insights</a> -->
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- Inner Headline Tags End -->

        </div>
      </div>
      <!-- Block - Inner Page Headline End -->

    </div>
  </div>
  <!-- Section - Inner Page Headline End -->

  <!-- Section - Blog Start -->
  <div class="mxd-section padding-default">
    <div class="mxd-container grid-container">
      <div class="mxd-posts-area loading__fade">

        <!-- Posts Container Start -->
        <div class="mxd-posts-container mxd-grid-item">

          <!-- Featured Post Start -->

          <?php
          $post_objects = get_field('blog_osnovnoj_rekomenduemyj_post','option');
          if( $post_objects ): ?>
          <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>

          <?php 
          //blog post card recomend
          get_template_part('components/blog-post-card-recomend'); 
          ?>

          <?php endforeach; ?>

          <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
          <?php endif;

          ?>
         
          <!-- Featured Post End -->

          <!-- Regular Posts Group Start -->

          <!-- вывод цикла товаров правельный -->
          <?php
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $args = array(
          'orderby'   => 'date',
          'order' => 'DESC',
          'posts_per_page' => -1,
          'paged' => $paged,
          'post_type' => 'blog',
          );
          $query = new WP_query($args);
          if ( $query->have_posts()): while ( $query->have_posts() ): $query->the_post();
          ?>

          <?php 
          //blog post card
          get_template_part('components/blog-post-card'); 
          ?>

          <?php endwhile; endif; wp_reset_postdata(); ?>  

          <!-- Regular Posts Group End -->

          <!-- Blog Pagination Start -->
          <div class="mxd-blog-pagination">
            <div class="mxd-blog-pagination__inner">
              <nav class="mxd-blog-pagination__items">
                <a href="#0" class="mxd-blog-pagination__item blog-pagination-control prev btn btn-anim btn-line-small btn-bright anim-no-delay slide-left">
                  <i class="ph ph-arrow-left"></i>
                  <span class="btn-caption">Prev</span>
                </a>
                <a href="#0" class="mxd-blog-pagination__item blog-pagination-number btn btn-anim">
                  <span class="btn-caption">1</span>
                </a>
                <a href="#0" class="mxd-blog-pagination__item blog-pagination-number btn btn-anim active">
                  <span class="btn-caption">2</span>
                </a>
                <a href="#0" class="mxd-blog-pagination__item blog-pagination-number btn btn-anim">
                  <span class="btn-caption">3</span>
                </a>
                <a href="#0" class="mxd-blog-pagination__item blog-pagination-control next btn btn-anim btn-line-small btn-bright anim-no-delay slide-right">
                  <span class="btn-caption">Next</span>
                  <i class="ph ph-arrow-right"></i>
                </a>
              </nav>
            </div>
          </div>
          <!-- Blog Pagination End -->

        </div>
        <!-- Posts Container End -->

        <!-- Sidebar Start -->
        <div class="mxd-sidebar mxd-grid-item">
          <!-- search widget -->
          <!-- <div class="mxd-sidebar__widget bg-base-tint radius-m widget-search">
            <div class="widget-search__form">
              <form class="form search-form" action="#" method="get">
                <input id="search" type="search" name="search" placeholder="Search">
                <button class="btn btn-form no-scale btn-absolute-right btn-muted" type="submit">
                  <i class="ph ph-magnifying-glass"></i>
                </button>
              </form>
            </div>
          </div> -->
          <!-- categories widget -->
          <div class="mxd-sidebar__widget bg-base-tint radius-m">
            <div class="widget__title">
              <p>Категории</p>
            </div>
            <ul class="widget__categories">
              <?php
              $sidebar_blog_categories = get_terms(
                array(
                  'taxonomy'   => 'category-blog',
                  'hide_empty' => true,
                )
              );
              if ( ! is_wp_error( $sidebar_blog_categories ) && ! empty( $sidebar_blog_categories ) ) :
                foreach ( $sidebar_blog_categories as $sidebar_blog_cat ) :
                  $sidebar_cat_link = get_term_link( $sidebar_blog_cat );
                  if ( is_wp_error( $sidebar_cat_link ) ) {
                    continue;
                  }
                  ?>
              <li class="categories__item"><a href="<?php echo esc_url( $sidebar_cat_link ); ?>" class="categories__link"><?php echo esc_html( $sidebar_blog_cat->name ); ?></a></li>
                  <?php
                endforeach;
              endif;
              ?>
            </ul>
          </div>
          <!-- recent posts -->
          <div class="mxd-sidebar__widget bg-base-tint radius-m">
            <div class="widget__title">
              <p>Последние посты</p>
            </div>
            <ul class="widget__recent-posts">
              <?php
              $sidebar_recent_posts = new WP_Query(
                array(
                  'post_type'      => 'blog',
                  'posts_per_page' => 3,
                  'orderby'        => 'date',
                  'order'          => 'DESC',
                  'post_status'    => 'publish',
                  'no_found_rows'  => true,
                )
              );
              if ( $sidebar_recent_posts->have_posts() ) :
                while ( $sidebar_recent_posts->have_posts() ) :
                  $sidebar_recent_posts->the_post();
                  $rp_link = get_permalink();
                  $image = get_field( 'kartinka' );
                  if ( is_array( $image ) && ! empty( $image['url'] ) ) {
                    $rp_img = $image['url'];
                    $rp_alt = ! empty( $image['alt'] ) ? $image['alt'] : 'Recent Post Preview';
                  } elseif ( is_string( $image ) && $image !== '' ) {
                    $rp_img = $image;
                    $rp_alt = 'Recent Post Preview';
                  } else {
                    $rp_img = 'https://dummyimage.com/300x300/4d4d4d/838383';
                    $rp_alt = 'Recent Post Preview';
                  }
                  $rp_term_link = '#0';
                  $rp_term_name = '';
                  $rp_terms     = get_the_terms( get_the_ID(), 'category-blog' );
                  if ( ! is_wp_error( $rp_terms ) && ! empty( $rp_terms ) ) {
                    $rp_first = reset( $rp_terms );
                    $tl       = get_term_link( $rp_first );
                    if ( ! is_wp_error( $tl ) ) {
                      $rp_term_link = $tl;
                    }
                    $rp_term_name = $rp_first->name;
                  }
                  ?>
                  <li class="recent-post__item">
                    <div class="recent-post__thumb">
                      <a href="<?php echo esc_url( $rp_link ); ?>">
                        <img src="<?php echo esc_url( $rp_img ); ?>" alt="<?php echo esc_attr( $rp_alt ); ?>">
                      </a>
                    </div>
                    <div class="recent-post__content">
                      <div class="recent-post__meta">
                        <span class="meta-tag">
                          <!-- <img class="inject-me" src="<?php bloginfo('template_directory') ?>/img/icons/20x20-rayo-star.svg" alt="Divider Icon"> -->
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 20 20">
                            <path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/>
                          </svg>
                          <a href="<?php echo esc_url( $rp_term_link ); ?>"><?php echo esc_html( $rp_term_name ); ?></a>
                        </span>
                      </div>
                      <div class="recent-post__title">
                        <a href="<?php echo esc_url( $rp_link ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
                      </div>
                    </div>
                  </li>
                  <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </ul>
          </div>
          <!-- ad -->
          <!-- <div class="mxd-sidebar__widget radius-m widget-ad">
            <a class="widget__image" href="#0" target="_blank">
              <img src="https://dummyimage.com/1200x1400/4d4d4d/838383" alt="Ad Image">
            </a>
            <div class="widget__tags">
              <span class="tag tag-default tag-permanent">Sponsored</span>
            </div>
          </div> -->
          <!-- about widget -->
          <!-- <div class="mxd-sidebar__widget bg-base-tint radius-m widget-about">
            <div class="widget__title">
              <p>About</p>
            </div>
            <div class="widget__descr">
              <p class="t-small">Dive into the latest trends, uncover valuable industry insights, and explore 
                practical advice.</p>
            </div>
          </div> -->

          
          <div class="mxd-sidebar__widget bg-base-tint radius-m widget-socials">
            <div class="widget__title">
              <p>Соцсети</p>
            </div>
            <div class="widget__descr">
              <p class="t-small">Следите и узнавайте все новости и другие интересные вещи первыми!</p>
            </div>
            <div class="widget__social-links-small">
              <!-- item -->
              <?php
              //ПОВТОРИТЕЛЬ ACF
              if( have_rows('blog_socz_seti','options') ):
              while ( have_rows('blog_socz_seti','options') ) : the_row();
              ?>

              <div class="social-links-small__item">
                <div class="social-links-small__divider"></div>
                <a class="social-links-small__link" href="<?php the_sub_field('ssylka'); ?>" target="_blank">
                  <p class="social-links-small__title"><?php the_sub_field('nazvanie'); ?></p>
                  <div class="social-links-small__icon">
                    <i class="ph-bold ph-arrow-up-right"></i>
                  </div>
                </a>
                <div class="social-links-small__divider"></div>
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
        <!-- Sidebar End -->

      </div>
    </div>
  </div>
  <!-- Section - Blog End -->

  <!-- Section - CTA Start -->
  <?php 
  get_template_part('components/cta-section'); 
  ?>
  <!-- Section - CTA End -->

</main>
<!-- Page Content End -->