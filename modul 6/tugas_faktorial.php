<?php
echo "<h2> faktorial </h2>";
function faktorial($x){
  
    if($x==0){
        return 1;
    }
    for($i=0; $i<$x; $i++){
    
        return ($x * faktorial($x-1));
    }
}
echo faktorial(5);
?>