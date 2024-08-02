<?php

namespace softdin\servicio\Enum;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumConceptosCertificacion
{
    const NIT = 1;
    const RAZON_SOCIAL = 2;
    const SIGLA = 3;
    const REPRESENTANTE_LEGAL = 4;
    const TIPO_IDENTIFICACION = 5;
    const IDENTIFICACION = 6;
    const LUGAR_EXPEDICION = 7;
    const APELLIDOS_NOMBRES = 8;
    const CARGO = 9;
    const SALARIO = 10;
    const FECHA_PERIODO_INICIO_LARGO = 11;
    const FECHA_PERIODO_INICIO_CORTO = 12;
    const FECHA_PERIODO_FINAL_LARGO = 13;
    const FECHA_PERIODO_FINAL_CORTO = 14;
    const SUCURSAL = 15;
    const SEDE = 16;
    const DIVISION = 17;
    const TIPO_CONTRATO = 18;
    const AREA_TRABAJO = 19;
    const BANCO = 20;
    const TIPO_CUENTA_BANCARIA = 21;
    const CUENTA_BANCARIA = 22;
    const EPS = 23;
    const AFP = 24;
    const CESANTIAS = 25;
    const MOTIVO_RETIRO = 26;
    const FECHA_ACTUAL_LARGO = 27;
    const FECHA_ACTUAL_CORTO = 27;
    const DESCRIPCION_CARGO = 29;
    const SALARIO_LETRAS = 30;
    const DESCRIPCION_CONTRATO = 31;
    const PRESTACION_SERVICIO = 32;
    const MODALIDAD_CONTRATACION = 33;
    const PORCENTAJE_ARL = 34;
    const CEDULA_REPRESENTANTE_LEGAL = 35;
    const CCF = 36;
    const FECHA_NACIMIENTO_LARGO = 37;
    const FECHA_NACIMIENTO_CORTO = 38;
    const BARRIO = 39;
    const DIRECCION_RESIDENCIAL = 40;
    const LUGAR_NACIMIENTO = 41;
    const OBJETIVO_CONTRATO = 42;
    const RETEFUENTE_PROCEDIMIENTO = 43;
    const BONIFICACION_HS = 44;
    const CONSECUTIVO_CONTRATO = 45;
    const PERIODO_PRUEBA = 46;
    const SALARIO_DIA = 47;
    const DURACION_CONTRATO = 48;
    const TELEFONO = 49;
    const CELULAR = 50;
    const EMAIL = 51;
    const TEL_EMERGENCIA = 52;

    private static $descriptions = [
        ['id' => self::NIT, 'code' => "NIT", 'description' => '<<01>>'],
        ['id' => self::RAZON_SOCIAL, 'code' => "RAZON SOCIAL", 'description' => '<<02>>'],
        ['id' => self::SIGLA, 'code' => "SIGLA", 'description' => '<<03>>'],
        ['id' => self::REPRESENTANTE_LEGAL, 'code' => "REPRESENTANTE LEGAL", 'description' => '<<04>>'],
        ['id' => self::TIPO_IDENTIFICACION, 'code' => "TIPO IDENTIFICACION", 'description' => '<<05>>'],
        ['id' => self::IDENTIFICACION, 'code' => "IDENTIFICACION", 'description' => '<<06>>'],
        ['id' => self::LUGAR_EXPEDICION, 'code' => "LUGAR EXPEDICION", 'description' => '<<07>>'],
        ['id' => self::APELLIDOS_NOMBRES, 'code' => "APELLIDOS NOMBRES", 'description' => '<<08>>'],
        ['id' => self::CARGO, 'code' => "CARGO", 'description' => '<<09>>'],
        ['id' => self::SALARIO, 'code' => "SALARIO", 'description' => '<<10>>'],
        ['id' => self::FECHA_PERIODO_INICIO_LARGO, 'code' => "FECHA PERIODO INICIO LARGO", 'description' => '<<11>>'],
        ['id' => self::FECHA_PERIODO_INICIO_CORTO, 'code' => "FECHA PERIODO INICIO CORTO", 'description' => '<<12>>'],
        ['id' => self::FECHA_PERIODO_FINAL_LARGO, 'code' => "FECHA PERIODO FINAL LARGO", 'description' => '<<13>>'],
        ['id' => self::FECHA_PERIODO_FINAL_CORTO, 'code' => "FECHA PERIODO FINAL CORTO", 'description' => '<<14>>'],
        ['id' => self::SUCURSAL, 'code' => "SUCURSAL", 'description' => '<<15>>'],
        ['id' => self::SEDE, 'code' => "SEDE", 'description' => '<<16>>'],
        ['id' => self::DIVISION, 'code' => "DIVISION", 'description' => '<<17>>'],
        ['id' => self::TIPO_CONTRATO, 'code' => "TIPO CONTRATO", 'description' => '<<18>>'],
        ['id' => self::AREA_TRABAJO, 'code' => "AREA TRABAJO", 'description' => '<<19>>'],
        ['id' => self::BANCO, 'code' => "BANCO", 'description' => '<<20>>'],
        ['id' => self::TIPO_CUENTA_BANCARIA, 'code' => "TIPO CUENTA BANCARIA", 'description' => '<<21>>'],
        ['id' => self::CUENTA_BANCARIA, 'code' => "CUENTA BANCARIA", 'description' => '<<22>>'],
        ['id' => self::EPS, 'code' => "EPS", 'description' => '<<23>>'],
        ['id' => self::AFP, 'code' => "AFP", 'description' => '<<24>>'],
        ['id' => self::CESANTIAS, 'code' => "CESANTIAS", 'description' => '<<25>>'],
        ['id' => self::MOTIVO_RETIRO, 'code' => "MOTIVO RETIRO", 'description' => '<<26>>'],
        ['id' => self::FECHA_ACTUAL_LARGO, 'code' => "FECHA ACTUAL LARGO", 'description' => '<<27>>'],
        ['id' => self::FECHA_ACTUAL_CORTO, 'code' => "FECHA ACTUAL CORTO", 'description' => '<<27>>'],
        ['id' => self::DESCRIPCION_CARGO, 'code' => "DESCRIPCION CARGO", 'description' => '<<29>>'],
        ['id' => self::SALARIO_LETRAS, 'code' => "SALARIO LETRAS", 'description' => '<<30>>'],
        ['id' => self::DESCRIPCION_CONTRATO, 'code' => "DESCRIPCION CONTRATO", 'description' => '<<31>>'],
        ['id' => self::PRESTACION_SERVICIO, 'code' => "PRESTACION SERVICIO", 'description' => '<<32>>'],
        ['id' => self::MODALIDAD_CONTRATACION, 'code' => "MODALIDAD CONTRATACION", 'description' => '<<33>>'],
        ['id' => self::PORCENTAJE_ARL, 'code' => "PORCENTAJE ARL", 'description' => '<<34>>'],
        ['id' => self::CEDULA_REPRESENTANTE_LEGAL, 'code' => "CEDULA REPRESENTANTE LEGAL", 'description' => '<<35>>'],
        ['id' => self::CCF, 'code' => "CCF", 'description' => '<<36>>'],
        ['id' => self::FECHA_NACIMIENTO_LARGO, 'code' => "FECHA NACIMIENTO LARGO", 'description' => '<<37>>'],
        ['id' => self::FECHA_NACIMIENTO_CORTO, 'code' => "FECHA NACIMIENTO CORTO", 'description' => '<<38>>'],
        ['id' => self::BARRIO, 'code' => "BARRIO", 'description' => '<<39>>'],
        ['id' => self::DIRECCION_RESIDENCIAL, 'code' => "DIRECCION RESIDENCIAL", 'description' => '<<40>>'],
        ['id' => self::LUGAR_NACIMIENTO, 'code' => "LUGAR NACIMIENTO", 'description' => '<<41>>'],
        ['id' => self::OBJETIVO_CONTRATO, 'code' => "OBJETIVO CONTRATO", 'description' => '<<42>>'],
        ['id' => self::RETEFUENTE_PROCEDIMIENTO, 'code' => "RETEFUENTE PROCEDIMIENTO", 'description' => '<<43>>'],
        ['id' => self::BONIFICACION_HS, 'code' => "BONIFICACION HS", 'description' => '<<44>>'],
        ['id' => self::CONSECUTIVO_CONTRATO, 'code' => "CONSECUTIVO CONTRATO", 'description' => '<<45>>'],
        ['id' => self::PERIODO_PRUEBA, 'code' => "PERIODO PRUEBA", 'description' => '<<46>>'],
        ['id' => self::SALARIO_DIA, 'code' => "SALARIO DIA", 'description' => '<<47>>'],
        ['id' => self::DURACION_CONTRATO, 'code' => "DURACION CONTRATO", 'description' => '<<48>>'],
        ['id' => self::TELEFONO, 'code' => "TELEFONO", 'description' => '<<49>>'],
        ['id' => self::CELULAR, 'code' => "CELULAR", 'description' => '<<50>>'],
        ['id' => self::EMAIL, 'code' => "EMAIL", 'description' => '<<51>>'],
        ['id' => self::TEL_EMERGENCIA, 'code' => "TEL EMERGENCIA", 'description' => '<<52>>'],
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
