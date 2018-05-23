<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniorder.store.reallocate request
 * 
 * @author auto create
 * @since 1.0, 2017.07.27
 */
class OmniorderStoreReallocateRequest
{
	/** 
	 * 主订单号
	 **/
	private $mainOrderId;
	
	/** 
	 * 门店Id
	 **/
	private $storeId;
	
	/** 
	 * 子订单号
	 **/
	private $subOrderIds;
	
	/** 
	 * 电商仓code
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setMainOrderId($mainOrderId)
	{
		$this->mainOrderId = $mainOrderId;
		$this->apiParas["main_order_id"] = $mainOrderId;
	}

	public function getMainOrderId()
	{
		return $this->mainOrderId;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function setSubOrderIds($subOrderIds)
	{
		$this->subOrderIds = $subOrderIds;
		$this->apiParas["sub_order_ids"] = $subOrderIds;
	}

	public function getSubOrderIds()
	{
		return $this->subOrderIds;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
		$this->apiParas["warehouse_code"] = $warehouseCode;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.store.reallocate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainOrderId,"mainOrderId");
		RequestCheckUtil::checkNotNull($this->subOrderIds,"subOrderIds");
		RequestCheckUtil::checkMaxListSize($this->subOrderIds,20,"subOrderIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
