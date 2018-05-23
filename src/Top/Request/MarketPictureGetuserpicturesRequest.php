<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.market.picture.getuserpictures request
 * 
 * @author auto create
 * @since 1.0, 2017.09.18
 */
class MarketPictureGetuserpicturesRequest
{
	/** 
	 * 订单ID
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "taobao.market.picture.getuserpictures";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
