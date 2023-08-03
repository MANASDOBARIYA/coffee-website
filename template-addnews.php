<?php 
// Template Name:add news
get_header();


if(isset($_POST['savenews'])){ 
    wp_insert_post(
        array(
            'post_type'=>'coffee',
            'post_status'=>'draft',
            'post_title'=>$_POST['ntitle'], 
            'post_content'=>$_POST['ndes'],
        )
    );
    // wp_set_object_terms( $id,isset($_POST['selectcab']),'coffee_category');
}

    







?>


<form method="post" style="padding: 20px;" class="formData">

<div>News Title</div> <div><input type="text" name="ntitle"></div>

<div>News Description</div>


    
<textarea name="ndes"></textarea>
</div>

<div>
   <select name="coffeecat">
    <option> Select news category</option>
    <?php 
    $coffeecat=get_terms(['taxonomy'=>'coffee_category','hide_empty'=>false,'orderby'=>'name','order'=>'DESC','parent'=>0]);

    foreach($coffeecat as $coffeecatData){

    ?>
    <option value="<?php echo $coffeecatData->term_id ?>">
    <?php echo $coffeecatData->name ?></option> 

    <?php } ?>
   </select> 

</div>
<div>

    <button name="savenews">Save News</button>
</div>

</div>

</form>

<div class="clear"></div>

<?php get_footer(); ?>