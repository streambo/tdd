<?php

namespace Top\Security;

use Illuminate\Support\Facades\Cache;
/**
 * 使用 laravel 自带cache
 */
class LaravelCache implements iCache
{

    public function getCache($key)
    {
        $key = md5($key);
        return Cache::get($key,'');
    }

    public function setCache($key, $var)
    {
        $key = md5($key);
        Cache::forever($key,$var);
    }
}

