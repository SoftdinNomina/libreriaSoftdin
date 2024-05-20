<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumEstadoCivil
{
    const SOLTERO = 1;
    const CASADO = 2;
    const DIVORCIADO = 3;
    const SEPARADO = 4;
    const VIUDO = 5;
    const UNION_LIBRE = 6;
    const NO_DEFINIDO = 0;

    private static $descriptions = [
        ['id' => self::SOLTERO, 'code' => 'SOLTERO', 'description' => 'Soltero(A)'],
        ['id' => self::CASADO, 'code' => 'CASADO', 'description' => 'Casado(A)'],
        ['id' => self::DIVORCIADO, 'code' => 'DIVORCIADO', 'description' => 'Divorciado(A)'],
        ['id' => self::SEPARADO, 'code' => 'SEPARADO', 'description' => 'Separado(A)'],
        ['id' => self::VIUDO, 'code' => 'VIUDO', 'description' => 'Viudo(A)'],
        ['id' => self::UNION_LIBRE, 'code' => 'UNION_LIBRE', 'description' => 'Union Libre'],
        ['id' => self::NO_DEFINIDO, 'code' => 'NO_DEFINIDO', 'description' => 'NO Definido'],
    ];

    private static $colorMapping = [
        'primary' => self::SOLTERO,
        'warning' => self::CASADO,
        'success' => self::DIVORCIADO,
        'indigo' => self::SEPARADO,
        'fuchsia' => self::VIUDO,
        'emerald' => self::UNION_LIBRE,
        'danger' => self::NO_DEFINIDO, // Default color for unknown states
    ];

    public static function getColor($campo): array
    {
        $colorArray = [];

        foreach (self::$colorMapping as $color => $description) {
            $descriptionEntry = array_filter(self::$descriptions, fn($item) => $item['id'] === $description);
            if (!empty($descriptionEntry)) {
                $colorArray[$color] = array_shift($descriptionEntry)[$campo];
            } else {
                $colorArray[$color] = null; // Manejar el caso en que el campo no exista
            }
        }
        return $colorArray;
    }

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

