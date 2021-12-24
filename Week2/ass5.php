<?php 

function checkHeading($heading) {
  return $heading;
}  

$txt = "this is heading 1";
echo "<h1>" . checkHeading($txt) ."<h1>" ;
?>