<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;
use Overbeck\LaravelDataOpenAPI\Enums\HTTPMethod;

/**
 * HTTP Route
 *
 * @link    https://swagger.io/specification/#pathItemObject
 * @link    https://spec.openapis.org/oas/v3.0.3#operation-object
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 19:36
 */
#[Attribute(Attribute::TARGET_METHOD)]
class Route extends BaseAttribute
{
    public function __construct(
        protected HTTPMethod $method,
        protected string $route,
        protected string $summary = '',
        protected string $description = '',
        protected array $tags = [],
    ) {
        if (! str_starts_with($this->route, '/')) {
            $this->route = '/'.$this->route;
        }
    }
}
