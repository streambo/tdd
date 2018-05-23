<?php

namespace Top\Domain;


/**
 * 门店分单结果，每一条子订单一条
 * @author auto create
 */
class AllocatedInfo
{
	
	/** 
	 * 描述信息，分单原因
	 **/
	public $description;
	
	/** 
	 * 订单分单状态, 可选值: Waiting(仍在派单中) Allocated(派单成功) AllocateFail(派单失败)
	 **/
	public $status;
	
	/** 
	 * 门店id
	 **/
	public $store_id;
	
	/** 
	 * 门店名称
	 **/
	public $store_name;
	
	/** 
	 * 店铺类型, 门店(Store)或者电商仓(Warehouse)
	 **/
	public $store_type;
	
	/** 
	 * 淘宝交易子订单id
	 **/
	public $sub_oid;
	
	/** 
	 * 淘宝交易主订单id
	 **/
	public $tid;	
}
