<?php
/**
 * QrcodePayV2Data.php
 *
 * Author: netman
 * DateTime:  2023/4/18 15:10
 */

namespace Zhaiwenjun\IcbcJft\Contract\RequestData;

class QrcodePayV2Data
{

    /**
     *
     * @var string $method;
     *
     */
    public $method = 'api/jft/api/pay/qrcode/V2';

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
     * 三方商家订单号
     * @var string $outOrderId;
     *
     */
    public $outOrderId;

    /**
     * 支付金额
     * @var string $payAmount;
     *
     */
    public $payAmount;

    /**
     * 用户支付码
     * @var string $qrcode;
     *
     */
    public $qrcode;

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
     * 交易渠道08
     * @var string $trxChannel;
     *
     */
    public $trxChannel = '08';





}