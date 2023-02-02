<?php
function array_union($x, $y)
   { 
      $au=  array_merge(
            array_intersect($x, $y),
            array_diff($x, $y),     
            array_diff($y, $x)      
        );
        return $au;
   }
$a = array(1, 2, 3, 4, 5);
$b = array(2, 3, 4, 5, 6,7,8);
print_r(array_union($a, $b));
?>
