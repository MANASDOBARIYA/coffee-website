<?php get_header(); 
$coffeedata=get_queried_object();
// print_r($coffeedata);
?>

<div class="main-container">


 
<div class="tit">
   
   <h2>
      <?php echo $coffeedata->name; ?>
   </h2>
</div>
<?php 
$mcoffee=array(
   'post_type'=>'coffee',
   'post_status'=>'publish',
   'tax_query'=>array(
      array(
          'taxonomy'=>'coffee_category',
      'field' => 'term_id',
      'terms'=>$coffeedata->term_id)
  ),

);
   $coffeequery=new WP_Query($mcoffee);
   while($coffeequery->have_posts()){
      $coffeequery->the_post();
       $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
?>
<img src="<?php echo $imagepath[0] ?>" alt="" height="250" width="250">
   <p><?php echo get_the_date(); ?></p>
   <p><?php the_excerpt(  );?></p>
   <a href="<?php the_permalink(); ?>"><input type="button" name="" value="Read more"></a>
      
   </div>
   <?php } ?>

   <?php echo wp_pagenavi(); ?>
   
</div> 
<?php get_footer(); ?>