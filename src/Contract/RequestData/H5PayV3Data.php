<?php
/**
 * H5PayV3Data.php
 *
 * Author: netman
 * DateTime:  2023/4/18 15:10
 */

namespace Zhaiwenjun\IcbcJft\Contract\RequestData;


class H5PayV3Data
{
    /**
     * 请求method
     * @var string $method;
     *
     */
    public $method;

    /**
     * 应用id
     * @var string $appId;
     *
     */
    public $appId;

    /**
     * 子商户编号
     * @var string $outVendorId;
     *
     */
    public $outVendorId;

    /**
     * 用户标识
     * @var string $outUserId;
     *
     */
    public $outUserId;

    /**
     * 支付金额
     * @var string $payAmount;
     *
     */
    public $payAmount;

    /**
     * 支付类型 01:单笔支付，02：合并支付
     * @var string $payType;
     *
     */
    public $payType = '01';

    /**
     * 异步回调地址
     * @var string $notifyUrl;
     *
     */
    public $notifyUrl = '';

    /**
     * 同步调用地址
     * @var string $jumpUrl;
     *
     */
    public $jumpUrl = '';

    /**
     * 商品名称
     * @var string $payType;
     *
     */
    public $goodName = '';

    /**
     * 交易ip
     * @var string $trxIp;
     *
     */
    public $trxIp = '';

    /**
     * 交易渠道03(h5支付) 13(小程序支付),默认上送03
     * @var string $trxChannel;
     *
     */
    public $trxChannel = '03';

    /**
     * 第三方应用ID
     * 商户在微信公众号内或微信小程序内接入时必送，上送微信分配的公众账号ID；商户通过支付宝生活号接入时不送
     * @var string $tpAppId;
     *
     */
    public $tpAppId = '';

    /**
     * 第三方用户标识
     * 商户在微信公众号内或微信小程序内接入时必送，上送用户在商户appid下的唯一标识；商户通过支付宝生活号接入时不送
     * @var string $tpAppId;
     *
     */
    public $tpOpenId = '';



}