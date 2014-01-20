<?php
  //----- BDD -----//
  define("HOST_DB","localhost");
  define("USER_DB","root");
  define("BASE_DB","incognito");
  //Windows
  //define("PASSWD_DB","");
  //Mac
  //define("PASSWD_DB","password");
  define("PASSWD_DB","root");

  //VERSION EN LIGNE
  /*define("HOST_DB","mysql51-79.perso");
  define("USER_DB","kilyansogerals");
  define("BASE_DB","kilyansogerals");
  define("PASSWD_DB","incognistar1");*/
  try {
    $PDO = new PDO("mysql:host=".HOST_DB.";dbname=".BASE_DB."", USER_DB, PASSWD_DB);
    $PDO->exec("SET CHARACTER SET utf8");
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
    exit();
  }
?>