<?php

namespace Top\Domain;


/**
 * 返回结果
 * @author auto create
 */
class ExchangeBaseResponse
{
	
	/** 
	 * 换货单号基本信息
	 **/
	public $exchange;
	
	/** 
	 * 返回结果的描述字段
	 **/
	public $message;
	
	/** 
	 * 返回结果的状态码
	 **/
	public $msg_code;
	
	/** 
	 * 是否成功调用
	 **/
	public $success;	
}
