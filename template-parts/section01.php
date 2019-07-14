

<section id="section01" class="demo container-fluid">
    <div class="row h-100">

        <div id="profile-pic" class="col-lg-6 col-sm-12"></div>

        <div class="col-lg-6 col-sm-12 h-100">
            <div class="solid-wrapper"> 
                <!-- carousel start -->
                <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
                    <div class="carousel-inner">
                    <?php

                        /* Start the Loop */
                        $args = array( 'numberposts' => 3, 'orderby' => 'date' );

                        $postslist = get_posts( $args );

                        if( count($postslist) ):

                            $i = 0;

                        foreach ($postslist as $post) :  setup_postdata($post);


                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

                        list($url, $width, $height, $is_intermediate) = $thumbnail;

                            ?> 
                        <div class="carousel-item <?php echo $i == 0 ? ' active': ''; $i++; ?>" >

                            <img alt="First slide" class="d-block w-100" src="<?php echo $url; ?>">
                            
                            <h5 class="card-title text-white text-center pt-2"><?php  the_title(); ?> </i></h5>

                            <!-- <a href="<?php //echo get_the_permalink($page->ID); ?>" class="btn bg-pink text-center mx-0">Go Somewhere</a> -->


                        </div>

                        <?php 
                    
                        endforeach;

                     endif;
                     ?>

                       
                    </div>
                </div>
            <!-- carousel end -->
                
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                    <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                    <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
                </ol>

                <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>

            </div>
        </div>
    </div>

</section>





