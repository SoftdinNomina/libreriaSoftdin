<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumStatusWeb
{
    public const INICIO = 1;
    public const PROCESO = 2;
    public const APROBADO = 3;
    public const ANULADO = 4;

    private static $descriptions = [
        ['id' => self::INICIO, 'code' => 'INICIO', 'description' => 'Inicio'],
        ['id' => self::PROCESO, 'code' => 'PROCESO', 'description' => 'Proceso'],
        ['id' => self::APROBADO, 'code' => 'APROBADO', 'description' => 'Aprobado'],
        ['id' => self::ANULADO, 'code' => 'ANULADO', 'description' => 'Anulado'],
    ];


    public static function getCollection()
    {
        return collect(self::$descriptions);
    }

    public static function getById($id)
    {
        return self::getCollection()->firstWhere('id', $id) ?? null;
    }

    private static $colorMapping = [
        'primary' => 'Inicio',
        'warning' => 'Proceso',
        'success' => 'Aprobado',
        'danger' => 'Anulado', // Default color for unknown states
    ];

    public static function getColor($campo)
    {
        $colorArray = [];

        foreach (self::$colorMapping as $color => $description) {
            $descriptionEntry = array_filter(self::$descriptions, fn($item) => $item['description'] === $description);
            if (!empty($descriptionEntry)) {
                $colorArray[$color] = $descriptionEntry[$campo];
            } else {
                $colorArray[$color] = null; // Manejar el caso en que el campo no exista
            }
        }

        return $colorArray;
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
