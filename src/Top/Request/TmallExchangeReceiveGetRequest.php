<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: tmall.exchange.receive.get request
 * 
 * @author auto create
 * @since 1.0, 2017.10.25
 */
class TmallExchangeReceiveGetRequest
{
	/** 
	 * 正向订单号
	 **/
	private $bizOrderId;
	
	/** 
	 * 买家id
	 **/
	private $buyerId;
	
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 换货状态，具体包括买家已经申请退款，等待卖家同意(1)、卖家已经同意换货，等待买家退货(2)、买家已经退货，等待卖家确认收货(3)、换货关闭(4)、换货成功(5)、卖家拒绝确认收货(6)、换货结束(11)、卖家确认收货,等待卖家发货(12)、换货关闭,转退货退款(14)
	 **/
	private $disputeStatusArray;
	
	/** 
	 * 查询申请时间段的结束时间点
	 **/
	private $endCreatedTime;
	
	/** 
	 * 查询修改时间段的结束时间点
	 **/
	private $endGmtModifedTime;
	
	/** 
	 * 返回字段。目前支持dispute_id, bizorder_id, num, buyer_nick,buyer_name, status, created, modified, reason, title, buyer_logistic_no, seller_logistic_no, bought_sku, exchange_sku, buyer_address, address, time_out, buyer_phone, buyer_logistic_name, seller_logistic_name
	 **/
	private $fields;
	
	/** 
	 * 快递单号
	 **/
	private $logisticNo;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 退款单号ID列表
	 **/
	private $refundIdArray;
	
	/** 
	 * 查询申请时间段的开始时间点
	 **/
	private $startCreatedTime;
	
	/** 
	 * 查询修改时间段的开始时间点
	 **/
	private $startGmtModifiedTime;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setDisputeStatusArray($disputeStatusArray)
	{
		$this->disputeStatusArray = $disputeStatusArray;
		$this->apiParas["dispute_status_array"] = $disputeStatusArray;
	}

	public function getDisputeStatusArray()
	{
		return $this->disputeStatusArray;
	}

	public function setEndCreatedTime($endCreatedTime)
	{
		$this->endCreatedTime = $endCreatedTime;
		$this->apiParas["end_created_time"] = $endCreatedTime;
	}

	public function getEndCreatedTime()
	{
		return $this->endCreatedTime;
	}

	public function setEndGmtModifedTime($endGmtModifedTime)
	{
		$this->endGmtModifedTime = $endGmtModifedTime;
		$this->apiParas["end_gmt_modifed_time"] = $endGmtModifedTime;
	}

	public function getEndGmtModifedTime()
	{
		return $this->endGmtModifedTime;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setLogisticNo($logisticNo)
	{
		$this->logisticNo = $logisticNo;
		$this->apiParas["logistic_no"] = $logisticNo;
	}

	public function getLogisticNo()
	{
		return $this->logisticNo;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setRefundIdArray($refundIdArray)
	{
		$this->refundIdArray = $refundIdArray;
		$this->apiParas["refund_id_array"] = $refundIdArray;
	}

	public function getRefundIdArray()
	{
		return $this->refundIdArray;
	}

	public function setStartCreatedTime($startCreatedTime)
	{
		$this->startCreatedTime = $startCreatedTime;
		$this->apiParas["start_created_time"] = $startCreatedTime;
	}

	public function getStartCreatedTime()
	{
		return $this->startCreatedTime;
	}

	public function setStartGmtModifiedTime($startGmtModifiedTime)
	{
		$this->startGmtModifiedTime = $startGmtModifiedTime;
		$this->apiParas["start_gmt_modified_time"] = $startGmtModifiedTime;
	}

	public function getStartGmtModifiedTime()
	{
		return $this->startGmtModifiedTime;
	}

	public function getApiMethodName()
	{
		return "tmall.exchange.receive.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->disputeStatusArray,20,"disputeStatusArray");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->fields,20,"fields");
		RequestCheckUtil::checkMaxListSize($this->refundIdArray,20,"refundIdArray");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
