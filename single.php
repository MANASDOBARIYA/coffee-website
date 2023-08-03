<!-- page call by blog page blog details -->
<?php get_header(); ?>
<div class="main-container">
<h1><?php the_title(); ?></h1>
<?php
 $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
?>
<img src="<?php echo $imagepath[0]?>" alt="">
<?php the_excerpt(  );?>
<?php echo  get_the_date(); ?>
<div><?php the_content();?></div>
<?php comments_template(); ?>
</div>
<?php get_footer(); ?>