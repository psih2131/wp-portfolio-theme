    <!-- portfolio gallery single item -->
    <?php
    $image = get_field('osnovnoe_izobrazhenie_kartochki');
    ?>
    <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item">
        <a class="mxd-project-item__media masonry-media" href="<?php the_permalink(); ?>">
            <div class="mxd-project-item__preview masonry-preview preview-image-2 parallax-img-small"
            style="background-image: url('<?php echo $image['url']; ?>');">
      
            
            </div>
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
        <div class="mxd-project-item__promo masonry-promo">
            <div class="mxd-project-item__name">
            <a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
            </div>
        </div>
    </div>