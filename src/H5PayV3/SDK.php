<?php
/**
 * SDK.php
 *
 * Author: netman
 * DateTime:  2023/3/23 16:10
 */

namespace Zhaiwenjun\IcbcJft\H5PayV3;

use Zhaiwenjun\IcbcJft\Contract\Base;
use Zhaiwenjun\IcbcJft\Contract\RequestData\H5PayV3Data;
use Zhaiwenjun\IcbcJft\Contract\RequestData\RequestMergeData;
use Zhaiwenjun\IcbcJft\Lib\IcbcConstants;
use Zhaiwenjun\IcbcJft\Lib\UiIcbcClient;
use Ramsey\Uuid\Uuid;
use Zhaiwenjun\IcbcJft\Utils\Log;

class SDK extends Base
{

    function execute($requestData)
    {
        if (!$requestData instanceof H5PayV3Data) {
            throw new \Exception("H5PayV3支付传的参数非H5PayV3Data对象");
        }
       $client = new UiIcbcClient($this->appId,
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
       $bizContent = (array) $requestData;
       //组装数据
       $requestMergeData = new RequestMergeData();
       $requestMergeData->biz_content = $bizContent;
       $requestMergeData->serviceUrl = $requestMergeData->serviceUrl. $requestData->method;
       $requestMergeData = (array) $requestMergeData;
       Log::getLogger('h5payv3.log',$this->logPath)->info('request:',$requestMergeData);
       $rtn = $client->buildPostForm($requestMergeData, $msgId, '');
       Log::getLogger('h5payv3.log',$this->logPath)->info('response:'.$rtn);
       return $rtn;
    }

}