<?php
/**
 *
 * Copyright  FaShop
 * License    http://www.fashop.cn
 * link       http://www.fashop.cn
 * Created by FaShop.
 * User: hanwenbo
 * Date: 2018/1/18
 * Time: 下午11:00
 *
 */

namespace App\Validator\Server;

use ezswoole\Validator;
use ezswoole\Db;
use App\Biz\VerifyCode;

class Order extends Validator
{
	protected $rule
		= [
			'id'              => 'require',
			'shipper_id'      => 'require',
			'express_id'      => 'require',
			'tracking_no'     => 'require',
			'deliver_name'    => 'require',
			'deliver_phone'   => 'require',
			'deliver_address' => 'require',
			'order_goods_id'  => 'require',
		];
	protected $message
		= [
			'id.require'          => "id必须",
			'shipper_id.require'  => "商家物流地址必须",
			'express_id.require'  => "物流公司ID必须",
			'tracking_no.require' => "物流单号必须",
		];
	protected $scene
		= [
			'info'           => [
				'id',
			],
			'cancel'         => [
				'id',
			],
			'confirmReceipt' => [
				'id',
			],
			'goodsList'      => [
				'id',
			],
			'goodsInfo'      => [
				'id',
			],
			'deliver'        => [
				'id',
			],
			'setSend'        => [
				'id',
				'deliver_name',
				'deliver_phone',
				'deliver_address',
			],

			'logisticsQuery' => [
				'id',
			],
            'groupInfo'           => [
                'id',
            ],
		];

}