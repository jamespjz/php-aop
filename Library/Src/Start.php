<?php
/**+----------------------------------------------------------------------
 * JamesPi php aop
 * +----------------------------------------------------------------------
 * Application entry
 * +----------------------------------------------------------------------
 * Copyright (c) 2020-2030 http://www.pijianzhong.com All rights reserved.
 * +----------------------------------------------------------------------
 * Author：PiJianZhong <jianzhongpi@163.com>
 * +----------------------------------------------------------------------
 */

namespace Jamespi\PhpAop\Src;

class Start
{

    public function __construct()
    {
        /**
         * jamespi php-aop引导文件
         * 1.加载基础配置文件
         * 2.执行应用
         */
        require __DIR__ . '/Config/base.php';

        App::run()->send();
    }

}