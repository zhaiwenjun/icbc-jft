<?php
/**
 * QueryRefundOrderV1Data.php
 *
 * Author: netman
 * DateTime:  2023/4/18 15:10
 */

namespace Zhaiwenjun\IcbcJft\Contract\RequestData;

class QueryRefundOrderV1Data
{

    /**
     *
     * @var string $method;
     *
     */
    public $method = 'api/jft/api/pay/refund/query/V1';

    /**
     * 应用id
     * @var string $appId;
     *
     */
    public $appId;

    /**
     * 支付类型
     * @var string $payType;
     *
     */
    public $payType = '01';

    /**
     * 子商户编号
     * @var string $vendorId;
     *
     */
    public $vendorId;

    /**
     * 退款单编号
     * @var string $refundId;
     *
     */
    public $refundId;


}