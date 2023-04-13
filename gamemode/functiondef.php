<?php
require_once('../../cred.php');



function store($var,$value){
  global $conn;

  $vsql = "INSERT INTO variables (var, value) VALUES (?, ?)";
  $vstmt =  $conn->prepare($vsql);
  $vstmt->execute([$var, $value]);
}

function retrieve($var){
  global $conn;
  $vsql = "SELECT value FROM variables WHERE var = ?";
  $vstmt = $conn->prepare($vsql);
  $vstmt->execute([$var]);
  $vrow = $vstmt->fetch();
  $vvalue = $vrow["value"];
  return $vvalue;

}

function update($var,$value){
  global $conn;
  $vsql = "UPDATE variables SET value = ? WHERE var = ?";
  $vstmt = $conn->prepare($vsql);
  $vstmt->execute([$value,$var]);

}


 ?>
