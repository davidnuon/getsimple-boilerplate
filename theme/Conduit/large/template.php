<?php
    $themeManager->setCSSPath(get_theme_url(false) . '/large' );
    
    $themeManager->addCSS("css/reset.css", true);
    $themeManager->addCSS("css/style.css", true); 
?>

<?php include(CN_THEME_ROOT . "/inc/header.php"); ?>
    
    <header>
        <h1><?php get_page_title(); ?></h1>
        <nav>
            <ul>
                <?php get_navigation(return_page_slug()); ?>
            </ul>
        </nav>
    </header>
    
    <section>
        <?php get_page_content(); ?>
    </section>
    
    <hr />
    
    <?php get_component('tagline'); ?>

<?php include(CN_THEME_ROOT . "/inc/footer.php"); ?>
