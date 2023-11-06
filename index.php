
<?php

function rotLeft(string $clue, string $strArr): array {
	[$size, $repeat] = explode(" ", $clue);
  $arr = explode(" ", $strArr);
  $repeat = (int)$repeat;

  if ($repeat === 0 || empty($arr)) {
      return $arr;
  }

  if ($repeat <= count($arr)) {
    return array_merge(array_slice($arr, $repeat), array_slice($arr, 0, $repeat));
  } else {
    for ($i = 0; $i < $repeat; $i++) {
		  $firstItem = array_shift($arr);
		  $arr[] = $first;
	  }
  }
	
	return $arr;
}

leftRotate('5 4', [1, 2, 3, 4, 5]);
