<?php

// Constants for access controllers
define('PathPrefix', '../admin/controllers/');
define('PathPostfix', 'Controller.php');

// Templates
$template = 'templates';
$templateAdmin = 'admin';


define('TemplatePrefix', "../{$template}/");
define('TemplateAdminPrefix', "../{$templateAdmin}/views/");
define('TemplatePostfix', '.tpl');

define('TemplateWebPath', "/{$template}/");
define('TemplateAdminWebPath', "../{$templateAdmin}/views/");

// Initialize Smarty
//require('libs/Smarty.class.php');
////$smarty = new \Smarty();
//
//$smarty->setTemplateDir(TemplatePrefix);
//$smarty->setCompileDir('../tmp/smarty/templates_c');
//$smarty->setCacheDir('../tmp/smarty/cache');
//$smarty->setConfigDir('../library/Smarty/configs');

//$smarty->assign('templateWebPath', TemplateWebPath);
