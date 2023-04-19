<?php
/**
 * 付款码支付
 */

namespace Zhaiwenjun\IcbcJft\QrcodePayV2;

use Zhaiwenjun\IcbcJft\Contract\Base;
use Zhaiwenjun\IcbcJft\Contract\RequestData\QrcodePayV2Data;
use Zhaiwenjun\IcbcJft\Contract\RequestData\RequestMergeData;
use Zhaiwenjun\IcbcJft\Lib\DefaultIcbcClient;
use Zhaiwenjun\IcbcJft\Lib\IcbcConstants;
use Ramsey\Uuid\Uuid;
use Zhaiwenjun\IcbcJft\Utils\Log;

class SDK extends Base
{

    function execute($requestData)
    {
        if (!$requestData instanceof QrcodePayV2Data) {
            throw new \Exception("QrcodePayV2支付传的参数非QrcodePayV2Data对象");
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
        Log::getLogger('qrcodePayV2.log', $this->logPath)->info('request:', $requestMergeData);
        $rtn = $client->execute($requestMergeData, $msgId, '');
        Log::getLogger('qrcodePayV2.log', $this->logPath)->info('response:' . $rtn);
        return $rtn;
    }

}