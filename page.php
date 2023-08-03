<!-- page.php use to call default page -->
<?php get_header();
the_post(); ?>
<div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital"><?php the_title(); ?></div>
                   
                     <div class="img-contant">
                        <p><?php the_content(); ?></p>
                        <?php the_post_thumbnail(array(400,300)); ?>
                        <!-- <?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
                        print_r($imagepath); 
                        ?>  it is use to show thumbnail image path-->
                     </div>
                    
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="<?php echo get_bloginfo('template_url');?>/images/about-img.png"></div>
               </div>
            </div>
         </div>
<?php get_footer(); ?>