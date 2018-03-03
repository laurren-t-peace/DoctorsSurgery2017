<?php

require 'config.php';

function connect($config){
    try{
       $conn = new PDO('mysql:host=localhost;dbname=doctorsurgery', $config['DB_USERNAME'], $config['DB_PASSWORD']);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//sets up connection to db
       
       return $conn;

   } catch (PDOException $e) {
       return false;
   }   
}

function checkLogIn(){
    if(isset($_SESSION['logged_in'])){
        return true;
    }
    else{
        return false;
    }
}

function get($query, $bindings, $conn){
    $stmt = $conn->prepare($query);
    $stmt->execute($bindings);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $results;
}

function getObject($query, $bindings, $conn){
    $stmt = $conn->prepare($query);
    $stmt->execute($bindings);
    $results = $stmt->fetch();
    
    return $results;
}

function query($query, $bindings, $conn){
    $stmt = $conn->prepare($query);
    $stmt->execute($bindings);
}

?>

