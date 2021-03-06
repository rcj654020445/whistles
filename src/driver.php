<?php
namespace whistle;

abstract class driver
{

    //配置信息
    protected $config;

    //client对象
    protected $client;

    //请求body体
    protected $body;

    //请求headers头
    protected $headers;

    //识别身份证
    abstract public function idcard($url, array $option);

    //行驶证识别
    abstract public function vehicleLicense($url, $option = []);

    //驾驶证
    abstract function drivingLicense($url, $option = []);

    //通用文字识别
    abstract function basicGeneral($url, $option = []);
    
    //调用不存在的方法，抛出异常
    public function __call($methd, $args)
    {
        throw new Exception("Unsupported methods ", 100);
    }
}
