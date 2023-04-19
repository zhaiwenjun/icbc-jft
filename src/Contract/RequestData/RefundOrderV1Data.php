<?php
/**
 * RefundV1Data.php
 *
 * Author: netman
 * DateTime:  2023/4/18 15:10
 */

namespace Zhaiwenjun\IcbcJft\Contract\RequestData;

class RefundOrderV1Data
{

    /**
     *
     * @var string $method;
     *
     */
    public $method = 'api/jft/api/pay/refund/accept/V1';

    /**
     * 应用id
     * @var string $appId;
     *
     */
    public $appId;

    /**
     * 子商户编号
     * @var string $vendorId;
     *
     */
    public $vendorId;

    /**
     *
     * @var string $userId;
     *
     */
    public $userId;

    /**
     * 三方商家订单号
     * @var string $orderId;
     *
     */
    public $orderId;

    /**
     * 退款单号
     * @var string $refundId;
     *
     */
    public $refundId;

    /**
     * 退款金额
     * @var string $refundAmount;
     *
     */
    public $refundAmount;

    /**
     * 异步回调地址
     * @var string $notify_url;
     *
     */
    public $notify_url;


}