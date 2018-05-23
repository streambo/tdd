<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniorder.store.sdtcancel request
 * 
 * @author auto create
 * @since 1.0, 2017.05.22
 */
class OmniorderStoreSdtcancelRequest
{
	/** 
	 * 取号返回的packageId
	 **/
	private $packageId;
	
	private $apiParas = array();
	
	public function setPackageId($packageId)
	{
		$this->packageId = $packageId;
		$this->apiParas["package_id"] = $packageId;
	}

	public function getPackageId()
	{
		return $this->packageId;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.store.sdtcancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->packageId,"packageId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
