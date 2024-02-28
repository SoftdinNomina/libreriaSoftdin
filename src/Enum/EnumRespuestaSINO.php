<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;


class EnumRespuestaSINO
{
    public const SI = 1;
    public const NO = 0;

    private static $descriptions = [
        ['id' => self::SI, 'code' => 'SI', 'description' => 'Sí'],
        ['id' => self::NO, 'code' => 'NO', 'description' => 'No'],
    ];

    public static function getCollection()
    {
        return collect(self::$descriptions);
    }

    public static function getById($id)
    {
        return self::getCollection()->firstWhere('id', $id) ?? null;
    }

    public static function getAll()
    {
        return self::$descriptions;
    }

    public static function getByDescription($description)
    {
        return self::getCollection()->firstWhere('description', $description) ?? null;
    }

}
