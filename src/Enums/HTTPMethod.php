<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Enums;

/**
 * HTTP methods
 *
 * Class APIMethod
 *
 * @package Overbeck\LaravelDataOpenAPI\Spec\Enums
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 19:31
 */
enum HTTPMethod: string
{
    case GET     = 'get';
    case POST    = 'post';
    case PUT     = 'put';
    case PATCH   = 'patch';
    case DELETE  = 'delete';
    case HEAD    = 'head';
    case OPTIONS = 'options';
    case TRACE   = 'trace';
}
