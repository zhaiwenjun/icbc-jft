<?php
/**
 * 订单状态查询
 */

namespace Zhaiwenjun\IcbcJft\RefundOrderV1;

use Zhaiwenjun\IcbcJft\Contract\Base;
use Zhaiwenjun\IcbcJft\Contract\RequestData\RefundOrderV1Data;
use Zhaiwenjun\IcbcJft\Contract\RequestData\RequestMergeData;
use Zhaiwenjun\IcbcJft\Lib\DefaultIcbcClient;
use Zhaiwenjun\IcbcJft\Lib\IcbcConstants;
use Ramsey\Uuid\Uuid;
use Zhaiwenjun\IcbcJft\Utils\Log;

class SDK extends Base
{

    function execute($requestData)
    {
        if (!$requestData instanceof RefundOrderV1Data) {
            throw new \Exception("QueryOrder传的参数非QueryOrderV1Data对象");
        }
        $client = new DefaultIcbcClient($this->appId,
            $this->privateKey,
            IcbcConstants::$SIGN_TYPE_RSA2,
            'UTF-8',
            'json',
            $this->jftPublicKey,
            $this->aesKey,
            $this->encryptType,
            $this->ca,
            $this->password
        );
        $msgId = Uuid::uuid4();
        $bizContent = (array)$requestData;
        //组装数据
        $requestMergeData = new RequestMergeData();
        $requestMergeData->biz_content = $bizContent;
        $requestMergeData->serviceUrl = $requestMergeData->serviceUrl . $requestData->method;
        $requestMergeData = (array)$requestMergeData;
        Log::getLogger('RefundQorderV1.log', $this->logPath)->info('request:', $requestMergeData);
        $rtn = $client->execute($requestMergeData, $msgId, '');
        Log::getLogger('RefundQorderV1.log', $this->logPath)->info('response:' . $rtn);
        return $rtn;
    }

}