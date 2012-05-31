<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<?php include("inc/theme_bootstrap.php"); ?>

<?php
    $themeManager->setJSPath(get_theme_url(false) . '/mobile/js' );
    
    $themeManager->addJS("jquery-1.7.2.min.js", true);
    $themeManager->addJS("jquery.mobile-1.1.0.min.js", true);   
    
    $themeManager->setCSSPath(get_theme_url(false) . '/mobile/css');
    $themeManager->addCSS("http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.css");

?>

<?php
    $alt = false;
    
    if ($Mobile_Detect->isMobile() || $Mobile_Detect->isTablet()) {
        $alt = true;
    }  
?>

<?php if($alt): // Mobile/Tablet ?>
    <?php include("mobile/template.php"); ?>
<?php else: ?>
    <?php include("large/template.php"); ?>
<?php endif ?>