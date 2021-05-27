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
    echo "<h2>This is the php code to check whether the entered year is leap year or not:-</h2>";
echo "<br><br><br>";
     echo "<b>Given year is 2021</b>";
     echo "<br><br><br>";
      $yr = 2021;
      year_check($yr);
function year_check($yr){
      if($yr % 400 == 0){
          echo "Yes..! $yr is aleap year. ";
      }
      elseif($yr % 4 == 0){
        echo "Yes..! $yr is  a leap year. ";
    }
    elseif($yr % 100 == 0){
        echo "Yes..! $yr is a leap year. ";
    }
    else{
        echo "OOPS..! $yr is  not a leap year. ";
    }
}
    
?><br><br> 
<?php
   
     echo "<b>Given year is 2024</b>";
     echo "<br><br>";
      $yr = 2024;
      
      if($yr % 400 == 0){
          echo "Yes..! $yr is aleap year. ";
      }
      elseif($yr % 4 == 0){
        echo "Yes..! $yr is  a leap year. ";
    }
    elseif($yr % 100 == 0){
        echo "Yes..! $yr is a leap year. ";
    }
    else{
        echo "OOPS..! $yr is  not a leap year. ";
    }

   
?><br><br>
<?php
   
   echo "<b>Given year is 2023</b>";
   echo "<br><br>";
    $yr = 2023;
    
    if($yr % 400 == 0){
        echo "Yes..! $yr is aleap year. ";
    }
    elseif($yr % 4 == 0){
      echo "Yes..! $yr is  a leap year. ";
  }
  elseif($yr % 100 == 0){
      echo "Yes..! $yr is a leap year. ";
  }
  else{
      echo "OOPS..! $yr is  not a leap year. ";
  }

 
?>