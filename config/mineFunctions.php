<?php

/**
 *
 *
 * @param string $controllerName name Controller
 * @param string $actionName name function run page
 */
function loadPage($smarty, $controllerName, $actionName = 'index') {
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * @param object $smarty
 * @param string $templateName
 */
function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Function errors
 *
 * @param variant $value
 */
function d($value = null, $die = 1) {
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';

    if ($die) {
        die;
    }
}

/**
 * Redurect
 * 
 * @param string $url
 */
function redirect($url) {

    if (!$url) {
        $url = '/';
    }

    header("Location: {$url}");
    exit;
}
