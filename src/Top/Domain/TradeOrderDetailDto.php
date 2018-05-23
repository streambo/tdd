<?php

namespace Top\Domain;


/**
 * 子订单信息
 * @author auto create
 */
class TradeOrderDetailDto
{
	
	/** 
	 * 商品信息，非淘及散件必填，淘系订单以订单在淘宝系统内容为准
	 **/
	public $items;
	
	/** 
	 * 子订单ID，如果是单一订单，则主订单ID和子订单ID均填入同一值
	 **/
	public $sub_order_id;	
}
