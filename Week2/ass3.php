<?php 

function checkGrade($mark) {
   if($mark>=80 && $mark<=100)
   {
   return "A+";
   }
   else if($mark>=70 && $mark<=79){
     return "A";
   }
   else if($mark>=60 && $mark<=69){
     return "A-";
   }
   else if($mark>=50 && $mark<=59){
    return "B";
  }
  else if($mark>=40 && $mark<=49){
    return "C";
  }
  else if($mark>=33 && $mark<=39){
    return "D";
  }

else if($mark>=0 && $mark<=33){
  return "D";
}
  else{
    return "invalid mark";
  }
  
}

 echo checkGrade(96.5);
?>