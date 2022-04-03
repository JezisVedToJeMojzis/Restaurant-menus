<?php
session_start();
include "eat.php";
include "delikanti.php";
include "fiit.php";

//eat and meet restaurant
$eatThursday = $_SESSION['eatThursday'];

//delikanti restaurant
$delThursday = $_SESSION['delThursday'];

//fiit food restaurant
$fiitThursday = $_SESSION['fiitThursday'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thursday Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Thursday Menu</h1>

<hr>

<ul id="buttons">
    <li><a href="https://site136.webte.fei.stuba.sk/zad4/monday.php">Monday</a></li>
    <li><a href="https://site136.webte.fei.stuba.sk/zad4/tuesday.php">Tuesday</a></li>
    <li><a href="https://site136.webte.fei.stuba.sk/zad4/wednesday.php">Wednesday</a></li>
    <li><a href="https://site136.webte.fei.stuba.sk/zad4/thursday.php">Thursday</a></li>
    <li><a href="https://site136.webte.fei.stuba.sk/zad4/friday.php">Friday</a></li>
    <li><a href="https://site136.webte.fei.stuba.sk/zad4/saturday.php">Saturday</a></li>
    <li><a href="https://site136.webte.fei.stuba.sk/zad4/sunday.php">Sunday</a></li>
    <li><a href="https://site136.webte.fei.stuba.sk/zad4/whole_week.php">Week</a></li>
</ul>

<hr>

<table id="menu-table">
    <tr>
        <th colspan="3"><?php echo "Thursday - ".$eatThursday["date"]; ?></th>
    </tr>
    <tr>
        <td id="restaurant">Eat and Meet</td>
        <td id="restaurant">Delikanti</td>
        <td id="restaurant">FIIT FOOD</td>
    </tr>
    <tr>
        <td><?php foreach($eatThursday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($delThursday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($fiitThursday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
    </tr>
</table>


</body>
</html>