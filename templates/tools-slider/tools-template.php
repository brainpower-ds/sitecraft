<div class="swiper tools-slider">
    <div class="swiper-wrapper">
        <?php
        
            $args = array(
                'post_type' => 'challenges_slider',
                'posts_per_page' => -1,            
            );
            
        $challenges = new WP_Query( $args );

        if ( $challenges->have_posts() ) :
            while ( $challenges->have_posts() ) : $challenges->the_post();
                $featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        ?>
            <div class="swiper-slide">
                <div class="tools--card" style="background-image: url('<?php echo esc_url( $featured_image ); ?>');">
                    <div class="tool--content">
                        <h3 class="tool--title"><?php the_title(); ?></h3>
                        <p class="tool--descr"><?php echo wp_kses_post( get_the_content() ); ?></p>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    
    <div class="swiper--nav-btn">
        <div class="swiper-button-prev">
            <img src="/wp-content/uploads/2024/09/arrow.png" alt="Navigation">
        </div>
        <div class="swiper-button-next">
            <img src="/wp-content/uploads/2024/09/Arrow-1.png" alt="Navigation">
        </div>
    </div>
</div>
