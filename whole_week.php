<?php
session_start();
include "eat.php";
include "delikanti.php";
include "fiit.php";

//eat and meet restaurant
$eatMonday = $_SESSION['eatMonday'];
$eatTuesday = $_SESSION['eatTuesday'];
$eatWednesday = $_SESSION['eatWednesday'];
$eatThursday = $_SESSION['eatThursday'];
$eatFriday = $_SESSION['eatFriday'];
$eatSaturday = $_SESSION['eatSaturday'];
$eatSunday = $_SESSION['eatSunday'];

//delikanti restaurant
$delMonday = $_SESSION['delMonday'];
$delTuesday = $_SESSION['delTuesday'];
$delWednesday = $_SESSION['delWednesday'];
$delThursday = $_SESSION['delThursday'];
$delFriday = $_SESSION['delFriday'];
$delSaturday= $_SESSION['delSaturday'];
$delSunday = $_SESSION['delSunday'];

//fiit food restaurant
$fiitMonday = $_SESSION['fiitMonday'];
$fiitTuesday = $_SESSION['fiitTuesday'];
$fiitWednesday = $_SESSION['fiitWednesday'];
$fiitThursday = $_SESSION['fiitThursday'];
$fiitFriday = $_SESSION['fiitFriday'];
$fiitSaturday= $_SESSION['fiitSaturday'];
$fiitSunday = $_SESSION['fiitSunday'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Week Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Week Menu</h1>

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
        <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
    </tr>
    <tr>
        <th id="restaurant"></th>
        <th id="restaurant"><?php echo $eatMonday["date"]; ?></th>
        <th id="restaurant"><?php echo $eatTuesday["date"]; ?></th>
        <th id="restaurant"><?php echo $eatWednesday["date"]; ?></th>
        <th id="restaurant"><?php echo $eatThursday["date"]; ?></th>
        <th id="restaurant"><?php echo $eatFriday["date"]; ?></th>
        <th id="restaurant"><?php echo $eatSaturday["date"]; ?></th>
        <th id="restaurant"><?php echo $eatSunday["date"]; ?></th>
    </tr>
    <tr>
        <td id="restaurant">Eat and Meet</td>
        <td><?php foreach($eatMonday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($eatTuesday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($eatWednesday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($eatThursday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($eatFriday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($eatSaturday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($eatSunday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
    </tr>
    <tr>
        <td id="restaurant">Delikanti</td>
        <td><?php foreach($delMonday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($delTuesday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($delWednesday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($delThursday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($delFriday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($delSaturday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($delSunday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
    </tr>
    <tr>
        <td id="restaurant">FIIT FOOD</td>
        <td><?php foreach($fiitMonday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($fiitTuesday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($fiitWednesday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($fiitThursday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($fiitFriday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($fiitSaturday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
        <td><?php foreach($fiitSunday["menu"] as $food){
                echo "<hr>";
                echo $food;
                echo "<hr>";
            } ?></td>
    </tr>
</table>


</body>
</html>