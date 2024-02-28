<?php

namespace softdin\servicio;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumEstadoCalendario
{
    const NORMAL = 1;
    const FERIADO = 2;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::NORMAL:
                return 'NORMAL';
            case self::FERIADO:
                return 'FERIADO';
            default:
                return '';
        }
    }
    
}
