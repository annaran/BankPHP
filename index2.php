<?php require_once 'top.php'; ?>

<?php

$sName = $_GET['name'];


$sData = file_get_contents("exam.txt");
$jData = json_decode($sData);
//$sName = $jData->name;
$sLastName = $jData->lastName;

echo $sName;
echo $sLastName;

$jData->name = $sName;

$sData = json_encode($jData);
file_put_contents( 'exam.txt', $sData );

?>

<?php require_once 'bottom.php'; ?>

