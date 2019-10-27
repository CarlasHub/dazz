<?php
/**
* Template Name: Landing Page
*
*/
get_header();


?>



<div id="landing-page">
    <div  class="container-fluid"> 

    <?php if( have_rows('box') ): ?>

        <div class="row">  
            
        <?php while( have_rows('box') ): the_row(); 
            // vars
            $box_bg = get_sub_field( 'box-background' );
            $box_link = get_sub_field( 'box-link' );
            $box_title = get_sub_field( 'box-title' );
            $sub_title = get_sub_field( 'box-subtitle' );

            ?>
                <a href="<?php echo $box_link ?>" class="col-md-6 col-sm-12 box" style="background-image: url('<?php echo $box_bg ?>');">
                    <h1 class="section-title"><?php echo $box_title ?></h1>
                    <p class="sub-title"><?php echo $sub_title ?> </p>
                </a>

        <?php endwhile; ?>
          
        </div>
        
            
    <?php endif; ?>  

    </div>
</div>


<?php 
get_footer();