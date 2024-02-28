<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;


class EnumNE_Status
{
    public const Validas = 1;
    public const Pendientes = 2;
    public const Erroneas = 3;
    public const Rechazadas = 4;
    public const Aceptadas = 5;

    private static $descriptions = [
        ['id' => self::Validas, 'code' => 'VAL', 'description' => 'Válidas'],
        ['id' => self::Pendientes, 'code' => 'PEN', 'description' => 'Pendientes'],
        ['id' => self::Erroneas, 'code' => 'ERR', 'description' => 'Erróneas'],
        ['id' => self::Rechazadas, 'code' => 'REC', 'description' => 'Rechazadas'],
        ['id' => self::Aceptadas, 'code' => 'ACE', 'description' => 'Aceptadas'],
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
