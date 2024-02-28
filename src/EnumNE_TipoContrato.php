<?php

namespace softdin\servicio;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumNE_TipoContrato
{
    const Termino_Fijo = 1;
    const Termino_Indefinido = 2;
    const Obra_Labor = 3;
    const Aprendizaje = 4;
    const Practicas_Pasantias = 5;

    private static $descriptions = [
        ['id' => self::Termino_Fijo, 'code' => 'Termino_Fijo', 'description' => "Termino Fijo"],
        ['id' => self::Termino_Indefinido, 'code' => 'Termino_Indefinido', 'description' => "Termino Indefinido"],
        ['id' => self::Obra_Labor, 'code' => 'Obra_Labor', 'description' => "Obra Labor"],
        ['id' => self::Aprendizaje, 'code' => 'Aprendizaje', 'description' => "Aprendizaje"],
        ['id' => self::Practicas_Pasantias, 'code' => 'Practicas_Pasantias', 'description' => "Prácticas o Pasantías"]
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
