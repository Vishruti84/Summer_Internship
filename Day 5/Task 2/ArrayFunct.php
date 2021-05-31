<style>
    *{
       
       font-family:monospace;
        background-color:#ddd;
        align-items:center;
        justify-content:center;
        font-size:20px;
    }
    
</style>
<?php
    //Array Functions//
    echo "<h2 style='text-align:center;font-size:35px;'>Functions In Array</h2>";
    /*Function 1 */
    echo "<h4>1.Count()</h4>";
    $a = array('php',4,100,'compiler','android','java','1010');
    echo count($a);
    echo"<br>";
   /*************************************************************** */
     /*Function 2 */
     echo "<h4>2.array_count_values()</h4>";
     $b = array('php',4,100,'compiler','android','java','1010');
     $new = array_count_values($b);

     foreach($new as $key => $value){
         echo "<br/>$key - <strong>$value</strong>";
     }
     /*************************************************************** */
     echo"<br>";
     /*Function 3 */
     echo "<h4>3.array_sum()</h4>";
     $c = array(100,200,25,45,50,87);
     echo array_sum($b);
     echo"<br>";
       /*************************************************************** */
      /*Function 4 */
      echo "<h4>4.array_product()</h4>";
      $d = array(2,4,6,8,10);
      echo array_product($d);
      echo"<br>";
      /*************************************************************** */
      /*Function 5 */
      echo "<h4>5.array_reverse()</h4>";
      $e = array('php',4,100,'compiler','android','java','1010');
      $rev = array_reverse($e);
     print_r($rev);
      echo"<br>";
      /*************************************************************** */
      /*Function 6 */
      echo "<h4>6.in_array()</h4>";
      $f = array('php',4,100,'compiler','android','java','1010');
      $temp = in_array(100,$f);
      echo $temp;
      echo"<br>";
      /*************************************************************** */
      /*Function 7 */
      echo "<h4>7.array_rand()</h4>";
      $g = array('php',4,100,'compiler','android','java','1010');
     $indexofarray = array_rand($g,4);
     foreach ($indexofarray as $key => $value) {
       echo "<br/>$key - <strong>" . $g[$value] . "</strong>";
     }
      echo"<br>";
      /*************************************************************** */
      /*Function 8 */
      echo "<h4>8.array_unique()</h4>";
      $h = array('php',4,100,'compiler','android','java','1010','compiler');
    print_r(array_unique($h));
      echo"<br>";
       /*************************************************************** */
      /*Function 9 */
      echo "<h4>9.array_merge()</h4>";
      $i = array('php',4,100,'compiler','android','java','1010','compiler');
      $j = array('maruti',300,'activa');
   $new1 = array_merge($i,$j);
   print_r($new1);
      echo"<br>";
 
       /*************************************************************** */
      /*Function 10 */
      echo "<h4>10.array_search()</h4>";
      $k = array('php',4,100,'compiler','android','java','1010','compiler');
      $view = array_search('1010',$k);
  echo $view;
      echo"<br>";
       /*************************************************************** */
      /*Function 11 */
      echo "<h4>11.range()</h4>";
      $l = range("10","30");
     foreach ($l as $key => $value) {
        echo "<br/>$key - $value";
     }
      echo"<br>";
       /*************************************************************** */
      /*Function 12 */
      echo "<h4>12.sort()</h4>";
      $m = array(50,66,01,11,89,84,70,50,15,20);
     sort($m);
     print_r($m);
      echo"<br>";
       /*************************************************************** */
      /*Function 13 */
      echo "<h4>13.rsort()</h4>";
      $n = array(50,66,01,11,89,84,70,50,15,20);
     rsort($n);
     print_r($n);
      echo"<br>";
       /*************************************************************** */
      /*Function 14 */
      echo "<h4>14.asort()</h4>";
      $o = array(50,66,01,11,89,84,70,50,15,20);
     asort($o);
     print_r($o);
      echo"<br>";
       /*************************************************************** */
      /*Function 15 */
      echo "<h4>15.ksort()</h4>";
      $p = array(
         
          "Access" => "125",
          "SUZUKI" => "swift",
          "Activa" => "5G",
      );
     ksort($p);
     foreach ($p as $key => $value) {
        echo "<br/>$key - $value";
     }
      echo"<br>";
        /*************************************************************** */
        /*Function 16 */
        echo "<h4>16.krsort()</h4>";
        $q = array(
           
            "juice" => "orange",
            "ice-cream" => "choco-chips",
            "soup" => "Manchurian",
        );
       krsort($q);
       foreach ($q as $key => $value) {
          echo "<br/>$key - $value";
       }
        echo"<br>";
         /*************************************************************** */
        /*Function 17 */
        echo "<h4>17.shuffle()</h4>";
        $r = array("book","tv",10,"phone",10.45);
      shuffle($r);
       foreach ($r as $key => $value) {
          echo "<br/>$key - $value";
       }
        echo"<br>";
        /*************************************************************** */
        /*Function 18 */
        echo "<h4>18.array_key_exists()</h4>";
        $s = array(
           
            "juice" => "orange",
            "ice-cream" => "choco-chips",
            "soup" => "Manchurian",
        );
     echo array_key_exists('soup',$s);
      
        echo"<br>";
         /*************************************************************** */
        /*Function 19 */
        echo "<h4>19.array_change_key_case()</h4>";
        $t = array(
         
            "Access" => "125",
            "SUZUKI" => "swift",
            "Activa" => "5G",
        );
     $uppercase = array_change_key_case($t,CASE_UPPER);
     print_r($uppercase);
        echo"<br>";
  /*************************************************************** */
      /*Function 20 */
      echo "<h4>20.array_combine()</h4>";
      $u = array('php',100,'compiler');
      $v = array('maruti',300,'activa');
   $new2 = array_combine($u,$v);
   print_r($new2);
      echo"<br>";
      /*************************************************************** */
      /*Function 21 */
      echo "<h4>21.end()</h4>";
      $w = array("book","tv",10,"phone",10.45);
  echo end($w);
      echo"<br>";
       /*************************************************************** */
      /*Function 22 */
      echo "<h4>22.compact()</h4>";
     $name = "Vishruti";
     $lname = "Agrawal";
     $x = compact("name","lname");
     print_r($x);
      echo"<br>";
      /*************************************************************** */
      /*Function 23 */
      echo "<h4>23.array_flip()</h4>";
      $y = array(
         
        "A" => "Apple",
        "B" => "Bat",
        "C" => "Cow",
    );
     $y = array_flip($y);
     print_r($y);
      echo"<br>";
       /*************************************************************** */
      /*Function 24 */
      echo "<h4>24.array_diff()</h4>";
      $z = array('php',100,'compiler',"book","tv",10);
      $aa = array('maruti',300,'activa',"book","tv",10);
     $diff = array_diff($z,$aa);
     print_r($diff);
      echo"<br>";
        /*************************************************************** */
      /*Function 25 */
      echo "<h4>25.array_intersect()</h4>";
      $bb = array(
         
        "0" => "January",
        "1" => "February",
        "3" => "March",
    );
    $cc = array(
         
        "4" => "February",
        "5" => "April",
        "6" => "January",
    );
    
     print_r(array_intersect($bb,$cc));
      echo"<br>";
      /*************************************************************** */
      /*Function 26 */
      echo "<h4>26.array_values()</h4>";
      $dd = array(
         
        "0" => "May",
        "1" => "June",
        "3" => "August",
    );
    $ee = array_values($dd);
    
    foreach ($ee as $key => $value) {
       echo "<br/>$key - $value";
    }
      echo"<br>";
       /*************************************************************** */
      /*Function 27 */
      echo "<h4>27.array_push()</h4>";
      $ff = array('php',100,'compiler');
     array_push($ff,300,'activa',"book","tv",10);
    
     print_r($ff);
      echo"<br>";
       /*************************************************************** */
      /*Function 28 */
      echo "<h4>28.array_pop()</h4>";
      $gg = array('php',100,'compiler',300,'activa',"book","tv",10);
     array_pop($gg);
     print_r($gg);
     array_pop($gg);
     print_r($gg);
      echo"<br>";
      /*************************************************************** */
      /*Function 29 */
      echo "<h4>29.explode()</h4>";
      $hh = "My Name is Vishruti Agrawal";
    $new3 = explode(" ",$hh);
     print_r($new3);
      echo"<br>";
      /*************************************************************** */
      /*Function 30 */
      echo "<h4>30.implode()</h4>";
      $ii = array("My"," Name", "is" ,"Vishruti", "Agrawal");
    $new4 = implode(" ",$ii);
     print_r($new4);
      echo"<br>";
 
 
 
 
 
 









?>