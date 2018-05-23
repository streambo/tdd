<?php

class TbkItemConvertLinkRequest
{

	/**
	 * 需返回的字段列表
	 **/
	private $fields;
	
	/** 
	 * 商品Id
	 **/
	private $numIids;

	/**
     * 广告位Id
     **/
    private $adzoneId;

    /**
     * 区分不同的推广渠道
     **/
    private $unid;

    /**
     * 商品转链接
     **/
    private $dx;
	
	/** 
	 * 链接形式：1：PC，2：无线，默认：１
	 **/
	private $platform;
	
	private $apiParas = array();
	

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

    public function setAdzoneId($adzoneId)
    {
        $this->adzoneId = $adzoneId;
        $this->apiParas["adzoneId"] = $adzoneId;
    }

    public function getAdzoneId()
    {
        return $this->adzoneId;
    }

    public function setUnid($unid)
    {
        $this->unid = $unid;
        $this->apiParas["unid"] = $unid;
    }

    public function getUnid()
    {
        return $this->unid;
    }

    public function setDx($dx)
    {
        $this->dx = $dx;
        $this->apiParas["dx"] = $dx;
    }

    public function getDx()
    {
        return $this->dx;
    }

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
	}

	public function setPlatform($platform)
	{
		$this->platform = $platform;
		$this->apiParas["platform"] = $platform;
	}

	public function getPlatform()
	{
		return $this->platform;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.item.convert";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->numIids,"numIids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
