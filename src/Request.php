<?php 

declare(strict_types=1);

namespace RajWebConsulting\Http;

use RajWebConsulting\Http\Helper;

class Request extends Helper
{
    public static function get($key = null): ?string
    {
        $getData = $_GET[$key] ?? ((!$key && $_GET) ? $_GET : null);
        return is_string($getData) ? trim($getData) : $getData;
    }

    public static function post($key = null): ?string
    {
        $phpInput = file_get_contents('php://input');
        if (Helper::isJson($phpInput)) 
        {
            $json = json_decode($phpInput, true) ?? null;
            return $json[$key] ?? $json;
        }
        
        $postData = $_POST[$key] ?? ((!$key && $_POST) ? $_POST : null);
        return is_string($postData) ? trim($postData) : $postData;
    }

    public static function put($key = null): ?string
    {
        $phpInput = file_get_contents('php://input');
        if (Helper::isJson($phpInput)) 
        {
            $json = json_decode($phpInput, true) ?? null;
            return $json[$key] ?? $json;
        }
        
        parse_str($phpInput, $_PUT);
        $putData = $_PUT[$key] ?? ((!$key && $_PUT) ? $_PUT : null);
        return is_string($putData) ? trim($putData) : $putData;
    }
}
