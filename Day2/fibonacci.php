<style>
*{
    text-align:center;
    font-size:17px;
}
    h2{
        text-align:center;
        color:#111;
        font-size:20px;
        font-weight:600;
        font-family:verdana;
    }
    

</style>
<?php
    echo "<h2>This is the php code to FIBONACCI SERIES :-</h2>";
echo "<br><br><br>";
    $num = 0;
    $a1 =0;
    $a2 = 1;
    echo "\n";
    echo $a1.','.$a2.',';
    while($num <= 25){
        $a3 = $a2 + $a1;
        echo $a3.',';
        $a1 = $a2;
        $a2 = $a3;
        $num = $num + 1;
    }
    
?><br><br> 