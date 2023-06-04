<?php 

declare(strict_types=1);

namespace Rajwebconsulting\Http;

abstract class Helper
{
    /**
     * Check for GET request
     */
    public static function isGet(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    /**
     * Check for PUT request
     */
    public static function isPut(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'PUT';
    }
    /**
     * Check for POST request
     */
    public static function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    public static function isJson($string): bool 
    {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
     }
}