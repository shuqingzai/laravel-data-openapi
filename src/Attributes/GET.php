<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;
use Overbeck\LaravelDataOpenAPI\Enums\HTTPMethod;

/**
 * HTTP GET Method
 *
 * @link    https://swagger.io/specification/#pathItemObject
 * @link    https://spec.openapis.org/oas/v3.0.3#operation-object
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 19:44
 */
#[Attribute(Attribute::TARGET_METHOD)]
class GET extends Route
{
    public function __construct(
        protected string $route,
        protected string $summary = '',
        protected string $description = '',
        protected array $tags = [],
    ) {
        parent::__construct(HTTPMethod::GET, $route, $summary, $description, $tags);
    }
}
