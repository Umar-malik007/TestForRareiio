<?php

$array = array(5, 2, 3, 8, 1, 3, 4, 6, 5, 8, 1);

function columns($uarr) {
	$n = $uarr;
	if (count($n) == 0) {
		return array();
	} else if (count($n) == 1) {
		return array_chunk($n[0], 1);
	}

	array_unshift($uarr, NULL);
	$transpose = call_user_func_array('array_map', $uarr);
	return array_map('array_filter', $transpose);
}

function sortByBeadSortAlgo($uarr) {
	foreach ($uarr as $e) {
		$poles[] = array_fill(0, $e, 1);
	}

	return array_map('count', columns(columns($poles)));
}

print_r(sortByBeadSortAlgo($array));

?>