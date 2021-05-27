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
    echo "<h2>This is the php code to check whether the entered string is palindrome or not:-</h2>";
echo "<br><br><br>";
echo "<b>Check Palindrome Using strrev():</b>";
echo "<br><br>";
  function Palindrome($string){
      if(strrev($string) == $string){
          return 1;

      }
      else{
          return 0;
      }
  }
  $str = "MOM";
  if(Palindrome($str)){
   echo "Yes...Your string '$str' is a Palindrome.";
}
else{
    echo "OOPS..! Your String '$str' is not a Palindrome.";
} 
    
?><br><br> 
<?php
   echo "<br><br>";
echo "<b>Check Palindrome Using strrev():</b>";
echo "<br><br>";
  
  $strg = "VISHRUTI";
  if(Palindrome($strg)){
   echo "Yes...Your string '$strg' is a Palindrome.";
}
else{
    echo "OOPS..! Your String '$strg' is not a Palindrome.";
} 
    
?><br><br>
<?php
   echo "<br><br>";
echo "<b>Check Palindrome Using strrev():</b>";
echo "<br><br>";
  
  $strng = "MALAYALAM";
  if(Palindrome($strng)){
   echo "Yes...Your string '$strng' is a Palindrome.";
}
else{
    echo "OOPS..! Your String '$strng' is not a Palindrome.";
} 
    
?><br><br> 