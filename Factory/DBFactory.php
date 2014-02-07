<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBFactory
 * si vous implémentez ce pattern, vous n'aurez plus de new à placer dans la partie globale du script 
 * afin d'instancier une classe. En effet, ce ne sera pas à vous de le faire mais à une classe usine. 
 * Cette classe aura pour rôle de charger les classes que vous lui passez en argument.
 * @author s.arroubi
 */
class DBFactory {
    public static function getMysqlConnexion(){
        $db = new PDO('mysql:host=localhost;dbname=tests', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
  }
  
  public static function getPgsqlConnexion(){
    $db = new PDO('pgsql:host=localhost;dbname=tests', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    return $db;
  }
}
