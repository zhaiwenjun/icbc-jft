<?php
/**
 * 基础数据
 */

namespace Zhaiwenjun\IcbcJft\Contract\RequestData;

class RequestMergeData
{

    /**
     * 请求host
     * @var string $serviceUrl;
     *
     */
    public $serviceUrl = 'https://apipcs3.dccnet.com.cn/';
    //正式环境
    //public $serviceUrl = 'https://gw.open.icbc.com.cn/';

    /**
     * 请求方法
     * @var string $method;
     *
     */
    public $method = 'POST';

    /**
     *
     * @var bool isNeedEncrypt;
     *
     */
    public $isNeedEncrypt = false;

    /**
     * 附加参数
     * @var array $extraParams;
     *
     */
    public $extraParams = null;

    /**
     * 业务数据
     * @var array $biz_content;
     *
     */
    public $biz_content;






}