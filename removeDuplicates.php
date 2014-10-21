<?php
function removeDuplicates($firstArray, $secondArray, $byTheKey)
{
	$temporaryArray = array_merge($firstArray, $secondArray);

	$temporaryArray = array_map("unserialize", array_unique(array_map("serialize", $array)));

	foreach ($temporaryArray as $key => $value) {
		if (is_array($value)) {
			$temporaryArray[$key] = $this->super_unique($value);
		}
	}
	
	return $temporaryArray;
}
?>
