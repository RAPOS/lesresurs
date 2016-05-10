<?php
use yii\helpers\VarDumper;
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 08.05.2016
 * Time: 20:40
 */

/**
 * Debug function
 * d($var);
 * @param $var
 * @param null $caller
 */
function d($var,$caller=null)
{
    if(!isset($caller)){
        $tmp_var = debug_backtrace(1);
        $caller = array_shift($tmp_var);
    }
    echo '<code>File: '.$caller['file'].' / Line: '.$caller['line'].'</code>';
    echo '<pre>';
    VarDumper::dump($var, 10, true);
    echo '</pre>';
}

/**
 * Debug function with die() after
 * dd($var);
 * @param $var
 */
function dd($var)
{
    $tmp_var = debug_backtrace(1);
    $caller = array_shift($tmp_var);
    d($var,$caller);
    die();
}