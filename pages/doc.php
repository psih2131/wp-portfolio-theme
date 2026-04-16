<?php
/*
Template Name: Doc
*/
?>

<?php get_header() ?>

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
                  <span class="current-item">
                    <?php the_title(); ?>
                  </span>
                </div>

              </div>
              <div class="mxd-article__title loading__item">
                <h1 class="h1-small"><?php the_title(); ?></h1>
              </div>

            </div>
            <!-- Article Headline End -->

            <!-- Article Content Start -->
            <div class="mxd-article__content">
              <div class="mxd-article__block">
             
                <?php the_content() ?>

              </div>
            </div>
            <!-- Article Content End -->

          </article>
          <!-- Article End -->

        </div>
        <!-- Article Container End -->

      </div>
    </div>
  </div>
  <!-- Section - Blog Article End -->



</main>

<?php get_footer() ?>