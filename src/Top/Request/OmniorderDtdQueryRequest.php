<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniorder.dtd.query request
 * 
 * @author auto create
 * @since 1.0, 2017.10.13
 */
class OmniorderDtdQueryRequest
{
	/** 
	 * 核销码
	 **/
	private $code;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.dtd.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->code,"code");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
