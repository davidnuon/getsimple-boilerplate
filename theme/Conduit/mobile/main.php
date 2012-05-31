<?php include("config.php")?>

<?php include(CN_THEME_ROOT . "/inc/header.php"); ?>
   
<div data-role="page" id="jqm-home"> 
    <?php get_component('cosmetic_top'); ?>
    <div data-role="content"> 
       <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
        <?php get_navigation(); ?>
       </ul> 
    </div> 
    <?php get_component('cosmetic_bottom'); ?>
</div> 
    
<?php  include(CN_THEME_ROOT . "/inc/footer.php"); ?>