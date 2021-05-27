<style>
    h2{
        text-align:center;
        color:#666;
        font-weight:500;
        font-family:verdana;
    }
    

</style>
<?php
    echo "<h2>This is the php code for WHILE LOOP to print Integers between 1-100 :-</h2>";

    $v = 1;
    while($v <=100){
        echo "$v , "; //comma , is just to separate the numbers.
        $v++;
    }
?>
<br><br><br><br>

<!--------------DO WHILE LOOP Stareted------------------->
<?php
    echo "<h2>This is the php code for  DO WHILE LOOP to print Integers between 1-500 :-</h2>";
    $k = 1;
    do{
        echo "$k , "; //comma , is just to separate the numbers.
        $k++;
    }while($k <=500)




?>