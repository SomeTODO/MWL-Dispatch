<?php
namespace app\test\controller;

class Index extends \think\Controller
{
    public function index()
    {
        // 模板输出
        return $this->fetch('index');
    }
}
