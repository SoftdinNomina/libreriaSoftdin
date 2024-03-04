<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumEstadoCalendario
{
    const NORMAL = 1;
    const FERIADO = 2;

    private static $descriptions = [
        ['id' => self::NORMAL, 'code' => 'NORMAL', 'description' => 'Normal'],
        ['id' => self::FERIADO, 'code' => 'FERIADO', 'description' => 'Feriado'],
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
