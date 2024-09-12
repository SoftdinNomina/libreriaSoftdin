<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumModulosNovedades
{
    const APORTE_VOLUNTARIO_SEGURIDAD_SOCIAL = 1;
    const EMBARGOS = 2;
    const HORAS_EXTRAS = 3;
    const FONDOS_AHORRO_REGISTROS = 4;
    const FONDOS_AHORRO_PAGO = 5;
    const INCAPACIDAD_VALORIZADA = 6;
    const INGRESOS_DESCUENTOS_CONSECUTIVOS = 7;
    const NOVEDADES_CARGOS = 8;
    const BENEFICIO_PERSONAL = 9;
    const NOVEDADES_SEGURIDAD_SOCIAL = 10;
    const NOVEDADES_RETE_FUENTE = 11;
    const OTROS_INGRESOS_DESCUENTOS = 12;
    const PAGOS_EXTERNOS = 13;
    const PAGO_LABOR = 14;
    const PAGO_PRODUCCION = 15;
    const PRESTAMOS = 16;

    private static $descriptions = [
        ['id' => self::APORTE_VOLUNTARIO_SEGURIDAD_SOCIAL, 'code' => 'APORTE_VOLUNTARIO_SEGURIDAD_SOCIAL', 'description' => "Aporte Voluntario Seguridad Social"],
        ['id' => self::EMBARGOS, 'code' => 'EMBARGOS', 'description' => "Embargos"],
        ['id' => self::HORAS_EXTRAS, 'code' => 'HORAS_EXTRAS', 'description' => "Horas Extras"],
        ['id' => self::FONDOS_AHORRO_REGISTROS, 'code' => 'FONDOS_AHORRO_REGISTROS', 'description' => "Fondos Ahorro Registros"],
        ['id' => self::FONDOS_AHORRO_PAGO, 'code' => 'FONDOS_AHORRO_PAGO', 'description' => "Fondos Ahorro Pago"],
        ['id' => self::INCAPACIDAD_VALORIZADA, 'code' => 'INCAPACIDAD_VALORIZADA', 'description' => "Incapacidad Valorizada"],
        ['id' => self::INGRESOS_DESCUENTOS_CONSECUTIVOS, 'code' => 'INGRESOS_DESCUENTOS_CONSECUTIVOS', 'description' => "Ingresos Descuentos Consecutivos"],
        ['id' => self::NOVEDADES_CARGOS, 'code' => 'NOVEDADES_CARGOS', 'description' => "Novedades Cargos"],
        ['id' => self::BENEFICIO_PERSONAL, 'code' => 'BENEFICIO_PERSONAL', 'description' => "Beneficio Personal"],
        ['id' => self::NOVEDADES_SEGURIDAD_SOCIAL, 'code' => 'NOVEDADES_SEGURIDAD_SOCIAL', 'description' => "Novedades Seguridad Social"],
        ['id' => self::NOVEDADES_RETE_FUENTE, 'code' => 'NOVEDADES_RETE_FUENTE', 'description' => "Novedades Rete Fuente"],
        ['id' => self::OTROS_INGRESOS_DESCUENTOS, 'code' => 'OTROS_INGRESOS_DESCUENTOS', 'description' => "Otros Ingresos Descuentos"],
        ['id' => self::PAGOS_EXTERNOS, 'code' => 'PAGOS_EXTERNOS', 'description' => "Pagos Externos"],
        ['id' => self::PAGO_LABOR, 'code' => 'PAGO_LABOR', 'description' => "Pago Labor"],
        ['id' => self::PAGO_PRODUCCION, 'code' => 'PAGO_PRODUCCION', 'description' => "Pago Producción"],
        ['id' => self::PRESTAMOS, 'code' => 'PRESTAMOS', 'description' => "Préstamos"],
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
