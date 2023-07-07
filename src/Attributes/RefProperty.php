<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;

/**
 * Class RefProperty
 *
 * @see     https://spec.openapis.org/oas/v3.0.3#reference-object
 * @see     https://swagger.io/specification/#schema-object
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/6 16:25
 */
#[Attribute]
class RefProperty extends BaseAttribute
{
    public function __construct(
        protected string $ref,
        protected string $summary = '',
        protected string $description = '',
        protected string $routePrefix = '#/components/schemas/',
    ) {
    }

    public function setRoutePrefix(string $routePrefix): static
    {
        $this->routePrefix = $routePrefix;

        return $this;
    }
}
