<?php
    /* IMPORTAR FUNCIONES COMUNES Y DE ACCESO */
    ini_set("AllowOverride","All");
    date_default_timezone_set('America/Santiago');
   
    include 'conn.php';
    
    /* Conexión */
    function Conectar($host,$user,$pass,$db)
    {
        $Conexion   = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        return($Conexion);
    }

    define("conect_me", Conectar($mdv_admin["DBHOST"],$mdv_admin["DBUSER"],$mdv_admin["DBPWD"],$mdv_admin["DBNAME"]));

    /* Devolver count de Filas */
    function Filas($Tabla,$Condicion)
    { 
        $Enlace    = conect_me;
          $Resultado = mysql_query("SELECT * FROM ".$Tabla." where ".$Condicion, $Enlace);
          return mysql_num_rows($Resultado);
    }

    /* Insertar Datos */
    function Insertar($tabla,$campos,$valores)
    { 
        $Enlace     = conect_me;
          $cadena     = "INSERT INTO ".$tabla."(".$campos.") VALUES (".$valores.")";
          $result     = mysql_query($cadena,$Enlace);
    }

    /* Eliminar Datos */
    function Eliminar($Tabla,$Condicion)
    {
        $Enlace     = conect_me;
            $Cadena     = "Delete from ".$Tabla." where ".$Condicion;
          $Resultado  = mysql_query($Cadena,$Enlace);
    }

    /* Retornar Datos */
    function Datos($Tabla,$Condicion,$Campos)
    { 
        $Enlace     = conect_me;
          $result     = mysql_query("SELECT ".$Campos." FROM ".$Tabla." where ".$Condicion, $Enlace);
          return $result;
    }

    /* Modificar Datos */
    function Modificar($Tabla,$Condicion,$Campos)
    {
            $Enlace     = conect_me;
            $Cadena     = "UPDATE ".$Tabla." SET ".$Campos." where ".$Condicion;
            $Resultado  = mysql_query($Cadena);
    }
  
    /* DECODE Y ENCODE */
    function d($txt)
    {
          return utf8_decode($txt);
    }
  
    function e($txt)
    {
            return utf8_encode($txt);  
    }

    /* Funciones de implementación */

    function value($codigo)
    {
        $valor  = mysql_fetch_assoc(Datos("contenido","codigo = '".$codigo."'","valor"));

        return $valor['valor'];
    }


    // Normar Fechas con formato dd/mm/yyyy
    function format_fecha($fecha)
    {
        $ano        = substr($fecha, 0,4);
        $mes        = substr($fecha, 5,2);
        $dia        = substr($fecha, 8,2);

        return $dia."-".$mes."-".$ano;
    }

    // Función que devuelve días restantes de la licencia
    function resta_fechas($fecha,$slug)
    {
        //Guardo el año, el mes y el dia de vencimiento, en el arreglo
        $Vdia = substr($fecha, 0,2);
        $Vmes = substr($fecha, 3,2);
        $Vano = substr($fecha, 6,4);
        $Vdia = intval($Vdia);
        $Vmes = intval($Vmes);

        //Guardo el año, el mes y el dia de hoy, en el arreglo
        $Adia = substr(date('d-m-Y'), 0,2);
        $Ames = substr(date('d-m-Y'), 3,2);
        $Aano = substr(date('d-m-Y'), 6,4);
        $Adia = intval($Adia);
        $Ames = intval($Ames);
       
         //Creamos arreglo con la cantidad de días por mes, haciendo la excepcion de Febrero por año bisiesto
        $moA['1']   = 31;
        if (bisiesto($Aano)) {
            $moA['2']   = 29;
        }else{
            $moA['2']   = 28;
        }
        /*if (bisiesto($Vano)) {
            $moV['2']   = 29;
        }else{
            $moV['2']   = 28;
        }*/
        $moA['3']   = 31;
        $moA['4']   = 30;
        $moA['5']   = 31;
        $moA['6']   = 30;
        $moA['7']   = 31;
        $moA['8']   = 31;
        $moA['9']   = 30;
        $moA['10']   = 31;
        $moA['11']   = 30;
        $moA['12']   = 31;

        //Hacemos la diferencia si corresponde al mismo año o no
        if($Vano == $Aano){
            //Cálculo para cuando el vencimiento es dentro del mes actual
            if ($Ames == $Vmes) {
                if ($slug == 'refugio_pucon') {
                    $no_cursados = $moA[$Ames] - $Adia;
                }else{
                    $no_cursados = $moA[$Ames] - $Adia +1;
                }
                return $no_cursados;
            }else{
                //Ciclo para sumar los dias de los meses
                for($i = $Ames; $i <= $Vmes; $i++){
                    $diasTotales = $diasTotales + $moA[$i];
                }
                $diasFinales = $moA[$Vmes] - $Vdia;
                if ($slug == 'refugio_pucon') {
                    $diasTotales = $diasTotales - $Adia - $diasFinales;
                }else{
                    $diasTotales = $diasTotales - $Adia - $diasFinales +1;
                }
                return $diasTotales;
            }
            
        }else{
            if ($Ames == $Vmes) {
                for($i = 1; $i <= 12; $i++){
                    $diasTotales = $diasTotales + $moA[$i];
                }
                $restar = $Adia - $Vdia;
                $diasTotales = $diasTotales - $restar;
                return $diasTotales;
            }else{
                for($i = $Ames; $i <= 12; $i++){
                    $diasTotales = $diasTotales + $moA[$i];
                }
                for($i = 1; $i <= $Vmes; $i++){
                    $diasTotales = $diasTotales + $moA[$i];
                }
                $diasFinales = $moA[$Vmes] - $Vdia;
                if ($slug == 'refugio_pucon') {
                    $diasTotales = $diasTotales - $Adia - $diasFinales;
                }else{
                    $diasTotales = $diasTotales - $Adia - $diasFinales +1;
                }
                return $diasTotales;
            }
        }
    }

    function bisiesto($ano){
        if($ano%4 == 0){
            if ($ano%100 == 0) {
                if ($ano%400 == 0) {
                    return true;
                }
                return false;
            }
            return true;
        }else {
            return false;
        }
    }

    function imagen($slug){
        $proyecto = $slug;
        $imagen  = Datos("proyectos","slug = '".$proyecto."' order by id ASC ","*");
        while($img = mysql_fetch_assoc($imagen)){
            $url = "style=\"background-image:url(images/". $img['imagen'] .");\"";
        }
        return $url;
    }

    function extraeNombre($url2){
        $rest = substr($url2, 48);
        return $rest;
    }
?>