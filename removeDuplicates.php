<?php
function removeDuplicates($firstArray, $secondArray, $byTheKey)
{
    $temporaryArray = array_merge($firstArray, $secondArray);
    foreach ($temporaryArray as $k => $v) {
        foreach ($temporaryArray as $key => $value) {
            if ($k != $key && $v[$byTheKey] == $value[$byTheKey]) {
                unset($temporaryArray[$k]);
            }
        }
    }
    return $temporaryArray;
}
?>
