<?php


    function deret_prima($batas){
          for ($i=1;$i<=$batas;$i++){
              $a = 0;
              for ($j=1;$j<=$i;$j++){
                  if($i % $j == 0){
                      $a++;
                  }
              }
              if($a == 2){
                  echo $i.",";
              }
          }
    }
    echo deret_prima(200);

 ?>
