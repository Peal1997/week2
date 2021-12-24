<?php 

function changeColor($color,$txt) {
    if($color == 'lal')
  return "<h1 style =\"color:red;\">" . $txt . "</h2>";
  else if($color == 'sobuj')
  return "<h1 style =\"color:green;\">" . $txt . "</h2>";
  if($color == 'nil')
  return "<h1 style =\"color:blue;\">" . $txt . "</h2>";
  if($color == 'holud')
  return "<h1 style =\"color:yellow;\">" . $txt . "</h2>";
  if($color == 'beguni')
  return "<h1 style =\"color:violet;\">" . $txt . "</h2>";
  if($color == 'kalo')
  return "<h1 style =\"color:black;\">" . $txt . "</h2>";
}  

$txt = "this is heading 1";
$color = 'beguni';
echo changeColor($color,$txt)  ;
?>