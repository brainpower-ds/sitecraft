<?php 

    $args = array(
        'post_type'      => 'client_logos',
        'posts_per_page' => -1,  // Fetch all client logos
    );
    
    $client_logos = new WP_Query( $args );
    
    if ( $client_logos->have_posts() ) : ?>
        <div class="flip-card-wrap">
            <?php while ( $client_logos->have_posts() ) : $client_logos->the_post(); 
            
                $front_image = get_field('image_1');
                $back_image  = get_field('image_2');
                
            ?>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="<?php echo esc_url( $front_image['url'] ); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="flip-card-back">
                        <img src="<?php echo esc_url( $back_image['url'] ); ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    <?php 
        wp_reset_postdata();
    else :
        echo '<p>No client logos found.</p>';
    endif;
?>
