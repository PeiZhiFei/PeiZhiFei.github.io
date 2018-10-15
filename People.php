<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/23 0023
 * Time: 下午 11:17
 */
require_once 'Hello.php';

class People extends Hello
{
    public function __construct($age )
    {
        parent::__construct($age, "男");
    }

    public function say()
    {
        parent::say();
    }
}