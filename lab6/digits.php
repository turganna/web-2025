<?php
if(isset($_GET['digit'])) {
    $digit = $_GET['digit'];
   if ($digit == '1') {
        echo "один";
    } elseif ($digit == '2') {
        echo "два";
    } elseif ($digit == '3') {
        echo "три";
    } elseif ($digit == '4') {
        echo "четыре";
    } elseif ($digit == '5') {
        echo "пять";
    } elseif ($digit == '6') {
        echo "шесть";
    } elseif ($digit == '7') {
        echo "семь";
    } elseif ($digit == '8') {
        echo "восемь";
    } elseif ($digit == '9') {
        echo "девять";
    } else  {
        echo "ноль";
    } 
}