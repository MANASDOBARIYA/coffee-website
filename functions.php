<?php register_nav_menus(array('primary-menu'=>'Top Menu')) ?>
<?php add_theme_support('custom-header'); ?>
<?php register_sidebar(array(
    'name'=>"sidebar loacation",
    'id'=>'sidebar'
    )) ?>  
<?php  add_theme_support('custom-background');?>
<?php add_post_type_support('page','excerpt'); ?>