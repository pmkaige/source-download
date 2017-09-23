<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
Route::rule('cate/:id/[:sid]','Category/lst','GET',['ext'=>'html'],['id'=>'\d{1,3}','sid'=>'\d{1,3}']);
Route::rule('article/:aid','Article/index','GET',['ext'=>'html'],['aid'=>'\d{1,6}']);
Route::rule('mysource/:uid','Member/mySource','GET',['ext'=>'html'],['uid'=>'\d{1,5}']);
Route::rule('cate_index/:id','Category/cate_index','GET',['ext'=>'html'],['id'=>'\d{1,5}']);
Route::rule('minfo/:uid','Member/info','GET',['ext'=>'html'],['uid'=>'\d{1,5}']);
Route::rule('editsource/:aid','Member/editSource','GET',['ext'=>'html'],['aid'=>'\d{1,5}']);
Route::rule('delsource/:aid','Member/delSource','GET',['ext'=>'html'],['aid'=>'\d{1,5}']);
Route::rule('zan/:aid','Article/ajaxZan','POST',['ext'=>'html'],['aid'=>'\d{1,5}']);
Route::rule('search/[:tag]','Search/lst','GET|POST');
Route::rule('search/[:key]','Search/lst','GET|POST');
Route::rule('controll','Member/editinfo');
Route::rule('logout','Member/logout');
Route::rule('index','Index/index');
Route::rule('source','Member/Source');
Route::rule('reg','index/User/reg');
Route::rule('login','index/User/login');
