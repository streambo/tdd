<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: tmall.storedeliver.allocation.accept request
 * 
 * @author auto create
 * @since 1.0, 2016.04.29
 */
class TmallStoredeliverAllocationAcceptRequest
{
	/** 
	 * 派单号
	 **/
	private $allocationCode;
	
	/** 
	 * 是否接单
	 **/
	private $isAccept;
	
	/** 
	 * 子订单号必须和派单号匹配
	 **/
	private $subOrderCode;
	
	private $apiParas = array();
	
	public function setAllocationCode($allocationCode)
	{
		$this->allocationCode = $allocationCode;
		$this->apiParas["allocation_code"] = $allocationCode;
	}

	public function getAllocationCode()
	{
		return $this->allocationCode;
	}

	public function setIsAccept($isAccept)
	{
		$this->isAccept = $isAccept;
		$this->apiParas["is_accept"] = $isAccept;
	}

	public function getIsAccept()
	{
		return $this->isAccept;
	}

	public function setSubOrderCode($subOrderCode)
	{
		$this->subOrderCode = $subOrderCode;
		$this->apiParas["sub_order_code"] = $subOrderCode;
	}

	public function getSubOrderCode()
	{
		return $this->subOrderCode;
	}

	public function getApiMethodName()
	{
		return "tmall.storedeliver.allocation.accept";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->allocationCode,"allocationCode");
		RequestCheckUtil::checkNotNull($this->isAccept,"isAccept");
		RequestCheckUtil::checkNotNull($this->subOrderCode,"subOrderCode");
		RequestCheckUtil::checkMaxListSize($this->subOrderCode,20,"subOrderCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
