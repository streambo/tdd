<?php

namespace Top\Security;


use Top\TopClient;

class SecretCounterUtil
{
    private $topClient;
    private $cacheClient = null;

    private $counterMap;

    function __construct(TopClient $client)
    {
        $this->topClient = $client;

        $this->counterMap = array();
    }

    /*
    * 如果不走缓存模式，析构即调用API回传统计信息
    */
    function __destruct()
    {
        if ($this->cacheClient == null) {

        }
    }

    function report($session)
    {
        $request = new TopSdkFeedbackUploadRequest;
    }

    function setCacheClient($cache)
    {
        $this->cacheClient = $cache;
    }

    function incrDecrypt($delt, $session, $type)
    {
        $item = $this->getItem($session);
        if ($item == null) {
            $item = new SecretContext();
            $this->putItem($session, $item);
        }

        switch ($type) {
            case 'nick':
                $item->decryptNickNum += $delt;
                break;
            case 'receiver_name':
                $item->decryptReceiverNameNum += $delt;
                break;
            case 'phone':
                $item->decryptPhoneNum += $delt;
                break;
            case 'simple':
                $item->decryptSimpleNum += $delt;
                break;

        }
    }

    function incrEncrypt($delt, $session, $type)
    {
        $item = $this->getItem($session);
        if ($item == null) {
            $item = new SecretContext();
            $this->putItem($session, $item);
        }

        switch ($type) {
            case 'nick':
                $item->encryptNickNum += $delt;
                break;
            case 'receiver_name':
                $item->encryptReceiverNameNum += $delt;
                break;
            case 'phone':
                $item->encryptPhoneNum += $delt;
                break;
            case 'simple':
                $item->encryptSimpleNum += $delt;
                break;

        }
    }

    function getItem($session)
    {
        if ($this->cacheClient == null) {
            return $this->counterMap[$session];
        } else {
            return $this->cacheClient->getCache('s_' . $session);
        }
    }

    function putItem($session, $item)
    {
        if ($this->cacheClient == null) {
            $this->counterMap[$session] = $item;
        } else {
            $this->cacheClient->setCache('s_' . $session, $item);
        }
    }
}
