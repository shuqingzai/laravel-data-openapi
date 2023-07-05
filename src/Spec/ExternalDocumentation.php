<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Spec;

/**
 * Class ExternalDocumentation
 *
 * @see https://swagger.io/specification/#external-documentation-object
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 20:35
 */
class ExternalDocumentation
{
    public function __construct(
        protected string $url,
        protected string $description = '',
    ) {
    }
}
