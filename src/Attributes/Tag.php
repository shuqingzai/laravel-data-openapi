<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;
use Overbeck\LaravelDataOpenAPI\Spec\ExternalDocumentation;

/**
 * Class Tag
 *
 * @link    https://swagger.io/specification/#tag-object
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 20:35
 */
#[Attribute(Attribute::TARGET_ALL | Attribute::IS_REPEATABLE)]
class Tag
{
    public function __construct(
        protected string $name,
        protected string $description = '',
        protected ExternalDocumentation|null $externalDocs = null,
    ) {
    }
}
