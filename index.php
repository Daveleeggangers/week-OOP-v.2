<?php

include 'Pokemon.php';
include_once 'charmeleon.php';
$Charmeleon = new Charmeleon();
$Pikachu = new Pikachu('Pikachu1');
$Pikachu2 = new Pikachu('Pikachu2');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>lief</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
        <img src="pickachu.jpg" id="pickachu" width="150" height="180">
        <button type="button" data-damage="50" data-pokemon="pika" class="btn btn-success Attackbtn" id="PikaAttack1">Electric Ring</button>
        <button type="button" data-damage="20" data-pokemon="pika" class="btn btn-warning Attackbtn" id="PikaAttack2">Pika Punch</button>
        <img src="charmeleon.png" id="charmeleon" width="150" height="180">
        <button type="button" data-damage="10" data-pokemon="char" class="btn btn-success Attackbtn" id="Charattack1">Head Butt</button>     
        <button type="button" data-damage="30" data-pokemon="char" class="btn btn-warning Attackbtn" id="Charattack2">Flare</button>
        <input type="text" value="">
</body>
<script src="script.js"></script>
</html>