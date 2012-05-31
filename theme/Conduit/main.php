<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<?php include("inc/theme_bootstrap.php"); ?>

<?php
    $alt = false;
    
    if ($Mobile_Detect->isMobile() || $Mobile_Detect->isTablet()) {
        $alt = true;
    }  
?>

<?php if($alt): // Mobile/Tablet ?>
    <?php include("mobile/main.php"); ?>
<?php else: ?>
    <?php include("large/main.php"); ?>
<?php endif ?>