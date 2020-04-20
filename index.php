<?php
$nums = [];
for ($i = 0; $i < 100; ++$i) {
    $nums[$i] = rand(1, 101);
}
foreach ($nums as $num) {
    echo $num . " ";
}
$minValue = findMin($nums);
echo "</br>";
echo "The mininum value is: " . $minValue;

$maxValue = findMax($nums);
echo "<br/>";
echo "The maximum value is: " . $maxValue;