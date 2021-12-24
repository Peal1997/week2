<?php 

function checCase($case,$txt) {
  if($case == 'uppercase'){
    return"<span style = \" text-transform:uppercase;\">" .$txt. "</span>";
  }
  if($case == 'lowercase'){
    return"<span style = \" text-transform:lowercase;\">".$txt. "</span>";
  }
}  

$txt = "this is heading 1";
$case = 'uppercase';
echo checCase($case,$txt) ;
?>