<?php

/*

Plugin Name:VC Gallery Plugin

Plugin URI:http://pixelpriority.com

Author Name:David Hinojosa

Author URI:http://pixelpriority.com

Version:1.0

Description:This plugin creates a responsive product gallery in Visual Composer utilizing shortcodes, classes and the gallery widget. Place [image-tab-function] on the page needed and add classes for the image galleries: main image "main-post-image" and "thumbnail-images" for the thumbnail gallery (Be sure to set to gallery type: image-grid, image ssize: thumbnail & on click action: none).

*/



function image_tab_functionality() {

?>

<script>

jQuery(document).ready(function() {

     var img=jQuery(".main-post-image").find(".wpb_gallery_slides").find("img").attr('src');

     var custom="<div class='main-product-container'><img src='"+img+"' data-oldimg='"+img+"' class='img-set'></div>"; 

    jQuery(".main-post-image").find(".wpb_gallery_slides").html(custom);



     jQuery(".thumbnail-images").find("li.isotope-item").attr('style','');

     jQuery(".thumbnail-images").find("li.isotope-item").find("img").attr('class','img-get'); 

     jQuery(".thumbnail-images").find("li.isotope-item").attr('class','img-inner-container vc_col-lg-3 vc_col-md-3 vc_col-sm-3 vc_col-xs-3');

     

     jQuery(".img-get").click(function() {

     jQuery(".selected-img").removeClass('selected-img');

     jQuery(".img-set").attr('src',jQuery(this).attr('src'));

     jQuery(this).addClass("selected-img");

     });

     jQuery(".menu-link").find("p").click(function() {

     var win=jQuery(window).width();

     var data=jQuery(this).attr('data-show');

     if(win>=768) 

           {

            if(jQuery(".text-inner-div."+data).hasClass('active-text-pc')) 

               {

    

               }

     

            else

               {

            jQuery('.active-link').removeClass('active-link');

            jQuery(this).addClass('active-link');

            jQuery('.active-text-pc').removeClass('active-text-pc');

            jQuery(".text-inner-div."+data).addClass('active-text-pc');

             }

           }

      else {

           if(jQuery(".text-inner-div."+data).hasClass('active-text-mobile')) 

               {

    

               }

     

            else

               {

            jQuery('.active-link').removeClass('active-link');

            jQuery(this).addClass('active-link');

            jQuery('.active-text-mobile').removeClass('active-text-mobile');

            jQuery(".text-inner-div.for-mobile."+data).addClass('active-text-mobile');

             }  

         }

     });

});

</script>

<?php

$border="#000";

$temp_color=get_option('border_color');

if($temp_color!=NULL && $temp_color!="") {

$border=$temp_color;

}

?>

<style>

.dark {

    margin-top:0 !important;

}



.img-get:hover {

    cursor:pointer;

}



.top-product-nav p {

    font-family: Lora;

    text-transform: uppercase;

    letter-spacing: 1px;

    font-weight: 700;

    color: #512416;

}

/*

.page-nav-row {

    padding-left: 60px;

}

*/



.main-product-container {

    border: 1px solid <?php echo $border;?>;

    text-align: center;

    padding-top: 35px;

    padding-bottom: 35px;

}



.main-product-container img {

    width: 70%;

}



.smallImgs .img-inner-container {

    

}



@media (min-width:1240px) {

    .smallImgs .img-inner-container {

    text-align: center;

    padding: 0;

}



.img-inner-container img {

    height: 100px !important;

    width: 120px !important;

    text-align: center;

    margin: auto;

}

}



@media (max-width:1239px) {

    .img-inner-container {

    padding:10px !important;

   }

}

.menu-link p {

    font-family: Lora;

    text-transform: uppercase;

    letter-spacing: 1px;

    font-weight: 700;

    color: #512416;

    text-align: center;

    background: #cea576;

}

.clearclass {

    clear:both;

}



.right-navbar-div .menu-link {

    padding: 5px;

    padding-top: 0;

}



.active-link {

    background: #6c301e !important;

    color: white !important;

}

.text-inner-div {

    display:none;

}

@media (max-width:767px) {

    .page-nav-row .vc_row {

    margin-right: 0px !important;

    margin-left: 0px !important;

   }

   

   .page-nav-row .top-product-nav {

    text-align: center;

   }



    .for-pc{

        display:none !important;

    }

    

    .active-text-mobile {

        display:block;

    }

    

}



@media (min-width:768px) {

    .for-mobile{

        display:none !important;

    }

    

    .active-text-pc {

        display:block;

    }

    

}

.menu-link p:hover {

    cursor: pointer;

}

@media (min-width:768px) and (max-width:979px) {

    .menu-link p{

        font-size:12px;

    }

}

.img-get {

    -webkit-transition: all 0.5s ease-in-out; */

    -moz-transition: all 0.5s ease-in-out;

    -o-transition: all 0.5s ease-in-out;

    transition: all 0.5s ease-in-out;

}

img.img-get:hover,.selected-img {

    opacity: 0.5;

}

.thumbnail-images {

    margin-bottom: 0;

}

.thumbnail-images .wpb_image_grid_ul 

{

height:auto !important;

min-height:auto !important;

}

</style>

<?php

}

add_shortcode('image-tab-function','image_tab_functionality');

function pageloader() {

	?>

    <style>

.no-js #loader { display: none;  }

.js #loader { display: block; position: absolute; left: 100px; top: 0; }

.se-pre-con {

	position: fixed;

	left: 0px;

	top: 0px;

	width: 100%;

	height: 100%;

	z-index: 9999;

	/* background:white; */

        background: #111;

    filter: url('#gooey');

}

.blob {

    width: 2rem;

    height: 2rem;

    background: #E5E5E5;

    border-radius: 50%;

    position: absolute;

    left: calc(50% - 1rem);

    top: calc(50% - 1rem);

    box-shadow: 0 0 1rem rgba(255, 255, 255, 0.15);

}



.blob-2 {

    animation: animate-to-2 1.5s infinite;

}



.blob-3 {

    animation: animate-to-3 1.5s infinite;

}



.blob-1 {

    animation: animate-to-1 1.5s infinite;

}



.blob-4 {

    animation: animate-to-4 1.5s infinite;

}



.blob-0 {

    animation: animate-to-0 1.5s infinite;

}



.blob-5 {

    animation: animate-to-5 1.5s infinite;

}



@keyframes animate-to-2 {

    25%,

    75% {

        transform: translateX(-1.5rem) scale(0.75);

    }

    95% {

        transform: translateX(0rem) scale(1);

    }

}



@keyframes animate-to-3 {

    25%,

    75% {

        transform: translateX(1.5rem) scale(0.75);

    }

    95% {

        transform: translateX(0rem) scale(1);

    }

}



@keyframes animate-to-1 {

    25% {

        transform: translateX(-1.5rem) scale(0.75);

    }

    50%,

    75% {

        transform: translateX(-4.5rem) scale(0.6)

    }

    95% {

        transform: translateX(0rem) scale(1);

    }

}



@keyframes animate-to-4 {

    25% {

        transform: translateX(1.5rem) scale(0.75);

    }

    50%,

    75% {

        transform: translateX(4.5rem) scale(0.6)

    }

    95% {

        transform: translateX(0rem) scale(1);

    }

}



@keyframes animate-to-0 {

    25% {

        transform: translateX(-1.5rem) scale(0.75);

    }

    50% {

        transform: translateX(-4.5rem) scale(0.6)

    }

    75% {

        transform: translateX(-7.5rem) scale(0.5)

    }

    95% {

        transform: translateX(0rem) scale(1);

    }

}



@keyframes animate-to-5 {

    25% {

        transform: translateX(1.5rem) scale(0.75);

    }

    50% {

        transform: translateX(4.5rem) scale(0.6)

    }

    75% {

        transform: translateX(7.5rem) scale(0.5)

    }

    95% {

        transform: translateX(0rem) scale(1);

    }

}

.setPos .setPosTitle{

color: #7C8483;

    font-size: 90px;

    text-transform: uppercase;

    font-family: 'open-sans';

    margin-bottom: 150px;

    display:block;

   }

.setPos{

text-align: center;

    position: relative;

    top: 30%;

}

}



    </style>

<!-- Loader Start -->

<div class="se-pre-con">

<div class="setPos">

<span class="setPosTitle">Loading...</span>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1">

  <defs>

    <filter id="gooey">

      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>

      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>

      <feBlend in="SourceGraphic" in2="goo"></feBlend>

    </filter>

  </defs>

</svg>

<div class="blob blob-0"></div>

<div class="blob blob-1"></div>

<div class="blob blob-2"></div>

<div class="blob blob-3"></div>

<div class="blob blob-4"></div>

<div class="blob blob-5"></div>

</div>

</div>



<!-- Loader End -->

<script>

jQuery(window).load(function() {

jQuery(".se-pre-con").hide();

});

</script>

    <?php

	}

	add_action('wp_head','pageloader');

	add_action( 'admin_menu', 'register_menu_page' );

function register_menu_page()

{

    add_menu_page( 'Product Gallery', 'Product Gallery', 'manage_options', 'VCProductGallery/settings.php', '', '', 4 );

} 
