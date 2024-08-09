<?php

namespace HlrLookup\v2;
/**
 * Class HLRLoggingService
 *
 * A logging service
 */
class HLRLoggingService {

    /**
     * Writes to a log file and prepends current time stamp
     *
     * @param $message
     * @param $logFile
     */
    public static function write($message, $logFile) {

        $type = file_exists($logFile) ? 'a' : 'w';
        $file = fopen($logFile, $type);
        if ($file === false) {
            return;
        }
        fputs($file, date('r', time()) . ' ' . $message . PHP_EOL);
        fclose($file);

    }

}