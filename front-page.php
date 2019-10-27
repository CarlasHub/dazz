<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dazz
 */

get_header();
?>      

        
        <?php include "inc/social-icons.php";?>
        
        <div id="page-wrapper">
        <?php get_template_part( 'template-parts/banner-video' );?>
       
        <div class="intro container"> 
                <h1 class="text-center">Bespoke Themes For All Needs</h1>
                <br>
                <p class="dynamic-text"> 
                orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etorem ipsum dolor sit amet, 
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore etorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et
                </p>
        </div>
         <!-- this got the blogs posts  -->
         <?php get_template_part( 'template-parts/slider-services' );?>
           <!-- <div id="profile-pic" class="col-lg-12"></div> -->
        <?php get_template_part( 'template-parts/section02' );?>
        <?php get_template_part( 'template-parts/blog-posts-carousel' );?>
        <?php get_template_part( 'template-parts/slider-blog-posts' );?>

        <?php //get_template_part( 'template-parts/section03' );?>
        </div>
        <?php  //get_sidebar();  ?>
<?php

get_footer();

	