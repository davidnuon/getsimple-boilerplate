<?php include("config.php")?>

<?php  include(CN_THEME_ROOT . "/inc/header.php"); ?>
    
<div data-role="page" data-add-back-btn="true"> 
 
    <div data-role="header" > 
        <h1><?php get_page_clean_title(); ?></h1>
    </div><!-- /header --> 
 
    <div data-role="content"> 
        <?php get_page_content(); ?>                    
    </div><!-- /content --> 
    
</div><!-- /page --> 
<?php  include(CN_THEME_ROOT . "/inc/footer.php"); ?>