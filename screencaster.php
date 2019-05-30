<?php
       function result($value1,value2,$to_words=""){
       $bonus=$value1;
       $ans=$value1;

       $conv=$to_words;
               for($i=1,$<= && >=value2,$i++){
               $ans=$ans+$bonus;
           }

           echo $ans;


           if($conv=="true"){

           $wallace = new NumberFormatter("en", NumberFormatter::SPELLOUT);
           echo $wallace->format($ans);
       }


   }

     result(5,4,5);
   ?>