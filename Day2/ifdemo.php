<style>
    h2{
        text-align:center;
        color:#666;
        font-weight:500;
        font-family:verdana;
    }
    

</style>
<?php
    echo "<h2>This is the php code for if Statement to implement the comparison of 3 integers.</h2>";
    $a = 10;
    $b = 20;
    $c = 30;

    if($a>$b && $a>$c){
        echo "$a is largest";
    }
        elseif($b>$a && $b>$c){
            echo "$b is largest";
        }
        elseif($c>$a && $c>$b){
            echo "$c is largest";
        }
    
    else{
        echo "Values are not unique.";
    }
?>