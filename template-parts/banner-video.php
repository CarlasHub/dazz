


<div id="banner-video">
    <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
    <!-- 
    - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
    WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
    <source src="<?php bloginfo('stylesheet_directory'); ?>/src/videos/horses.webm" type="video/webm">
    <source src="<?php bloginfo('stylesheet_directory'); ?>/src/videos/horses.mp4" type="video/mp4">
    
    </video>
    <div class="playpause"><i class="far fa-pause-circle"></i></div>
    <div class="overlay"></div>
    <div id="polina">
        <h1> Creative web design, ecommerce solutions,  Website development and digital marketing services</h1>

        <div class="cta-banner">
            <button>Pause</button>
            <button>Pause</button>
        </div>
    </div>
</div>


