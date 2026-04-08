<article class="mxd-post post-simple">
	<a class="post-simple__thumb radius-m" href="<?php the_permalink() ?>">
		
		<?php 
		//вывод изображения с alt атрибутом если массив изображения
		$image = get_field('kartinka');
		if ( is_array( $image ) && ! empty( $image['url'] ) ) : ?>
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>" />
		<?php elseif ( is_string( $image ) && $image !== '' ) : ?>
		<img src="<?php echo esc_url( $image ); ?>" alt="" />
		<?php endif; ?>

	  <div class="mxd-preview-hover">
	    <i class="mxd-preview-hover__icon icon-small">
	      <img src="<?php bloginfo('template_directory') ?>/img/icons/icon-eye.svg" alt="Eye Icon">
	    </i>
	  </div>
	</a>
	<div class="post-simple__content">
	  <div class="post-simple__descr">
	    <div class="post-simple__meta">
			<?php
			$post_terms = get_the_terms( get_the_ID(), 'category-blog' );
			if ( ! is_wp_error( $post_terms ) && ! empty( $post_terms ) ) :
				foreach ( $post_terms as $post_term ) :
					$term_link = get_term_link( $post_term );
					if ( is_wp_error( $term_link ) ) {
						continue;
					}
					?>

					<span class="meta-tag">
						<a href="<?php echo esc_url( $term_link ); ?>"><?php echo esc_html( $post_term->name ); ?></a>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 20 20">
						<path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/>
						</svg>
						<!-- <img class="inject-me" src="<?php bloginfo('template_directory') ?>/img/icons/20x20-rayo-star.svg" alt="Divider Icon"> -->
					</span>

					<?php
				endforeach;
			endif;
			?>

	      <span class="meta-date"><?php echo esc_html( date_i18n( 'j F Y', get_post_timestamp() ) ); ?></span>
	    </div>
	    <div class="post-simple__title">
	      <h5>
	        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
	      </h5>
	    </div>
	  </div>
	  <div class="post-simple__btn">
	    <a class="btn btn-anim btn-default btn-outline slide-right-up" href="<?php the_permalink() ?>">
	      <span class="btn-caption">Читать далее</span>
	      <i class="ph ph-arrow-up-right"></i>
	    </a>
	  </div>
	</div>
</article>