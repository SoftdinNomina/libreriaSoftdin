<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumEstadoCivil
{
    const soltero = 1;
    const casado = 2;
    const divorcio = 3;
    const separado = 4;
    const viudo = 5;
    const unionLibre = 6;
    const noDefinico = 0;

    private static $descriptions = [
        ['id' => self::SOLTERO, 'code' => 'SOLTERO', 'description' => 'Soltero(A)'],
        ['id' => self::CASADO, 'code' => 'CASADO', 'description' => 'Casado(A)'],
        ['id' => self::DIVORCIADO, 'code' => 'DIVORCIADO', 'description' => 'Divorciado(A)'],
        ['id' => self::SEPARADO, 'code' => 'SEPARADO', 'description' => 'Separado(A)'],
        ['id' => self::VIUDO, 'code' => 'VIUDO', 'description' => 'Viudo(A)'],
        ['id' => self::UNION_LIBRE, 'code' => 'UNION_LIBRE', 'description' => 'Union Libre'],
        ['id' => self::NO_DEFINIDO, 'code' => 'NO_DEFINIDO', 'description' => 'NO Definido'],
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

