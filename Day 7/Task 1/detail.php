<style>

    *{
        text-align:center;
        font-size:15px;
    }
    body{
        background-color:#ddd;
    }
    a{
        margin-top:10px;
    }
</style>



<?php
     $con = mysqli_connect("localhost","root","","db_con");
   $sql = mysqli_query($con,"SELECT * FROM `tbl_studnt`");
     
   
   /*$row = mysqli_fetch_row($sql);/********Fetching data row wise 
    print_r($row);
    $row = mysqli_fetch_array($sql);
    echo "<pre>";
    print_r($row);
    echo "<pre>";*/

    echo "<table border='1'>";
    echo "<tr >";
        echo "<th colspan='14' style='text-align:center;font-size:20px;'>Student Details</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>STDNT ID</th>";
    echo "<th>STDNT Name</th>";
    echo "<th>STDNT Email</th>";
    echo "<th>STDNT Gender</th>";
    echo "<th>STDNT Password</th>";
    echo "<th>STDNT Contact</th>";
    echo "<th>STDNT Add</th>";
    echo "<th>STDNT Pin</th>";
    echo "<th>STDNT Age</th>";
    echo "<th>STDNT DOB</th>";
    echo "<th>STDNT Blood grp</th>";
    echo "<th>Father's Name</th>";
    echo "<th>Mother's Name</th>";
    echo "<th>Action</th>";
echo "</tr>";
        while($row = mysqli_fetch_array($sql)){
         
            echo "<tr>";
                echo "<td>{$row['ID']}</td>";
                echo "<td>{$row['std_name']}</td>";
                echo "<td>{$row['std_email']}</td>";
                echo "<td>{$row['std_gender']}</td>";
                echo "<td>{$row['std_pass']}</td>";
                echo "<td>{$row['std_cont']}</td>";
                echo "<td>{$row['std_add']}</td>";
                echo "<td>{$row['std_pin']}</td>";
                echo "<td>{$row['std_age']}</td>";
                echo "<td>{$row['std_dob']}</td>";
                echo "<td>{$row['std_blood']}</td>";
                echo "<td>{$row['fath_name']}</td>";
                echo "<td>{$row['moth_name']}</td>";
                echo "<td><a href='deleteme.php?deleteid={$row['ID']}'>Delete</a></td>";
        echo "</tr>";
        }
    echo "</table>";

    echo "<a href='dbcrud_nothm.php' style='margin-top:10px;'>Insert Record</a>";
 


?>