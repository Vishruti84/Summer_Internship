<style>
    *{
        text-align:center;
       
        background-color:#ddd;
        align-items:center;
        justify-content:center;
        
    }
    table{
        margin:0 490px;
        border:1px solid brown;
        width:200px;
        font-size:20px;
    }
</style>
<?php
    echo "<h2>ARRAY in PHP</h2>";
    //ARRAY PART//
    //Two types of Array we use in Php//
    echo"<br>";
    //1. Numerical Array//
    echo "<h2>1.Numerical Array in PHP</h2>";
    echo"<br>";
    //Different Methods to declare an Array//
    /**Method 1* */
    $a[0] = 10;
    $a[1] = 11.5;
    $a[2] = 120;
    $a[3] = 10.50;
    $a[4] = 50;
    $a[5] = "PHP";
    //Printing the Array
    echo "<table border=1;>";
        echo "<tr>";
            echo "<th><h4 style='font-size:20px;color:brown;'><b>Method (1)</b></h4></th>";
        echo "</tr>";
    
        echo "<tr>";
            echo "<td>$a[0]</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>$a[1]</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>$a[2]</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>$a[3]</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>$a[4]</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>$a[5]</td>";
        echo "</tr>";
    echo "</table>";

    echo"<br><br>";
    /**Method 2* */
    $b[] = 10;
    $b[] = 11.5;
    $b[] = '4';
    $b[] = 50;
    $b[] = "PHP";
    //Printing the Array
    echo "<table border=1;>";
        echo "<tr>";
            echo "<th><h4 style='font-size:20px;color:brown;'><b>Method (2)</b></h4></th>";
        echo "</tr>";
    
        echo "<tr>";
            echo "<td>$b[0]</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>$b[1]</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>$b[2]</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>$b[3]</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>$b[4]</td>";
        echo "</tr>";   
    echo "</table>";
    echo"<br>";
    /**Method 3* */
    $c = array(10,11.5,'4',"PHP",120,100.50);
    //Printing the Array
    echo "<table border=1;>";
    echo "<tr>";
        echo "<th><h4 style='font-size:20px;color:brown;'><b>Method (3)</b></h4></th>";
    echo "</tr>";
    for($i=0;$i<count($c);$i++){
        
   
    echo "<tr>";
        echo "<td>$c[$i]</td>";
    echo "</tr>";
    }
echo "</table>";
echo"<br>";
echo "<h4>Main InBuilt Functions in Array</h4>";
   /*InBuilt Functions of Array */
   //print_r//
   echo "<pre>";
   print_r($c);
   echo "<pre>";
   echo"<br>";
    //var_dump//
    echo "<pre>";
    var_dump($c);
    echo "<pre>";

    echo"<br>";
    //2. Associative Array//
    echo "<h2>2.Associative Array in PHP</h2>";
    echo"<br>";
    //Different Methods to declare an Array//
    /**Method 1* *///KEY = VALUE//
    $v[0] = 10;
    $v['c'] = "compiler";
    $v['PHP'] = "Web Developer";
    $v[3] = 10.50;
    $v['4'] = 50;
    
    //Printing the Array
    echo "<table border=1;>";
        echo "<tr>";
            echo "<th><h4 style='font-size:20px;color:brown;'><b>Method (1)</b></h4></th>";
        echo "</tr>";
        foreach ($v as $key => $value) {
            echo "<tr>";
            echo "<td>Key is <b>$key</b> and Value is <b>$value</b></td>";
        echo "</tr>";
        }
           
    echo "</table>";
    echo"<br>";
    
    /**Method 2* /Array Function '=>'*/
    $k = array(
        0 => 84,
        'c' => "Compiler",
        'PHP' => "Wordpress Developer",
        '4' => 50,
        3 =>100.89,
        5 =>120
    );
    echo "<table border=1;>";
    echo "<tr>";
        echo "<th><h4 style='font-size:20px;color:brown;'><b>Method (2)</b></h4></th>";
    echo "</tr>";
    foreach ($k as $key => $value) {
        echo "<tr>";
        echo "<td>Key is <b>$key</b> and Value is <b>$value</b></td>";
    echo "</tr>";
    }
       
echo "</table>";
echo"<br>";
echo "<h4>Main InBuilt Functions in Array</h4>";
   /*InBuilt Functions of Array */
   //print_r//
   echo "<pre>";
   print_r($v);
   echo "<pre>";
   echo"<br>";
    //var_dump//
    echo "<pre>";
    var_dump($k);
    echo "<pre>";

    echo"<br>";




?>