<?php

namespace Softdin\Servicio;

use ReflectionClass;

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

    public static function getDescription($key)
    {
        $descriptions = [
            self::AREATRABAJO => "AREA DE TRABAJO",
            self::CARGO => "CARGO",
            self::DIVISION => "DIVISION",
            self::MODALIDADSERVICIO => "MODALIDAD SERVICIO",
            self::SEDE => "SEDE",
            self::SUCURSAL => "SUCURSAL",
            self::SUCURSALPILA => "SUCURSAL PILA",
            self::TIPOCONTRATO => "TIPO DE CONTRATO",
        ];

        return $descriptions[$key] ?? null;
    }

    // Ejemplo de uso
    //  $key = EnumConceptosContrato::AREATRABAJO;

    // echo EnumConceptosContrato::getDescription($key); // Devolverá "AREA DE TRABAJO"

}

class EnumReteFuenteProcedimiento
{
    const PROCED_UNO = 1;
    const PROCED_DOS = 2;

    public static function getDescription($key)
    {
        $descriptions = [
            self::PROCED_UNO => "PROCEDIMIENTO UNO",
            self::PROCED_DOS => "PROCEDIMIENTO DOS",
        ];

        return $descriptions[$key] ?? null;
    }

    // Ejemplo de uso
    // $key = EnumReteFuenteProcedimiento::PROCED_UNO;

    // echo EnumReteFuenteProcedimiento::getDescription($key); // Devolverá "PROCEDIMIENTO UNO"

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

    public static function getDescription($key)
    {
        $descriptions = [
            self::NIT => "<<01>>",
            self::RAZON_SOCIAL => "<<02>>",
            self::SIGLA => "<<03>>",
            self::REPRESENTANTE_LEGAL => "<<04>>",
            self::TIPO_IDENTIFICACION => "<<05>>",
            self::IDENTIFICACION => "<<06>>",
            self::LUGAR_EXPEDICION => "<<07>>",
            self::APELLIDOS_NOMBRES => "<<08>>",
            self::CARGO => "<<09>>",
            self::SALARIO => "<<10>>",
            self::FECHA_PERIODO_INICIO_LARGO => "<<11>>",
            self::FECHA_PERIODO_INICIO_CORTO => "<<12>>",
            self::FECHA_PERIODO_FINAL_LARGO => "<<13>>",
            self::FECHA_PERIODO_FINAL_CORTO => "<<14>>",
            self::SUCURSAL => "<<15>>",
            self::SEDE => "<<16>>",
            self::DIVISION => "<<17>>",
            self::TIPO_CONTRATO => "<<18>>",
            self::AREA_TRABAJO => "<<19>>",
            self::BANCO => "<<20>>",
            self::TIPO_CUENTA_BANCARIA => "<<21>>",
            self::CUENTA_BANCARIA => "<<22>>",
            self::EPS => "<<23>>",
            self::AFP => "<<24>>",
            self::CESANTIAS => "<<25>>",
            self::MOTIVO_RETIRO => "<<26>>",
            self::FECHA_ACTUAL_LARGO => "<<27>>",
            self::FECHA_ACTUAL_CORTO => "<<27>>",
            self::DESCRIPCION_CARGO => "<<29>>",
            self::SALARIO_LETRAS => "<<30>>",
            self::DESCRIPCION_CONTRATO => "<<31>>",
            self::PRESTACION_SERVICIO => "<<32>>",
            self::MODALIDAD_CONTRATACION => "<<33>>",
            self::PORCENTAJE_ARP => "<<34>>",
            self::CEDULA_REPRESENTANTE_LEGAL => "<<35>>",
            self::CCF => "<<36>>",
            self::FECHA_NACIMIENTO_LARGO => "<<37>>",
            self::FECHA_NACIMIENTO_CORTO => "<<38>>",
            self::BARRIO => "<<39>>",
            self::DIRECCION_RESIDENCIAL => "<<40>>",
            self::LUGAR_NACIMIENTO => "<<41>>",
            self::OBJETIVO_CONTRATO => "<<42>>",
            self::RETEFUENTE_PROCEDIMIENTO => "<<43>>",
            self::BONIFICACION_HS => "<<44>>",
            self::CONSECUTIVO_CONTRATO => "<<45>>",
            self::PERIODO_PRUEBA => "<<46>>",
            self::SALARIO_DIA => "<<47>>",
            self::DURACION_CONTRATO => "<<48>>",
            self::TELEFONO => "<<49>>",
            self::CELULAR => "<<50>>",
            self::EMAIL => "<<51>>",
            self::TEL_EMERGENCIA => "<<52>>",
        ];

        return $descriptions[$key] ?? null;
    }

    // Ejemplo de uso
    // $key = EnumConceptosCertificacion::NIT;

    // echo EnumConceptosCertificacion::getDescription($key); // Devolverá "<<01>>"

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

    public static function getDescription($value)
    {
        $descriptions = [
            self::AFC_Cuenta => "OTROS",
            self::Ahorro => "OTROS",
            self::Anticipo => "OTROS",
            self::Aporte_ARP => "PROV_SEGSOC",
            self::Aporte_CCF => "PROV_SEGSOC",
            self::Aporte_Empleado_AFP => "OTROS",
            self::Aporte_Empleado_EPS => "OTROS",
            self::Aporte_Empleador_AFP => "PROV_SEGSOC",
            self::Aporte_Empleador_EPS => "PROV_SEGSOC",
            self::Aporte_ESAP => "PROV_SEGSOC",
            self::Aporte_ICBF => "PROV_SEGSOC",
            self::Aporte_MinisterioEducacion => "PROV_SEGSOC",
            self::Aporte_Sena => "PROV_SEGSOC",
            self::Aporte_Valor_UPC_Adicional => "OTROS",
            self::Aporte_Voluntario_AFP_Empleador => "OTROS",
            self::Aporte_Voluntario_AFP_NoRetenido => "OTROS",
            self::Aporte_Voluntario_AFP_InversionEmpleado => "OTROS",
            self::Aporte_Voluntario_AFP_ObligatorioEmpleado => "OTROS",
            self::ApoyoASostenimiento => "OTROS",
            self::Auxilio => "OTROS",
            self::Base_Reduccion_ReteFuente => "OTROS",
            self::Base_Prestacional => "AGRUPAR",
            self::Base_SeguridadSocial => "AGRUPAR",
            self::Bonificacion_HS => "OTROS",
            self::Bonificacion => "OTROS",
            self::Bono => "OTROS",
            self::Bono_PagoAlimentacion => "OTROS",
            self::Comision => "OTROS",
            self::Compensacion_ExtraOrdinaria => "OTROS",
            self::Compensacion_Ordinaria => "OTROS",
            self::Cooperativa => "OTROS",
            self::CuotaSostenimiento => "OTROS",
            self::CostoNomina => "OTROS",
            self::ContarDIAS => "FORMULA",
            self::DeudaTerceros => "OTROS",
            self::Dotacion => "OTROS",
            self::Educacion => "OTROS",
            self::EmbargoAlimento => "OTROS",
            self::EmbargoComercial => "OTROS",
            self::EmbargoCooperativa => "OTROS",
            self::Fondo => "OTROS",
            self::FondoFSP_Solidaridad => "OTROS",
            self::FondoFSP_Subsistencia => "OTROS",
            self::Gastos_Representacion => "OTROS",
            self::HoraExtraDiurna => "HORAS_EXTRA",
            self::HoraExtraNocturna => "HORAS_EXTRA",
            self::HoraExtraDominicalDiurna => "HORAS_EXTRA",
            self::HoraExtraDominicalNocturna => "HORAS_EXTRA",
            self::HoraDominical => "HORAS_EXTRA",
            self::HuelgaLegal => "OTROS",
            self::Indegnizacion => "OTROS",
            self::IndegnizacionRetiro => "OTROS",
            self::Ingresos_No_Prestacionales => "OTROS",
            self::Intereses => "OTROS",
            self::Libranza => "OTROS",
            self::Liquidacion_Cesantias => "LIQUIDACION",
            self::Liquidacion_IntCesantias => "LIQUIDACION",
            self::Liquidacion_Primas => "LIQUIDACION",
            self::Liquidacion_Vacaciones => "LIQUIDACION",
            self::Liquidacion_Prima_Vacaciones => "LIQUIDACION",
            self::Liquidacion_Prima_Convencional => "LIQUIDACION",
            self::No_Aplicar_Tiempo => "OTROS",
            self::Pago_IncapARP_ARP => "OTROS",
            self::Pago_Tercero => "OTROS",
            self::Pago_IncapARP_Patron => "OTROS",
            self::Pago_IncapIGE_EPS => "OTROS",
            self::Pago_IncapIGE_Patron => "OTROS",
            self::Pago_IncapLMA_EPS => "OTROS",
            self::Prestamos => "OTROS",
            self::Provision_Cesantias => "PROV_PREST",
            self::Provision_IntCesantias => "PROV_PREST",
            self::Provision_Primas => "PROV_PREST",
            self::Provision_Vacaciones => "PROV_PREST",
            self::Provision_Prima_Vacaciones => "PROV_PREST",
            self::Provision_Prima_Convencional => "PROV_PREST",
            self::RecargoNocturno => "HORAS_EXTRA",
            self::RecargoNocturnoDominical => "HORAS_EXTRA",
            self::RecargoNocturnoEspecial => "HORAS_EXTRA",
            self::Reintegro => "OTROS",
            self::Retefuente => "OTROS",
            self::RetroActivo_Salario => "OTROS",
            self::RetroActivo_HorasExtras => "OTROS",
            self::RetroActivo_Vacaciones => "OTROS",
            self::Salario => "OTROS",
            self::Saldo_Negativo => "OTROS",
            self::Saldo_Positivo => "OTROS",
            self::SancionPublica => "OTROS",
            self::SancionPrivada => "OTROS",
            self::Sindicato => "OTROS",
            self::SubsidioTransporte => "OTROS",
            self::Teletrabajo => "OTROS",
            self::ValesAlimentacion => "OTROS",
            self::Viatico => "OTROS",
            self::IGE_IncapacidadGeneral => "PLANILLA_UNICA",
            self::IRP_IncapacidadAccidenteTrabajo => "PLANILLA_UNICA",
            self::LMA_LicenciaMaternidad => "PLANILLA_UNICA",
            self::SLN_SuspencionTemporalLicenciaNoRemunerada => "PLANILLA_UNICA",
            self::VST_VariacionTransitoriaSalario => "PLANILLA_UNICA",
            self::VSP_VariacionPermanenteSalario => "PLANILLA_UNICA",
            self::TDE_TrasladoDesdeOtraEPS => "PLANILLA_UNICA",
            self::TAE_TrasladoAotraEPS => "PLANILLA_UNICA",
            self::TDP_TrasladoDesdeOtraAFP => "PLANILLA_UNICA",
            self::TAP_TrasladoAotraAFP => "PLANILLA_UNICA",
            self::VTE_CambioTarifaEspecial => "PLANILLA_UNICA",
            self::AFP_AporteVoluntario => "PLANILLA_UNICA",
            self::VCT_VariacionCentrosTrabajo => "PLANILLA_UNICA",
            self::Dia_NoTrabajado => "PLANILLA_UNICA",
            self::LRM_LicenciaRemunerada => "PLANILLA_UNICA",
            self::CuentaPorPagar => "OTROS",
            self::Cambio_TipoCotizante => "CAMBIOS_V",
            self::Cambio_SubTipoCotizante => "CAMBIOS_V",
            self::Cambio_CuentaBancaria => "CAMBIOS_V",
            self::Cambio_RubroContable => "CAMBIOS_C",
            self::Cambio_Sucursal => "CAMBIOS_C",
            self::Cambio_SucursalPILA => "CAMBIOS_C",
            self::Cambio_Sede => "CAMBIOS_C",
            self::Cambio_Division => "CAMBIOS_C",
            self::Cambio_TipoPagoSubTransporte => "CAMBIOS_C",
            self::Cambio_Cargo => "CAMBIOS_C",
            self::Cambio_Contrato => "CAMBIOS_C",
            self::Cambio_CajaCompensacion => "CAMBIOS_C",
            self::Cambio_FondoCesantias => "CAMBIOS_C",
            self::Cambio_PorcentajePPD => "CAMBIOS_C",
            self::Cambio_PorcentajeARP => "CAMBIOS_C",
            self::Cambio_Extranjero => "CAMBIOS_V",
            self::Cambio_ResideExterior => "CAMBIOS_V",
            self::Cambio_ReteFuente => "CAMBIOS_C",
            self::Cambio_PoseeCuenta => "CAMBIOS_V",
            self::Cambio_TipoPago => "CAMBIOS_C",
            self::Cambio_AreaTrabajo => "CAMBIOS_C",
            self::Cambio_Activo => "CAMBIOS_C",
            self::Cambio_Revincular => "CAMBIOS_C",
        ];

        return isset($descriptions[$value]) ? $descriptions[$value] : null;
    }

    // Ejemplo
    // $descripcion = EnumVariablesSistema::getDescription(EnumVariablesSistema::AFC_Cuenta);
    // echo $descripcion; // Esto mostrará "OTROS"

}

class EnumIncapacidades
{
    const IGE_IncapacidadGeneral = EnumVariablesSistema::IGE_IncapacidadGeneral;
    const IRP_IncapacidadAccidenteTrabajo = EnumVariablesSistema::IRP_IncapacidadAccidenteTrabajo;
    const LMA_LicenciaMaternidad = EnumVariablesSistema::LMA_LicenciaMaternidad;

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

    // Ejemplo
    // $valor = EnumIncapacidades::IGE_IncapacidadGeneral;
    // echo $valor; // Esto mostrará el valor de IGE_IncapacidadGeneral
}

class EnumModulos
{
    const ActualizarControlCambio = 100;
    const AgenteDelAccidente = 117;
    const AsignacionContable = 92;
    const AsignacionFactura = 1;
    const AsignacionTipoResponsabilidad = 2;
    const AsignacionRecursoLabor = 4;
    const AnalisisNomina = 3;
    const AnalisisPILA = 5;
    const AnalisisNominaElectronica = 138;
    const AporteVoluntarioSeguridadSocial = 6;
    const Auditoria = 7;
    const Barrio = 8;
    const BeneficioPersonal = 104;
    const Buscador = 9;
    const BuscGeneral = 10;
    const BuscarHojaVida = 11;
    const BuscarNomina = 12;
    const ConsultaDinamica = 13;
    const Calendario = 14;
    const CambioContraseña = 15;
    const Cargo = 16;
    const CentroCosto = 17;
    const Ciudad = 18;
    const CambioContratacion = 19;
    const CambioVinculacion = 88;
    const CargarCatalogos = 136;
    const CausasAccidente = 128;
    const CausasBasicas = 118;
    const CausasInmediatas = 119;
    const CatalagoProveedor = 134;
    const CertificadoReteFuente = 20;
    const ConceptoReteFuente = 21;
    const ConceptoNovedad = 22;
    const ConceptoNovedadEmpresa = 23;
    const ConfiguracionEmpresa = 25;
    const ConfiguracionFormulario = 26;
    const ConfiguracionEmail = 97;
    const ConfiguracionCertificados = 98;
    const Contrato = 27;
    const ConsecutivoCliente = 106;
    const CuentasBancarias = 28;
    const DatosFamiliares = 29;
    const DatosGenerales = 30;
    const Departamento = 31;
    const Division = 33;
    const DiagnosticoDeLaLesion = 120;
    const DireccionTercero = 142;
    const ElementoClasificacionLabor = 90;
    const ElementoDotacion = 101;
    const EjecucionNomina = 34;
    const EjecucionPILA = 35;
    const EjecucionNominaElectronica = 137;
    const EjecutarScript = 91;
    const Embargos = 36;
    const EmpresaPILA = 37;
    const Estrato = 38;
    const EstudiosRealizados = 39;
    const ExperienciaLaboral = 40;
    const FacturacionNomina = 41;
    const FondosAhorroRegistros = 42;
    const FondosAhorroPago = 43;
    const FondoSolidaridad = 44;
    const HistorialMovimiento = 87;
    const HorasExtras = 45;
    const ImportacionDatos = 46;
    const IncapacidadValorizada = 47;
    const IngresosDescuentosConsecutivos = 48;
    const InteligenciaNegocios = 99;
    const InterfaceWEB = 131;
    const LiquidacionVacaciones = 49;
    const LiquidacionPrestacionesSociales = 50;
    const LiquidacionContrato = 51;
    const LugarZona = 108;
    const MantenimientoBD = 95;
    const ManejoContratos = 105;
    const Mensajes = 24;
    const MecanismosDeAccidente = 121;
    const MetodoPago = 143;
    const ModalidadServicio = 52;
    const MotivoRetiro = 53;
    const NaturalezaDeLalesion = 122;
    const NivelEducativo = 54;
    const NivelesSeguridad = 55;
    const NivelesSeguridadUsuario = 96;
    const NovedadesCargos = 103;
    const NovedadesSeguridadSocial = 56;
    const NovedadesReteFuente = 32;
    const OrigenDeLaLesion = 139;
    const OtrosIngresosDescuentos = 57;
    const OficinaJuzgados = 93;
    const Pais = 58;
    const PagoLabor = 89;
    const PagoProduccion = 59;
    const PagoProduccionEncabezado = 60;
    const ParteDelCuerpo = 123;
    const Pagos_Externos = 130;
    const PlanUnicoCuentas = 61;
    const Proveedores = 133;
    const Contratacion = 62;
    const Prestamos = 63;
    const Procesos = 109;
    const Profesion = 64;
    const Prorrogas = 65;
    const Referencias = 66;
    const RegistrarUsuario = 67;
    const RegistrarCatalagoProveedor = 135;
    const RegistrarOperadorNE = 144;
    const RegistrarTallas = 102;
    const RequisitoEvaluar = 68;
    const RubroContable = 69;
    const Rutas = 70;
    const SaldosIniciales = 71;
    const Sede = 72;
    const SO_Seguimiento_De_Eventos = 107;
    const SO_Matriz_Riesgo = 110;
    const SO_Registro_EventoNoDeseado = 127;
    const SitioOcurrencia = 124;
    const SubTipoCotizante = 73;
    const Sucursal = 74;
    const SucursalPILA = 94;
    const TablaUVT = 75;
    const Telefonos = 76;
    const Terminacion = 77;
    const Tercero = 78;
    const TipoAportante = 79;
    const TipoCotizante = 80;
    const TipoContacto = 125;
    const TipoIdioma = 140;
    const TipoLesion = 126;
    const TipoMoneda = 141;
    const TipoServicio = 81;
    const TipoResponsabilidad = 82;
    const TipoProducto = 132;
    const TransferenciaBancaria = 83;
    const TransferenciaContable = 84;
    const TransaccionesContables = 85;
    const TurnosTrabajo = 129;
    const Vinculacion = 86;


}

class EnumModulosWEB
{
    const Solicitud_Permiso_Licencias_Vacaciones = 1;
    const Registro_Incapacidad = 2;
    const Registro_TiempoSuplementario = 3;
}

class EnumModulosMaestroHojaVida
{
    const ConfiguracionFormulario = EnumModulos::ConfiguracionFormulario;
    const Ciudad = EnumModulos::Ciudad;
    const Departamento = EnumModulos::Departamento;
    const Division = EnumModulos::Division;
    const Estrato = EnumModulos::Estrato;
    const NivelEducativo = EnumModulos::NivelEducativo;
    const Pais = EnumModulos::Pais;
    const Profesion = EnumModulos::Profesion;
    const ElementoDotacion = EnumModulos::ElementoDotacion;

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

class EnumModulosMaestroNomina
{
    const Barrio = EnumModulos::Barrio;
    const Cargo = EnumModulos::Cargo;
    const CentroCosto = EnumModulos::CentroCosto;
    const Contrato = EnumModulos::Contrato;
    const Sede = EnumModulos::Sede;
    const Sucursal = EnumModulos::Sucursal;
    const FondoSolidaridad = EnumModulos::FondoSolidaridad;
    const MetodoPago = EnumModulos::MetodoPago;
    const MotivoRetiro = EnumModulos::MotivoRetiro;
    const ModalidadServicio = EnumModulos::ModalidadServicio;
    const TablaUVT = EnumModulos::TablaUVT;
    const SubTipoCotizante = EnumModulos::SubTipoCotizante;
    const TipoAportante = EnumModulos::TipoAportante;
    const TipoCotizante = EnumModulos::TipoCotizante;
    const ConceptoReteFuente = EnumModulos::ConceptoReteFuente;
    const ElementoClasificacionLabor = EnumModulos::ElementoClasificacionLabor;
    const AsignacionRecursoLabor = EnumModulos::AsignacionRecursoLabor;
    const OficinaJuzgados = EnumModulos::OficinaJuzgados;
    const SucursalPILA = EnumModulos::SucursalPILA;
    const RegistrarOperadorNE = EnumModulos::RegistrarOperadorNE;

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

class EnumModulosMaestroNovedades
{
    const ConceptoNovedad = EnumModulos::ConceptoNovedad;
    const RubroContable = EnumModulos::RubroContable;
    const ConceptoNovedadEmpresa = EnumModulos::ConceptoNovedadEmpresa;
    const AsignacionContable = EnumModulos::AsignacionContable;
    const AsignacionFactura = EnumModulos::AsignacionFactura;
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

class EnumModulosMaestroTercero
{
    const Tercero = EnumModulos::Tercero;
    const CuentasBancarias = EnumModulos::CuentasBancarias;
    const Telefonos = EnumModulos::Telefonos;
    const EmpresaPILA = EnumModulos::EmpresaPILA;
    const ConfiguracionEmpresa = EnumModulos::ConfiguracionEmpresa;
    const TipoResponsabilidad = EnumModulos::TipoResponsabilidad;
    const TipoIdioma = EnumModulos::TipoIdioma;
    const TipoMoneda = EnumModulos::TipoMoneda;
    const AsignacionTipoResponsabilidad = EnumModulos::AsignacionTipoResponsabilidad;
    const ConfiguracionEmail = EnumModulos::ConfiguracionEmail;
    const ConfiguracionCertificados = EnumModulos::ConfiguracionCertificados;
    const ConsecutivoCliente = EnumModulos::ConsecutivoCliente;
    const ManejoContratos = EnumModulos::ManejoContratos;
    const DireccionTercero = EnumModulos::DireccionTercero;

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


class EnumModulosHojaVida
{
    const DatosGenerales = EnumModulos::DatosGenerales;
    const DatosFamiliares = EnumModulos::DatosFamiliares;
    const EstudiosRealizados = EnumModulos::EstudiosRealizados;
    const ExperienciaLaboral = EnumModulos::ExperienciaLaboral;
    const Referencias = EnumModulos::Referencias;
    const RegistrarTallas = EnumModulos::RegistrarTallas;

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

class EnumModulosInscripciones
{
    const Vinculacion = EnumModulos::Vinculacion;
    const CambioVinculacion = EnumModulos::CambioVinculacion;

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

class EnumModulosMovimientos
{
    const Contratacion = EnumModulos::Contratacion;
    const Prorrogas = EnumModulos::Prorrogas;
    const Terminacion = EnumModulos::Terminacion;
    const CambioContratacion = EnumModulos::CambioContratacion;

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

class EnumModulosNovedades
{
    const AporteVoluntarioSeguridadSocial = EnumModulos::AporteVoluntarioSeguridadSocial;
    const Embargos = EnumModulos::Embargos;
    const HorasExtras = EnumModulos::HorasExtras;
    const FondosAhorroRegistros = EnumModulos::FondosAhorroRegistros;
    const FondosAhorroPago = EnumModulos::FondosAhorroPago;
    const IncapacidadValorizada = EnumModulos::IncapacidadValorizada;
    const IngresosDescuentosConsecutivos = EnumModulos::IngresosDescuentosConsecutivos;
    const NovedadesCargos = EnumModulos::NovedadesCargos;
    const BeneficioPersonal = EnumModulos::BeneficioPersonal;
    const NovedadesSeguridadSocial = EnumModulos::NovedadesSeguridadSocial;
    const NovedadesReteFuente = EnumModulos::NovedadesReteFuente;
    const OtrosIngresosDescuentos = EnumModulos::OtrosIngresosDescuentos;
    const Pagos_Externos = EnumModulos::Pagos_Externos;
    const PagoLabor = EnumModulos::PagoLabor;
    const PagoProduccion = EnumModulos::PagoProduccion;
    const Prestamos = EnumModulos::Prestamos;

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

class EnumTercerosOtraInformacion
{
    const Telefonos = EnumModulos::Telefonos;
    const CuentasBancarias = EnumModulos::CuentasBancarias;
    const RequisitoEvaluar = EnumModulos::RequisitoEvaluar;
    const TipoResponsabilidad = EnumModulos::TipoResponsabilidad;
    const EmpresaPila = EnumModulos::EmpresaPILA;

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
    const No36 = "36   Pagos por salario o emolumentos eclesiásticos";
    const No37 = "37   Pagos realizados en bonos electrónicos o de papel de servicios, cheques, tarjetas, vales, etc.";
    const No38 = "38   Pagos por honorarios";
    const No39 = "39   Pagos por servicios";
    const No40 = "40   Pagos por comisiones";
    const No41 = "41   Pagos por prestaciones sociales";
    const No42 = "42   Pagos por viáticos";
    const No43 = "43   Pagosp por gastos de representación";
    const No44 = "44   Pagos por compensaciones por el trabajo asociado cooperativo";
    const No45 = "45   Otros pagos";
    const No46 = "46   Cesantías e intereses de cesantías efectivamente pagadas al empleado";
    const No47 = "47   Cesantías consignadas al fondo de cesantías";
    const No48 = "48   Pensiones de jubilación, vejez o invalidez";
    const No49 = "49   Total de Ingresos brutas (suma 36 a 48)";
    const No50 = "50   Aportes obligatorios por salud a cargo del trabajador";
    const No51 = "51   Aportes obligatorios a fondos de pensiones y solidaridas pensional a cargo del trabajador";
    const No52 = "52   Cotizaciones voluntarias al régimen de ahorro individual con solidaridad - RAIS";
    const No53 = "53   Aportes voluntarios a fondos de pensiones";
    const No54 = "54   Aportes a cuentas AFC";
    const No55 = "55   Valor de la retención en la fuente por ingresos laborales y de pensiones";

    public static function toArray()
    {
        $class = new ReflectionClass(__CLASS__);
        return $class->getConstants();
    }
}


class EnumFormulariosNovedades
{
    const AporteVoluntarioSeguridadSocial = EnumModulos::AporteVoluntarioSeguridadSocial;
    const BeneficioPersonal = EnumModulos::BeneficioPersonal;
    const CambioContratacion = EnumModulos::CambioContratacion;
    const CambioVinculacion = EnumModulos::CambioVinculacion;
    const Embargos = EnumModulos::Embargos;
    const FondosAhorroRegistros = EnumModulos::FondosAhorroRegistros;
    const FondosAhorroPago = EnumModulos::FondosAhorroPago;
    const HorasExtras = EnumModulos::HorasExtras;
    const IncapacidadValorizada = EnumModulos::IncapacidadValorizada;
    const IngresosDescuentosConsecutivos = EnumModulos::IngresosDescuentosConsecutivos;
    const LiquidacionVacaciones = EnumModulos::LiquidacionVacaciones;
    const LiquidacionPrestacionesSociales = EnumModulos::LiquidacionPrestacionesSociales;
    const NovedadesCargos = EnumModulos::NovedadesCargos;
    const NovedadesSeguridadSocial = EnumModulos::NovedadesSeguridadSocial;
    const OtrosIngresosDescuentos = EnumModulos::OtrosIngresosDescuentos;
    const PagoLabor = EnumModulos::PagoLabor;
    const Pagos_Externos = EnumModulos::Pagos_Externos;
    const PagoProduccion = EnumModulos::PagoProduccion;
    const Prestamos = EnumModulos::Prestamos;
    const SaldosIniciales = EnumModulos::SaldosIniciales;

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


class EnumModulosEjecucion
{
    const EjecucionNomina = EnumModulos::EjecucionNomina;
    const EjecucionPILA = EnumModulos::EjecucionPILA;
    const EjecucionNominaElectronica = EnumModulos::EjecucionNominaElectronica;
    const LiquidacionVacaciones = EnumModulos::LiquidacionVacaciones;
    const LiquidacionPrestacionesSociales = EnumModulos::LiquidacionPrestacionesSociales;
    const LiquidacionContrato = EnumModulos::LiquidacionContrato;

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


class EnumLiquidacionPrestacionales
{
    const Liquidacion_Cesantias = EnumVariablesSistema::Liquidacion_Cesantias;
    const Liquidacion_IntCesantias = EnumVariablesSistema::Liquidacion_IntCesantias;
    const Liquidacion_Primas = EnumVariablesSistema::Liquidacion_Primas;
    const Liquidacion_Vacaciones = EnumVariablesSistema::Liquidacion_Vacaciones;

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

class EnumMensajes
{
    const Ingresos = 1;
    const Terminos = 2;
    const Vacaciones = 3;
    const PeriodoPrueba = 4;
    const FinalizacionContrato = 5;
    const VencimientoEstudios = 6;

    public static function getDescription($value)
    {
        $descriptions = [
            self::Ingresos => 'Ingresos',
            self::Terminos => 'Terminos',
            self::Vacaciones => 'Vacaciones',
            self::PeriodoPrueba => 'Periodo de Prueba',
            self::FinalizacionContrato => 'Finalizacion de Contrato',
            self::Vencimiento_Estudios => 'Vencimiento de Estudios',
        ];

        return $descriptions[$value] ?? null;
    }
}

class EnumModulosInformes
{
    const BuscarNomina = EnumModulos::BuscarNomina;
    const BuscarHojaVida = EnumModulos::BuscarHojaVida;
    const ConsultaDinamica = EnumModulos::ConsultaDinamica;
    const AnalisisNomina = EnumModulos::AnalisisNomina;
    const AnalisisPILA = EnumModulos::AnalisisPILA;
    const AnalisisNominaElectronica = EnumModulos::AnalisisNominaElectronica;
    const TransferenciaBancaria = EnumModulos::TransferenciaBancaria;
    const TransferenciaContable = EnumModulos::TransferenciaContable;
    const FacturacionNomina = EnumModulos::FacturacionNomina;
    const CertificadoReteFuente = EnumModulos::CertificadoReteFuente;

    public static function getDescription($value)
    {
        $reflectionClass = new ReflectionClass(EnumModulos::class);
        $constants = $reflectionClass->getConstants();
        return array_search($value, $constants);
    }
}

class EnumModulosSeguridad
{
    const ActualizarControlCambio = EnumModulos::ActualizarControlCambio;
    const Auditoria = EnumModulos::Auditoria;
    const RegistrarUsuario = EnumModulos::RegistrarUsuario;
    const CambioContraseña = EnumModulos::CambioContraseña;
    const NivelesSeguridad = EnumModulos::NivelesSeguridad;
    const Calendario = EnumModulos::Calendario;
    const Rutas = EnumModulos::Rutas;
    const ImportacionDatos = EnumModulos::ImportacionDatos;
    const InterfaceWEB = EnumModulos::InterfaceWEB;
    const Mensajes = EnumModulos::Mensajes;
    const MantenimientoBD = EnumModulos::MantenimientoBD;
    const NivelesSeguridadUsuario = EnumModulos::NivelesSeguridadUsuario;
    const InteligenciaNegocios = EnumModulos::InteligenciaNegocios;

    public static function getDescription($value)
    {
        $reflectionClass = new ReflectionClass(EnumModulos::class);
        $constants = $reflectionClass->getConstants();
        return array_search($value, $constants);
    }
}

class EnumFormularios
{
    const AsignacionContable = EnumModulos::AsignacionContable;
    const AsingacionFactura = EnumModulos::AsignacionFactura;
    const Barrio = EnumModulos::Barrio;
    const BeneficioPersonal = EnumModulos::BeneficioPersonal;
    const Cargo = EnumModulos::Cargo;
    const CentroCosto = EnumModulos::CentroCosto;
    const Ciudad = EnumModulos::Ciudad;
    const ConceptoNovedad = EnumModulos::ConceptoNovedad;
    const Contrato = EnumModulos::Contrato;
    const DatosGenerales = EnumModulos::DatosGenerales;
    const Departamento = EnumModulos::Departamento;
    const Division = EnumModulos::Division;
    const ElementoDotacion = EnumModulos::ElementoDotacion;
    const EmpresaPILA = EnumModulos::EmpresaPILA;
    const EjecucionNomina = EnumModulos::EjecucionNomina;
    const EjecucionPILA = EnumModulos::EjecucionPILA;
    const EjecucionNominaElectronica = EnumModulos::EjecucionNominaElectronica;
    const Estrato = EnumModulos::Estrato;
    const FondosAhorroRegistros = EnumModulos::FondosAhorroRegistros;
    const ModalidadServicio = EnumModulos::ModalidadServicio;
    const MotivoRetiro = EnumModulos::MotivoRetiro;
    const NovedadesCargos = EnumModulos::NovedadesCargos;
    const NivelEducativo = EnumModulos::NivelEducativo;
    const Pais = EnumModulos::Pais;
    const PagoLabor = EnumModulos::PagoLabor;
    const PagoProduccionEncabezado = EnumModulos::PagoProduccionEncabezado;
    const Contratacion = EnumModulos::Contratacion;
    const Prestamos = EnumModulos::Prestamos;
    const Profesion = EnumModulos::Profesion;
    const RubroContable = EnumModulos::RubroContable;
    const Sede = EnumModulos::Sede;
    const SubTipoCotizante = EnumModulos::SubTipoCotizante;
    const Sucursal = EnumModulos::Sucursal;
    const SucursalPILA = EnumModulos::SucursalPILA;
    const Tercero = EnumModulos::Tercero;
    const TipoAportante = EnumModulos::TipoAportante;
    const TipoCotizante = EnumModulos::TipoCotizante;
    const TipoServicio = EnumModulos::TipoServicio;
    const TipoResponsabilidad = EnumModulos::TipoResponsabilidad;
    const TransferenciaBancaria = EnumModulos::TransferenciaBancaria;
    const LiquidacionVacaciones = EnumModulos::LiquidacionVacaciones;
    const LiquidacionPrestacionesSociales = EnumModulos::LiquidacionPrestacionesSociales;
    const LiquidacionContrato = EnumModulos::LiquidacionContrato;
    const Vinculacion = EnumModulos::Vinculacion;
    const No_Aplica = 0;

    public static function getDescription($value)
    {
        $reflectionClass = new ReflectionClass(EnumModulos::class);
        $constants = $reflectionClass->getConstants();
        return array_search($value, $constants);
    }
}

class EnumAplicacionConceptoNovedadEmpresal
{
    const INDIVIDUAL = 1;
    const TODOS = 2;
    const AGRUPAR = 3;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::INDIVIDUAL:
                return 'INDIVIDUAL';
            case self::TODOS:
                return 'TODOS';
            case self::AGRUPAR:
                return 'AGRUPAR';
            default:
                return '';
        }
    }
}

class EnumAreaTrabajo
{
    const ADMINISTRATIVO = 1;
    const OPERATIVO = 2;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::ADMINISTRATIVO:
                return 'ADMINISTRATIVO';
            case self::OPERATIVO:
                return 'OPERATIVO';
            default:
                return '';
        }
    }
}

class EnumArchivoPlano
{
    const BANCO_BOGOTA = 1;
    const BANCOLOMBIA = 2;
    const BANCO_GRANAHORRAR = 3;
    const BANCO_BBVA = 4;
    const JURISCOL = 5;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::BANCO_BOGOTA:
                return 'BANCO DE BOGOTA';
            case self::BANCOLOMBIA:
                return 'BANCOLOMBIA';
            case self::BANCO_GRANAHORRAR:
                return 'BANCO DE GRANAHORRAR';
            case self::BANCO_BBVA:
                return 'BANCO BBVA';
            case self::JURISCOL:
                return 'JURISCOL';
            default:
                return '';
        }
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

    public static function getDescription($value)
    {
        switch ($value) {
            case self::HDR:
                return 'HDR';
            case self::EMP:
                return 'EMP';
            case self::TRA:
                return 'TRA';
            case self::PER:
                return 'PER';
            case self::LGE:
                return 'LGE';
            case self::IGE:
                return 'IGE';
            case self::NOT:
                return 'NOT';
            case self::PAG:
                return 'PAG';
            case self::FPA:
                return 'FPA';
            case self::DBA:
                return 'DBA';
            case self::DTR:
                return 'DTR';
            case self::HEX:
                return 'HEX';
            case self::VAC:
                return 'VAC';
            case self::VCO:
                return 'VCO';
            case self::PRI:
                return 'PRI';
            case self::CES:
                return 'CES';
            case self::INC:
                return 'INC';
            case self::LIC:
                return 'LIC';
            case self::BON:
                return 'BON';
            case self::AUX:
                return 'AUX';
            case self::HLE:
                return 'HLE';
            case self::OCO:
                return 'OCO';
            case self::COM:
                return 'COM';
            case self::BOO:
                return 'BOO';
            case self::COI:
                return 'COI';
            case self::PTE:
                return 'PTE';
            case self::ANT:
                return 'ANT';
            case self::DEV:
                return 'DEV';
            case self::SAL:
                return 'SAL';
            case self::FPE:
                return 'FPE';
            case self::FSP:
                return 'FSP';
            case self::SIN:
                return 'SIN';
            case self::SAN:
                return 'SAN';
            case self::LIB:
                return 'LIB';
            case self::PAT:
                return 'PAT';
            case self::ANI:
                return 'ANI';
            case self::ODE:
                return 'ODE';
            case self::DED:
                return 'DED';
            case self::RES:
                return 'RES';
            case self::FOO:
                return 'FOO';
            case self::NSX:
                return 'NSX';
            case self::ELP:
                return 'ELP';
            case self::REP:
                return 'REP';
            default:
                return '';
        }
    }
}

class EnumClaseEmpresa
{
    const EMPRESA = 1;
    const COOPERATIVA = 2;
    const BANCO = 3;
    const PILA = 4;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::EMPRESA:
                return 'EMPRESA';
            case self::COOPERATIVA:
                return 'COOPERATIVA';
            case self::BANCO:
                return 'BANCO';
            case self::PILA:
                return 'PILA';
            default:
                return '';
        }
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

    public static function getDescription($value)
    {
        switch ($value) {
            case self::LUNES:
                return 'LUNES';
            case self::MARTES:
                return 'MARTES';
            case self::MIERCOLES:
                return 'MIERCOLES';
            case self::JUEVES:
                return 'JUEVES';
            case self::VIERNES:
                return 'VIERNES';
            case self::SABADO:
                return 'SABADO';
            case self::DOMINGO:
                return 'DOMINGO';
            default:
                return '';
        }
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

    public static function getDescription($value)
    {
        switch ($value) {
            case self::soltero:
                return 'SOLTERO(A)';
            case self::casado:
                return 'CASADO(A)';
            case self::divorcio:
                return 'DIVORCIADO(A)';
            case self::separado:
                return 'SEPARADO(A)';
            case self::viudo:
                return 'VIUDO(A)';
            case self::unionLibre:
                return 'UNION LIBRE';
            case self::noDefinico:
                return 'NO DEFINIDO';
            default:
                return '';
        }
    }

    public static function getDescriptionArray()
    {
        $reflectionClass = new ReflectionClass(self::class);
        $enumArray = [];

        foreach ($reflectionClass->getConstants() as $key => $value) {
            $enumArray[$value] = constant(self::class . "::$key");
        }

        return $enumArray;


        // Uso de la función con el enum EnumEstadoCivil
        // $enumEstadoCivil = EnumEstadoCivil::getDescriptionArray();
        // print_r($enumEstadoCivil);
    }
}


class EnumStatusNE
{
    public const Validas = 1;
    public const Pendientes = 2;
    public const Erroneas = 3;
    public const Rechazadas = 4;
    public const Aceptadas = 5;

    /**
     * Devuelve un array con las descripciones de los estados de la nómina electrónica.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::Validas => 'Válidas',
            self::Pendientes => 'Pendientes',
            self::Erroneas => 'Erróneas',
            self::Rechazadas => 'Rechazadas',
            self::Aceptadas => 'Aceptadas',
        ];
    }

    /**
     * Obtiene la descripción del estado de la nómina electrónica dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // Ejemplo
    // use App\Enums\EnumStatusNE;
    // $descripcion = EnumStatusNE::getDescription(EnumStatusNE::Aceptadas);
    // // Devuelve 'Aceptadas'
}

class EnumTipoArchivoNE
{
    public const N = 1;
    public const E = 2;
    public const A = 3;

    /**
     * Devuelve un array con las descripciones de los tipos de archivo NE.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::N => 'N',
            self::E => 'E',
            self::A => 'A',
        ];
    }

    /**
     * Obtiene la descripción del tipo de archivo NE dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }
}

class EnumTipoConceptoMO
{
    public const DEFAULT = 1;
    public const ADICIONAL = 2;

    /**
     * Devuelve un array con las descripciones de los tipos de concepto MO.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::DEFAULT => 'DEFAULT',
            self::ADICIONAL => 'ADICIONAL',
        ];
    }

    /**
     * Obtiene la descripción del tipo de concepto MO dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }
}

class EnumReporteComprobantesPAGO
{
    public const GENERAL = 1;
    public const DETALLADO_INGRESOS = 2;
    public const DETALLADO_MODALIDAD = 3;
    public const DETALLADO_PRESTAMOS = 4;
    public const RESUMEN = 5;

    /**
     * Devuelve un array con las descripciones de los reportes de comprobantes de pago.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::GENERAL => 'GENERAL',
            self::DETALLADO_INGRESOS => 'DETALLADO INGRESOS',
            self::DETALLADO_MODALIDAD => 'DETALLADO MODALIDAD',
            self::DETALLADO_PRESTAMOS => 'DETALLADO PRESTAMOS',
            self::RESUMEN => 'RESUMEN',
        ];
    }

    /**
     * Obtiene la descripción del reporte de comprobante de pago dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumReporteComprobantesPAGO;

    // $descripcion = EnumReporteComprobantesPAGO::getDescription(EnumReporteComprobantesPAGO::DETALLADO_MODALIDAD);
    // Devuelve 'DETALLADO MODALIDAD'

}

class EnumReporteComprobantesPAGOFiltros
{
    public const CLIENTE = 1;
    public const MODALIDAD_CONTRATACION = 2;
    public const CONTRATACION = 3;
    public const CODIGO = 4;
    public const EMAIL = 5;

    /**
     * Devuelve un array con las descripciones de los filtros de los reportes de comprobantes de pago.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::CLIENTE => 'CLIENTE',
            self::MODALIDAD_CONTRATACION => 'MODALIDAD CONTRATACION',
            self::CONTRATACION => 'CONTRATACION',
            self::CODIGO => 'CODIGO',
            self::EMAIL => 'EMAIL',
        ];
    }

    /**
     * Obtiene la descripción del filtro del reporte de comprobante de pago dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumReporteComprobantesPAGOFiltros;

    // $descripcion = EnumReporteComprobantesPAGOFiltros::getDescription(EnumReporteComprobantesPAGOFiltros::CONTRATACION);
    // // Devuelve 'CONTRATACION'

}

class EnumFormaPresentacion
{
    public const UNICO = 1;
    public const CONSOLIDADO = 2;
    public const SUCURSAL = 3;
    public const DEPENDENCIA = 4;

    /**
     * Devuelve un array con las descripciones de las formas de presentación.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::UNICO => 'UNICO',
            self::CONSOLIDADO => 'CONSOLIDADO',
            self::SUCURSAL => 'SUCURSAL',
            self::DEPENDENCIA => 'DEPENDENCIA',
        ];
    }

    /**
     * Obtiene la descripción de la forma de presentación dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumFormaPresentacion;

    // $descripcion = EnumFormaPresentacion::getDescription(EnumFormaPresentacion::CONSOLIDADO);
    // // Devuelve 'CONSOLIDADO'

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

    /**
     * Devuelve un array con las descripciones de los grupos sanguíneos.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::Amas => 'A+',
            self::Amenos => 'A-',
            self::ABmas => 'AB+',
            self::ABmenos => 'AB-',
            self::Bmas => 'B+',
            self::Bmenos => 'B-',
            self::Omas => 'O+',
            self::Omenos => 'O-',
            self::noDefinido => 'NO DEFINIDO',
        ];
    }

    /**
     * Obtiene la descripción del grupo sanguíneo dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumGrupoSanguineo;

    // $descripcion = EnumGrupoSanguineo::getDescription(EnumGrupoSanguineo::Amas);
    // // Devuelve 'A+'

}


class EnumModalidadServicio
{
    public const NORMAL = 1;
    public const PPD = 2;
    public const LABOR = 3;

    /**
     * Devuelve un array con las descripciones de las modalidades de servicio.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::NORMAL => 'NORMAL',
            self::PPD => 'PPD',
            self::LABOR => 'LABOR',
        ];
    }

    /**
     * Obtiene la descripción de la modalidad de servicio dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumModalidadServicio;

    // $descripcion = EnumModalidadServicio::getDescription(EnumModalidadServicio::NORMAL);
    // // Devuelve 'NORMAL'

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

    /**
     * Devuelve un array con las descripciones de las modalidades de ejecución de nómina.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::INGRESO => 'INGRESO',
            self::DEDUCCION => 'DEDUCCION',
            self::PROV_SEG => 'PROVISION SEGURIDAD SOCIAL',
            self::PROV_PRF => 'PROVISION PARAFISCALES',
            self::PROV_ARP => 'PROVISION RIESGOS LABORALES',
            self::PROV_PRS => 'PROVISION PRESTACIONES SOCIALES',
            self::VACACIONES => 'VACACIONES',
        ];
    }

    /**
     * Obtiene la descripción de la modalidad de ejecución de nómina dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumModalidadEjecucionNomina;

    // $descripcion = EnumModalidadEjecucionNomina::getDescription(EnumModalidadEjecucionNomina::INGRESO);
    // // Devuelve 'INGRESO'

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

    /**
     * Devuelve un array con las descripciones de las novedades de retención en la fuente.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::Intereses_Vivienda => 'Intereses de Vivienda',
            self::SaludVoluntaria => 'Salud Voluntaria',
            self::Salud_Obligatoria => 'Salud Obligatoria',
            self::Ahorro_AFC => 'Ahorro AFC',
            self::Dependiente => 'Dependiente',
            self::DeclaranteRF => 'Declarante RF',
            self::Procedimiento_Dos => 'Procedimiento Dos',
            self::Alimentacion => 'Alimentación',
        ];
    }

    /**
     * Obtiene la descripción de la novedad de retención en la fuente dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumNovedadReteFuente;

    // $descripcion = EnumNovedadReteFuente::getDescription(EnumNovedadReteFuente::Intereses_Vivienda);
    // // Devuelve 'Intereses de Vivienda'

}

class EnumOperadoresNE
{
    public const Facturaxion = 1;
    public const Dian = 2;

    /**
     * Devuelve un array con las descripciones de los operadores NE.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::Facturaxion => 'Facturación',
            self::Dian => 'DIAN',
        ];
    }

    /**
     * Obtiene la descripción del operador NE dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumOperadoresNE;

    // $descripcion = EnumOperadoresNE::getDescription(EnumOperadoresNE::Facturaxion);
    // // Devuelve 'Facturación'

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

    /**
     * Devuelve un array con las descripciones de los parentescos.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::PADRE => 'Padre',
            self::MADRE => 'Madre',
            self::ESPOSO => 'Esposo(a)',
            self::HIJO => 'Hijo(a)',
            self::HERMANO => 'Hermano(a)',
            self::TIO => 'Tio(a)',
            self::OTROS => 'Otros',
        ];
    }

    /**
     * Obtiene la descripción del parentesco dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumParentesco;

    // $descripcion = EnumParentesco::getDescription(EnumParentesco::PADRE);
    // // Devuelve 'Padre'

}

class EnumRespuestaSINO
{
    public const SI = 1;
    public const NO = 0;

    /**
     * Devuelve un array con las descripciones de las respuestas.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::SI => 'Sí',
            self::NO => 'No',
        ];
    }

    /**
     * Obtiene la descripción de la respuesta dada su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumRespuestaSINO;

    // $descripcion = EnumRespuestaSINO::getDescription(EnumRespuestaSINO::SI);
    // // Devuelve 'Sí'

}

class EnumRegimenExcepcionSSS
{
    public const No_Aplica = 0;
    public const Decreto_1828_Artc_7 = 1;

    /**
     * Devuelve un array con las descripciones de los regímenes de excepción.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::No_Aplica => 'No Aplica',
            self::Decreto_1828_Artc_7 => 'Decreto 1828 Artículo 7',
        ];
    }

    /**
     * Obtiene la descripción del régimen de excepción dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumRegimenExcepcionSSS;

    // $descripcion = EnumRegimenExcepcionSSS::getDescription(EnumRegimenExcepcionSSS::No_Aplica);
    // // Devuelve 'No Aplica'

}

class EnumRutas
{
    public const ARCHIVOPLANOPILA = 1;
    public const ARCHIVOPLANOTB = 2;
    public const EXPORTACION_EXCELL = 3;
    public const BACKUP = 4;
    public const NOMINAELECTRONICA = 5;

    /**
     * Devuelve un array con las descripciones de las rutas.
     *
     * @return array
     */
    public static function descriptions(): array
    {
        return [
            self::ARCHIVOPLANOPILA => 'Archivo Plano PILA',
            self::ARCHIVOPLANOTB => 'Archivo Plano TB',
            self::EXPORTACION_EXCELL => 'Exportación Excel',
            self::BACKUP => 'Backup',
            self::NOMINAELECTRONICA => 'Nomina Electrónica',
        ];
    }

    /**
     * Obtiene la descripción de la ruta dado su valor.
     *
     * @param int $value
     * @return string|null
     */
    public static function getDescription(int $value): ?string
    {
        return static::descriptions()[$value] ?? null;
    }

    // use App\Enums\EnumRutas;

    // $descripcion = EnumRutas::getDescription(EnumRutas::ARCHIVOPLANOPILA);
    // // Devuelve 'Archivo Plano PILA'

}


class EnumSemana
{
    public const LV = 1;
    public const LS = 2;
    public const D = 3;

    public static function getDescription($value)
    {
        $descriptions = [
            self::LV => "Lunes a Viernes",
            self::LS => "Lunes a Sábado",
            self::D => "Domingo",
        ];

        return $descriptions[$value] ?? '';
    }

    public static function getAll()
    {
        $allValues = [
            self::LV => self::getDescription(self::LV),
            self::LS => self::getDescription(self::LS),
            self::D => self::getDescription(self::D),
        ];

        return $allValues;
    }

    // use App\Enums\EnumSemana;

    // $semanas = EnumSemana::getAll();

    // [
    //     1 => "Lunes a Viernes",
    //     2 => "Lunes a Sábado",
    //     3 => "Domingo",
    // ]

}


class EnumSexo
{
    public const M = 1;
    public const F = 2;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::M:
                return "MASCULINO";
            case self::F:
                return "FEMENINO";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::M => self::getDescription(self::M),
            self::F => self::getDescription(self::F),
        ];

        return $allValues;
    }

    // use App\Enums\EnumSexo;

    // $sexos = EnumSexo::getAll();

    // [
    //     1 => "MASCULINO",
    //     2 => "FEMENINO",
    // ]

}

class EnumTiempo
{
    public const hh = 1;
    public const mm = 2;
    public const ss = 3;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::hh:
                return "Hora";
            case self::mm:
                return "Minuto";
            case self::ss:
                return "Segundo";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::hh => self::getDescription(self::hh),
            self::mm => self::getDescription(self::mm),
            self::ss => self::getDescription(self::ss),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTiempo;

    // $tiempos = EnumTiempo::getAll();

    // [
    //     1 => "Hora",
    //     2 => "Minuto",
    //     3 => "Segundo",
    // ]


}

class EnumTiempoNovedades
{
    public const Fecha = 1;
    public const Fecha_Hora = 2;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::Fecha:
                return "Fecha";
            case self::Fecha_Hora:
                return "Fecha y Hora";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::Fecha => self::getDescription(self::Fecha),
            self::Fecha_Hora => self::getDescription(self::Fecha_Hora),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTiempoNovedades;

    // $tiemposNovedades = EnumTiempoNovedades::getAll();

    // [
    //     1 => "Fecha",
    //     2 => "Fecha y Hora",
    // ]

}

class EnumTipoCuenta
{
    public const AHORRO = 1;
    public const CORRIENTE = 2;
    public const NO_TIENE = 0;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::AHORRO:
                return "Ahorro";
            case self::CORRIENTE:
                return "Corriente";
            case self::NO_TIENE:
                return "No Tiene";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::AHORRO => self::getDescription(self::AHORRO),
            self::CORRIENTE => self::getDescription(self::CORRIENTE),
            self::NO_TIENE => self::getDescription(self::NO_TIENE),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTipoCuenta;

    // $tiposCuenta = EnumTipoCuenta::getAll();

    // [
    //     1 => "Ahorro",
    //     2 => "Corriente",
    //     0 => "No Tiene",
    // ]

}

class EnumTipoCentroCosto
{
    public const UNICO = 1;
    public const TIEMPO = 2;
    public const PORCENTAJE = 3;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::UNICO:
                return "Unico";
            case self::TIEMPO:
                return "Tiempo";
            case self::PORCENTAJE:
                return "Porcentaje";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::UNICO => self::getDescription(self::UNICO),
            self::TIEMPO => self::getDescription(self::TIEMPO),
            self::PORCENTAJE => self::getDescription(self::PORCENTAJE),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTipoCentroCosto;

    // $tiposCentroCosto = EnumTipoCentroCosto::getAll();

    // [
    //     1 => "Unico",
    //     2 => "Tiempo",
    //     3 => "Porcentaje",
    // ]

}

class EnumTipoPago
{
    public const COMERCIAL = 1;
    public const CALENDARIO = 2;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::COMERCIAL:
                return "Comercial";
            case self::CALENDARIO:
                return "Calendario";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::COMERCIAL => self::getDescription(self::COMERCIAL),
            self::CALENDARIO => self::getDescription(self::CALENDARIO),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTipoPago;

    // $tiposPago = EnumTipoPago::getAll();

    // [
    //     1 => "Comercial",
    //     2 => "Calendario",
    // ]

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

    public static function getDescription($value)
    {
        switch ($value) {
            case self::INGRESO:
                return "Ingreso";
            case self::DEDUCCION:
                return "Deducción";
            case self::HORAS_EXTRA:
                return "Horas Extra";
            case self::PROV_PREST:
                return "Provisión Prestaciones";
            case self::PROV_SEGSOC:
                return "Provisión Seguridad Social";
            case self::PLANILLA_UNICA:
                return "Planilla Única";
            case self::LIQUIDACION:
                return "Liquidación";
            case self::CAMBIOS_V:
                return "Cambios Vinculación";
            case self::CAMBIOS_C:
                return "Cambios Contratación";
            case self::AGRUPAR:
                return "Agrupar";
            case self::FORMULA:
                return "Fórmula";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::INGRESO => self::getDescription(self::INGRESO),
            self::DEDUCCION => self::getDescription(self::DEDUCCION),
            self::HORAS_EXTRA => self::getDescription(self::HORAS_EXTRA),
            self::PROV_PREST => self::getDescription(self::PROV_PREST),
            self::PROV_SEGSOC => self::getDescription(self::PROV_SEGSOC),
            self::PLANILLA_UNICA => self::getDescription(self::PLANILLA_UNICA),
            self::LIQUIDACION => self::getDescription(self::LIQUIDACION),
            self::CAMBIOS_V => self::getDescription(self::CAMBIOS_V),
            self::CAMBIOS_C => self::getDescription(self::CAMBIOS_C),
            self::AGRUPAR => self::getDescription(self::AGRUPAR),
            self::FORMULA => self::getDescription(self::FORMULA),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTipoNovedad;

    // $tiposNovedad = EnumTipoNovedad::getAll();

    // [
    //     1 => "Ingreso",
    //     2 => "Deducción",
    //     3 => "Horas Extra",
    //     4 => "Provisión Prestaciones",
    //     5 => "Provisión Seguridad Social",
    //     6 => "Planilla Única",
    //     7 => "Liquidación",
    //     8 => "Cambios Vinculación",
    //     9 => "Cambios Contratación",
    //     10 => "Agrupar",
    //     11 => "Fórmula",
    // ]

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

    public static function getDescription($value)
    {
        switch ($value) {
            case self::I:
                return "I";
            case self::R:
                return "R";
            case self::N:
                return "N";
            case self::NOR:
                return "NOR";
            case self::SLN:
                return "SLN";
            case self::IGE:
                return "IGE";
            case self::LMA:
                return "LMA";
            case self::VAC:
                return "VAC";
            case self::IRL:
                return "IRL";
            case self::LRM:
                return "LRM";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::I => self::getDescription(self::I),
            self::R => self::getDescription(self::R),
            self::N => self::getDescription(self::N),
            self::NOR => self::getDescription(self::NOR),
            self::SLN => self::getDescription(self::SLN),
            self::IGE => self::getDescription(self::IGE),
            self::LMA => self::getDescription(self::LMA),
            self::VAC => self::getDescription(self::VAC),
            self::IRL => self::getDescription(self::IRL),
            self::LRM => self::getDescription(self::LRM),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTipoNovedadSeguridadSocial;

    // $tiposNovedad = EnumTipoNovedadSeguridadSocial::getAll();

}

class EnumTipoNumeroPILA
{
    public const N = 1;
    public const A = 2;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::N:
                return "N";
            case self::A:
                return "A";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::A => self::getDescription(self::A),
            self::N => self::getDescription(self::N),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTipoPago;

    // $tiposPago = EnumTipoPago::getAll();

    // [
    //     1 => "Comercial",
    //     2 => "Calendario",
    // ]

}

class EnumTipoMovimiento
{
    public const INGRESO = 1;
    public const DESCUENTO = 2;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::INGRESO:
                return "Ingreso";
            case self::DESCUENTO:
                return "Descuento";
            default:
                return "";
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::INGRESO => self::getDescription(self::INGRESO),
            self::DESCUENTO => self::getDescription(self::DESCUENTO),
        ];

        return $allValues;
    }

    // use App\Enums\EnumTipoPago;

    // $tiposPago = EnumTipoPago::getAll();

    // [
    //     1 => "Comercial",
    //     2 => "Calendario",
    // ]

}


class EnumTipoCuota
{
    const QUINCENAL = 1;
    const MENSUAL = 2;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::QUINCENAL:
                return "Quincenal";
            case self::MENSUAL:
                return "Mensual";
            default:
                return null;
        }
    }

    public static function getAll()
    {
        $allValues = [
            self::QUINCENAL => self::getDescription(self::QUINCENAL),
            self::MENSUAL => self::getDescription(self::MENSUAL),
        ];

        return $allValues;
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


class EnumTipoRegistroConceptoNovedadEmpresa
{
    const ASIGCON = 1;
    const EMPRESA = 2;

    private static $descripciones = [
        self::ASIGCON => "Asignación Contable",
        self::EMPRESA => "Asignación por Empresa"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? null;
    }

    public static function getAll()
    {
        return self::$descripciones;
    }

    // use App\Enums\EnumTipoRegistroConceptoNovedadEmpresa;

    // $enumValues = EnumTipoRegistroConceptoNovedadEmpresa::getAll();

    // foreach ($enumValues as $value => $description) {
    //     echo "Valor: $value, Descripción: $description\n";
    // }

    // Valor: 1, Descripción: Asignación Contable
    // Valor: 2, Descripción: Asignación por Empresa

}

class EnumTipoRegistroHistorial
{
    const CONTRATACION = 1;
    const PRORROGA = 2;
    const TERMINO = 3;
    const NOVEDADPILA = 4;

    private static $descripciones = [
        self::CONTRATACION => "Contratación",
        self::PRORROGA => "Prorroga",
        self::TERMINO => "Termino",
        self::NOVEDADPILA => "Novedades de PILA"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }

    // use App\Enums\EnumTipoRegistroHistorial;

    // $enumValues = EnumTipoRegistroHistorial::getAll();

    // foreach ($enumValues as $value => $description) {
    //     echo "Valor: $value, Descripción: $description\n";
    // }

    // Valor: 1, Descripción: Contratación
    // Valor: 2, Descripción: Prorroga
    // Valor: 3, Descripción: Termino
    // Valor: 4, Descripción: Novedades de PILA


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

    private static $descripciones = [
        self::EPS => "EPS",
        self::AFP => "AFP",
        self::ARP => "ARP",
        self::CCF => "CCF",
        self::SENA => "SENA",
        self::ICBF => "ICBF",
        self::ESAP => "ESAP",
        self::MINISTERIOEDUCACION => "Ministerio de Educación",
        self::FONDO_CESANTIAS => "Fondo de Cesantías"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }

    // use App\Enums\EnumTipoServicioSeguridadSocial;

    // $enumValues = EnumTipoServicioSeguridadSocial::getAll();

    // foreach ($enumValues as $value => $description) {
    //     echo "Valor: $value, Descripción: $description\n";
    // }

    // Valor: 1, Descripción: EPS
    // Valor: 2, Descripción: AFP
    // Valor: 3, Descripción: ARP
    // Valor: 4, Descripción: CCF
    // Valor: 5, Descripción: SENA
    // Valor: 6, Descripción: ICBF
    // Valor: 7, Descripción: ESAP
    // Valor: 8, Descripción: Ministerio de Educación
    // Valor: 9, Descripción: Fondo de Cesantías

}

class EnumTipoTurno
{
    const NO_APLICA = 0;
    const PRIMER_TURNO = 1;
    const SEGUNDO_TURNO = 2;
    const TERCER_TURNO = 3;

    private static $descripciones = [
        self::NO_APLICA => "No Aplica",
        self::PRIMER_TURNO => "Turno 1",
        self::SEGUNDO_TURNO => "Turno 2",
        self::TERCER_TURNO => "Turno 3"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
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

    private static $descripciones = [
        self::CC => "Cedula de Ciudadania",
        self::TI => "Tarjeta de Identidad",
        self::RC => "Registro Civil",
        self::CE => "Cedula de Extranjería",
        self::PA => "Pasaporte",
        self::NI => "Numero de Identificación Tributaria NIT",
        self::CD => "Carne Diplomático",
        self::SC => "Salvoconducto de permanencia",
        self::NIO => "Numero de Identificación Tributaria NIT Entidad Oficial",
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
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

    private static $descripciones = [
        self::CC => "Cedula de Ciudadanía",
        self::CE => "Cedula de Extranjería",
        self::NIT_P => "NIT Entidad Privada",
        self::PA => "Pasaporte",
        self::TI => "Tarjeta de Identifica",
        self::NIT_O => "NIT Entidad Oficial"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

        public static function getAll()
    {
        return self::$descripciones;
    }

}

class EnumTipoTransferencia
{
    const CONSIGNACION = 1;
    const CHEQUE = 2;

    private static $descripciones = [
        self::CONSIGNACION => "Consignación",
        self::CHEQUE => "Cheque"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }

    // use App\Enums\EnumTipoTransferencia;

    // $enumValues = EnumTipoTransferencia::getAll();

    // foreach ($enumValues as $value => $description) {
    //     echo "Valor: $value, Descripción: $description\n";
    // }

    // Valor: 1, Descripción: Consignación
    // Valor: 2, Descripción: Cheque

}

class EnumTipoInformeSegSoc
{
    const PILA = 1;
    const PROVISION = 2;

    private static $descripciones = [
        self::PILA => "PILA",
        self::PROVISION => "Provisión"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoPagoLiquidacion
{
    const NOMINA = 1;
    const TESORERIA = 2;
    const FONDO = 3;
    const AHORRO = 4;

    private static $descripciones = [
        self::NOMINA => "Nómina",
        self::TESORERIA => "Tesorería",
        self::FONDO => "Fondo",
        self::AHORRO => "Ahorro"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? null;
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoLiquidacion
{
    const LEY = 1;
    const PROVISIONES = 2;

    private static $descripciones = [
        self::LEY => "Ley",
        self::PROVISIONES => "Provisiones"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoRegistroLiquidacion
{
    const ANTICIPO = 1;
    const PAGO = 2;
    const PAGO_SD = 3;

    private static $descripciones = [
        self::ANTICIPO => "Anticipo",
        self::PAGO => "Pago",
        self::PAGO_SD => "Pago SD"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
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

    private static $descripciones = [
        self::FIJO => "Fijo",
        self::INDEFINIDO => "Indefinido",
        self::APRENDIZAJE => "Aprendizaje",
        self::OBRA_LABOR => "Obra o Labor",
        self::PRACTICAS_PASANTIAS => "Prácticas o Pasantías",
        self::ASOCIACION => "Asociación"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoRegistro
{
    const IMPORTACION = 1;
    const REGISTRO = 2;
    const WEB = 3;

    private static $descripciones = [
        self::IMPORTACION => "Importación",
        self::REGISTRO => "Registro",
        self::WEB => "Web"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? null;
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoReferencia
{
    const PERSONAL = 1;
    const FAMILIAR = 2;

    private static $descripciones = [
        self::PERSONAL => "Personal",
        self::FAMILIAR => "Familiar"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoRegimen
{
    const SIMPLIFICADO = 1;
    const COMUN = 2;
    const GRAN_CONTRIBUYENTE = 3;

    private static $descripciones = [
        self::SIMPLIFICADO => "Simplificado",
        self::COMUN => "Común",
        self::GRAN_CONTRIBUYENTE => "Gran Contribuyente"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoActividad
{
    const COMERCIAL = 1;
    const SERVICIO = 2;
    const INDUSTRIAL = 3;

    private static $descripciones = [
        self::COMERCIAL => "Comercial",
        self::SERVICIO => "Servicio",
        self::INDUSTRIAL => "Industrial"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoPersona
{
    const NATURAL = 1;
    const JURIDICA = 2;

    private static $descripciones = [
        self::NATURAL => "Natural",
        self::JURIDICA => "Jurídica"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
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

    private static $descripciones = [
        self::E => "Empleados Empresas",
        self::Y => "Independientes Empresa",
        self::A => "Empleados Adicionales",
        self::I => "Independientes",
        self::S => "Empleados de Servicio Domestico",
        self::M => "Mora",
        self::N => "Correcciones",
        self::H => "Madres Sustitutas",
        self::T => "Empleados Entidad Beneficiaria SGP",
        self::F => "Pago Aporte Patronal Faltante SGP",
        self::J => "Pago Seguridad Social Cump. Sentencia Judicial",
        self::X => "Pago Empresa Liquidada",
        self::U => "Uso UGPP pago por tercero",
        self::K => "Estudiantes"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTelefonos
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

    private static $descripciones = [
        self::TELEFONO => "Teléfono",
        self::CELULAR => "Celular",
        self::BIPER => "Biper",
        self::EMAIL => "Email",
        self::EMERGENCIAS => "Emergencias",
        self::CELULAR_TRABAJO => "Celular de Trabajo",
        self::SITIO_WEB => "Sitio Web",
        self::FACEBOOK => "Facebook",
        self::INSTAGRAM => "Instagram",
        self::TWITTER => "Twitter",
        self::LINKEDIN => "LinkedIn",
        self::YOUTUBE => "YouTube"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoLibretaMilitar
{
    const PRIMERA = 1;
    const SEGUNDA = 2;
    const NO_APLICA = 3;
    const NO_DEFINIDO = 0;

    public static function getDescription($value)
    {
        switch ($value) {
            case self::PRIMERA:
                return "PRIMERA";
            case self::SEGUNDA:
                return "SEGUNDA";
            case self::NO_APLICA:
                return "NO_APLICA";
            case self::NO_DEFINIDO:
                return "NO DEFINIDO";
            default:
                return "Desconocido";
        }
    }

    public static function getAll()
    {
        return [
            self::PRIMERA => self::getDescription(self::PRIMERA),
            self::SEGUNDA => self::getDescription(self::SEGUNDA),
            self::NO_APLICA => self::getDescription(self::NO_APLICA),
            self::NO_DEFINIDO => self::getDescription(self::NO_DEFINIDO)
        ];
    }
}

class EnumTipoConsultaTercero
{
    const BANCO = 1;
    const CLIENTE = 2;
    const EMPLEADO = 3;
    const PROVEEDOR = 4;
    const EMPRESAPILA = 5;
    const TODOS = 6;

    private static $descripciones = [
        self::BANCO => "Banco",
        self::CLIENTE => "Cliente",
        self::EMPLEADO => "Empleado",
        self::PROVEEDOR => "Proveedor",
        self::EMPRESAPILA => "Empresa PILA",
        self::TODOS => "Todos"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumTipoRegistroSQL
{
    const INSERT = 1;
    const UPDATE = 2;
    const DELETE = 3;

    private static $descripciones = [
        self::INSERT => "INSERT",
        self::UPDATE => "UPDATE",
        self::DELETE => "DELETE"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
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

    private static $descripciones = [
        self::REGISTRADO => "Registrado",
        self::NO_REGISTRADO => "No Registrado",
        self::ESPERANDO_GUARDAR => "Esperando Guardar",
        self::ACTUALIZADO => "Actualizado",
        self::DESACTUALIZADO => "Desactualizado",
        self::NO_SUBIDO_WEB => "No Subido a la Web",
        self::ACTIVO => "Activo",
        self::INACTIVO => "Inactivo"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class TipoToken
{
    const NULO = 0;
    const DELIMITADOR = 1;
    const IDENTIFICADOR = 2;
    const NUMERO = 3;

    private static $descripciones = [
        self::NULO => "NULO",
        self::DELIMITADOR => "DELIMITADOR",
        self::IDENTIFICADOR => "IDENTIFICADOR",
        self::NUMERO => "NUMERO"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumListadoEnumeraciones
{
    const EnumConceptosCertificacion = 1;
    const EnumFormularios = 2;
    const EnumVariablesSistema = 3;

    private static $descripciones = [
        self::EnumConceptosCertificacion => "EnumConceptosCertificacion",
        self::EnumFormularios => "EnumFormularios",
        self::EnumVariablesSistema => "EnumVariablesSistema"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
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

    private static $descripciones = [
        self::Semanal => "Semanal",
        self::Decenal => "Decenal",
        self::Catorcenal => "Catorcenal",
        self::Quincenal => "Quincenal",
        self::Mensual => "Mensual",
        self::Otro => "Otro"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumNE_TipoIncapacidad
{
    const Comun = 1;
    const Profesional = 2;
    const Laboral = 3;

    private static $descripciones = [
        self::Comun => "Comun",
        self::Profesional => "Profesional",
        self::Laboral => "Laboral"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumNE_TipoXML
{
    const NominaIndividual = 102;
    const NominaIndividualDeAjuste = 103;

    private static $descripciones = [
        self::NominaIndividual => "NominaIndividual",
        self::NominaIndividualDeAjuste => "NominaIndividualDeAjuste"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumNE_TipoNota
{
    const Reemplazar = 1;
    const Eliminar = 2;

    private static $descripciones = [
        self::Reemplazar => "Reemplazar",
        self::Eliminar => "Eliminar"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumNE_FormaPago
{
    const Contado = 1;

    private static $descripciones = [
        self::Contado => "Contado"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
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

    private static $descripciones = [
        self::Registro_civil => "Registro civil",
        self::Tarjeta_identidad => "Tarjeta de identidad",
        self::Cedula_ciudadania => "Cédula de ciudadanía",
        self::Tarjeta_extranjeria => "Tarjeta de extranjería",
        self::Cedula_extranjeria => "Cédula de extranjería",
        self::NIT => "NIT",
        self::Pasaporte => "Pasaporte",
        self::Documento_identificacion_extranjero => "Documento de identificación extranjero",
        self::PEP => "PEP",
        self::NIT_otro_pais => "NIT de otro país",
        self::NUIP => "NUIP *"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumNE_Ambiente
{
    const Produccion = 1;
    const Pruebas = 2;

    private static $descripciones = [
        self::Produccion => "Producción",
        self::Pruebas => "Pruebas"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumNE_TipoContrato
{
    const Termino_Fijo = 1;
    const Termino_Indefinido = 2;
    const Obra_Labor = 3;
    const Aprendizaje = 4;
    const Practicas_Pasantias = 5;

    private static $descripciones = [
        self::Termino_Fijo => "Termino Fijo",
        self::Termino_Indefinido => "Termino Indefinido",
        self::Obra_Labor => "Obra Labor",
        self::Aprendizaje => "Aprendizaje",
        self::Practicas_Pasantias => "Prácticas o Pasantías"
    ];

    public static function getDescription($value)
    {
        return self::$descripciones[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descripciones;
    }
}

class EnumNE_TipoHora
{
    const HED = EnumVariablesSistema::HoraExtraDiurna;
    const HEN = EnumVariablesSistema::HoraExtraNocturna;
    const HRN = EnumVariablesSistema::RecargoNocturno;
    const HRDDF = EnumVariablesSistema::HoraDominical4;
    const HEDDF = EnumVariablesSistema::HoraExtraDominicalDiurna;
    const HENDF = EnumVariablesSistema::HoraExtraDominicalNocturna;
    const HRNDF = EnumVariablesSistema::RecargoNocturnoDominical;

    private static $descriptions = [
        self::HED => "HorasExtrasDiurnas",
        self::HEN => "HorasExtrasNocturnas",
        self::HRN => "HorasRecargosNocturnos",
        self::HRDDF => "HorasRecargosDiariasDominicalesYFestivas",
        self::HEDDF => "HorasExtrasDiarasDominicalesYFestivas",
        self::HENDF => "HorasExtrasNocturnasDominicalesYFestivas",
        self::HRNDF => "HorasRecargoNocturnoDominicalesYFestivas"
    ];

    public static function getDescription($value)
    {
        return self::$descriptions[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descriptions;
    }
}

class EnumNE_TipoHoraNumero
{
    const HED = EnumVariablesSistema::HoraExtraDiurna;
    const HEN = EnumVariablesSistema::HoraExtraNocturna;
    const HRN = EnumVariablesSistema::RecargoNocturno;
    const HRDDF = EnumVariablesSistema::HoraDominical4;
    const HEDDF = EnumVariablesSistema::HoraExtraDominicalDiurna;
    const HENDF = EnumVariablesSistema::HoraExtraDominicalNocturna;
    const HRNDF = EnumVariablesSistema::RecargoNocturnoDominical;

    private static $descriptions = [
        self::HED => "1",
        self::HEN => "2",
        self::HRN => "3",
        self::HRDDF => "4",
        self::HEDDF => "5",
        self::HENDF => "6",
        self::HRNDF => "7"
    ];

    public static function getDescription($value)
    {
        return self::$descriptions[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descriptions;
    }
}

class EnumNE_Vacaciones
{
    const VC = 1;
    const VCP = 2;

    private static $descriptions = [
        self::VC => "VacacionesComunes",
        self::VCP => "VacacionesCompensadas"
    ];

    public static function getDescription($value)
    {
        return self::$descriptions[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descriptions;
    }
}

class EnumNE_Licencias
{
    const LMP = 1;
    const LR = 2;
    const LNR = 3;

    private static $descriptions = [
        self::LMP => "LicenciasMaternidadOPaternidad",
        self::LR => "LicenciasRemuneradas",
        self::LNR => "LicenciasNoRemuneradas"
    ];

    public static function getDescription($value)
    {
        return self::$descriptions[$value] ?? "Desconocido";
    }

    public static function getAll()
    {
        return self::$descriptions;
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

    public static function obtenerMensaje($tipo) {
        $mensajes = array(
            self::NoDefinido => 'Error no definido',
            self::Sintaxis => 'Error de sintaxis',
            self::Identificador => 'Error de identificador',
            self::Parentesis => 'Error de paréntesis',
            self::DivisionPorCero => 'Error de división por cero',
            self::SinExpresion => 'Error de expresión vacía'
        );

        return isset($mensajes[$tipo]) ? $mensajes[$tipo] : 'Tipo de error no válido';
    }

    // Ejemplo de uso
    // $tipoError = TiposError::Sintaxis;
    // echo TiposError::obtenerMensaje($tipoError); // Imprime: Error de sintaxis
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

