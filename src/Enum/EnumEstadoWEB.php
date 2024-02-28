<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;


class EnumEstadoWEB
{
    const INICIO = 1;
    const PROCESO = 2;
    const APROBADO = 3;
    const ANULADO = 4;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::INICIO:
                return 'INICIO';
            case self::PROCESO:
                return 'PROCESO';
            case self::APROBADO:
                return 'APROBADO';
            case self::ANULADO:
                return 'ANULADO';
            default:
                return '';
        }
    }
}
