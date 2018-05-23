<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniorder.store.warehouse request
 * 
 * @author auto create
 * @since 1.0, 2017.09.06
 */
class OmniorderStoreWarehouseRequest
{
	/** 
	 * 操作，1表示增加或者更新，2表示删除，3表示查询
	 **/
	private $operation;
	
	/** 
	 * 门店id
	 **/
	private $storeId;
	
	/** 
	 * 仓联系地址
	 **/
	private $warehouseAddress;
	
	/** 
	 * 仓编码
	 **/
	private $warehouseCode;
	
	/** 
	 * 仓联系人
	 **/
	private $warehouseContact;
	
	/** 
	 * 仓联系电话
	 **/
	private $warehouseMobile;
	
	private $apiParas = array();
	
	public function setOperation($operation)
	{
		$this->operation = $operation;
		$this->apiParas["operation"] = $operation;
	}

	public function getOperation()
	{
		return $this->operation;
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

	public function setWarehouseAddress($warehouseAddress)
	{
		$this->warehouseAddress = $warehouseAddress;
		$this->apiParas["warehouse_address"] = $warehouseAddress;
	}

	public function getWarehouseAddress()
	{
		return $this->warehouseAddress;
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

	public function setWarehouseContact($warehouseContact)
	{
		$this->warehouseContact = $warehouseContact;
		$this->apiParas["warehouse_contact"] = $warehouseContact;
	}

	public function getWarehouseContact()
	{
		return $this->warehouseContact;
	}

	public function setWarehouseMobile($warehouseMobile)
	{
		$this->warehouseMobile = $warehouseMobile;
		$this->apiParas["warehouse_mobile"] = $warehouseMobile;
	}

	public function getWarehouseMobile()
	{
		return $this->warehouseMobile;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.store.warehouse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operation,"operation");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
