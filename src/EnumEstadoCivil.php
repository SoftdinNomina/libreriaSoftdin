<?php

namespace softdin\servicio;

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
        ['id' => self::SOLTERO, 'code' => 'SOL', 'description' => 'SOLTERO(A)'],
        ['id' => self::CASADO, 'code' => 'CAS', 'description' => 'CASADO(A)'],
        ['id' => self::DIVORCIADO, 'code' => 'DIV', 'description' => 'DIVORCIADO(A)'],
        ['id' => self::SEPARADO, 'code' => 'SEP', 'description' => 'SEPARADO(A)'],
        ['id' => self::VIUDO, 'code' => 'VIU', 'description' => 'VIUDO(A)'],
        ['id' => self::UNION_LIBRE, 'code' => 'ULI', 'description' => 'UNION LIBRE'],
        ['id' => self::NO_DEFINIDO, 'code' => 'NDF', 'description' => 'NO DEFINIDO'],
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

