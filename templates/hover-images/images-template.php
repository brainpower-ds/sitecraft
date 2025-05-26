<div class="image--container">
        <?php
                $args = array(
                'post_type'      => 'images_expand_grid',
                'posts_per_page' => -1,                  
            );
            
        $images_grid = new WP_Query( $args );

        if ( $images_grid->have_posts() ) :
            while ( $images_grid->have_posts() ) : $images_grid->the_post();
                $featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        ?>
            <div class="wrap">
                <img src="<?php echo esc_url( $featured_image ); ?>" alt="<?php the_title(); ?>">
                <div class="inner--content">
                    <div class="vertical-heading"><?php the_title(); ?></div>
                    <div class="overlay">
                        <div class="vertical-heading"><?php the_title(); ?></div>
                        <p><?php echo wp_kses_post( get_the_content() ); ?></p>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
</div>
