<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Conexion
 *
 * @author Asus
 */
class Conexion {
  private $cn=null;
  function conecta(){
      if($this->cn==null){
          $this->cn= mysqli_connect("localhost","root","" , "bdviajes");
      }
      return $this->cn;
  }

}
