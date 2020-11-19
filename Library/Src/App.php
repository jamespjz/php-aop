<?php
/**+----------------------------------------------------------------------
 * JamesPi php aop
 * +----------------------------------------------------------------------
 * app management class
 * +----------------------------------------------------------------------
 * Copyright (c) 2020-2030 http://www.pijianzhong.com All rights reserved.
 * +----------------------------------------------------------------------
 * Author：PiJianZhong <jianzhongpi@163.com>
 * +----------------------------------------------------------------------
 */

namespace Jamespi\PhpAop\Src;


use Illuminate\Http\Request;

class App
{
    public static function run(){
        echo config("APPID");
    }
}