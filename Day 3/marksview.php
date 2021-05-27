<style>
    *{
        align-items:center;
        text-align:center;
        font-size:20px;
    }
    table{
        margin:100px 180px;
        width:700px;
        height:100px;
        
    }
    .data{
        color:green;
    }
</style>
<?php
    $a = $_POST['std1'];
    $b = $_POST['std2'];
    $c = $_POST['std3'];
    $m1 = $_POST['std4'];
    $m2 = $_POST['std5'];
    $m3 = $_POST['std6'];

    $sum = $m1 + $m2 + $m3;
    $perct = ($m1 + $m2 + $m3)/3;

   echo"<table border=1;>";
        echo "<tr>";
            echo "<th>Student Name</th>";
            echo "<th>Student Email</th>";
            echo "<th>Student Standard</th>";
            echo "<th>Sub1</th>";
             echo "<th>Sub2</th>";
             echo "<th>Sub3</th>";
             echo "<th>Total</th>";
             echo "<th>%</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>$a</td>";
            echo "<td>$b</td>";
            echo "<td>$c</td>";
            echo "<td>$m1</td>";
            echo "<td>$m2</td>";
            echo "<td>$m3</td>";
            echo "<td>$sum</td>";
            echo "<td>$perct</td>";
        echo "</tr>";
        if($sum >=80){
            echo "<tr>";
            echo "<td colspan=9 style='color:green;font-weight:600;'>Congratulation..!You cleared the test by Distinction.</td>";
           
        echo "</tr>";
        }
        elseif($sum >=70 && $sum<=80){
            echo "<tr >";
            echo "<td colspan=9 style='color:blue;font-weight:600;'>Congratulation..!You cleared the test by First Class.</td>";
           
        echo "</tr>";
        }
        elseif($sum >=40 && $sum<=60){
            echo "<tr >";
            echo "<td colspan=9 style='color:yellow;font-weight:600;'>Congratulation..!You cleared the test by Second Class.</td>";
           
        echo "</tr>";
        }
        else{
            echo "<tr>";
            echo "<td colspan=9 style='color:red;font-weight:600;'>OOPS..!You have not cleared the test .You are fail..!</td>";
           
        echo "</tr>";
        }
       

   echo"</table>";


?>
