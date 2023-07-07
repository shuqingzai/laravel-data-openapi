<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;

/**
 * Class Property
 *
 * @see     https://spec.openapis.org/oas/v3.0.3#schema-object
 * @see     https://swagger.io/specification/#schema-object
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/6 16:46
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Property extends BaseAttribute
{
    public function __construct(
        protected string $title,
        protected int|float|null $multipleOf = null,
        protected int|float|null $maximum = null,
        protected bool $exclusiveMaximum = false,
        protected int|float|null $minimum = null,
        protected bool $exclusiveMinimum = false,
        protected int|null $maxLength = null,
        protected string $description = '',
        protected bool $nullable = false,
        protected bool $readOnly = false,
        protected bool $writeOnly = false,
        protected mixed $example = null,
        protected mixed $default = null,

    ) {
    }
}
