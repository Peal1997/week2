<?php 

function checkCurrency($currency,$amount) {
   if($currency == 'dolor')
   {
   return $amount*86.11;
   }
   else if($currency == 'pound'){
     return $amount*114.27;
   }
   else if($currency == 'euro'){
     return $amount*97.19;
   }
 
  
}

 echo checkCurrency('dolor',20) ."BDT";
?>