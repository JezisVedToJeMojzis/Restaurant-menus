<?php
session_start();
//header('Location: whole_week.php');


$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://www.freefood.sk/menu/");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

$dom = new DOMDocument();

@$dom->loadHTML($output);
$dom->preserveWhiteSpace = false;

$finder= new DomXPath($dom);

$classname="daily-offer";
$nodes= $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");

//var_dump($nodes->item(0)->getElementsbyClassName("daily-offer"));




//$parseNodes = ["fiit-food"];
//
$foods =[
    ["date"  => date( 'd.m.Y', strtotime( 'monday this week' ) ), "day" => "Pondelok", "menu" => []],
    ["date"  => date( 'd.m.Y', strtotime( 'tuesday this week' ) ), "day" => "Utorok", "menu" => []],
    ["date"  => date( 'd.m.Y', strtotime( 'wednesday this week' ) ), "day" => "Streda", "menu" => []],
    ["date"  => date( 'd.m.Y', strtotime( 'thursday this week' ) ), "day" => "Štvrtok", "menu" => []],
    ["date"  => date( 'd.m.Y', strtotime( 'friday this week' ) ), "day" => "Piatok", "menu" => []],
    ["date"  => date( 'd.m.Y', strtotime( 'saturday this week' ) ), "day" => "Sobota", "menu" => []],
    ["date"  => date( 'd.m.Y', strtotime( 'sunday this week' ) ), "day" => "Nedeľa", "menu" => []],
];




//Monday
foreach($nodes->item(2)->childNodes->item(1)->childNodes->item(1)->childNodes as $mondayFood){
    foreach($mondayFood->childNodes->item(2)->childNodes as $foodPrice){
        $price = $foodPrice->nodeValue;
    }
    $food = $mondayFood->nodeValue;
    $food = substr($food, 0, -7);
    array_push($foods[0]['menu'], "$food : $price");
}

//Tuesday
foreach($nodes->item(2)->childNodes->item(2)->childNodes->item(1)->childNodes as $mondayFood){
    foreach($mondayFood->childNodes->item(2)->childNodes as $foodPrice){
        $price = $foodPrice->nodeValue;
    }
    $food = $mondayFood->nodeValue;
    $food = substr($food, 0, -7);
    array_push($foods[1]['menu'], "$food : $price");
}

//Wednesday
foreach($nodes->item(2)->childNodes->item(3)->childNodes->item(1)->childNodes as $mondayFood){
    foreach($mondayFood->childNodes->item(2)->childNodes as $foodPrice){
        $price = $foodPrice->nodeValue;
    }
    $food = $mondayFood->nodeValue;
    $food = substr($food, 0, -7);
    array_push($foods[2]['menu'], "$food : $price");
}

//Thursday
foreach($nodes->item(2)->childNodes->item(4)->childNodes->item(1)->childNodes as $mondayFood){
    foreach($mondayFood->childNodes->item(2)->childNodes as $foodPrice){
        $price = $foodPrice->nodeValue;
    }
    $food = $mondayFood->nodeValue;
    $food = substr($food, 0, -7);
    array_push($foods[3]['menu'], "$food : $price");
}

//Friday
foreach($nodes->item(2)->childNodes->item(5)->childNodes->item(1)->childNodes as $mondayFood){
    foreach($mondayFood->childNodes->item(2)->childNodes as $foodPrice){
        $price = $foodPrice->nodeValue;
    }
    $food = $mondayFood->nodeValue;
    $food = substr($food, 0, -7);
    array_push($foods[4]['menu'], "$food : $price");
}

//Saturday
foreach($nodes->item(2)->childNodes->item(6)->childNodes->item(1)->childNodes as $mondayFood){
    foreach($mondayFood->childNodes->item(2)->childNodes as $foodPrice){
        $price = $foodPrice->nodeValue;
    }
    $food = $mondayFood->nodeValue;
    $food = substr($food, 0, -7);
    array_push($foods[5]['menu'], "$food : $price");
}

////Sunday
//foreach($nodes->item(2)->childNodes->item(7)->childNodes->item(1)->childNodes as $mondayFood){
//    foreach($mondayFood->childNodes->item(2)->childNodes as $foodPrice){
//        $price = $foodPrice->nodeValue;
//    }
//    $food = $mondayFood->nodeValue;
//    $food = trim( $food ,$price);
//    array_push($foods[6]['menu'], "$food : $price");
//}



//
//
//echo "<pre>";
//var_dump($foods);
//echo "</pre>";




$_SESSION['fiitMonday'] = $foods[0];
$_SESSION['fiitTuesday'] = $foods[1];
$_SESSION['fiitWednesday'] = $foods[2];
$_SESSION['fiitThursday'] = $foods[3];
$_SESSION['fiitFriday'] = $foods[4];
$_SESSION['fiitSaturday'] = $foods[5];
$_SESSION['fiitSunday'] = $foods[6];








//echo $nazov;