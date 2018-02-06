<?php

/**
* MobileDetective 手机号有效性校验器
* 
* @method public detective($mobile, $locate = 'cn'): bool  识别给定手机号是否合法
* @author huliuqing liuqing_hu@126.com
* @version 1.0.0
*/
class MobileDetective
{
    private $mobile = '';
    private $locate  = 'cn';
    private $regex  = '/^(13\d{1}|15[^4]|166|18\d{1}|17[35678]|198|199)\d{8}$/';
    
    public function __construct()
    {
    }
    
    private function init($mobile, $locate = 'cn')
    {
        $this->mobile = $mobile;
        $this->locate = $locate;
        $this->loadRegex($locate);

        return $this;
    }

    
    /**
    * detective 识别给定手机号是否合法
    *
    * @param string $mobile 手机号码
    * @param string $locate 所在国家，默认 'cn'
    *
    * @return bool 
    */
    public function detective($mobile, $locate = 'cn')
    {
        $this->init($mobile, $locate);

        return (bool) preg_match($this->regex, $this->mobile);
    }

    private function loadRegex($locate)
    {
        $this->regex = $this->getRegex($locate);
    }

    private function getRegex($locate)
    {
        switch($locate){
            case 'cn':
              return '/^(13\d{1}|15[^4]|166|18\d{1}|17[35678]|198|199)\d{8}$/';

            default:
              return $this->regex;
        }
    }
}
