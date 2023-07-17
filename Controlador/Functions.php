<?php
include_once '../Controlador/Conexion.php';
class Functions {

    function ListaRutas() {
        $cn=new Conexion();
        $sql="SELECT * FROM `ruta` WHERE 1;";
        $res= mysqli_query($cn->conecta(), $sql)or die(mysqli_error($cn->conecta()));
        $vec=Array();
        while ($f= mysqli_fetch_array($res)){
                    $vec[]=$f;
                }
                return $vec;
    }
        
    function listaViaje($rutcod) {
            $cn = new Conexion();
            $sql = "SELECT VIANRO,VIAFCH, VIAHRS,COSVIA FROM `viaje` WHERE RUTCOD='$rutcod';";
            $res = mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
            $vec = Array();
            while ($f = mysqli_fetch_array($res)) {
                $vec[] = $f;
            }
            return $vec;
        }
        
    function listaPasajeros($numViaje) {
            $cn = new Conexion();
            $sql = "SELECT BOLNRO,Nom_pas,Nro_asi,pago FROM `pasajeros`WHERE VIANRO='$numViaje';";
            $res = mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
            $vec = Array();
            while ($f = mysqli_fetch_array($res)) {
                $vec[] = $f;
            }
            return $vec;
        }
        
     function Choferes() {
        $cn=new Conexion();
        $sql="SELECT IDCOD,CHONOM,CHOFIN,CHOCAT FROM `chofer` WHERE 1;";
        $res= mysqli_query($cn->conecta(), $sql)or die(mysqli_error($cn->conecta()));
        $vec=Array();
        while ($f= mysqli_fetch_array($res)){
                    $vec[]=$f;
                }
                return $vec;
    }   
    
    function GrafiChoferes() {
        $cn = new Conexion();
        $sql = "SELECT c.CHONOM AS nombre_chofer, COUNT(v.VIANRO) AS cantidad_viajes FROM chofer c JOIN viaje v ON c.IDCOD = v.IDCOD GROUP BY c.IDCOD, c.CHONOM;";
        $res = mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
        $vec = array();
        while ($f = mysqli_fetch_array($res)) {
            $vec[] = $f;
        }
        return $vec;
    }
    

    function ViajeChoferes($chofer) {
        $cn=new Conexion();
        $sql="SELECT c.IDCOD,r.RUTNOM,v.VIAFCH,v.COSVIA from chofer c INNER JOIN viaje v on c.IDCOD=v.IDCOD INNER JOIN ruta r on v.RUTCOD=r.RUTCOD where c.IDCOD='$chofer';";
        $res= mysqli_query($cn->conecta(), $sql)or die(mysqli_error($cn->conecta()));
        $vec=Array();
        while ($f= mysqli_fetch_array($res)){
                    $vec[]=$f;
                }
                return $vec;
    }   
       
}
