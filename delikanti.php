<?php
session_start();
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "https://www.delikanti.sk/prevadzky/3-jedalen-prif-uk/");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

$dom = new DOMDocument();

@$dom->loadHTML($output);
$dom->preserveWhiteSpace = false;
$tables = $dom->getElementsByTagName('table');

$rows = $tables->item(0)->getElementsByTagName('tr');
$index = 0;
$dayCount = 0;

$foods = [];
$foodCount = $rows->item(0)->getElementsByTagName('th')->item(0)->getAttribute('rowspan');

foreach ($rows as $row) {

    if ($row->getElementsByTagName('th')->item(0)) {
        $foodCount = $row->getElementsByTagName('th')->item(0)->getAttribute('rowspan');

        $day = trim($rows->item($index)->getElementsByTagName('th')->item(0)->getElementsByTagName('strong')->item(0)->nodeValue);

        $th = $rows->item($index)->getElementsByTagName('th')->item(0);

        foreach ($th->childNodes as $node)
            if (!($node instanceof \DomText))
                $node->parentNode->removeChild($node);

        $date = trim($rows->item($index)->getElementsByTagName('th')->item(0)->nodeValue);


        array_push($foods, ["date" => $date, "day" => $day, "menu" => []]);

        for ($i = $index; $i < $index + intval($foodCount); $i++) {
            if ($foods[$dayCount])
                array_push($foods[$dayCount]["menu"], trim($rows->item($i)->getElementsByTagName('td')->item(1)->nodeValue));
        }
        $index += intval($foodCount);
        $dayCount++;
    }

}


$_SESSION['delMonday'] = $foods[0];
$_SESSION['delTuesday'] = $foods[1];
$_SESSION['delWednesday'] = $foods[2];
$_SESSION['delThursday'] = $foods[3];
$_SESSION['delFriday'] = $foods[4];
$_SESSION['delSaturday'] = $foods[5];
$_SESSION['delSunday'] = $foods[6];
//echo "<pre>";
//var_dump($foods);
//echo "</pre>";


?>