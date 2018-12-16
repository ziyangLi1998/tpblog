<?php
/**
 * Created by PhpStorm.
 * User: time
 * Date: 2018/12/5
 * Time: 21:54
 */


Route::group('admin',function (){
    Route::rule('/','admin/index/login','get');
});