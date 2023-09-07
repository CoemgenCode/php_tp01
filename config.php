<?php 
    try {
      $db = new PDO(
        'mysql:host=localhost; dbname=evaluation',
        'root',
        '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
      );
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
?>