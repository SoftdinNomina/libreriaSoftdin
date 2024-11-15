<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumModulos
{
    public const CONTRATACION = 1;
    public const PRESTAMO = 2;
    // public const TIEMPO = 3;

    private static $descriptions = [
        ['id' => self::CONTRATACION, 'code' => 'CONTRATACION', 'description' => 'Contratacion'],
        ['id' => self::PRESTAMO, 'code' => 'PRESTAMO', 'description' => 'Prestamo'],
        // ['id' => self::TIEMPO, 'code' => 'TIEMPO', 'description' => 'Registro de Tiempo Suplementario'],
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
