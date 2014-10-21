<?php
function removeDuplicates($firstArray, $secondArray, $byTheKey)
{
	$collect = array();
	$walker = function ($v, $k) use (& $collect, $byTheKey) {
		$collect[$v[$byTheKey]] = $v;
	};
	$tmp = array_merge($firstArray, $secondArray);
	array_walk($tmp, $walker);

	return $collect;
}
?>
