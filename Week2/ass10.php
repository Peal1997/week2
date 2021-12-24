

<?php
  $str[1000];
  // $rev[1000];
   $count = 0;


  //finding the length of the string
  while ($str[$count] != '\0')
  {
    $count++;
  }
  $j = $count - 1;

  //reversing the string by swapping
  for ($i = 0; $i < $count; $i++)
  {
    $rev[$i] = $str[$j];
    $j--;
  }

  echo ( $rev);
?>