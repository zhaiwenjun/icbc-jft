<?php
/**
 * Base.php
 *
 * Author: netman
 * DateTime:  2023/3/23 15:25
 */

namespace Zhaiwenjun\IcbcJft\Contract;

abstract class Base
{

    /**
     * 应用id
     * @var string $appId;
     *
     */
    public $appId;

    /**
     * 商户私钥
     * @var string $privateKey;
     *
     */
    public $privateKey;

    /**
     * 工行公钥
     * @var string $jftPublicKey;
     *
     */
    public $jftPublicKey;

    /**
     * 加密key
     * @var string $aesKey;
     *
     */
    public $aesKey;

    /**
     * 加密类型
     * @var string $encryptType
     *
     */
    public $encryptType = 'AES';

    /**
     *
     * @var string $ca
     *
     */
    public $ca = '';

    /**
     * 密码
     * @var string $password
     *
     */
    public $password = '';

    /**
     * 记录日志路径
     * @var string $logPath
     */
    public $logPath = '';


    /**
     * @param string $appId  应用id
     * @param string $privateKey 商户私钥
     * @param string $jftPublicKey 工行公钥
     * @param string $aesKey 加密key
     * @param string $logPath 记录日志路径
     * @param string $encryptType 加密类型默认为AES
     * @param string $ca Ca工行证书
     * @param string $password 证书密码
     */
    public function __construct(string $appId, string $privateKey , string $jftPublicKey, string $aesKey,
        string $logPath = '',
        string $encryptType = 'AES',
        string $ca = '',
        string $password = ''
    )
    {
        $this->appId = $appId;
        $this->privateKey = $privateKey;
        $this->jftPublicKey = $jftPublicKey;
        $this->aesKey = $aesKey;
        $this->ca = $ca;
        $this->encryptType = $encryptType;
        $this->password = $password;
        $this->logPath = $logPath;
    }
    //执行
    abstract function execute($requestData);
}