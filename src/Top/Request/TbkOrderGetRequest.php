<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.order.get request
 * 
 * @author auto create
 * @since 1.0, 2017.06.17
 */
class TbkOrderGetRequest
{
	/** 
	 * 需返回的字段列表
	 **/
	private $fields;
	
	/** 
	 * 订单查询开始时间
	 **/
	private $start_time;
	
	/** 
	 * 订单查询时间范围,单位:秒,最小60,最大600,默认60
	 **/
	private $span;
	
	/** 
	 * 店铺商品总数上限
	 **/
	private $page_no;
	
	/** 
	 * 需返回的字段列表
	 **/
	private $page_size;
	
	/** 
	 * 订单状态，1: 全部订单，3：订单结算，12：订单付款， 13：订单失效，14：订单成功； 订单查询类型为‘结算时间’时，只能查订单结算状态
	 **/
	private $tk_status;
	
	/** 
	 * 订单查询类型，创建时间“create_time”，或结算时间“settle_time”
	 **/
	private $order_query_type;
	
	
	private $apiParas = array();
	

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}


	public function getFields()
	{
		return $this->fields ;
	}


	public function setStartTime($start_time)
	{
		$this->startTime = $start_time;
		$this->apiParas["start_time"] = $start_time;
	}

	public function getStartTime()
	{
		return $this->startTime ;
	}



	public function setSpan($span)
	{
		$this->span = $span;
		$this->apiParas["span"] = $span;
	}


	public function getSpan()
	{
		return $this->span;
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

 
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->startTime,"start_time");
		RequestCheckUtil::checkNotNull($this->span,"span");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
