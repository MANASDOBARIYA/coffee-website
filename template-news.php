<?php get_header(); ?>
<div class="m-c">
<form method="get"> 
  <input type="text" id="query" name="title" placeholder="Search...">
  <input type="hidden" name="paged" value="<?php echo $paged; ?>">
  <input type="submit" value="Search" name="" >
</form>
</div>
<div class="c-b">
    <?php 
    $mcoffee=array(
        'post_type'=>'coffee',
        'post_status'=>'publish',
        's'=>$searchdata
          
     
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
    ?>
</div>
<?php get_footer(); ?>