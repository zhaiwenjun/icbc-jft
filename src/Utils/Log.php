<?php
/**
 * Log.php
 *
 * Author: netman
 * DateTime:  2023/3/23 16:23
 */

namespace Zhaiwenjun\IcbcJft\Utils;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Level;
use Monolog\Logger;

class Log
{
    public static function getLogger(string $file, string $logPath = '')
    {
        $logger = new Logger('logger');
        $logPath = $logPath ? $logPath.$file  : dirname(dirname(__DIR__)).'/logs/'.$file;
        $logger->pushHandler(new RotatingFileHandler($logPath, 10));
        return $logger;

    }
}