<?php

// Complete the encryption function below.
function encryption($s) {
  $s = str_replace(' ', '', $s);
  $l = strlen($s);
  $f = floor(sqrt($l));
  $c = ceil(sqrt($l));
  if($f*$c< $l){
      $f = $c;
  }
  $i = 0;
  $arr = [];
  $newS = '';
  while($i<$l){
      $arr[$i%$c][] = $s{$i};
      $i++;
  }
  for($j=0;$j<count($arr);$j++){
      $newS .= implode($arr[$j]);
      $newS .= " ";
  }
  return $newS;
}

?>
