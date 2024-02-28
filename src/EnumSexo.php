<?php

namespace softdin\servicio;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumSexo
{
    public const M = 1;
    public const F = 2;

    private static $descriptions = [
        ['id' => self::M, 'code' => 'M', 'description' => 'Masculino'],
        ['id' => self::F, 'code' => 'F', 'description' => 'Femenino'],
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
