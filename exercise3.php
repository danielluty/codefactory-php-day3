<?php


// THE FUNCTION
function findHighestValue($array)
{
    // Assuming that the first elemen in the array is the highest one
    $highestNumber = $array[0];

    // looping through the array. as long as $num is more than $highestNumber, it will get $highestNumber
    // Will loop as long as $highestNumber is the highest number
    foreach ($array as $num) {
        if ($num > $highestNumber) {
            $highestNumber = $num;
        }
    }

    // Returns the highest number from the array
    return $highestNumber;
}


// THE ARRAY
$randomNumbers = [];

for ($i = 0; $i < 10; $i++) {
    $randomNumbers[$i] = rand(1, 100);
}

// SEARCHING FOR THE HIGHEST NUMBER
// echo "$randomNumbers";
echo implode ("<br>", $randomNumbers);

$highestNumber = findHighestValue($randomNumbers);

echo "<br><br>" . $highestNumber;

