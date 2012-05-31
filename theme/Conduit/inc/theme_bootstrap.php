<?php

include("ThemeManager.php");
include("Mobile_Detect.php");

define("CN_THEME_ROOT", dirname(dirname(__FILE__)));

global $Mobile_Detect;
$Mobile_Detect = new Mobile_Detect();

global $themeManager;
$themeManager = new ThemeManager();
