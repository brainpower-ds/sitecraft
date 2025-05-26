<div class="tooltip-section">
    <div class="tooltip-row">

        <!-- First Column (Static Column) -->
        <div class="tooltip-col col-1">
            <?php
           
            $args_col_one = array(
                'post_type'      => 'tooltip_col_one', 
                'posts_per_page' => -1,                
            );
            $col_one_query = new WP_Query( $args_col_one );

            if ( $col_one_query->have_posts() ) :
                while ( $col_one_query->have_posts() ) : $col_one_query->the_post();

                    
                    $col_one_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
            ?>
            <div class="tooltip-box">
                <div class="tooltip-main">
                    <div class="tooltip-title">
                        <h3 class="title"><?php the_title(); ?></h3> 
                    </div>
                    <div class="tooltip-hover">
                        <img src="/wp-content/uploads/2024/10/Vector.png" alt="Tooltip Button"> 
                        <div class="tooltip-content">
                            <p><?php echo wp_kses_post( get_the_content() ); ?></p> 
                        </div>
                    </div>
                </div>
                <div class="tooltip-img">
                    <img src="<?php echo esc_url( $col_one_image ); ?>" alt="<?php the_title(); ?>"> 
                </div>
            </div> 
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <!-- Second Column (Static Column) -->
        <div class="tooltip-col col-2">
            <?php
            
            $args_col_two = array(
                'post_type'      => 'tooltip_col_two', 
                'posts_per_page' => -1,                
            );
            $col_two_query = new WP_Query( $args_col_two );

            if ( $col_two_query->have_posts() ) :
                while ( $col_two_query->have_posts() ) : $col_two_query->the_post();

                    // Get the featured image for the box
                    $col_two_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
            ?>
            <div class="tooltip-box"> 
                <div class="tooltip-img">
                    <img src="<?php echo esc_url( $col_two_image ); ?>" alt="<?php the_title(); ?>"> 
                </div>
                <div class="tooltip-main">
                    <div class="tooltip-hover">
                        <img src="/wp-content/uploads/2024/10/Vector.png" alt="Tooltip Button">
                        <div class="tooltip-content">
                            <p><?php echo wp_kses_post( get_the_content() ); ?></p> 
                        </div>
                    </div>
                    <div class="tooltip-title">
                        <h3 class="title"><?php the_title(); ?></h3>
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
</div>
