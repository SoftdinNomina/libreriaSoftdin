<?php

namespace softdin\servicio;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumDiasSemana
{
    const LUNES = 1;
    const MARTES = 2;
    const MIERCOLES = 3;
    const JUEVES = 4;
    const VIERNES = 5;
    const SABADO = 6;
    const DOMINGO = 7;

    private static $descriptions = [
        ['id' => self::LUNES, 'code' => 'LUN', 'description' => 'LUNES'],
        ['id' => self::MARTES, 'code' => 'MAR', 'description' => 'MARTES'],
        ['id' => self::MIERCOLES, 'code' => 'MIE', 'description' => 'MIÉRCOLES'],
        ['id' => self::JUEVES, 'code' => 'JUE', 'description' => 'JUEVES'],
        ['id' => self::VIERNES, 'code' => 'VIE', 'description' => 'VIERNES'],
        ['id' => self::SABADO, 'code' => 'SAB', 'description' => 'SÁBADO'],
        ['id' => self::DOMINGO, 'code' => 'DOM', 'description' => 'DOMINGO'],
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
