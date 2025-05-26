<div class="swiper testimonial--slider">
    <div class="swiper-pagination"></div>
    <div class="swiper-wrapper">
        <?php
            $args = array(
                'post_type'      => 'testimonial_section', 
                'posts_per_page' => -1,                    
        );
        
        $testimonials = new WP_Query( $args );

        if ( $testimonials->have_posts() ) :
            while ( $testimonials->have_posts() ) : $testimonials->the_post();

                
                $author_designation = get_field('author_designation');
                $author_company = get_field('company');              
                $author_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
        ?>
            <div class="swiper-slide">
                <div class="testimonial--box">
                    <p class="testimonial--text"><?php echo wp_kses_post( get_the_content() ); ?></p>
                    <div class="testimonial--author-box">
                        <div class="author--img">
                            <img src="<?php echo esc_url( $author_image ); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="author--info">
                            <h3 class="author--title"><?php the_title(); ?></h3>
                            <h4 class="author--designation"><?php echo esc_html( $author_designation ); ?></h4>
                            <h5 class="author--company"><?php echo esc_html( $author_company ); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>
