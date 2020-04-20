<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}