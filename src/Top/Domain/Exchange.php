<?php

namespace Top\Domain;


/**
 * 返回结果
 * @author auto create
 */
class Exchange
{
	
	/** 
	 * 卖家换货地址
	 **/
	public $address;
	
	/** 
	 * 支付宝ID
	 **/
	public $alipay_no;
	
	/** 
	 * 正向单号ID
	 **/
	public $biz_order_id;
	
	/** 
	 * 购买的商品sku
	 **/
	public $bought_sku;
	
	/** 
	 * 买家换货地址
	 **/
	public $buyer_address;
	
	/** 
	 * 买家发货物流公司
	 **/
	public $buyer_logistic_name;
	
	/** 
	 * 买家发货快递单号
	 **/
	public $buyer_logistic_no;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 买家联系方式
	 **/
	public $buyer_phone;
	
	/** 
	 * 换货单创建时间
	 **/
	public $created;
	
	/** 
	 * 换货单号ID
	 **/
	public $dispute_id;
	
	/** 
	 * 买家申请换货的商品sku
	 **/
	public $exchange_sku;
	
	/** 
	 * 当前商品状态
	 **/
	public $good_status;
	
	/** 
	 * 换货单最新修改时间
	 **/
	public $modified;
	
	/** 
	 * 购买数
	 **/
	public $num;
	
	/** 
	 * 支付费用
	 **/
	public $payment;
	
	/** 
	 * 价格
	 **/
	public $price;
	
	/** 
	 * 申请换货原因
	 **/
	public $reason;
	
	/** 
	 * 卖家发货物流公司
	 **/
	public $seller_logistic_name;
	
	/** 
	 * 卖家发货快递单号
	 **/
	public $seller_logistic_no;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 当前换货单状态
	 **/
	public $status;
	
	/** 
	 * 超时时间
	 **/
	public $time_out;
	
	/** 
	 * 商品名称
	 **/
	public $title;	
}
