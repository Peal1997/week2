<?php 

function checkShape($shape,$p1,$p2) {
   if($shape == "circle")
   {
   return 3.1415*$p1*$p2;
   }
  else if($shape == "rectangle")
   {
   return $p1*$p2;
   }
   else if($shape == "square")
   {
   return $p1*$p2;
   }
  
}

 echo checkShape("rectangle",2,3);
?>