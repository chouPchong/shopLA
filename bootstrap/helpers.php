<?php
/**
 * 功能：自定义辅助函数；
 * 条件：1、composer.json 文件添加 "file": ["bootstrap/helpers.php"]；2、composer dumpautoload
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}