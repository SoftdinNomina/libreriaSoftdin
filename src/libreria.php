<?php

namespace Softdin\Servicio;

use Exception;
use Carbon\Carbon;

class libreria
{

    public static function empresa()
    {
        return 'Softdin';
    }

    public static function existeCaracter($cadena, $arreglo)
    {
        foreach ($arreglo as $cad) {
            if (strpos($cadena, $cad) !== false) {
                return true;
            }
        }
        return false;
    }

    public static function verificarParentesis($cadena)
    {
        try {
            $parentesis = "";
            $num = 0;

            for ($i = 0; $i < strlen($cadena); $i++) {
                $letra = $cadena[$i];
                if ($letra == "(" || $letra == ")") {
                    if ($letra == "(") {
                        $num++;
                        $parentesis .= "(";
                    }
                    if ($letra == ")") {
                        if ($num == 0)
                            return false;
                        if (substr($parentesis, -1) == "(") {
                            $num--;
                            $parentesis = substr($parentesis, 0, -1);
                        } else {
                            return false;
                        }
                    }
                }
            }

            return $num == 0;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function verificarCorchete($cadena)
    {
        try {
            $corchete = "";
            $num = 0;

            for ($i = 0; $i < strlen($cadena); $i++) {
                $letra = $cadena[$i];
                if ($letra == "[" || $letra == "]") {
                    if ($letra == "[") {
                        $num++;
                        $corchete .= "[";
                    }
                    if ($letra == "]") {
                        if ($num == 0)
                            return false;
                        if (substr($corchete, -1) == "[") {
                            $num--;
                            $corchete = substr($corchete, 0, -1);
                        } else {
                            return false;
                        }
                    }
                }
            }

            return $num == 0;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function esNumeroEntero($numero)
    {
        $isNum = is_numeric($numero);
        if ($isNum) {
            $isInt = intval($numero) == $numero;
            return $isInt;
        }
        return $isNum;
    }

    public static function redondearAlProximoNumero($num): int
    {
        $trun = (int) round((float) $num, 0, PHP_ROUND_HALF_UP);

        if ($num - $trun > 0.0) {
            return ++$trun;
        }

        return $trun;
    }

    public static function esUnOperador($operador)
    {
        $delimitadores = "+-*/%^=()[]";
        if (stripos($delimitadores, $operador) !== false) {
            return true;
        }
        return false;
    }

    public static function esUnOperadorMatematico($operador)
    {
        $delimitadores = "+-*/";
        if (stripos($delimitadores, $operador) !== false) {
            return true;
        }
        return false;
    }

    public static function esPar($n)
    {
        return ($n % 2) === 0;
    }

    public static function esUnOperador2($opr1, $opr2)
    {
        $operadores = [
            "(" => ["(", "+", "-", "*", "/", "[", "NU", "CN"],
            ")" => [")", "+", "-", "*", "/", "]", "NU", "CN"],
            "+" => ["(", "+", "NU", "CN"],
            "-" => ["(", "-", "NU", "CN"],
            "*" => ["(", "*", "NU", "CN"],
            "/" => ["(", "/", "NU", "CN"],
            "[" => ["[", "[", "NU", "CN"],
            "]" => ["]", "]", "NU", "CN"],
            "NU" => ["+", "-", "*", "/", ")", "NU", ","],
            "CN" => ["+", "-", "*", "/", ")", "CN"],
            "," => ["NU", ","]
        ];

        if (isset($operadores[$opr1]) && in_array($opr2, $operadores[$opr1])) {
            return "true";
        }

        return "";
    }

    public static function limpiarCadena($cadena)
    {
        try {
            if ($cadena != null) {
                while (strpos($cadena, "  ") !== false) {
                    $cadena = str_replace("  ", " ", $cadena);
                }
            }
            return $cadena;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function recorreFecha($fecha, $periodocuota, $numerocuotas)
    {
        try {
            $dias = 0;
            $fechaRecorrida = Carbon::today(); // Obtener la fecha de hoy usando Carbon

            if ($periodocuota == 'MENSUAL') {
                $fechaRecorrida = $fecha->addMonths($numerocuotas - 1)->endOfMonth(); // Agregar meses y obtener el final del mes
            }

            if ($periodocuota == 'QUINCENAL') {
                $dias = abs(($numerocuotas - 1) * 15);
                $fecha = $fecha->addDays($dias + 5); // Agregar días y 5 días adicionales

                if ($fecha->day >= 15) {
                    $fechaRecorrida = $fecha->endOfMonth(); // Obtener el final del mes si el día es igual o mayor a 15
                } else {
                    $fechaRecorrida = $fecha->endOfMonth()->startOfMonth(); // Obtener el final de la primera quincena
                }
            }

            return $fechaRecorrida;
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }

    public static function inicioMes($fecha)
    {
        // Convierte la fecha a objeto Carbon
        $fechaCarbon = Carbon::parse($fecha);

        // Retorna el primer día del mes de la fecha dada
        return $fechaCarbon->firstOfMonth();    
    }

    public static function finMes($fecha)
    {
        // Convierte la fecha a objeto Carbon
        $fechaCarbon = Carbon::parse($fecha);

        // Retorna el último día del mes de la fecha dada
        return $fechaCarbon->endOfMonth();
    }
}


class CantidadLetra
{
    private $sUnidades = [
        "",
        "un",
        "dos",
        "tres",
        "cuatro",
        "cinco",
        "seis",
        "siete",
        "ocho",
        "nueve",
        "diez",
        "once",
        "doce",
        "trece",
        "catorce",
        "quince",
        "dieciseis",
        "diecisiete",
        "dieciocho",
        "diecinueve",
        "veinte",
        "veintiún",
        "veintidos",
        "veintitres",
        "veinticuatro",
        "veinticinco",
        "veintiseis",
        "veintisiete",
        "veintiocho",
        "veintinueve"
    ];

    private $sDecenas = ["", "diez", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", "setenta", "ochenta", "noventa"];

    private $sCentenas = ["", "ciento", "doscientos", "trescientos", "cuatrocientos", "quinientos", "seiscientos", "setecientos", "ochocientos", "novecientos"];

    private $sResultado = "";

    public function convertirCadena($sNumero)
    {
        $dNumero = (double) $sNumero;
        $dNumAux = 0;
        $x = '';
        $sAux = '';

        $this->sResultado = " ";

        try {
            $dNumero = (double) $sNumero;
        } catch (\Throwable $th) {
            return "";
        }

        if ($dNumero > 999999999999) {
            return "";
        }

        if ($dNumero > 999999999) {
            $dNumAux = fmod($dNumero, 1000000000000);
            $this->sResultado .= $this->numeros($dNumAux, 1000000000) . " mil ";
        }

        if ($dNumero > 999999) {
            $dNumAux = fmod($dNumero, 1000000000);
            if (trim($this->numeros($dNumAux, 1000000)) == ("un")) {
                $this->sResultado .= $this->numeros($dNumAux, 1000000) . " millon ";
            } else {
                $this->sResultado .= $this->numeros($dNumAux, 1000000) . " millones ";
            }
        }

        if ($dNumero > 999) {
            $dNumAux = fmod($dNumero, 1000000);
            $this->sResultado .= $this->numeros($dNumAux, 1000) . " mil ";
        }

        $dNumAux = fmod($dNumero, 1000);
        $this->sResultado .= $this->numeros($dNumAux, 1);

        // Verificar si contiene punto y obtener los decimales
        $sAux = (string) $dNumero;
        if (strpos($sAux, ".") !== false) {
            $this->sResultado .= $this->obtenerDecimales($sAux);
        }

        // Convertir el primer carácter a mayúscula
        $sAux = $this->sResultado;
        $x = strtoupper($this->sResultado[1]);
        $this->sResultado = $x;

        for ($i = 2; $i < strlen($sAux); $i++) {
            $this->sResultado .= $sAux[$i];
        }

        return $this->sResultado;
    }

    private function numeros($dNumAux, $dFactor)
    {
        $dCociente = $dNumAux / $dFactor;
        $dNumero = 0;
        $iNumero = 0;
        $sNumero = "";
        $sTexto = "";

        if ($dCociente >= 100) {
            $dNumero = $dCociente / 100;
            $sNumero = (string) $dNumero;
            $iNumero = (int) $sNumero[0];
            $sTexto .= $this->sCentenas[$iNumero] . " ";
        }

        $dCociente = fmod($dCociente, 100);
        if ($dCociente >= 30) {
            $dNumero = $dCociente / 10;
            $sNumero = (string) $dNumero;
            $iNumero = (int) $sNumero[0];
            if ($iNumero > 0) {
                $sTexto .= $this->sDecenas[$iNumero] . " ";
            }

            $dNumero = fmod($dCociente, 10);
            $sNumero = (string) $dNumero;
            $iNumero = (int) $sNumero[0];
            if ($iNumero > 0) {
                $sTexto .= "y " . $this->sUnidades[$iNumero] . " ";
            }
        } else {
            $dNumero = $dCociente;
            $sNumero = (string) $dNumero;

            if (strlen($sNumero) > 1) {
                if ($sNumero[1] != '.' && $sNumero[1] != ',') {
                    $iNumero = (int) $sNumero[0] . $sNumero[1];
                } else {
                    $iNumero = (int) $sNumero[0];
                }
            } else {
                $iNumero = (int) $sNumero[0];
            }
            $sTexto .= $this->sUnidades[$iNumero] . " ";
        }

        return $sTexto;
    }

    private function obtenerDecimales($sNumero)
    {
        $sNumPuntos = explode('.', $sNumero);
        $sTexto = "";
        $dNumero = 0;

        $dNumero = (double) $sNumPuntos[1];
        $sTexto = "punto " . $this->numeros($dNumero, 1);

        return $sTexto;
    }
}

class EvalExpMatematicas
{
    const Delimitadores = "+-*/%^=()";

    private $exp;
    private $lenghtExp;
    private $indice;
    private $token;
    private TipoToken $tipoTok;
    public $listaVar;

    public function __construct()
    {
        $this->listaVar = array("res" => 0.0);
    }

    public function Analizar($exp)
    {
        $result = 0.0;
        $this->exp = $exp;
        $this->lenghtExp = strlen($exp);
        $this->indice = 0;

        $this->ObtToken();

        if ($this->token == '') {
            throw new Exception("EvalExp: " . TiposError::SinExpresion . " " . $this->token);
        }

        $this->evalExp1($result);

        if ($this->token != '' || $this->indice != $this->lenghtExp) {
            throw new Exception("EvalExp :" . TiposError::Sintaxis . " TOKEN(" . $this->token . ";" . $this->tipoTok . ")");
        }

        $this->listaVar["res"] = $result;
        return $result;
    }

    private function evalExp1(&$result)
    {
        $token = $this->token;
        $tipoTok = $this->tipoTok;
        $prog = $this->indice;

        $this->ObtToken();

        if ($token !== "=") {
            $this->token = $token;
            $this->tipoTok = $tipoTok;
            $this->indice = $prog;
        } else {
            $this->ObtToken();
            $this->evalExp1($result);
            if (array_key_exists($token, $this->listaVar)) {
                $this->listaVar[$token] = $result;
            } else {
                $this->listaVar[$token] = $result;
            }
            return;
        }
        $this->evalExp2($result);
    }

    private function evalExp2(&$result)
    {
        $op = '';
        $temp = 0.0;

        $this->evalExp3($result);

        while ($this->token === "+" || $this->token === "-") {
            $op = $this->token[0];
            $this->ObtToken();
            $this->evalExp3($temp);

            switch ($op) {
                case '+':
                    $result += $temp;
                    break;
                case '-':
                    $result -= $temp;
                    break;
            }
        }
    }

    private function evalExp3(&$result)
    {
        $op = '';
        $temp = 0.0;

        $this->evalExp4($result);

        while ($this->token === "*" || $this->token === "/" || $this->token === "%") {
            $op = $this->token[0];
            $this->ObtToken();
            $this->evalExp4($temp);

            switch ($op) {
                case '*':
                    $result *= $temp;
                    break;
                case '/':
                    if ($temp == 0.0) {
                        throw new Exception("evalExp3 : " . TiposError::DivisionPorCero . " TOKEN(" . $this->token . ";" . $this->tipoTok . ")");
                    } else {
                        $result /= $temp;
                    }
                    break;
                case '%':
                    $result = (int) $result % (int) $temp;
                    break;
            }
        }
    }

    private function evalExp4(&$result)
    {
        $temp = 0.0;
        $ex = 0.0;
        $t = 0;

        $this->evalExp5($result);

        if ($this->token === "^") {
            $this->ObtToken();
            $this->evalExp4($temp);
            $ex = $result;

            if ($temp == 0.0) {
                $result = 1.0;
                return;
            }

            for ($t = (int) $temp - 1; $t > 0; --$t) {
                $result *= $ex;
            }
        }
    }

    private function evalExp5(&$result)
    {
        $operacion = '';

        if ($this->tipoTok === TipoToken::Delimitador && ($this->token === "+" || $this->token === "-")) {
            $operacion = $this->token;
            $this->ObtToken();
        }

        $this->evalExp6($result);

        if ($operacion === "-") {
            $result = -($result);
        }
    }

    private function evalExp6(&$result)
    {
        if ($this->token === "(") {
            $this->ObtToken();
            $this->evalExp2($result);

            if ($this->token !== ")") {
                throw new Exception("evalExp6 : " . TiposError::Parentesis . " TOKEN(" . $this->token . ";" . $this->tipoTok . ")");
            }

            $this->ObtToken();
        } elseif ($this->token !== ")") {
            $this->Atomo($result);
        } else {
            $this->indice++;
        }
    }

    private function Atomo(&$result)
    {
        switch ($this->tipoTok) {
            case self::Identificador:
                if (array_key_exists($this->token, $this->listaVar)) {
                    $result = (double) $this->listaVar[$this->token];
                    $this->ObtToken();
                } else {
                    throw new Exception("Atomo : " . TiposError::Identificador . " TOKEN(" . $this->token . ";" . $this->tipoTok . ")");
                }
                break;
            case self::Numero:
                try {
                    $result = doubleval($this->token);
                } catch (Exception $e) {
                    throw new Exception("Atomo : " . TiposError::Sintaxis . " TOKEN(" . $this->token . ";" . $this->tipoTok . ")");
                }
                $this->ObtToken();
                break;
            default:
                throw new Exception("Atomo : " . TiposError::Sintaxis . " TOKEN(" . $this->token . ";" . $this->tipoTok . ")");
        }
    }

    private function ObtToken()
    {
        $temp = '';

        $this->tipoTok = TipoToken::Nulo;
        $this->token = '';

        while ($this->indice < $this->lenghtExp && ctype_space($this->exp[$this->indice])) {
            $this->indice++;
        }

        if ($this->indice >= $this->lenghtExp) {
            return;
        }

        if (strpos(Delimitadores, $this->exp[$this->indice]) !== false) {
            $this->tipoTok = TipoToken::Delimitador;
            $temp .= $this->exp[$this->indice++];
        } elseif (ctype_alpha($this->exp[$this->indice])) {
            while ($this->indice < $this->lenghtExp && (ctype_alpha($this->exp[$this->indice]) || ctype_digit($this->exp[$this->indice]))) {
                $temp .= $this->exp[$this->indice++];
            }
            $this->tipoTok = TipoToken::Identificador;
        } elseif (ctype_digit($this->exp[$this->indice])) {
            while ($this->indice < $this->lenghtExp && (ctype_digit($this->exp[$this->indice]) || ($this->exp[$this->indice] === '.') || ($this->exp[$this->indice] === ','))) {
                $temp .= $this->exp[$this->indice++];
            }
            $this->tipoTok = TipoToken::Numero;
        }

        $this->token = $temp;
    }
}


