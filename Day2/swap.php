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
    echo "<h2>This is the php code to SWAP two integers :-</h2>";
echo "<br><br><br>";
   $a = 30;
   $b = 60;
   echo "<b>Before Swapping</b><br>";
  echo "a =".$a." b=".$b;
  echo "<br><br>";
  echo "<b>After Swapping</b><br>";
  $temp = $a;
  $a = $b;
  $b = $temp;
  echo "a =".$a." b=".$b;
    
?><br><br> 
<?php
    
echo "<br><br><br>";
   $a = 1000;
   $b = 2000;
   echo "<b>Before Swapping</b><br>";
  echo "a =".$a." b=".$b;
  echo "<br><br>";
  echo "<b>After Swapping</b><br>";
  $temp = $a;
  $a = $b;
  $b = $temp;
  echo "a =".$a." b=".$b;
    
?><br><br> 