<?php

$a[] = "Blue";
$a[] = "Red";
$a[] = "Green";
$a[] = "Purple";
$a[] = "Black";
$a[] = "Orange";
$a[] = "Yellow";
$a[] = "Gold";
$a[] = "White";
$a[] = "Pink";
$a[] = "Cyan";
$a[] = "Gray";
$a[] = "Aquamarine";
$a[] = "Violet";
$a[] = "Teal";
$a[] = "Lavender";
$a[] = "Aqua";
$a[] = "Brown";
$a[] = "Lightblue";
$a[] = "Lightpink";
$a[] = "Lightgreen";
$a[] = "Lightred";
$a[] = "Indigo";
$a[] = "Azure";
$a[] = "Crimson";
$a[] = "Scarlet";
$a[] = "Magenta";
$a[] = "Nickel";
$a[] = "Olive";




$q = $_REQUEST["q"];

$hint = "";


if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}


echo $hint === "" ? "no suggestion" : $hint;
?>