<?php
// Template Name:home
get_header();


$cat=get_categories(array('taxonomy'=>'category'));
//  $coffeedata=get_queried_object();
// echo "<pre>";
// print_r($cat);
// echo "</pre>";
$paegd= get_query_var('paged') ? get_query_var('paged') : 1;
$searchdata=''; 
if(isset($_GET['title'])!=""){
  $searchdata=$_GET['title'];
}
// if($_GET['title']!=""){
//    $searchdata=$_GET['title'];
// }
?>
<!DOCTYPE html>
<html lang="en">
   
   <body>
      <!--header section start -->
    
      <!--header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding</h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding </h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding </h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">About Us</div>
                     <p class="about_text">Full cleaning and housekeeping services for companies and households.</p>
                     <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply</p>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="<?php echo get_bloginfo('template_url'); ?>/images/about-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="gallery_taital">Our Gallery</h1>
                  <p class="gallery_text">Lorem Ipsum is simply dummy text of printing typesetting ststry lorem Ipsum the industry'ndard dummy text ever since of the 1500s, when an unknown printer took a galley of type and scra make a type specimen book. It has</p>
               </div>
            </div>
            <div class="">
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-1.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-2.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-3.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-4.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-5.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-6.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-7.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-8.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/img-9.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
         </div>
      </div>
      <!-- gallery section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Services</h1>
                  <p class="services_text">Typesetting industry lorem Ipsum is simply dummy text of the </p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon1.png" class="image_1">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon1.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Original Coffee</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon2.png" class="image_1">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon2.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">20 Coffee Flavors</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon3.png" class="image_1">
                           <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon3.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Pleasant Abient</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- testimonial section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="client_taital">Testimonial</h1>
                  <p class="client_text">Eeven slightly believable. If you are going to use a passage of Lorem Ipsum, you need to</p>
               </div>
            </div>
         </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Monila <span class="quick_icon"><img src="<?php echo get_bloginfo('template_url'); ?>/images/quick-icon.png"></span></h4>
                            <p class="customer_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All themany variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some embarrassing hidden in the middle of text. All the</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Monila <span class="quick_icon"><img src="<?php echo get_bloginfo('template_url'); ?>/images/quick-icon.png"></span></h4>
                            <p class="customer_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All themany variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some embarrassing hidden in the middle of text. All the</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Monila <span class="quick_icon"><img src="<?php echo get_bloginfo('template_url'); ?>/images/quick-icon.png"></span></h4>
                            <p class="customer_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All themany variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some embarrassing hidden in the middle of text. All the</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
        </div>
      </div>
     </div>
      <!-- testimonial section end -->
      <div class="m-c">
         <form method="get"> 
            <input type="text" placeholder="Search..."  name="title" value="<?php echo isset($_GET['title']); ?>" >
            <input type="hidden" name="paged" value="<?php echo $paged; ?>"> 
            <input type="submit" value="Search" name="" >
         </form>
      </div>
<div class="box-right">
  
   <?php  
   // print_r($cat);
      foreach($cat as $catvalue){
         ?>
  
 
   <a href="<?php echo get_category_link($catvalue->term_id);?>"><h3><?php echo $catvalue->name;?>(<?php echo $catvalue->count; ?>)</h3></a>
   <?php } ?>
</div>
<div class="coffee-conatiner">

   <?php $coffeecat=get_terms(['taxonomy'=>'coffee_category','hide_empty'=>false,'orderby'=>'name','order'=>'DESC','parent'=>0]);
   // print_r($coffeecat);
         foreach($coffeecat as $coffeecatData){
            $meta_image=get_wp_term_image($coffeecatData->term_id);
   ?>
   <div class="icon-coffee">
   <?php if($meta_image!="") { ?>  
      <img src="<?php print_r($meta_image); ?>" alt="" width="50" height="50">
         <?php } ?><a href="<?php echo get_category_link($coffeecatData->term_id) ?>" ><h3><?php echo $coffeecatData->name; ?></h3></a>
       
   </div>
   <?php 
$mcoffee=array(
   'post_type'=>'coffee',
   'post_status'=>'publish',
   's'=>$searchdata,
   // 'posts_per_page'=>1,
   'paged'=>$paged,
   'tax_query'=>array(
      array(
          'taxonomy'=>'coffee_category',
      'field' => 'term_id',
      'terms'=>$coffeecatData->term_id)
  ),

);
   $coffeequery=new WP_Query($mcoffee);
   while($coffeequery->have_posts()){
      $coffeequery->the_post();
       $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
?>
<img src="<?php echo $imagepath[0] ?>" alt="" height="50" width="250">
   <p><?php echo get_the_date(); ?></p>
   <p><?php the_excerpt(  );?></p>
   <a href="<?php the_permalink(); ?>"><input type="button" name="" value="Read more"></a>
      
   </div>
   <?php } ?>
<div style="clear: both;"></div>
<?php } ?>
</div>


<!-- <div class="coffee-info">
<h1 style="text-align: center;">more about coffee</h1>
   <?php
   $mcoffee=array(
      'post_type'=>'coffee',
      'post_status'=>'publish'
   );
      $coffeequery=new WP_Query($mcoffee);
      while($coffeequery->have_posts()){
         $coffeequery->the_post();
          $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
   ?>
   <img src="<?php echo $imagepath[0]?>" alt=""  width="250" height="250">
   
   <h2><?php the_title(); ?></h2>
   <p><?php echo get_the_date(); ?></p>
   <a href="<?php  the_permalink(); ?>"><input type="button" value="Read more"></a>
</div>
   <?php  } ?> -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_text">Contact Us</h1>
         </div>
      </div>
      <div class="contact_section_2 layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_0">
                  <div class="mail_section">
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                        <div class="send_btn">
                           <div type="text" class="main_bt"><a href="#">SEND</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="508" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
    
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.min.js"></script>
      <script src="<?php echo get_bloginfo('template_url'); ?>/js/popper.min.js"></script>
      <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo get_bloginfo('template_url'); ?>/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo get_bloginfo('template_url'); ?>/js/custom.js"></script>     
   </body>
</html>
<?php get_footer(); ?>