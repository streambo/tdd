<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.qimen.omniorder.allocatedinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2016.08.04
 */
class QimenOmniorderAllocatedinfoGetRequest
{
	/** 
	 * 订单卖家ID
	 **/
	private $sellerId;
	
	/** 
	 * 淘宝交易主订单id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.omniorder.allocatedinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
