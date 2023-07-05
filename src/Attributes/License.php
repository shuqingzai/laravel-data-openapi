<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;


/**
 * Class License
 *
 * @link    https://swagger.io/specification/#license-object
 * @package Overbeck\LaravelDataOpenAPI\Attributes
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 19:40
 */
#[Attribute(Attribute::TARGET_CLASS)]
class License extends BaseAttribute
{
    public function __construct(
        protected string $name,
        protected string $url,
    ) {
    }
}
