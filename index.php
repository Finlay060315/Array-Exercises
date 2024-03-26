<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
    <h2>Question Set 1</h2>
<?php 
 $color = array('white', 'green', 'red', 'blue', 'black');
 echo "<p>The memory of that scene for me is like a frame of film forever frozen at that moment: 
    the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. 
 The new president and his first lady. - Richard M. Nixon</p>"
?>

<?php 
$color = array('white', 'green', 'red');
foreach ($color as $x) {
    echo "$x, ";
}

sort($color);
foreach ($color as $y) {
    echo "<br>• $y<br>";
}
?>

<?php 
$ceu = array(
    "Italy"=>"Rome", 
    "Luxembourg"=>"Luxembourg", 
    "Belgium"=>"Brussels", 
    "Denmark"=>"Copenhagen", 
    "Finland"=>"Helsinki", 
    "France"=>"Paris", 
    "Slovakia"=>"Bratislava", 
    "Slovenia"=>"Ljubljana", 
    "Germany"=>"Berlin", 
    "Greece"=>"Athens", 
    "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", 
    "Portugal"=>"Lisbon", 
    "Spain"=>"Madrid", 
    "Sweden"=>"Stockholm", 
    "United Kingdom"=>"London", 
    "Cyprus"=>"Nicosia", 
    "Lithuania"=>"Vilnius", 
    "Czech Republic"=>"Prague", 
    "Estonia"=>"Tallin", 
    "Hungary"=>"Budapest", 
    "Latvia"=>"Riga", 
    "Malta"=>"Valetta", 
    "Austria"=>"Vienna", 
    "Poland"=>"Warsaw"
);

asort($ceu);

foreach ($ceu as $country => $capital) {
    echo "<br>The capital of $country is $capital<br>";
}
?>
<br>
<?php
$x = array(1, 2, 3, 4, 5);

var_dump($x);
unset($x[4]);
$x = array_values($x);

echo '';
var_dump($x);
?>
<br>
<?php
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
$whiteElement = reset($color);

echo "Expected result: $whiteElement";
?>
</div>

<div>
    <h2>Question Set 2</h2>
<?php 
    $sampleDate = "2012-09-12";
    $expDate = date('d-m-Y', strtotime($sampleDate));
    echo $expDate;
?>
<br>
<?php 
$resDate = strtotime("12-05-2014");
echo $resDate;

?> 
<br>
<?php 
$startDate = time();
$endDate = strtotime("12-05-2014");
$diff = $startDate - $endDate;
echo floor($diff / (60 * 60 * 24));

?>
<br>
<?php 
$date = "2024-03-21"; 
echo 'First day : '. date("Y-m-01", strtotime($date)).' , Last day : '. date("Y-m-t", strtotime($date));


?>
<br>
<?php 
echo date('l \t\h\e jS');
?>
<br>
<?php 
var_dump(checkdate(3, 32, 2024));
var_dump(checkdate(3, 26, 2024)); 
?>
</div> 

<div>
    <h2>Question Set 3</h2>
    <?php
$filename = "1.txt";

try {
    $fileContents = file_get_contents($filename);
    echo "File Contents:\n";
    echo $fileContents;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>

<br>

<?php
function fileExists($filepath) {
    if (file_exists($filepath)) {
        return true;
    } else {
        return false;
    }
}
$filepath = "1.txt";
if (fileExists($filepath)) {
    echo "File exists.";
} else {
    echo "File does not exist.";
}
?>

<br>

<?php
function countLines($filepath) {
    $lines = file($filepath);
   
    $lineCount = count($lines);

    return $lineCount;
}

$filepath = "1.txt"; 
$lineCount = countLines($filepath);
echo "Number of lines in the file: " . $lineCount;

?>
<br>

<?php

function writeToFile($filepath, $content) {
    file_put_contents($filepath, $content);
}

$filepath = "2.txt"; 
$content = "This is a sample string to write to the file."; 

writeToFile($filepath, $content);

echo "Content has been written to the file.";
?>

<br>

<?php

$filename = "data.csv";

try {
    $fileHandle = fopen($filename, 'r');
    if ($fileHandle === false) {
        throw new Exception("Error opening the file.");
    }

    while (($data = fgetcsv($fileHandle)) !== false) {
        foreach ($data as $cell) {
            echo htmlspecialchars($cell) . " ";
        }
        echo "<br>";
    }

    fclose($fileHandle);
} catch (Exception $e) {
    echo "An error occurred:". $e->getMessage();
}
?>

</div>
</body>
</html>