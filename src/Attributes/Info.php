<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Attributes;

use Attribute;

/**
 * Class Info
 *
 * @link    https://swagger.io/specification/#info-object
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 18:35
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Info extends BaseAttribute
{
    public function __construct(
        protected string $title,
        protected string $description = '',
        protected string $version = '1.0.0',
        protected string $termsOfService = '',
        protected Contact|null $contact = null,
        protected License|null $license = null,
    ) {
    }
}
