<?php
 $n1 = 2;
 $n2 = 4;
 $n3 = 8;
 if($n1 > $n2 && $n1 > $n3)
   {
       if($n2 > $n3)
       {
           echo $n1 . ' ' . $n2 . ' ' . $n3;
       }else{
            echo $n1 . ' ' . $n3 . ' ' . $n2;
       }
   }else if($n2 > $n1 && $n2 > $n3){
       if($n1 > $n3)
       {
           echo $n1. '' . $n2 .''. $n3;
       }else{
           echo $n1. ''. $n3. ''.$n2;
       }
    }else if($n3 > $n2 && $n3 > $n1){
        if($n3 > $n2)
        {
            echo $n1 . ''. $n2 . '' . $n3;

        }else{
            echo $n1 . ''.$n3. ''.$n2;
        }

   }
   
?>
   




