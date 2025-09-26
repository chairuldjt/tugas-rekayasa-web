<?php

echo "========================SOAL NO 2========================";
echo "<br>";
echo "<br>";

$json = '{
    "Nama": "Nugroho",
    "Nim": "G.231.23.0035",
    "Umur": 30,
    "Kota": "Semarang",
    "Email": "djati.c10@gmail.com"
}';

//Decode ke PHP object
$obj = json_decode($json);
echo $obj->Nama; 
echo "<br>";
echo $obj->Nim;
echo "<br>";
echo $obj->Umur;
echo "<br>";
echo $obj->Kota;
echo "<br>";
echo $obj->Email;

echo "<br>";
//Decode ke PHP array
$array = json_decode($json, true);
echo "<br>";
echo $array["Nama"];
echo "<br>";
echo $array["Nim"];
echo "<br>";
echo $array["Umur"];
echo "<br>";
echo $array["Kota"];
echo "<br>";
echo $array["Email"];
?>