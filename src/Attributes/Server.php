<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;


/**
 * Class Server
 *
 * @link    https://swagger.io/specification/#server-object
 * @package Overbeck\LaravelDataOpenAPI\Attributes
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 19:42
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Server extends BaseAttribute
{
    public function __construct(
        protected string $url,
        protected string $description = '',
        protected array $variables = [],
    ) {
    }
}
