<?php

namespace softdin\servicio;

use ReflectionClass;
use Illuminate\Support\Collection;


class EnumIncapacidades
{
    const IGE_IncapacidadGeneral = EnumVariablesSistema::IGE_IncapacidadGeneral;
    const IRP_IncapacidadAccidenteTrabajo = EnumVariablesSistema::IRP_IncapacidadAccidenteTrabajo;
    const LMA_LicenciaMaternidad = EnumVariablesSistema::LMA_LicenciaMaternidad;

    private static $descriptions = [
        ["id" => self::IGE_IncapacidadGeneral, "code" => "IGE", "description" => "Incapacidad General por Enfermedad"],
        ["id" => self::IRP_IncapacidadAccidenteTrabajo, "code" => "IRP", "description" => "Incapacidad por Riesgo Profesional"],
        ["id" => self::LMA_LicenciaMaternidad, "code" => "LMA", "description" => "Licencia de Maternidad"],
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

    public static function getDescription($value)
    {
        $refClass = new ReflectionClass(__CLASS__);
        $constants = $refClass->getConstants();

        foreach ($constants as $name => $val) {
            if ($val === $value) {
                return self::getDescriptionByName($name);
            }
        }

        return null;
    }

    private static function getDescriptionByName($name)
    {
        $reflection = new ReflectionClass(__CLASS__);
        $attribute = $reflection->getProperty($name);
        $description = $attribute->getAttributes()[0]->newInstance()->getDescription();

        return $description;
    }
}
