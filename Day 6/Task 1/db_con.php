<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        background-color:#ddd;
        align-items:center;
        justify-content:center;
    }
    .container{
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        position:absolute;
        margin-left:180px;
      
       
        align-items:center;
        justify-content:center;
        
    }
    .form-group{
        width:400px;
        font-size:13px;
       
    }
    .form-control{
        border-radius:20px;
        font-size:13px;
        padding:8px;
        min-height:30px;
    }
    </style>
<?php
    $con = mysqli_connect("localhost","root","","db_con");
    /*if($_POST){
        echo "yes connection established";
    }*/
    if(isset($_POST['submit'])){
   
        $fname = $_POST['FNAME'];
        $lname = $_POST['LNAME'];
        $mobile = $_POST['CONTACT'];
        $gen = $_POST['Gender'];

        mysqli_query($con,"INSERT INTO `tbl_usr`(`FNAME`, `LNAME`, `CONTACT`, `Gender`) VALUES ('{$fname}','{$lname}','{$mobile}','{$gen}')")
            or die("Error" . mysqli_error($con));
            
               
           
    }
    

   /* if( $_POST){
       
        echo "<script>alert ('Your Data Has Been Inserted');</script>";
    }*/



?>
<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>DbConnection</title>
</head>
<body>

    <div class="container ml-5 p-3">
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="FNAME" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="LNAME" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="CONTACT"  placeholder="Contact" required>
            </div>
            <div class="form-group">
             <input type="radio" name="Gender" id="gender" value="MALE"/>MALE
             <input type="radio" name="Gender" id="gender" value="FEMALE"/>FEMALE
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name ="submit" value="SEND">
               
            </div>
        </form>
    </div>

    
    
    
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>
</html>