<?php

namespace PhalconRest\Constants;

class HttpMethods
{
    const GET = "GET";
    const POST = "POST";
    const PUT = "PUT";
    const DELETE = "DELETE";
    const HEAD = "HEAD";
    const OPTIONS = "OPTIONS";
    const PATCH = "PATCH";

    public static function ALL_METHODS(){
        return [self::GET, self::POST, self::PUT, self::DELETE, self::HEAD, self::OPTIONS, self::PATCH];
    }
//    const ALL_METHODS = [self::GET, self::POST, self::PUT, self::DELETE, self::HEAD, self::OPTIONS, self::PATCH];
}
