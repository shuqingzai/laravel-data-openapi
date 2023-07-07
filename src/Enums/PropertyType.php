<?php

declare(strict_types=1);

namespace Overbeck\LaravelDataOpenAPI\Enums;

/**
 * Class Type
 *
 * @see     https://swagger.io/docs/specification/data-models/data-types/
 * @see     https://spec.openapis.org/oas/v3.0.3#data-types
 *
 * @author  ShuQingZai<overbeck.jack@qq.com> 2023/7/5 20:12
 */
enum PropertyType: string
{
    case STRING = 'string';
    case NUMBER = 'number';
    case INTEGER = 'integer';
    case BOOLEAN = 'boolean';

    case ARRAY = 'array';
    case OBJECT = 'object';

    case ANY = 'any';

    case Ref = 'ref';

    /**
     * Indicate whether a type is a scalar type, i.e. not an array or object.
     *
     * @author ShuQingZai<overbeck.jack@qq.com> 2023/7/5 20:20
     */
    public function isScalar(): bool
    {
        return in_array($this, self::scalar(), true);
    }

    public static function scalar(): array
    {
        return [
            self::STRING,
            self::NUMBER,
            self::INTEGER,
            self::BOOLEAN,
        ];
    }
}
