<?php

declare(strict_types=1);

namespace JsonSchema\Constraints\TypeCheck;

interface TypeCheckInterface
{
    public static function isObject($value): bool;

    public static function isArray($value): bool;

    /**
     * @return mixed
     */
    public static function propertyGet($value, $property);

    public static function propertySet(&$value, $property, $data): void;

    public static function propertyExists($value, $property): bool;

    public static function propertyCount($value): int;
}
