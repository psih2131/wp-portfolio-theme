<!-- Page Content Start -->
<main id="mxd-page-content" class="mxd-page-content inner-page-content">

  <!-- Section - Inner Page Headline Start -->
  <div class="mxd-section mxd-section-inner-headline padding-default">
    <div class="mxd-container grid-container">
    
      <!-- Block - Inner Page Headline Start -->
      <div class="mxd-block loading-wrap">
        <div class="container-fluid px-0">
          <div class="row gx-0">

            <!-- Inner Headline Name Start -->
            <?php if ( get_field('ssylka_na_proekt') ) { ?>
            <div class="col-12 col-xl-2 mxd-grid-item no-margin">
              <div class="mxd-block__name name-project-link loading__fade">
                <a class="btn btn-anim btn-line-small btn-muted slide-right-up" href="<?php the_field('ssylka_na_proekt'); ?>">
                  <span class="btn-caption">Ссылка на проект</span>
                  <i class="ph ph-arrow-up-right"></i>
                </a>
              </div>
            </div>
            <?php } ?>
            <!-- Inner Headline Name Start -->

            <!-- Inner Headline Content Start -->
            <div class="col-12 col-xl-10 mxd-grid-item no-margin">
              <div class="mxd-block__content">
                <div class="mxd-block__inner-headline loading__item">
                  <h1 class="inner-headline__title"><?php the_title() ?></h1>
                </div>
              </div>
            </div>
            <!-- Inner Headline Content End -->

            <!-- Inner Headline Aside Start -->
            <div class="col-12"></div>
            <!-- Inner Headline Aside End -->

          </div>
          <div class="row g-0">
            <div class="col-12 col-xl-2"></div>

            <!-- Inner Headline Paragraph & Data Start -->
            <div class="col-12 col-xl-6 mxd-grid-item no-margin">

              <div class="inner-headline__paragraph loading__item">
                <p><?php the_field('korotkoe_opisanie'); ?></p>
              </div>

              <div class="inner-headline__data">
                <div class="mxd-data-list">
                  <div class="container-fluid p-0">
                    <div class="row g-0">
                      <div class="col-12 col-md-6 col-xl-5 mxd-data-list__column loading__item">
                        <div class="mxd-data-list__item">
                          <p class="mxd-data-list__name">Клиент</p>
                          <p class="mxd-data-list__content"><?php the_field('client'); ?></p>
                        </div>
                        <div class="mxd-data-list__item">
                          <p class="mxd-data-list__name">Услуга</p>
                          <p class="mxd-data-list__content"><?php the_field('services'); ?></p>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-5 mxd-data-list__column loading__item">
                        <div class="mxd-data-list__item">
                          <p class="mxd-data-list__name">Отрасль</p>
                          <p class="mxd-data-list__content"><?php the_field('industries'); ?></p>
                        </div>
                        <div class="mxd-data-list__item">
                          <p class="mxd-data-list__name">Дата</p>
                          <p class="mxd-data-list__content"><?php the_field('date'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- Inner Headline Paragraph & Data End -->

            <!-- Inner Headline Tags Start -->
            <div class="col-12 col-xl-4 mxd-grid-item no-margin">
              <div class="inner-headline__tags loading__fade">
                <?php
                $works_tags = get_the_terms( get_the_ID(), 'tegs-works' );
                if ( ! empty( $works_tags ) && ! is_wp_error( $works_tags ) ) :
                  foreach ( $works_tags as $works_tag ) :
                    ?>
                <span class="tag tag-default tag-outline-medium"><?php echo esc_html( $works_tag->name ); ?></span>
                    <?php
                  endforeach;
                endif;
                ?>
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


  <!-- Section - Parallax Divider Start -->
  <div class="mxd-section">
    <div class="mxd-container">
      <div class="mxd-divider loading__fade">
        <div class="mxd-divider__image prj-details-img-01 parallax-img" style="background-image: url('<?php the_field('osnovnoe_bolshoe_izobrazhenie') ?>');"></div>
      </div>
    </div>
  </div>
  <!-- Section - Parallax Divider End -->

  


   <!-- Section - Project Details Start -->
  <div class="mxd-section mxd-project overflow-hidden">
    <div class="mxd-container grid-container">
  <?php
  //ВЫВОД ГИБКОГО СОДЕРЖАНИЯ
  // Без проверки объекта поля have_rows() может искать поле на уровне записи и дать
  // Warning в api-template.php:396 ($field['name'] при $field === false).
  $mxd_konstruktor_raboty = get_field_object( 'konstruktor_raboty', get_queried_object_id(), false );
  if ( $mxd_konstruktor_raboty && have_rows( 'konstruktor_raboty' ) ) :

  // перебираем данные
  while ( have_rows('konstruktor_raboty') ) : the_row();

  if( get_row_layout() == 'большое_изображение' ){
  ?>

  <!-- Project Block - Parallax Fullwidth Image Start -->
  <div class="mxd-project__block mxd-grid-item ">
    <div class="mxd-divider">
      <div class="mxd-divider__image prj-details-img-02 parallax-img" style="background-image: url('<?php the_sub_field('img') ?>');"></div>
    </div>
  </div>
  <!-- Project Block - Parallax Fullwidth Image End -->
  

  <?php
  }

  elseif( get_row_layout() == 'текстовый_блок' ){

  ?>


    
    <!-- Project Block - Challenge Description with H2 Title and Paragraph Start -->
    <div class="mxd-project__block pre-grid">
        <div class="container-fluid px-0">
          <div class="row gx-0">
            <div class="col-12 col-xl-5 mxd-grid-item no-margin">
              <div class="mxd-project__subtitle">
                <h2 class="reveal-type anim-uni-in-up"><?php the_sub_field('zagolovok') ?></h2>
              </div>
            </div>
            <div class="col-12 col-xl-6 mxd-grid-item no-margin">
              <div class="mxd-project__content">
                <div class="mxd-project__paragraph">
                  <p class="t-large t-bright anim-uni-in-up"><?php the_sub_field('podzagolovok') ?></p>
                  <p class="anim-uni-in-up"><?php the_sub_field('tekst') ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Project Block - Challenge Description with H2 Title and Paragraph End -->

  <?php
  }
  elseif( get_row_layout() == 'видео' ){
  ?>

     <!-- Section - Parallax Divider Start -->
     <div class="mxd-section padding-grid-pre-mtext">
        <div class="mxd-container mxd-container-video">
          <div class="mxd-divider">
            <div class="mxd-divider__video">
              <video class="video " preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="<?php the_sub_field('prevyu'); ?>">
                <source type="video/mp4" src="<?php the_sub_field('video_fajl'); ?>">
                <!-- <source type="video/webm" src="video/1920x1080_video.webm">
                <source type="video/ogv" src="video/1920x1080_video.ogv"> -->
              </video>
            </div>
          </div>
        </div>
      </div>
      <!-- Section - Parallax Divider End -->



  <?php
  }

  elseif( get_row_layout() == 'галерея' ){

  ?>

<?php
    $iz_obj = get_sub_field_object( 'izobrazheniya' );
    $iz_vals = ( is_array( $iz_obj ) && isset( $iz_obj['value'] ) ) ? $iz_obj['value'] : null;
    if ( $iz_obj && is_array( $iz_vals ) && $iz_vals !== array() ) :
      ?>
    <!-- Project Block - Images Cards Start -->
      <div class="mxd-project__block no-margin">
        <div class="mxd-project-cards">
          <div class="container-fluid px-0">
            <div class="row gx-0">
              <?php
              $izobrazheniya_i = 0;
              while ( have_rows( 'izobrazheniya' ) ) :
                the_row();
                $image = get_sub_field( 'img' );
                if ( empty( $image ) ) {
                  $image = get_sub_field( 'izobrazheniya' );
                }
                if ( is_string( $image ) && $image !== '' ) {
                  $image = array(
                    'url' => $image,
                    'alt' => '',
                  );
                }
                if ( is_numeric( $image ) ) {
                  $iz_aid = (int) $image;
                  $image  = array(
                    'url' => (string) wp_get_attachment_image_url( $iz_aid, 'full' ),
                    'alt' => (string) get_post_meta( $iz_aid, '_wp_attachment_image_alt', true ),
                  );
                }
                if ( empty( $image ) || ! is_array( $image ) || empty( $image['url'] ) ) {
                  $izobrazheniya_i++;
                  continue;
                }
                $mod = $izobrazheniya_i % 4;
                if ( 0 === $mod ) {
                  $iz_col = 'col-12 col-xl-5';
                  $iz_anim = 'anim-uni-scale-in-right';
                  $iz_inner = 'mxd-project-cards__inner align-end bg-accent radius-m';
                } elseif ( 1 === $mod ) {
                  $iz_col = 'col-12 col-xl-7';
                  $iz_anim = 'anim-uni-scale-in-left';
                  $iz_inner = 'mxd-project-cards__inner align-end bg-base-tint radius-m';
                } elseif ( 2 === $mod ) {
                  $iz_col = 'col-12 col-xl-7';
                  $iz_anim = 'anim-uni-scale-in-right';
                  $iz_inner = 'mxd-project-cards__inner bg-base-tint radius-m';
                } else {
                  $iz_col = 'col-12 col-xl-5';
                  $iz_anim = 'anim-uni-scale-in-left';
                  $iz_inner = 'mxd-project-cards__inner bg-base-tint radius-m';
                }
                $izobrazheniya_i++;
                ?>
              <!-- item -->
              <div class="<?php echo esc_attr( $iz_col ); ?> mxd-project-cards__item mxd-grid-item <?php echo esc_attr( $iz_anim ); ?>">
                <div class="<?php echo esc_attr( $iz_inner ); ?>">
                  <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>">
                </div>
              </div>
                <?php
              endwhile;
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Block - Images Cards End -->
    <?php endif; ?>

  <?php
  } 
  else{

  }

  endwhile;

  else :

  // макетов не найдено

  endif;

  ?>




  <!-- Project Block - Client’s feedback Description with H2 Title and Paragraph Start -->

  <?php
//ВЫВОД ЗАПИСЕЙ АСF
$post_objects = get_field('otzyv_klienta');
if( $post_objects ): ?>
<?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
<?php setup_postdata($post); ?>

<div class="mxd-project__block">
  <div class="container-fluid px-0">
          <div class="row gx-0">
            <div class="col-12 col-xl-5 mxd-grid-item no-margin">
              <div class="mxd-project__subtitle">
                <h2 class="reveal-type anim-uni-in-up">Отзыв<br>клиента</h2>
              </div>
            </div>
            <div class="col-12 col-xl-6 mxd-grid-item no-margin">
              <div class="mxd-project__content">
                <div class="mxd-project__paragraph medium-text">
                  <p class="anim-uni-in-up"><?php the_field('tekst_otzyva'); ?></p>
                  <div class="mxd-project__client anim-uni-in-up">
                    <h5 class="anim-uni-in-up"><?php the_field('imya'); ?></h5>
                    <p class="t-small anim-uni-in-up">
                    <?php the_field('opisanie'); ?>
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
   

<?php endforeach; ?>

<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
<?php endif;

?>
  
  
          <?php
          $works_prev = get_adjacent_post( false, '', true );
          $works_next = get_adjacent_post( false, '', false );
          $works_has_prev = $works_prev instanceof WP_Post && 'publish' === $works_prev->post_status;
          $works_has_next = $works_next instanceof WP_Post && 'publish' === $works_next->post_status;
          if ( $works_has_prev || $works_has_next ) :
            ?>
          <!-- Project Block - Project Link Start -->
          <div class="mxd-project__block no-margin">
            <div class="mxd-project__nav">
              <div class="mxd-project__divider anim-uni-in-up"></div>
              <div class="container-fluid p-0">
                <div class="row g-0">
                  <?php if ( $works_has_prev ) : ?>
                  <div class="col-6 mxd-project__navitem left mxd-grid-item no-margin anim-uni-in-up">
                    <a class="btn btn-anim btn-line-small btn-muted anim-no-delay slide-left" href="<?php echo esc_url( get_permalink( $works_prev ) ); ?>">
                      <i class="ph ph-arrow-left"></i>
                      <span class="btn-caption">Prev</span>
                    </a>
                    <a class="mxd-project__link anim-uni-in-up" href="<?php echo esc_url( get_permalink( $works_prev ) ); ?>">
                      <span><?php echo esc_html( get_the_title( $works_prev ) ); ?></span>
                    </a>
                  </div>
                  <?php endif; ?>
                  <?php if ( $works_has_next ) : ?>
                  <div class="col-6 mxd-project__navitem right mxd-grid-item no-margin anim-uni-in-up<?php echo $works_has_prev ? '' : ' ms-auto'; ?>">
                    <a class="btn btn-anim btn-line-small btn-muted anim-no-delay slide-right" href="<?php echo esc_url( get_permalink( $works_next ) ); ?>">
                      <span class="btn-caption">Next</span>
                      <i class="ph ph-arrow-right"></i>
                    </a>
                    <a class="mxd-project__link  anim-uni-in-up" href="<?php echo esc_url( get_permalink( $works_next ) ); ?>">
                      <span><?php echo esc_html( get_the_title( $works_next ) ); ?></span>
                    </a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <!-- Project Block - Project Link End -->
          <?php endif; ?>



     </div>
  </div>
  <!-- Section - Project Details End -->





  

  <!-- Section - CTA Start -->
  <?php 
  get_template_part('components/cta-section'); 
  ?>
  <!-- Section - CTA End -->

</main>
<!-- Page Content End -->