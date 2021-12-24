<?php 

function checkAge($age) {
   if($age>=1 && $age<=3)
   {
   return "it is a infant";
   }
   else if($age>3 && $age<=12){
     return "it is a child";
   }
   else if($age>12 && $age<=19){
     return "Teenager";
   }
   else if($age>19 && $age<=30){
    return "Young";
  }
  else if($age>30 && $age<=45){
    return "Adult";
  }
  else if($age>45 && $age<=100){
    return "OLD";
  }
  else{
    return "invalid age";
  }
  
}

 echo checkAge(50);
?>