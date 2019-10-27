<section id="blog-posts-carousel" class="demo">
    <div id="cont">
        <div id="slider-container">

            <span id="right-btn" class="fas fa-chevron-right" aria-hidden="true"></span>
            <span id="left-btn" class="fas fa-chevron-left" aria-hidden="true"></span>
            <?php

            /* Start the Loop */
            $args = array( 'numberposts' => 10, 'orderby' => 'date' );

            $postslist = get_posts( $args );

            if( count($postslist) ):

                $i = 0;

            foreach ($postslist as $post) :  setup_postdata($post);

            $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

            list($url, $width, $height, $is_intermediate) = $thumbnail;

            ?>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="<?php echo $url; ?>" alt="" />
                    </div>
                    <h2 class="item-title"><a href="#"><?php  the_title(); ?></a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <!-- <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i> -->
                        
                       <?php echo (int) get_post_meta(get_the_ID(), 'post_views_count', true) . '<i class="far fa-eye"></i>'; ?>
                       <?php echo get_comments_number();?>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>
                

                <?php

            endforeach;

            endif;
            ?>

        </div>
    </div>

</section>