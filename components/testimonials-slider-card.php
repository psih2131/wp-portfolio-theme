
<div class="swiper-slide mxd-fullwidth-slide no-blur">
<div class="mxd-testimonials-image">
  <div class="container-fluid p-0 fullheight-l">
    <div class="row g-0 d-flex align-items-stretch fullheight-l">
      <div class="col-12 col-xl-7 mxd-testimonials-image__content mxd-grid-item no-margin">
        <div class="mxd-testimonials-image__author" data-swiper-parallax-x="-50" data-swiper-parallax-opacity="0">
          <div class="mxd-testimonials-image__avatar">
            <img src="<?php the_field('foto'); ?>" alt="Review Author">
          </div>
          <div class="mxd-testimonials-image__info">
            
            <h5 class="mxd-testimonials-image__name"><?php the_field('imya'); ?></h5>
            <p class="mxd-testimonials-image__position t-small"><?php the_field('opisanie'); ?>
            </p>
         <!--    <div class="mxd-testimonials-image__rating">
              <i class="ph-fill ph-star"></i>
              <i class="ph-fill ph-star"></i>
              <i class="ph-fill ph-star"></i>
              <i class="ph-fill ph-star"></i>
              <i class="ph-fill ph-star"></i>
            </div> -->
          </div>
        </div>
        <div class="mxd-testimonials-image__text" data-swiper-parallax-x="-100" data-swiper-parallax-opacity="0">
          <p class="t-large"><?php the_field('tekst_otzyva'); ?></p>
          <a class="btn btn-anim btn-default btn-small btn-opposite slide-right-up" href="<?php the_field('ssylka_na_proekt'); ?>">
            <span class="btn-caption">Project Page</span>
            <i class="ph ph-arrow-up-right"></i>
          </a>
        </div>
      </div>
      <div class="col-12 col-xl-5 mxd-testimonials-image__img mxd-grid-item no-margin" data-swiper-parallax-x="-50" data-swiper-parallax-opacity="0">
        <img src="<?php the_field('foto_proekta'); ?>" alt="">
      </div>
    </div>
  </div>
</div>
</div>