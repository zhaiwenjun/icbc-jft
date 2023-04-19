<?php
/**
 * QueryOrderV1Data.php
 *
 * Author: netman
 * DateTime:  2023/4/18 15:10
 */

namespace Zhaiwenjun\IcbcJft\Contract\RequestData;

class QueryOrderV1Data
{

    /**
     *
     * @var string $method;
     *
     */
    public $method = 'api/jft/api/pay/query/order/V1';

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
     * 三方商家订单号
     * @var string $outOrderId;
     *
     */
    public $outOrderId;


}