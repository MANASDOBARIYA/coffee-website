<?php get_header(); ?>

<!-- this is a blog page -->
<div class="main-container">

   <div class="blog-item">
      <?php 
         while(have_posts()){
            the_post();
            $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
         

      ?>
   <img src="<?php echo $imagepath[0] ?>" alt="" width="250" height="250">

   <h2>
      <?php the_title(); ?>
   </h2>
   <p><?php echo get_the_date(); ?></p>
   <p><?php the_excerpt(  );?></p>
   <a href="<?php the_permalink(); ?>"><input type="button" name="" value="Read more"></a>
      
   </div>
   <?php } ?>
   <?php echo wp_pagenavi(); ?>
</div>
<?php get_footer(); ?>