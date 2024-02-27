<?php

namespace Softdin\Servicio;

use ReflectionClass;
use Illuminate\Support\Collection;

class EnumConceptosContrato
{
    const AREATRABAJO = 1;
    const CARGO = 2;
    const DIVISION = 3;
    const MODALIDADSERVICIO = 4;
    const SEDE = 5;
    const SUCURSAL = 6;
    const SUCURSALPILA = 7;
    const TIPOCONTRATO = 8;

    private static $descriptions = [
        ['id' => self::AREATRABAJO, 'code' => 'AREATRABAJO', 'description' => "Area de Trabajo"],
        ['id' => self::CARGO, 'codigo' => 'CARGO', 'description' => "Cargo"],
        ['id' => self::DIVISION, 'codigo' => 'DIVISION', 'description' => "División"],
        ['id' => self::MODALIDADSERVICIO, 'codigo' => 'MODALIDADSERVICIO', 'description' => "Modalidad de Servicio"],
        ['id' => self::SEDE, 'codigo' => 'SEDE', 'description' => "Sede"],
        ['id' => self::SUCURSAL, 'codigo' => 'SUCURSAL', 'description' => "Sucursal"],
        ['id' => self::SUCURSALPILA, 'codigo' => 'SUCURSALPILA', 'description' => "Sucursal PILA"],
        ['id' => self::TIPOCONTRATO, 'codigo' => 'TIPOCONTRATO', 'description' => "Tipo de Contrato"],
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

class EnumReteFuenteProcedimiento
{
    const PROCED_UNO = 1;
    const PROCED_DOS = 2;

    private static $descriptions = [
        ['id' => self::PROCED_UNO, 'code' => 'PROCED1', 'description' => "Procedimiento UNO"],
        ['id' => self::PROCED_DOS, 'code' => 'PROCED2', 'description' => "Procedimiento DOS"],
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
    const PORCENTAJE_ARP = 34;
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
        ['id' => self::PORCENTAJE_ARP, 'code' => "PORCENTAJE ARP", 'description' => '<<34>>'],
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

class EnumVariablesSistema
{
    const AFC_Cuenta = 115;
    const Ahorro = 59;
    const Anticipo = 122;
    const Aporte_ARP = 1;
    const Aporte_CCF = 2;
    const Aporte_Empleado_AFP = 3;
    const Aporte_Empleado_EPS = 4;
    const Aporte_Empleador_AFP = 5;
    const Aporte_Empleador_EPS = 6;
    const Aporte_ESAP = 7;
    const Aporte_ICBF = 8;
    const Aporte_MinisterioEducacion = 9;
    const Aporte_Sena = 10;
    const Aporte_Valor_UPC_Adicional = 11;
    const Aporte_Voluntario_AFP_Empleador = 12;
    const Aporte_Voluntario_AFP_NoRetenido = 13;
    const Aporte_Voluntario_AFP_InversionEmpleado = 14;
    const Aporte_Voluntario_AFP_ObligatorioEmpleado = 15;
    const ApoyoASostenimiento = 108;
    const Auxilio = 114;
    const Base_Reduccion_ReteFuente = 90;
    const Base_Prestacional = 123;
    const Base_SeguridadSocial = 124;
    const Bonificacion_HS = 96;
    const Bonificacion = 112;
    const Bono = 118;
    const Bono_PagoAlimentacion = 120;
    const Comision = 16;
    const Compensacion_ExtraOrdinaria = 16;
    const Compensacion_Ordinaria = 117;
    const Cooperativa = 119;
    const CuotaSostenimiento = 82;
    const CostoNomina = 74;
    const ContarDIAS = 104;
    const DeudaTerceros = 121;
    const Dotacion = 107;
    const Educacion = 113;
    const EmbargoAlimento = 17;
    const EmbargoComercial = 18;
    const EmbargoCooperativa = 19;
    const Fondo = 20;
    const FondoFSP_Solidaridad = 21;
    const FondoFSP_Subsistencia = 22;
    const Gastos_Representacion = 103;
    const HoraExtraDiurna = 83;
    const HoraExtraNocturna = 84;
    const HoraExtraDominicalDiurna = 85;
    const HoraExtraDominicalNocturna = 86;
    const HoraDominical = 87;
    const HuelgaLegal = 116;
    const Indegnizacion = 23;
    const IndegnizacionRetiro = 110;
    const Ingresos_No_Prestacionales = 105;
    const Intereses = 24;
    const Libranza = 126;
    const Liquidacion_Cesantias = 25;
    const Liquidacion_IntCesantias = 26;
    const Liquidacion_Primas = 27;
    const Liquidacion_Vacaciones = 28;
    const Liquidacion_Prima_Vacaciones = 101;
    const Liquidacion_Prima_Convencional = 102;
    const No_Aplicar_Tiempo = 95;
    const Pago_IncapARP_ARP = 29;
    const Pago_Tercero = 127;
    const Pago_IncapARP_Patron = 30;
    const Pago_IncapIGE_EPS = 31;
    const Pago_IncapIGE_Patron = 32;
    const Pago_IncapLMA_EPS = 33;
    const Prestamos = 34;
    const Provision_Cesantias = 35;
    const Provision_IntCesantias = 36;
    const Provision_Primas = 37;
    const Provision_Vacaciones = 38;
    const Provision_Prima_Vacaciones = 99;
    const Provision_Prima_Convencional = 100;
    const RecargoNocturno = 39;
    const RecargoNocturnoDominical = 88;
    const RecargoNocturnoEspecial = 89;
    const Reintegro = 111;
    const Retefuente = 40;
    const RetroActivo_Salario = 93;
    const RetroActivo_HorasExtras = 98;
    const RetroActivo_Vacaciones = 95;
    const Salario = 41;
    const Saldo_Negativo = 42;
    const Saldo_Positivo = 43;
    const SancionPublica = 125;
    const SancionPrivada = 126;
    const Sindicato = 103;
    const SubsidioTransporte = 44;
    const Teletrabajo = 109;
    const ValesAlimentacion = 92;
    const Viatico = 102;
    const IGE_IncapacidadGeneral = 45;
    const IRP_IncapacidadAccidenteTrabajo = 46;
    const LMA_LicenciaMaternidad = 47;
    const SLN_SuspencionTemporalLicenciaNoRemunerada = 48;
    const VST_VariacionTransitoriaSalario = 49;
    const VSP_VariacionPermanenteSalario = 50;
    const TDE_TrasladoDesdeOtraEPS = 51;
    const TAE_TrasladoAotraEPS = 52;
    const TDP_TrasladoDesdeOtraAFP = 53;
    const TAP_TrasladoAotraAFP = 54;
    const VTE_CambioTarifaEspecial = 55;
    const AFP_AporteVoluntario = 56;
    const VCT_VariacionCentrosTrabajo = 57;
    const Dia_NoTrabajado = 94;
    const LRM_LicenciaRemunerada = 106;
    const CuentaPorPagar = 58;
    const Cambio_TipoCotizante = 60;
    const Cambio_SubTipoCotizante = 61;
    const Cambio_CuentaBancaria = 62;
    const Cambio_RubroContable = 63;
    const Cambio_Sucursal = 64;
    const Cambio_SucursalPILA = 91;
    const Cambio_Sede = 65;
    const Cambio_Division = 66;
    const Cambio_TipoPagoSubTransporte = 67;
    const Cambio_Cargo = 68;
    const Cambio_Contrato = 69;
    const Cambio_CajaCompensacion = 70;
    const Cambio_FondoCesantias = 71;
    const Cambio_PorcentajePPD = 72;
    const Cambio_PorcentajeARP = 73;
    const Cambio_Extranjero = 75;
    const Cambio_ResideExterior = 76;
    const Cambio_ReteFuente = 97;
    const Cambio_PoseeCuenta = 77;
    const Cambio_TipoPago = 78;
    const Cambio_AreaTrabajo = 79;
    const Cambio_Activo = 80;
    const Cambio_Revincular = 81;

    private static $descriptions = [
        ["id" => self::AFC_Cuenta, "code" => "AFC_Cuenta", "description" => "OTROS"],
        ["id" => self::Ahorro, "code" => "Ahorro", "description" => "OTROS"],
        ["id" => self::Anticipo, "code" => "Anticipo", "description" => "OTROS"],
        ["id" => self::Aporte_ARP, "code" => "Aporte_ARP", "description" => "PROV_SEGSOC"],
        ["id" => self::Aporte_CCF, "code" => "Aporte_CCF", "description" => "PROV_SEGSOC"],
        ["id" => self::Aporte_Empleado_AFP, "code" => "Aporte_Empleado_AFP", "description" => "OTROS"],
        ["id" => self::Aporte_Empleado_EPS, "code" => "Aporte_Empleado_EPS", "description" => "OTROS"],
        ["id" => self::Aporte_Empleador_AFP, "code" => "Aporte_Empleador_AFP", "description" => "PROV_SEGSOC"],
        ["id" => self::Aporte_Empleador_EPS, "code" => "Aporte_Empleador_EPS", "description" => "PROV_SEGSOC"],
        ["id" => self::Aporte_ESAP, "code" => "Aporte_ESAP", "description" => "PROV_SEGSOC"],
        ["id" => self::Aporte_ICBF, "code" => "Aporte_ICBF", "description" => "PROV_SEGSOC"],
        ["id" => self::Aporte_MinisterioEducacion, "code" => "Aporte_MinisterioEducacion", "description" => "PROV_SEGSOC"],
        ["id" => self::Aporte_Sena, "code" => "Aporte_Sena", "description" => "PROV_SEGSOC"],
        ["id" => self::Aporte_Valor_UPC_Adicional, "code" => "Aporte_Valor_UPC_Adicional", "description" => "OTROS"],
        ["id" => self::Aporte_Voluntario_AFP_Empleador, "code" => "Aporte_Voluntario_AFP_Empleador", "description" => "OTROS"],
        ["id" => self::Aporte_Voluntario_AFP_NoRetenido, "code" => "Aporte_Voluntario_AFP_NoRetenido", "description" => "OTROS"],
        ["id" => self::Aporte_Voluntario_AFP_InversionEmpleado, "code" => "Aporte_Voluntario_AFP_InversionEmpleado", "description" => "OTROS"],
        ["id" => self::Aporte_Voluntario_AFP_ObligatorioEmpleado, "code" => "Aporte_Voluntario_AFP_ObligatorioEmpleado", "description" => "OTROS"],
        ["id" => self::ApoyoASostenimiento, "code" => "ApoyoASostenimiento", "description" => "OTROS"],
        ["id" => self::Auxilio, "code" => "Auxilio", "description" => "OTROS"],
        ["id" => self::Base_Reduccion_ReteFuente, "code" => "Base_Reduccion_ReteFuente", "description" => "OTROS"],
        ["id" => self::Base_Prestacional, "code" => "Base_Prestacional", "description" => "AGRUPAR"],
        ["id" => self::Base_SeguridadSocial, "code" => "Base_SeguridadSocial", "description" => "AGRUPAR"],
        ["id" => self::Bonificacion_HS, "code" => "Bonificacion_HS", "description" => "OTROS"],
        ["id" => self::Bonificacion, "code" => "Bonificacion", "description" => "OTROS"],
        ["id" => self::Bono, "code" => "Bono", "description" => "OTROS"],
        ["id" => self::Bono_PagoAlimentacion, "code" => "Bono_PagoAlimentacion", "description" => "OTROS"],
        ["id" => self::Comision, "code" => "Comision", "description" => "OTROS"],
        ["id" => self::Compensacion_ExtraOrdinaria, "code" => "Compensacion_ExtraOrdinaria", "description" => "OTROS"],
        ["id" => self::Compensacion_Ordinaria, "code" => "Compensacion_Ordinaria", "description" => "OTROS"],
        ["id" => self::Cooperativa, "code" => "Cooperativa", "description" => "OTROS"],
        ["id" => self::CuotaSostenimiento, "code" => "CuotaSostenimiento", "description" => "OTROS"],
        ["id" => self::CostoNomina, "code" => "CostoNomina", "description" => "OTROS"],
        ["id" => self::ContarDIAS, "code" => "ContarDIAS", "description" => "FORMULA"],
        ["id" => self::DeudaTerceros, "code" => "DeudaTerceros", "description" => "OTROS"],
        ["id" => self::Dotacion, "code" => "Dotacion", "description" => "OTROS"],
        ["id" => self::Educacion, "code" => "Educacion", "description" => "OTROS"],
        ["id" => self::EmbargoAlimento, "code" => "EmbargoAlimento", "description" => "OTROS"],
        ["id" => self::EmbargoComercial, "code" => "EmbargoComercial", "description" => "OTROS"],
        ["id" => self::EmbargoCooperativa, "code" => "EmbargoCooperativa", "description" => "OTROS"],
        ["id" => self::Fondo, "code" => "Fondo", "description" => "OTROS"],
        ["id" => self::FondoFSP_Solidaridad, "code" => "FondoFSP_Solidaridad", "description" => "OTROS"],
        ["id" => self::FondoFSP_Subsistencia, "code" => "FondoFSP_Subsistencia", "description" => "OTROS"],
        ["id" => self::Gastos_Representacion, "code" => "Gastos_Representacion", "description" => "OTROS"],
        ["id" => self::HoraExtraDiurna, "code" => "HoraExtraDiurna", "description" => "HORAS_EXTRA"],
        ["id" => self::HoraExtraNocturna, "code" => "HoraExtraNocturna", "description" => "HORAS_EXTRA"],
        ["id" => self::HoraExtraDominicalDiurna, "code" => "HoraExtraDominicalDiurna", "description" => "HORAS_EXTRA"],
        ["id" => self::HoraExtraDominicalNocturna, "code" => "HoraExtraDominicalNocturna", "description" => "HORAS_EXTRA"],
        ["id" => self::HoraDominical, "code" => "HoraDominical", "description" => "HORAS_EXTRA"],
        ["id" => self::HuelgaLegal, "code" => "HuelgaLegal", "description" => "OTROS"],
        ["id" => self::Indegnizacion, "code" => "Indegnizacion", "description" => "OTROS"],
        ["id" => self::IndegnizacionRetiro, "code" => "IndegnizacionRetiro", "description" => "OTROS"],
        ["id" => self::Ingresos_No_Prestacionales, "code" => "Ingresos_No_Prestacionales", "description" => "OTROS"],
        ["id" => self::Intereses, "code" => "Intereses", "description" => "OTROS"],
        ["id" => self::Libranza, "code" => "Libranza", "description" => "OTROS"],
        ["id" => self::Liquidacion_Cesantias, "code" => "Liquidacion_Cesantias", "description" => "LIQUIDACION"],
        ["id" => self::Liquidacion_IntCesantias, "code" => "Liquidacion_IntCesantias", "description" => "LIQUIDACION"],
        ["id" => self::Liquidacion_Primas, "code" => "Liquidacion_Primas", "description" => "LIQUIDACION"],
        ["id" => self::Liquidacion_Vacaciones, "code" => "Liquidacion_Vacaciones", "description" => "LIQUIDACION"],
        ["id" => self::Liquidacion_Prima_Vacaciones, "code" => "Liquidacion_Prima_Vacaciones", "description" => "LIQUIDACION"],
        ["id" => self::Liquidacion_Prima_Convencional, "code" => "Liquidacion_Prima_Convencional", "description" => "LIQUIDACION"],
        ["id" => self::No_Aplicar_Tiempo, "code" => "No_Aplicar_Tiempo", "description" => "OTROS"],
        ["id" => self::Pago_IncapARP_ARP, "code" => "Pago_IncapARP_ARP", "description" => "OTROS"],
        ["id" => self::Pago_Tercero, "code" => "Pago_Tercero", "description" => "OTROS"],
        ["id" => self::Pago_IncapARP_Patron, "code" => "Pago_IncapARP_Patron", "description" => "OTROS"],
        ["id" => self::Pago_IncapIGE_EPS, "code" => "Pago_IncapIGE_EPS", "description" => "OTROS"],
        ["id" => self::Pago_IncapIGE_Patron, "code" => "Pago_IncapIGE_Patron", "description" => "OTROS"],
        ["id" => self::Pago_IncapLMA_EPS, "code" => "Pago_IncapLMA_EPS", "description" => "OTROS"],
        ["id" => self::Prestamos, "code" => "Prestamos", "description" => "OTROS"],
        ["id" => self::Provision_Cesantias, "code" => "Provision_Cesantias", "description" => "PROV_PREST"],
        ["id" => self::Provision_IntCesantias, "code" => "Provision_IntCesantias", "description" => "PROV_PREST"],
        ["id" => self::Provision_Primas, "code" => "Provision_Primas", "description" => "PROV_PREST"],
        ["id" => self::Provision_Vacaciones, "code" => "Provision_Vacaciones", "description" => "PROV_PREST"],
        ["id" => self::Provision_Prima_Vacaciones, "code" => "Provision_Prima_Vacaciones", "description" => "PROV_PREST"],
        ["id" => self::Provision_Prima_Convencional, "code" => "Provision_Prima_Convencional", "description" => "PROV_PREST"],
        ["id" => self::RecargoNocturno, "code" => "RecargoNocturno", "description" => "HORAS_EXTRA"],
        ["id" => self::RecargoNocturnoDominical, "code" => "RecargoNocturnoDominical", "description" => "HORAS_EXTRA"],
        ["id" => self::RecargoNocturnoEspecial, "code" => "RecargoNocturnoEspecial", "description" => "HORAS_EXTRA"],
        ["id" => self::Reintegro, "code" => "Reintegro", "description" => "OTROS"],
        ["id" => self::Retefuente, "code" => "Retefuente", "description" => "OTROS"],
        ["id" => self::RetroActivo_Salario, "code" => "RetroActivo_Salario", "description" => "OTROS"],
        ["id" => self::RetroActivo_HorasExtras, "code" => "RetroActivo_HorasExtras", "description" => "OTROS"],
        ["id" => self::RetroActivo_Vacaciones, "code" => "RetroActivo_Vacaciones", "description" => "OTROS"],
        ["id" => self::Salario, "code" => "Salario", "description" => "OTROS"],
        ["id" => self::Saldo_Negativo, "code" => "Saldo_Negativo", "description" => "OTROS"],
        ["id" => self::Saldo_Positivo, "code" => "Saldo_Positivo", "description" => "OTROS"],
        ["id" => self::SancionPublica, "code" => "SancionPublica", "description" => "OTROS"],
        ["id" => self::SancionPrivada, "code" => "SancionPrivada", "description" => "OTROS"],
        ["id" => self::Sindicato, "code" => "Sindicato", "description" => "OTROS"],
        ["id" => self::SubsidioTransporte, "code" => "SubsidioTransporte", "description" => "OTROS"],
        ["id" => self::Teletrabajo, "code" => "Teletrabajo", "description" => "OTROS"],
        ["id" => self::ValesAlimentacion, "code" => "ValesAlimentacion", "description" => "OTROS"],
        ["id" => self::Viatico, "code" => "Viatico", "description" => "OTROS"],
        ["id" => self::IGE_IncapacidadGeneral, "code" => "IGE_IncapacidadGeneral", "description" => "PLANILLA_UNICA"],
        ["id" => self::IRP_IncapacidadAccidenteTrabajo, "code" => "IRP_IncapacidadAccidenteTrabajo", "description" => "PLANILLA_UNICA"],
        ["id" => self::LMA_LicenciaMaternidad, "code" => "LMA_LicenciaMaternidad", "description" => "PLANILLA_UNICA"],
        ["id" => self::SLN_SuspencionTemporalLicenciaNoRemunerada, "code" => "SLN_SuspencionTemporalLicenciaNoRemunerada", "description" => "PLANILLA_UNICA"],
        ["id" => self::VST_VariacionTransitoriaSalario, "code" => "VST_VariacionTransitoriaSalario", "description" => "PLANILLA_UNICA"],
        ["id" => self::VSP_VariacionPermanenteSalario, "code" => "VSP_VariacionPermanenteSalario", "description" => "PLANILLA_UNICA"],
        ["id" => self::TDE_TrasladoDesdeOtraEPS, "code" => "TDE_TrasladoDesdeOtraEPS", "description" => "PLANILLA_UNICA"],
        ["id" => self::TAE_TrasladoAotraEPS, "code" => "TAE_TrasladoAotraEPS", "description" => "PLANILLA_UNICA"],
        ["id" => self::TDP_TrasladoDesdeOtraAFP, "code" => "TDP_TrasladoDesdeOtraAFP", "description" => "PLANILLA_UNICA"],
        ["id" => self::TAP_TrasladoAotraAFP, "code" => "TAP_TrasladoAotraAFP", "description" => "PLANILLA_UNICA"],
        ["id" => self::VTE_CambioTarifaEspecial, "code" => "VTE_CambioTarifaEspecial", "description" => "PLANILLA_UNICA"],
        ["id" => self::AFP_AporteVoluntario, "code" => "AFP_AporteVoluntario", "description" => "PLANILLA_UNICA"],
        ["id" => self::VCT_VariacionCentrosTrabajo, "code" => "VCT_VariacionCentrosTrabajo", "description" => "PLANILLA_UNICA"],
        ["id" => self::Dia_NoTrabajado, "code" => "Dia_NoTrabajado", "description" => "PLANILLA_UNICA"],
        ["id" => self::LRM_LicenciaRemunerada, "code" => "LRM_LicenciaRemunerada", "description" => "PLANILLA_UNICA"],
        ["id" => self::CuentaPorPagar, "code" => "CuentaPorPagar", "description" => "OTROS"],
        ["id" => self::Cambio_TipoCotizante, "code" => "Cambio_TipoCotizante", "description" => "CAMBIOS_V"],
        ["id" => self::Cambio_SubTipoCotizante, "code" => "Cambio_SubTipoCotizante", "description" => "CAMBIOS_V"],
        ["id" => self::Cambio_CuentaBancaria, "code" => "Cambio_CuentaBancaria", "description" => "CAMBIOS_V"],
        ["id" => self::Cambio_RubroContable, "code" => "Cambio_RubroContable", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Sucursal, "code" => "Cambio_Sucursal", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_SucursalPILA, "code" => "Cambio_SucursalPILA", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Sede, "code" => "Cambio_Sede", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Division, "code" => "Cambio_Division", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_TipoPagoSubTransporte, "code" => "Cambio_TipoPagoSubTransporte", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_CuentaContable, "code" => "Cambio_CuentaContable", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_CentroCosto, "code" => "Cambio_CentroCosto", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Actividad, "code" => "Cambio_Actividad", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Turno, "code" => "Cambio_Turno", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Horario, "code" => "Cambio_Horario", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Empleado, "code" => "Cambio_Empleado", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_CentroTrabajo, "code" => "Cambio_CentroTrabajo", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Cargo, "code" => "Cambio_Cargo", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Area, "code" => "Cambio_Area", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Sueldo, "code" => "Cambio_Sueldo", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_TipoPlanilla, "code" => "Cambio_TipoPlanilla", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_Concepto, "code" => "Cambio_Concepto", "description" => "CAMBIOS_C"],
        ["id" => self::Cambio_FinContrato, "code" => "Cambio_FinContrato", "description" => "CAMBIOS_C"],
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
    public static function getDescripcion($description)
    {
        $collection = collect();

        foreach (self::$descriptions as $key => $value) {
            if ($value['description'] === $description) {
                $collection->put($key, $value['id']);
            }
        }

        return $collection;
    }

}

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

class EnumCertificadoIngresosAportesListado
{
    const No36 = 1;
    const No37 = 2;
    const No38 = 3;
    const No39 = 4;
    const No40 = 5;
    const No41 = 6;
    const No42 = 7;
    const No43 = 8;
    const No44 = 9;
    const No45 = 10;
    const No46 = 11;
    const No47 = 12;
    const No48 = 13;
    const No49 = 14;
    const No50 = 15;
    const No51 = 16;
    const No52 = 17;
    const No53 = 18;
    const No54 = 19;
    const No55 = 20;

    private static $descriptions = [
        ["id" => self::No36, "code" => "No36", "description" => "36 Pagos por salario o emolumentos eclesiásticos"],
        ["id" => self::No37, "code" => "No37", "description" => "37 Pagos realizados en bonos electrónicos o de papel de servicios, cheques, tarjetas, vales, etc."],
        ["id" => self::No38, "code" => "No38", "description" => "38 Pagos por honorarios"],
        ["id" => self::No39, "code" => "No39", "description" => "39 Pagos por servicios"],
        ["id" => self::No40, "code" => "No40", "description" => "40 Pagos por comisiones"],
        ["id" => self::No41, "code" => "No41", "description" => "41 Pagos por prestaciones sociales"],
        ["id" => self::No42, "code" => "No42", "description" => "42 Pagos por viáticos"],
        ["id" => self::No43, "code" => "No43", "description" => "43 Pagos por gastos de representación"],
        ["id" => self::No44, "code" => "No44", "description" => "44 Pagos por compensaciones por el trabajo asociado cooperativo"],
        ["id" => self::No45, "code" => "No45", "description" => "45 Otros pagos"],
        ["id" => self::No46, "code" => "No46", "description" => "46 Cesantías e intereses de cesantías efectivamente pagadas al empleado"],
        ["id" => self::No47, "code" => "No47", "description" => "47 Cesantías consignadas al fondo de cesantías"],
        ["id" => self::No48, "code" => "No48", "description" => "48 Pensiones de jubilación, vejez o invalidez"],
        ["id" => self::No49, "code" => "No49", "description" => "49 Total de Ingresos brutas (suma 36 a 48)"],
        ["id" => self::No50, "code" => "No50", "description" => "50 Aportes obligatorios por salud a cargo del trabajador"],
        ["id" => self::No51, "code" => "No51", "description" => "51 Aportes obligatorios a fondos de pensiones y solidaridas pensional a cargo del trabajador"],
        ["id" => self::No52, "code" => "No52", "description" => "52 Cotizaciones voluntarias al régimen de ahorro individual con solidaridad - RAIS"],
        ["id" => self::No53, "code" => "No53", "description" => "53 Aportes voluntarios a fondos de pensiones"],
        ["id" => self::No54, "code" => "No54", "description" => "54 Aportes a cuentas AFC"],
        ["id" => self::No55, "code" => "No55", "description" => "55 Valor de la retención en la fuente por ingresos laborales y de pensiones"],
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

class EnumMensajes
{
    const Ingresos = 1;
    const Terminos = 2;
    const Vacaciones = 3;
    const PeriodoPrueba = 4;
    const FinalizacionContrato = 5;
    const VencimientoEstudios = 6;

    private static $descriptions = [
        ['id' => self::Ingresos, 'code' => 'Ingresos', 'description' => 'Ingresos'],
        ['id' => self::Terminos, 'code' => 'Terminos', 'description' => 'Terminos'],
        ['id' => self::Vacaciones, 'code' => 'Vacaciones', 'description' => 'Vacaciones'],
        ['id' => self::PeriodoPrueba, 'code' => 'PeriodoPrueba', 'description' => 'Periodo de Prueba'],
        ['id' => self::FinalizacionContrato, 'code' => 'FinalizacionContrato', 'description' => 'Finalizacion de Contrato'],
        ['id' => self::VencimientoEstudios, 'code' => 'VencimientoEstudios', 'description' => 'Vencimiento de Estudios'],
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

class EnumAplicacionConceptoNovedadEmpresal
{
    const INDIVIDUAL = 1;
    const TODOS = 2;
    const AGRUPAR = 3;

    private static $descriptions = [
        ['id' => self::INDIVIDUAL, 'code' => 'INDIVIDUAL', 'description' => 'Individual'],
        ['id' => self::TODOS, 'code' => 'TODOS', 'description' => 'Todos'],
        ['id' => self::AGRUPAR, 'code' => 'AGRUPAR', 'description' => 'Agrupar'],
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

class EnumAreaTrabajo
{
    const ADMINISTRATIVO = 1;
    const OPERATIVO = 2;

    private static $descriptions = [
        ['id' => self::ADMINISTRATIVO, 'code' => 'ADMINISTRATIVO', 'description' => 'Administrativo'],
        ['id' => self::OPERATIVO, 'code' => 'OPERATIVO', 'description' => 'Operativo'],
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

class EnumArchivoPlano
{
    const BANCO_BOGOTA = 1;
    const BANCOLOMBIA = 2;
    const BANCO_GRANAHORRAR = 3;
    const BANCO_BBVA = 4;
    const JURISCOL = 5;

    private static $descriptions = [
        ['id' => self::BANCO_BOGOTA, 'code' => 'BANCO_BOGOTA', 'description' => 'BANCO DE BOGOTA'],
        ['id' => self::BANCOLOMBIA, 'code' => 'BANCOLOMBIA', 'description' => 'BANCOLOMBIA'],
        ['id' => self::BANCO_GRANAHORRAR, 'code' => 'BANCO_GRANAHORRAR', 'description' => 'BANCO DE GRANAHORRAR'],
        ['id' => self::BANCO_BBVA, 'code' => 'BANCO_BBVA', 'description' => 'BANCO BBVA'],
        ['id' => self::JURISCOL, 'code' => 'JURISCOL', 'description' => 'JURISCOL'],
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

class EnumArchivoPlanoNominaElectronica
{
    const HDR = 1;
    const EMP = 2;
    const TRA = 3;
    const PER = 4;
    const LGE = 5;
    const IGE = 6;
    const NOT = 7;
    const PAG = 8;
    const FPA = 9;
    const DBA = 10;
    const DTR = 11;
    const HEX = 12;
    const VAC = 13;
    const VCO = 14;
    const PRI = 15;
    const CES = 16;
    const INC = 17;
    const LIC = 18;
    const BON = 19;
    const AUX = 20;
    const HLE = 21;
    const OCO = 22;
    const COM = 23;
    const BOO = 24;
    const COI = 25;
    const PTE = 26;
    const ANT = 27;
    const DEV = 28;
    const SAL = 29;
    const FPE = 30;
    const FSP = 31;
    const SIN = 32;
    const SAN = 33;
    const LIB = 34;
    const PAT = 35;
    const ANI = 36;
    const ODE = 37;
    const DED = 38;
    const RES = 39;
    const FOO = 40;
    const NSX = 41;
    const ELP = 42;
    const REP = 43;

    private static $descriptions = [
        ['id' => self::HDR, 'code' => 'HDR', 'description' => 'HDR'],
        ['id' => self::EMP, 'code' => 'EMP', 'description' => 'EMP'],
        ['id' => self::TRA, 'code' => 'TRA', 'description' => 'TRA'],
        ['id' => self::PER, 'code' => 'PER', 'description' => 'PER'],
        ['id' => self::LGE, 'code' => 'LGE', 'description' => 'LGE'],
        ['id' => self::IGE, 'code' => 'IGE', 'description' => 'IGE'],
        ['id' => self::NOT, 'code' => 'NOT', 'description' => 'NOT'],
        ['id' => self::PAG, 'code' => 'PAG', 'description' => 'PAG'],
        ['id' => self::FPA, 'code' => 'FPA', 'description' => 'FPA'],
        ['id' => self::DBA, 'code' => 'DBA', 'description' => 'DBA'],
        ['id' => self::DTR, 'code' => 'DTR', 'description' => 'DTR'],
        ['id' => self::HEX, 'code' => 'HEX', 'description' => 'HEX'],
        ['id' => self::VAC, 'code' => 'VAC', 'description' => 'VAC'],
        ['id' => self::VCO, 'code' => 'VCO', 'description' => 'VCO'],
        ['id' => self::PRI, 'code' => 'PRI', 'description' => 'PRI'],
        ['id' => self::CES, 'code' => 'CES', 'description' => 'CES'],
        ['id' => self::INC, 'code' => 'INC', 'description' => 'INC'],
        ['id' => self::LIC, 'code' => 'LIC', 'description' => 'LIC'],
        ['id' => self::BON, 'code' => 'BON', 'description' => 'BON'],
        ['id' => self::AUX, 'code' => 'AUX', 'description' => 'AUX'],
        ['id' => self::HLE, 'code' => 'HLE', 'description' => 'HLE'],
        ['id' => self::OCO, 'code' => 'OCO', 'description' => 'OCO'],
        ['id' => self::COM, 'code' => 'COM', 'description' => 'COM'],
        ['id' => self::BOO, 'code' => 'BOO', 'description' => 'BOO'],
        ['id' => self::COI, 'code' => 'COI', 'description' => 'COI'],
        ['id' => self::PTE, 'code' => 'PTE', 'description' => 'PTE'],
        ['id' => self::ANT, 'code' => 'ANT', 'description' => 'ANT'],
        ['id' => self::DEV, 'code' => 'DEV', 'description' => 'DEV'],
        ['id' => self::SAL, 'code' => 'SAL', 'description' => 'SAL'],
        ['id' => self::FPE, 'code' => 'FPE', 'description' => 'FPE'],
        ['id' => self::FSP, 'code' => 'FSP', 'description' => 'FSP'],
        ['id' => self::SIN, 'code' => 'SIN', 'description' => 'SIN'],
        ['id' => self::SAN, 'code' => 'SAN', 'description' => 'SAN'],
        ['id' => self::LIB, 'code' => 'LIB', 'description' => 'LIB'],
        ['id' => self::PAT, 'code' => 'PAT', 'description' => 'PAT'],
        ['id' => self::ANI, 'code' => 'ANI', 'description' => 'ANI'],
        ['id' => self::ODE, 'code' => 'ODE', 'description' => 'ODE'],
        ['id' => self::DED, 'code' => 'DED', 'description' => 'DED'],
        ['id' => self::RES, 'code' => 'RES', 'description' => 'RES'],
        ['id' => self::FOO, 'code' => 'FOO', 'description' => 'FOO'],
        ['id' => self::NSX, 'code' => 'NSX', 'description' => 'NSX'],
        ['id' => self::ELP, 'code' => 'ELP', 'description' => 'ELP'],
        ['id' => self::REP, 'code' => 'REP', 'description' => 'REP'],
        ['id' => self::ORD, 'code' => 'ORD', 'description' => 'ORD'],
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

class EnumClaseEmpresa
{
    const EMPRESA = 1;
    const COOPERATIVA = 2;
    const BANCO = 3;
    const PILA = 4;

    private static $descriptions = [
        ['id' => self::EMPRESA, 'code' => 'EMP', 'description' => 'EMPRESA'],
        ['id' => self::COOPERATIVA, 'code' => 'COP', 'description' => 'COOPERATIVA'],
        ['id' => self::BANCO, 'code' => 'BAN', 'description' => 'BANCO'],
        ['id' => self::PILA, 'code' => 'PIL', 'description' => 'PILA'],
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

class EnumDiasSemana
{
    const LUNES = 1;
    const MARTES = 2;
    const MIERCOLES = 3;
    const JUEVES = 4;
    const VIERNES = 5;
    const SABADO = 6;
    const DOMINGO = 7;

    private static $descriptions = [
        ['id' => self::LUNES, 'code' => 'LUN', 'description' => 'LUNES'],
        ['id' => self::MARTES, 'code' => 'MAR', 'description' => 'MARTES'],
        ['id' => self::MIERCOLES, 'code' => 'MIE', 'description' => 'MIÉRCOLES'],
        ['id' => self::JUEVES, 'code' => 'JUE', 'description' => 'JUEVES'],
        ['id' => self::VIERNES, 'code' => 'VIE', 'description' => 'VIERNES'],
        ['id' => self::SABADO, 'code' => 'SAB', 'description' => 'SÁBADO'],
        ['id' => self::DOMINGO, 'code' => 'DOM', 'description' => 'DOMINGO'],
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

class EnumStatusNE
{
    public const Validas = 1;
    public const Pendientes = 2;
    public const Erroneas = 3;
    public const Rechazadas = 4;
    public const Aceptadas = 5;

    private static $descriptions = [
        ['id' => self::Validas, 'code' => 'VAL', 'description' => 'Válidas'],
        ['id' => self::Pendientes, 'code' => 'PEN', 'description' => 'Pendientes'],
        ['id' => self::Erroneas, 'code' => 'ERR', 'description' => 'Erróneas'],
        ['id' => self::Rechazadas, 'code' => 'REC', 'description' => 'Rechazadas'],
        ['id' => self::Aceptadas, 'code' => 'ACE', 'description' => 'Aceptadas'],
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

class EnumTipoArchivoNE
{
    public const N = 1;
    public const E = 2;
    public const A = 3;

    private static $descriptions = [
        ['id' => self::N, 'code' => 'N', 'description' => 'Tipo N'],
        ['id' => self::E, 'code' => 'E', 'description' => 'Tipo E'],
        ['id' => self::A, 'code' => 'A', 'description' => 'Tipo A'],
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

class EnumTipoConceptoMO
{
    public const DEFAULT = 1;
    public const ADICIONAL = 2;

    private static $descriptions = [
        ['id' => self::DEFAULT , 'code' => 'DEFAULT', 'description' => 'Default'],
        ['id' => self::ADICIONAL, 'code' => 'ADICIONAL', 'description' => 'Adicional'],
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

class EnumReporteComprobantesPAGO
{
    public const GENERAL = 1;
    public const DETALLADO_INGRESOS = 2;
    public const DETALLADO_MODALIDAD = 3;
    public const DETALLADO_PRESTAMOS = 4;
    public const RESUMEN = 5;

    private static $descriptions = [
        ['id' => self::GENERAL, 'code' => 'GENERAL', 'description' => 'General'],
        ['id' => self::DETALLADO_INGRESOS, 'code' => 'DETALLADO_INGRESOS', 'description' => 'Detallado de Ingresos'],
        ['id' => self::DETALLADO_MODALIDAD, 'code' => 'DETALLADO_MODALIDAD', 'description' => 'Detallado Modalidad'],
        ['id' => self::DETALLADO_PRESTAMOS, 'code' => 'DETALLADO_PRESTAMOS', 'description' => 'Detallado Prestamos'],
        ['id' => self::RESUMEN, 'code' => 'RESUMEN', 'description' => 'Resumen'],
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

class EnumReporteComprobantesPAGOFiltros
{
    public const CLIENTE = 1;
    public const MODALIDAD_CONTRATACION = 2;
    public const CONTRATACION = 3;
    public const CODIGO = 4;
    public const EMAIL = 5;

    private static $descriptions = [
        ['id' => self::CLIENTE, 'code' => 'CLIENTE', 'description' => 'Cliente'],
        ['id' => self::MODALIDAD_CONTRATACION, 'code' => 'MODALIDAD_CONTRATACION', 'description' => 'Modalidad de Contratación'],
        ['id' => self::CONTRATACION, 'code' => 'CONTRATACION', 'description' => 'Contratación'],
        ['id' => self::CODIGO, 'code' => 'CODIGO', 'description' => 'Código'],
        ['id' => self::EMAIL, 'code' => 'EMAIL', 'description' => 'Email'],
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

class EnumFormaPresentacion
{
    public const UNICO = 1;
    public const CONSOLIDADO = 2;
    public const SUCURSAL = 3;
    public const DEPENDENCIA = 4;

    private static $descriptions = [
        ['id' => self::UNICO, 'code' => 'UNICO', 'description' => 'Único'],
        ['id' => self::CONSOLIDADO, 'code' => 'CONSOLIDADO', 'description' => 'Consolidado'],
        ['id' => self::SUCURSAL, 'code' => 'SUCURSAL', 'description' => 'Sucursal'],
        ['id' => self::DEPENDENCIA, 'code' => 'DEPENDENCIA', 'description' => 'Dependencia'],
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

class EnumGrupoSanguineo
{
    public const Amas = 1;
    public const Amenos = 2;
    public const ABmas = 3;
    public const ABmenos = 4;
    public const Bmas = 5;
    public const Bmenos = 6;
    public const Omas = 7;
    public const Omenos = 8;
    public const noDefinido = 0;

    private static $descriptions = [
        ['id' => self::Amas, 'code' => 'Amas', 'description' => 'A+'],
        ['id' => self::Amenos, 'code' => 'Amenos', 'description' => 'A-'],
        ['id' => self::ABmas, 'code' => 'ABmas', 'description' => 'AB+'],
        ['id' => self::ABmenos, 'code' => 'ABmenos', 'description' => 'AB-'],
        ['id' => self::Bmas, 'code' => 'Bmas', 'description' => 'B+'],
        ['id' => self::Bmenos, 'code' => 'Bmenos', 'description' => 'B-'],
        ['id' => self::Omas, 'code' => 'Omas', 'description' => 'O+'],
        ['id' => self::Omenos, 'code' => 'Omenos', 'description' => 'O-'],
        ['id' => self::noDefinido, 'code' => 'noDefinido', 'description' => 'NO DEFINIDO'],
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

class EnumModalidadServicio
{
    public const NORMAL = 1;
    public const PPD = 2;
    public const LABOR = 3;

    private static $descriptions = [
        ['id' => self::NORMAL, 'code' => 'NORMAL', 'description' => 'Normal'],
        ['id' => self::PPD, 'code' => 'PPD', 'description' => 'PPD'],
        ['id' => self::LABOR, 'code' => 'LABOR', 'description' => 'Labor'],
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

class EnumModalidadEjecucionNomina
{
    public const INGRESO = 1;
    public const DEDUCCION = 2;
    public const PROV_SEG = 3;
    public const PROV_PRF = 4;
    public const PROV_ARP = 5;
    public const PROV_PRS = 6;
    public const VACACIONES = 7;

    private static $descriptions = [
        ['id' => self::INGRESO, 'code' => 'INGRESO', 'description' => 'Ingreso'],
        ['id' => self::DEDUCCION, 'code' => 'DEDUCCION', 'description' => 'Deducción'],
        ['id' => self::PROV_SEG, 'code' => 'PROV_SEG', 'description' => 'Provisión Seguridad Social'],
        ['id' => self::PROV_PRF, 'code' => 'PROV_PRF', 'description' => 'Provisión Parafiscales'],
        ['id' => self::PROV_ARP, 'code' => 'PROV_ARP', 'description' => 'Provisión Riesgos Laborales'],
        ['id' => self::PROV_PRS, 'code' => 'PROV_PRS', 'description' => 'Provisión Prestaciones Sociales'],
        ['id' => self::VACACIONES, 'code' => 'VACACIONES', 'description' => 'Vacaciones'],
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

class EnumNovedadReteFuente
{
    public const Intereses_Vivienda = 1;
    public const SaludVoluntaria = 2;
    public const Salud_Obligatoria = 3;
    public const Ahorro_AFC = 4;
    public const Dependiente = 5;
    public const DeclaranteRF = 6;
    public const Procedimiento_Dos = 7;
    public const Alimentacion = 8;

    private static $descriptions = [
        ['id' => self::Intereses_Vivienda, 'code' => 'Intereses_Vivienda', 'description' => 'Intereses de Vivienda'],
        ['id' => self::SaludVoluntaria, 'code' => 'SaludVoluntaria', 'description' => 'Salud Voluntaria'],
        ['id' => self::Salud_Obligatoria, 'code' => 'Salud_Obligatoria', 'description' => 'Salud Obligatoria'],
        ['id' => self::Ahorro_AFC, 'code' => 'Ahorro_AFC', 'description' => 'Ahorro AFC'],
        ['id' => self::Dependiente, 'code' => 'Dependiente', 'description' => 'Dependiente'],
        ['id' => self::DeclaranteRF, 'code' => 'DeclaranteRF', 'description' => 'Declarante RF'],
        ['id' => self::Procedimiento_Dos, 'code' => 'Procedimiento_Dos', 'description' => 'Procedimiento Dos'],
        ['id' => self::Alimentacion, 'code' => 'Alimentacion', 'description' => 'Alimentación'],
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

class EnumOperadoresNE
{
    public const Facturaxion = 1;
    public const Dian = 2;

    private static $descriptions = [
        ['id' => self::Facturaxion, 'code' => 'Facturaxion', 'description' => 'Facturación'],
        ['id' => self::Dian, 'code' => 'Dian', 'description' => 'DIAN'],
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

class EnumParentesco
{
    public const PADRE = 1;
    public const MADRE = 2;
    public const ESPOSO = 3;
    public const HIJO = 4;
    public const HERMANO = 5;
    public const TIO = 6;
    public const OTROS = 7;

    private static $descriptions = [
        ['id' => self::PADRE, 'code' => 'PADRE', 'description' => 'Padre'],
        ['id' => self::MADRE, 'code' => 'MADRE', 'description' => 'Madre'],
        ['id' => self::ESPOSO, 'code' => 'ESPOSO', 'description' => 'Esposo(a)'],
        ['id' => self::HIJO, 'code' => 'HIJO', 'description' => 'Hijo(a)'],
        ['id' => self::HERMANO, 'code' => 'HERMANO', 'description' => 'Hermano(a)'],
        ['id' => self::TIO, 'code' => 'TIO', 'description' => 'Tio(a)'],
        ['id' => self::OTROS, 'code' => 'OTROS', 'description' => 'Otros'],
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

class EnumRespuestaSINO
{
    public const SI = 1;
    public const NO = 0;

    private static $descriptions = [
        ['id' => self::SI, 'code' => 'SI', 'description' => 'Sí'],
        ['id' => self::NO, 'code' => 'NO', 'description' => 'No'],
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

class EnumRegimenExcepcionSSS
{
    public const No_Aplica = 0;
    public const Decreto_1828_Artc_7 = 1;

    private static $descriptions = [
        ['id' => self::No_Aplica, 'code' => 'No_Aplica', 'description' => 'No Aplica'],
        ['id' => self::Decreto_1828_Artc_7, 'code' => 'Decreto_1828_Artc_7', 'description' => 'Decreto 1828 Artículo 7'],
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

class EnumRutas
{
    public const ARCHIVOPLANOPILA = 1;
    public const ARCHIVOPLANOTB = 2;
    public const EXPORTACION_EXCELL = 3;
    public const BACKUP = 4;
    public const NOMINAELECTRONICA = 5;

    private static $descriptions = [
        ['id' => self::ARCHIVOPLANOPILA, 'code' => 'ARCHIVOPLANOPILA', 'description' => 'Archivo Plano PILA'],
        ['id' => self::ARCHIVOPLANOTB, 'code' => 'ARCHIVOPLANOTB', 'description' => 'Archivo Plano TB'],
        ['id' => self::EXPORTACION_EXCELL, 'code' => 'EXPORTACION_EXCELL', 'description' => 'Exportación Excel'],
        ['id' => self::BACKUP, 'code' => 'BACKUP', 'description' => 'Backup'],
        ['id' => self::NOMINAELECTRONICA, 'code' => 'NOMINAELECTRONICA', 'description' => 'Nomina Electrónica'],
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

class EnumSemana
{
    public const LV = 1;
    public const LS = 2;
    public const D = 3;

    private static $descriptions = [
        ['id' => self::LV, 'code' => 'LV', 'description' => 'Lunes a Viernes'],
        ['id' => self::LS, 'code' => 'LS', 'description' => 'Lunes a Sábado'],
        ['id' => self::D, 'code' => 'D', 'description' => 'Domingo'],
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

class EnumSexo
{
    public const M = 1;
    public const F = 2;

    private static $descriptions = [
        ['id' => self::M, 'code' => 'M', 'description' => 'Masculino'],
        ['id' => self::F, 'code' => 'F', 'description' => 'Femenino'],
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

class EnumTiempo
{
    public const hh = 1;
    public const mm = 2;
    public const ss = 3;

    private static $descriptions = [
        ['id' => self::hh, 'code' => 'hh', 'description' => 'Hora'],
        ['id' => self::mm, 'code' => 'mm', 'description' => 'Minuto'],
        ['id' => self::ss, 'code' => 'ss', 'description' => 'Segundo'],
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

class EnumTiempoNovedades
{
    public const Fecha = 1;
    public const Fecha_Hora = 2;

    private static $descriptions = [
        ['id' => self::Fecha, 'code' => 'Fecha', 'description' => 'Fecha'],
        ['id' => self::Fecha_Hora, 'code' => 'Fecha_Hora', 'description' => 'Fecha y Hora'],
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

class EnumTipoCuenta
{
    public const AHORRO = 1;
    public const CORRIENTE = 2;

    private static $descriptions = [
        ['id' => self::AHORRO, 'code' => 'AHORRO', 'description' => 'Ahorro'],
        ['id' => self::CORRIENTE, 'code' => 'CORRIENTE', 'description' => 'Corriente'],
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

class EnumTipoCentroCosto
{
    public const UNICO = 1;
    public const TIEMPO = 2;
    public const PORCENTAJE = 3;

    private static $descriptions = [
        ['id' => self::UNICO, 'code' => 'UNICO', 'description' => 'Unico'],
        ['id' => self::TIEMPO, 'code' => 'TIEMPO', 'description' => 'Tiempo'],
        ['id' => self::PORCENTAJE, 'code' => 'PORCENTAJE', 'description' => 'Porcentaje'],
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

class EnumTipoPago
{
    public const COMERCIAL = 1;
    public const CALENDARIO = 2;

    private static $descriptions = [
        ['id' => self::COMERCIAL, 'code' => 'COMERCIAL', 'description' => 'Comercial'],
        ['id' => self::CALENDARIO, 'code' => 'CALENDARIO', 'description' => 'Calendario'],
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

class EnumTipoNovedad
{
    public const INGRESO = 1;
    public const DEDUCCION = 2;
    public const HORAS_EXTRA = 3;
    public const PROV_PREST = 4;
    public const PROV_SEGSOC = 5;
    public const PLANILLA_UNICA = 6;
    public const LIQUIDACION = 7;
    public const CAMBIOS_V = 8;
    public const CAMBIOS_C = 9;
    public const AGRUPAR = 10;
    public const FORMULA = 11;

    private static $descriptions = [
        ['id' => self::INGRESO, 'code' => 'INGRESO', 'description' => 'Ingreso'],
        ['id' => self::DEDUCCION, 'code' => 'DEDUCCION', 'description' => 'Deducción'],
        ['id' => self::HORAS_EXTRA, 'code' => 'HORAS_EXTRA', 'description' => 'Horas Extra'],
        ['id' => self::PROV_PREST, 'code' => 'PROV_PREST', 'description' => 'Provisión Prestaciones'],
        ['id' => self::PROV_SEGSOC, 'code' => 'PROV_SEGSOC', 'description' => 'Provisión Seguridad Social'],
        ['id' => self::PLANILLA_UNICA, 'code' => 'PLANILLA_UNICA', 'description' => 'Planilla Única'],
        ['id' => self::LIQUIDACION, 'code' => 'LIQUIDACION', 'description' => 'Liquidación'],
        ['id' => self::CAMBIOS_V, 'code' => 'CAMBIOS_V', 'description' => 'Cambios Vinculación'],
        ['id' => self::CAMBIOS_C, 'code' => 'CAMBIOS_C', 'description' => 'Cambios Contratación'],
        ['id' => self::AGRUPAR, 'code' => 'AGRUPAR', 'description' => 'Agrupar'],
        ['id' => self::FORMULA, 'code' => 'FORMULA', 'description' => 'Fórmula'],
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

class EnumTipoNovedadSeguridadSocial
{
    public const I = 1;
    public const R = 2;
    public const N = 3;
    public const NOR = 4;
    public const SLN = 5;
    public const IGE = 6;
    public const LMA = 7;
    public const VAC = 8;
    public const IRL = 9;
    public const LRM = 10;

    private static $descriptions = [
        ['id' => self::I, 'code' => 'I', 'description' => 'I'],
        ['id' => self::R, 'code' => 'R', 'description' => 'R'],
        ['id' => self::N, 'code' => 'N', 'description' => 'N'],
        ['id' => self::NOR, 'code' => 'NOR', 'description' => 'NOR'],
        ['id' => self::SLN, 'code' => 'SLN', 'description' => 'SLN'],
        ['id' => self::IGE, 'code' => 'IGE', 'description' => 'IGE'],
        ['id' => self::LMA, 'code' => 'LMA', 'description' => 'LMA'],
        ['id' => self::VAC, 'code' => 'VAC', 'description' => 'VAC'],
        ['id' => self::IRL, 'code' => 'IRL', 'description' => 'IRL'],
        ['id' => self::LRM, 'code' => 'LRM', 'description' => 'LRM'],
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

class EnumTipoNumeroPILA
{
    public const N = 1;
    public const A = 2;

    private static $descriptions = [
        ['id' => self::N, 'code' => 'N', 'description' => 'N'],
        ['id' => self::A, 'code' => 'A', 'description' => 'A'],
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

class EnumTipoMovimiento
{
    public const INGRESO = 1;
    public const DESCUENTO = 2;

    private static $descriptions = [
        ['id' => self::INGRESO, 'code' => 'INGRESO', 'description' => 'Ingreso'],
        ['id' => self::DESCUENTO, 'code' => 'DESCUENTO', 'description' => 'Descuento'],
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


class EnumTipoCuota
{
    const QUINCENAL = 1;
    const MENSUAL = 2;

    private static $descriptions = [
        ['id' => self::QUINCENAL, 'code' => 'QUINCENAL', 'description' => 'Quincenal'],
        ['id' => self::MENSUAL, 'code' => 'MENSUAL', 'description' => 'Mensual'],
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

class EnumTipoHora
{
    const ORD = EnumVariablesSistema::Salario;
    const RN = EnumVariablesSistema::RecargoNocturno;
    const RNE = EnumVariablesSistema::RecargoNocturnoEspecial;
    const HED = EnumVariablesSistema::HoraExtraDiurna;
    const HEN = EnumVariablesSistema::HoraExtraNocturna;
    const DF = EnumVariablesSistema::HoraDominical;
    const RNDF = EnumVariablesSistema::RecargoNocturnoDominical;
    const HEDDF = EnumVariablesSistema::HoraExtraDominicalDiurna;
    const HENDF = EnumVariablesSistema::HoraExtraDominicalNocturna;

    private static $descriptions = [
        ['id' => self::ORD, 'code' => 'ORD', 'description' => EnumVariablesSistema::getById(self::ORD)->description],
        ['id' => self::RN, 'code' => 'RN', 'description' => EnumVariablesSistema::getById(self::RN)->description],
        ['id' => self::RNE, 'code' => 'RNE', 'description' => EnumVariablesSistema::getById(self::RNE)->description],
        ['id' => self::HED, 'code' => 'HED', 'description' => EnumVariablesSistema::getById(self::HED)->description],
        ['id' => self::HEN, 'code' => 'HEN', 'description' => EnumVariablesSistema::getById(self::HEN)->description],
        ['id' => self::DF, 'code' => 'DF', 'description' => EnumVariablesSistema::getById(self::DF)->description],
        ['id' => self::RNDF, 'code' => 'RNDF', 'description' => EnumVariablesSistema::getById(self::RNDF)->description],
        ['id' => self::HEDDF, 'code' => 'HEDDF', 'description' => EnumVariablesSistema::getById(self::HEDDF)->description],
        ['id' => self::HENDF, 'code' => 'HENDF', 'description' => EnumVariablesSistema::getById(self::HENDF)->description],
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


class EnumTipoRegistroConceptoNovedadEmpresa
{
    const ASIGCON = 1;
    const EMPRESA = 2;

    private static $descriptions = [
        ['id' => self::ASIGCON, 'code' => 'ASIGCON', 'description' => "Asignación Contable"],
        ['id' => self::EMPRESA, 'code' => 'EMPRESA', 'description' => "Asignación por Empresa"]
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

class EnumTipoRegistroHistorial
{
    const CONTRATACION = 1;
    const PRORROGA = 2;
    const TERMINO = 3;
    const NOVEDADPILA = 4;

    private static $descriptions = [
        ['id' => self::CONTRATACION, 'code' => 'CONTRATACION', 'description' => "Contratación"],
        ['id' => self::PRORROGA, 'code' => 'PRORROGA', 'description' => "Prorroga"],
        ['id' => self::TERMINO, 'code' => 'TERMINO', 'description' => "Termino"],
        ['id' => self::NOVEDADPILA, 'code' => 'NOVEDADPILA', 'description' => "Novedades de PILA"]
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

class EnumTipoServicioSeguridadSocial
{
    const EPS = 1;
    const AFP = 2;
    const ARP = 3;
    const CCF = 4;
    const SENA = 5;
    const ICBF = 6;
    const ESAP = 7;
    const MINISTERIOEDUCACION = 8;
    const FONDO_CESANTIAS = 9;

    private static $descriptions = [
        ['id' => self::EPS, 'code' => 'EPS', 'description' => "EPS"],
        ['id' => self::AFP, 'code' => 'AFP', 'description' => "AFP"],
        ['id' => self::ARP, 'code' => 'ARP', 'description' => "ARP"],
        ['id' => self::CCF, 'code' => 'CCF', 'description' => "CCF"],
        ['id' => self::SENA, 'code' => 'SENA', 'description' => "SENA"],
        ['id' => self::ICBF, 'code' => 'ICBF', 'description' => "ICBF"],
        ['id' => self::ESAP, 'code' => 'ESAP', 'description' => "ESAP"],
        ['id' => self::MINISTERIOEDUCACION, 'code' => 'MINISTERIOEDUCACION', 'description' => "Ministerio de Educación"],
        ['id' => self::FONDO_CESANTIAS, 'code' => 'FONDO_CESANTIAS', 'description' => "Fondo de Cesantías"]
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

class EnumTipoTurno
{
    const PRIMER_TURNO = 1;
    const SEGUNDO_TURNO = 2;
    const TERCER_TURNO = 3;

    private static $descriptions = [
        ['id' => self::PRIMER_TURNO, 'code' => 'PRIMER_TURNO', 'description' => "Turno 1"],
        ['id' => self::SEGUNDO_TURNO, 'code' => 'SEGUNDO_TURNO', 'description' => "Turno 2"],
        ['id' => self::TERCER_TURNO, 'code' => 'TERCER_TURNO', 'description' => "Turno 3"]
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

class EnumTipoIdentificacion
{
    const CC = 1;
    const TI = 2;
    const RC = 3;
    const CE = 4;
    const PA = 5;
    const NI = 6;
    const CD = 7;
    const SC = 8;
    const NIO = 6;

    private static $descriptions = [
        ['id' => self::CC, 'code' => 'CC', 'description' => "Cedula de Ciudadania"],
        ['id' => self::TI, 'code' => 'TI', 'description' => "Tarjeta de Identidad"],
        ['id' => self::RC, 'code' => 'RC', 'description' => "Registro Civil"],
        ['id' => self::CE, 'code' => 'CE', 'description' => "Cedula de Extranjería"],
        ['id' => self::PA, 'code' => 'PA', 'description' => "Pasaporte"],
        ['id' => self::NI, 'code' => 'NI', 'description' => "Numero de Identificación Tributaria NIT"],
        ['id' => self::CD, 'code' => 'CD', 'description' => "Carne Diplomático"],
        ['id' => self::SC, 'code' => 'SC', 'description' => "Salvoconducto de permanencia"],
        ['id' => self::NIO, 'code' => 'NIO', 'description' => "Numero de Identificación Tributaria NIT Entidad Oficial"]
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

class EnumTipoIdentificacionEmbargo
{
    const CC = EnumTipoIdentificacion::CC;
    const CE = EnumTipoIdentificacion::CE;
    const NIT_P = EnumTipoIdentificacion::NIT;
    const PA = EnumTipoIdentificacion::PA;
    const TI = EnumTipoIdentificacion::TI;
    const NIT_O = EnumTipoIdentificacion::NITO;

    private static $descriptions = [
        ['id' => self::CC, 'code' => 'CC', 'description' => "Cedula de Ciudadanía"],
        ['id' => self::CE, 'code' => 'CE', 'description' => "Cedula de Extranjería"],
        ['id' => self::NIT_P, 'code' => 'NIT_P', 'description' => "NIT Entidad Privada"],
        ['id' => self::PA, 'code' => 'PA', 'description' => "Pasaporte"],
        ['id' => self::TI, 'code' => 'TI', 'description' => "Tarjeta de Identificación"],
        ['id' => self::NIT_O, 'code' => 'NIT_O', 'description' => "NIT Entidad Oficial"]
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

class EnumTipoTransferencia
{
    const CONSIGNACION = 1;
    const CHEQUE = 2;

    private static $descriptions = [
        ['id' => self::CONSIGNACION, 'code' => 'CONSIGNACION', 'description' => "Consignación"],
        ['id' => self::CHEQUE, 'code' => 'CHEQUE', 'description' => "Cheque"]
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

class EnumTipoInformeSegSoc
{
    const PILA = 1;
    const PROVISION = 2;

    private static $descriptions = [
        ['id' => self::PILA, 'code' => 'PILA', 'description' => "PILA"],
        ['id' => self::PROVISION, 'code' => 'PROVISION', 'description' => "Provisión"]
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

class EnumTipoPagoLiquidacion
{
    const NOMINA = 1;
    const TESORERIA = 2;
    const FONDO = 3;
    const AHORRO = 4;

    private static $descriptions = [
        ['id' => self::NOMINA, 'code' => 'NOMINA', 'description' => "Nómina"],
        ['id' => self::TESORERIA, 'code' => 'TESORERIA', 'description' => "Tesorería"],
        ['id' => self::FONDO, 'code' => 'FONDO', 'description' => "Fondo"],
        ['id' => self::AHORRO, 'code' => 'AHORRO', 'description' => "Ahorro"]
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

class EnumTipoLiquidacion
{
    const LEY = 1;
    const PROVISIONES = 2;

    private static $descriptions = [
        ['id' => self::LEY, 'code' => 'LEY', 'description' => "Ley"],
        ['id' => self::PROVISIONES, 'code' => 'PROVISIONES', 'description' => "Provisiones"]
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

class EnumTipoRegistroLiquidacion
{
    const ANTICIPO = 1;
    const PAGO = 2;
    const PAGO_SD = 3;

    private static $descriptions = [
        ['id' => self::ANTICIPO, 'code' => 'ANTICIPO', 'description' => "Anticipo"],
        ['id' => self::PAGO, 'code' => 'PAGO', 'description' => "Pago"],
        ['id' => self::PAGO_SD, 'code' => 'PAGO_SD', 'description' => "Pago SD"]
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

class EnumTipoContrato
{
    const FIJO = 1;
    const INDEFINIDO = 2;
    const APRENDIZAJE = 3;
    const OBRA_LABOR = 4;
    const PRACTICAS_PASANTIAS = 5;
    const ASOCIACION = 6;

    private static $descriptions = [
        ['id' => self::FIJO, 'code' => 'FIJO', 'description' => "Fijo"],
        ['id' => self::INDEFINIDO, 'code' => 'INDEFINIDO', 'description' => "Indefinido"],
        ['id' => self::APRENDIZAJE, 'code' => 'APRENDIZAJE', 'description' => "Aprendizaje"],
        ['id' => self::OBRA_LABOR, 'code' => 'OBRA_LABOR', 'description' => "Obra o Labor"],
        ['id' => self::PRACTICAS_PASANTIAS, 'code' => 'PRACTICAS_PASANTIAS', 'description' => "Prácticas o Pasantías"],
        ['id' => self::ASOCIACION, 'code' => 'ASOCIACION', 'description' => "Asociación"]
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

class EnumTipoRegistro
{
    const IMPORTACION = 1;
    const REGISTRO = 2;
    const WEB = 3;

    private static $descriptions = [
        ['id' => self::IMPORTACION, 'code' => 'IMPORTACION', 'description' => "Importación"],
        ['id' => self::REGISTRO, 'code' => 'REGISTRO', 'description' => "Registro"],
        ['id' => self::WEB, 'code' => 'WEB', 'description' => "Web"]
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

class EnumTipoReferencia
{
    const PERSONAL = 1;
    const FAMILIAR = 2;

    private static $descriptions = [
        ['id' => self::PERSONAL, 'code' => 'PERSONAL', 'description' => "Personal"],
        ['id' => self::FAMILIAR, 'code' => 'FAMILIAR', 'description' => "Familiar"]
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

class EnumTipoRegimen
{
    const SIMPLIFICADO = 1;
    const COMUN = 2;
    const GRAN_CONTRIBUYENTE = 3;

    private static $descriptions = [
        ['id' => self::SIMPLIFICADO, 'code' => 'SIMPLIFICADO', 'description' => "Simplificado"],
        ['id' => self::COMUN, 'code' => 'COMUN', 'description' => "Común"],
        ['id' => self::GRAN_CONTRIBUYENTE, 'code' => 'GRAN_CONTRIBUYENTE', 'description' => "Gran Contribuyente"]
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

class EnumTipoActividad
{
    const COMERCIAL = 1;
    const SERVICIO = 2;
    const INDUSTRIAL = 3;

    private static $descriptions = [
        ['id' => self::COMERCIAL, 'code' => 'COM', 'description' => "Comercial"],
        ['id' => self::SERVICIO, 'code' => 'SER', 'description' => "Servicio"],
        ['id' => self::INDUSTRIAL, 'code' => 'IND', 'description' => "Industrial"]
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

class EnumTipoPersona
{
    const NATURAL = 1;
    const JURIDICA = 2;

    private static $descriptions = [
        ['id' => self::NATURAL, 'code' => 'NAT', 'description' => "Natural"],
        ['id' => self::JURIDICA, 'code' => 'JUR', 'description' => "Jurídica"]
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

class EnumTipoPlanilla
{
    const E = 1;
    const Y = 2;
    const A = 3;
    const I = 4;
    const S = 5;
    const M = 6;
    const N = 7;
    const H = 8;
    const T = 9;
    const F = 10;
    const J = 11;
    const X = 12;
    const U = 13;
    const K = 14;

    private static $descriptions = [
        ['id' => self::E, 'code' => 'E', 'description' => 'Empleados Empresas'],
        ['id' => self::Y, 'code' => 'Y', 'description' => 'Independientes Empresa'],
        ['id' => self::A, 'code' => 'A', 'description' => 'Empleados Adicionales'],
        ['id' => self::I, 'code' => 'I', 'description' => 'Independientes'],
        ['id' => self::S, 'code' => 'S', 'description' => 'Empleados de Servicio Domestico'],
        ['id' => self::M, 'code' => 'M', 'description' => 'Mora'],
        ['id' => self::N, 'code' => 'N', 'description' => 'Correcciones'],
        ['id' => self::H, 'code' => 'H', 'description' => 'Madres Sustitutas'],
        ['id' => self::T, 'code' => 'T', 'description' => 'Empleados Entidad Beneficiaria SGP'],
        ['id' => self::F, 'code' => 'F', 'description' => 'Pago Aporte Patronal Faltante SGP'],
        ['id' => self::J, 'code' => 'J', 'description' => 'Pago Seguridad Social Cump. Sentencia Judicial'],
        ['id' => self::X, 'code' => 'X', 'description' => 'Pago Empresa Liquidada'],
        ['id' => self::U, 'code' => 'U', 'description' => 'Uso UGPP pago por tercero'],
        ['id' => self::K, 'code' => 'K', 'description' => 'Estudiantes']
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

class EnumLocalizacion
{
    const TELEFONO = 1;
    const CELULAR = 2;
    const BIPER = 3;
    const EMAIL = 4;
    const EMERGENCIAS = 5;
    const CELULAR_TRABAJO = 6;
    const SITIO_WEB = 7;
    const FACEBOOK = 8;
    const INSTAGRAM = 9;
    const TWITTER = 10;
    const LINKEDIN = 11;
    const YOUTUBE = 12;
    const GEOLOCALIZACION = 13;

    private static $descriptions = [
        ['id' => self::TELEFONO, 'code' => 'TELEFONO', 'description' => "Teléfono"],
        ['id' => self::CELULAR, 'code' => 'CELULAR', 'description' => "Celular"],
        ['id' => self::BIPER, 'code' => 'BIPER', 'description' => "Biper"],
        ['id' => self::EMAIL, 'code' => 'EMAIL', 'description' => "Email"],
        ['id' => self::EMERGENCIAS, 'code' => 'EMERGENCIAS', 'description' => "Emergencias"],
        ['id' => self::CELULAR_TRABAJO, 'code' => 'CELULAR_TRABAJO', 'description' => "Celular de Trabajo"],
        ['id' => self::SITIO_WEB, 'code' => 'SITIO_WEB', 'description' => "Sitio Web"],
        ['id' => self::FACEBOOK, 'code' => 'FACEBOOK', 'description' => "Facebook"],
        ['id' => self::INSTAGRAM, 'code' => 'INSTAGRAM', 'description' => "Instagram"],
        ['id' => self::TWITTER, 'code' => 'TWITTER', 'description' => "Twitter"],
        ['id' => self::LINKEDIN, 'code' => 'LINKEDIN', 'description' => "LinkedIn"],
        ['id' => self::YOUTUBE, 'code' => 'YOUTUBE', 'description' => "YouTube"],
        ['id' => self::GEOLOCALIZACION, 'code' => 'GEOLOCALIZACION', 'description' => "Geolocalización"]
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

class EnumTipoLibretaMilitar
{
    const PRIMERA = 1;
    const SEGUNDA = 2;
    const NO_APLICA = 3;
    const NO_DEFINIDO = 0;

    private static $descriptions = [
        ['id' => self::PRIMERA, 'code' => 'PRIMERA', 'description' => "Primera"],
        ['id' => self::SEGUNDA, 'code' => 'SEGUNDA', 'description' => "Segunda"],
        ['id' => self::NO_APLICA, 'code' => 'NO_APLICA', 'description' => "No Aplica"],
        ['id' => self::NO_DEFINIDO, 'code' => 'NO_DEFINIDO', 'description' => "No Definido"]
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

class EnumActualizacionWEB
{
    const REGISTRADO = 1;
    const NO_REGISTRADO = 3;
    const ESPERANDO_GUARDAR = 2;
    const ACTUALIZADO = 4;
    const DESACTUALIZADO = 5;
    const NO_SUBIDO_WEB = 6;
    const ACTIVO = 7;
    const INACTIVO = 8;

    private static $descriptions = [
        ['id' => self::REGISTRADO, 'code' => 'REGISTRADO', 'description' => "Registrado"],
        ['id' => self::NO_REGISTRADO, 'code' => 'NO_REGISTRADO', 'description' => "No Registrado"],
        ['id' => self::ESPERANDO_GUARDAR, 'code' => 'ESPERANDO_GUARDAR', 'description' => "Esperando Guardar"],
        ['id' => self::ACTUALIZADO, 'code' => 'ACTUALIZADO', 'description' => "Actualizado"],
        ['id' => self::DESACTUALIZADO, 'code' => 'DESACTUALIZADO', 'description' => "Desactualizado"],
        ['id' => self::NO_SUBIDO_WEB, 'code' => 'NO_SUBIDO_WEB', 'description' => "No Subido a la Web"],
        ['id' => self::ACTIVO, 'code' => 'ACTIVO', 'description' => "Activo"],
        ['id' => self::INACTIVO, 'code' => 'INACTIVO', 'description' => "Inactivo"]
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

class TipoToken
{
    const NULO = 0;
    const DELIMITADOR = 1;
    const IDENTIFICADOR = 2;
    const NUMERO = 3;

    private static $descriptions = [
        ['id' => self::NULO, 'code' => 'NULO', 'description' => "NULO"],
        ['id' => self::DELIMITADOR, 'code' => 'DELIMITADOR', 'description' => "DELIMITADOR"],
        ['id' => self::IDENTIFICADOR, 'code' => 'IDENTIFICADOR', 'description' => "IDENTIFICADOR"],
        ['id' => self::NUMERO, 'code' => 'NUMERO', 'description' => "NUMERO"]
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

class EnumNE_PeriodoNomina
{
    const Semanal = 1;
    const Decenal = 2;
    const Catorcenal = 3;
    const Quincenal = 4;
    const Mensual = 5;
    const Otro = 6;

    private static $descriptions = [
        ['id' => self::Semanal, 'code' => 'Semanal', 'description' => "Semanal"],
        ['id' => self::Decenal, 'code' => 'Decenal', 'description' => "Decenal"],
        ['id' => self::Catorcenal, 'code' => 'Catorcenal', 'description' => "Catorcenal"],
        ['id' => self::Quincenal, 'code' => 'Quincenal', 'description' => "Quincenal"],
        ['id' => self::Mensual, 'code' => 'Mensual', 'description' => "Mensual"],
        ['id' => self::Otro, 'code' => 'Otro', 'description' => "Otro"]
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

class EnumNE_TipoIncapacidad
{
    const Comun = 1;
    const Profesional = 2;
    const Laboral = 3;

    private static $descriptions = [
        ['id' => self::Comun, 'code' => 'Comun', 'description' => "Común"],
        ['id' => self::Profesional, 'code' => 'Profesional', 'description' => "Profesional"],
        ['id' => self::Laboral, 'code' => 'Laboral', 'description' => "Laboral"]
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

class EnumNE_TipoXML
{
    const NominaIndividual = 102;
    const NominaIndividualDeAjuste = 103;

    private static $descriptions = [
        ['id' => self::NominaIndividual, 'code' => 'NominaIndividual', 'description' => "Nomina Individual"],
        ['id' => self::NominaIndividualDeAjuste, 'code' => 'NominaIndividualDeAjuste', 'description' => "Nomina Individual de Ajuste"]
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

class EnumNE_TipoNota
{
    const Reemplazar = 1;
    const Eliminar = 2;

    private static $descriptions = [
        ['id' => self::Reemplazar, 'code' => 'Reemplazar', 'description' => "Reemplazar"],
        ['id' => self::Eliminar, 'code' => 'Eliminar', 'description' => "Eliminar"]
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

class EnumNE_FormaPago
{
    const Contado = 1;

    private static $descriptions = [
        ['id' => self::Contado, 'code' => 'Contado', 'description' => "Contado"]
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

class EnumNE_TipoDocumento
{
    const Registro_civil = 11;
    const Tarjeta_identidad = 12;
    const Cedula_ciudadania = 13;
    const Tarjeta_extranjeria = 21;
    const Cedula_extranjeria = 22;
    const NIT = 31;
    const Pasaporte = 41;
    const Documento_identificacion_extranjero = 42;
    const PEP = 47;
    const NIT_otro_pais = 50;
    const NUIP = 91;

    private static $descriptions = [
        ['id' => self::Registro_civil, 'code' => 'Registro_civil', 'description' => "Registro civil"],
        ['id' => self::Tarjeta_identidad, 'code' => 'Tarjeta_identidad', 'description' => "Tarjeta de identidad"],
        ['id' => self::Cedula_ciudadania, 'code' => 'Cedula_ciudadania', 'description' => "Cédula de ciudadanía"],
        ['id' => self::Tarjeta_extranjeria, 'code' => 'Tarjeta_extranjeria', 'description' => "Tarjeta de extranjería"],
        ['id' => self::Cedula_extranjeria, 'code' => 'Cedula_extranjeria', 'description' => "Cédula de extranjería"],
        ['id' => self::NIT, 'code' => 'NIT', 'description' => "NIT"],
        ['id' => self::Pasaporte, 'code' => 'Pasaporte', 'description' => "Pasaporte"],
        ['id' => self::Documento_identificacion_extranjero, 'code' => 'Documento_identificacion_extranjero', 'description' => "Documento de identificación extranjero"],
        ['id' => self::PEP, 'code' => 'PEP', 'description' => "PEP"],
        ['id' => self::NIT_otro_pais, 'code' => 'NIT_otro_pais', 'description' => "NIT de otro país"],
        ['id' => self::NUIP, 'code' => 'NUIP', 'description' => "NUIP *"]
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

class EnumNE_Ambiente
{
    const Produccion = 1;
    const Pruebas = 2;

    private static $descriptions = [
        ['id' => self::Produccion, 'code' => 'Produccion', 'description' => "Producción"],
        ['id' => self::Pruebas, 'code' => 'Pruebas', 'description' => "Pruebas"]
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

class EnumNE_TipoHora
{
    const HED = EnumVariablesSistema::HoraExtraDiurna;
    const HEN = EnumVariablesSistema::HoraExtraNocturna;
    const HRN = EnumVariablesSistema::RecargoNocturno;
    const HRDDF = EnumVariablesSistema::HoraDominical;
    const HEDDF = EnumVariablesSistema::HoraExtraDominicalDiurna;
    const HENDF = EnumVariablesSistema::HoraExtraDominicalNocturna;
    const HRNDF = EnumVariablesSistema::RecargoNocturnoDominical;

    private static $descriptions = [
        ['id' => self::HED, 'code' => '1', 'description' => EnumVariablesSistema::getById(EnumVariablesSistema::HoraExtraDiurna)->$description],
        ['id' => self::HEN, 'code' => '2', 'description' => EnumVariablesSistema::getById(EnumVariablesSistema::HoraExtraNocturna)->$description],
        ['id' => self::HRN, 'code' => '3', 'description' => EnumVariablesSistema::getById(EnumVariablesSistema::RecargoNocturno)->$description],
        ['id' => self::HRDDF, 'code' => '4', 'description' => EnumVariablesSistema::getById(EnumVariablesSistema::HoraDominical)->$description],
        ['id' => self::HEDDF, 'code' => '5', 'description' => EnumVariablesSistema::getById(EnumVariablesSistema::HoraExtraDominicalDiurna)->$description],
        ['id' => self::HENDF, 'code' => '6', 'description' => EnumVariablesSistema::getById(EnumVariablesSistema::HoraExtraDominicalNocturna)->$description],
        ['id' => self::HRNDF, 'code' => '7', 'description' => EnumVariablesSistema::getById(EnumVariablesSistema::RecargoNocturnoDominical)->$description]
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

class EnumNE_Vacaciones
{
    const VC = 1;
    const VCP = 2;

    private static $descriptions = [
        ['id' => self::VC, 'code' => 'VC', 'description' => "Vacaciones Comunes"],
        ['id' => self::VCP, 'code' => 'VCP', 'description' => "Vacaciones Compensadas"]
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

class EnumNE_Licencias
{
    const LMP = 1;
    const LR = 2;
    const LNR = 3;

    private static $descriptions = [
        ['id' => self::LMP, 'code' => 'LMP', 'description' => "LicenciasMaternidadOPaternidad"],
        ['id' => self::LR, 'code' => 'LR', 'description' => "LicenciasRemuneradas"],
        ['id' => self::LNR, 'code' => 'LNR', 'description' => "LicenciasNoRemuneradas"]
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


class TiposError
{
    const NoDefinido = 0;
    const Sintaxis = 1;
    const Identificador = 2;
    const Parentesis = 3;
    const DivisionPorCero = 4;
    const SinExpresion = 5;

    private static $descriptions = [
        ['id' => self::NoDefinido, 'code' => 'NoDefinido', 'description' => 'Error no definido'],
        ['id' => self::Sintaxis, 'code' => 'Sintaxis', 'description' => 'Error de sintaxis'],
        ['id' => self::Identificador, 'code' => 'Identificador', 'description' => 'Error de identificador'],
        ['id' => self::Parentesis, 'code' => 'Parentesis', 'description' => 'Error de paréntesis'],
        ['id' => self::DivisionPorCero, 'code' => 'DivisionPorCero', 'description' => 'Error de división por cero'],
        ['id' => self::SinExpresion, 'code' => 'SinExpresion', 'description' => 'Error de expresión vacía']
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

class EnumUtils
{
    public static function enumToArray($enumClass)
    {
        $reflection = new \ReflectionClass($enumClass);
        $enums = $reflection->getConstants();
        $enumArray = [];

        foreach ($enums as $key => $value) {
            $enumArray[$value] = self::getDescription($enumClass, $value);
        }

        return $enumArray;
    }

    public static function getDescription($enumClass, $value)
    {
        $reflection = new \ReflectionClass($enumClass);
        $description = null;

        foreach ($reflection->getConstants() as $key => $val) {
            if ($val === $value) {
                $description = self::getEnumDescription($key);
                break;
            }
        }

        return $description;
    }

    private static function getEnumDescription($enumKey)
    {
        $words = explode("_", strtolower($enumKey));
        $description = ucfirst(implode(" ", $words));
        return $description;
    }
}

