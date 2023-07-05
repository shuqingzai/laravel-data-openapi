<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;

/**
 * Class Contact
 *
 * @link    https://swagger.io/specification/#contact-object
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 19:38
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Contact extends BaseAttribute
{
    public function __construct(
        protected string $name,
        protected string $url,
        protected string $email,
    ) {
    }
}
