
<?php
    $con = mysqli_connect("localhost","root","","db_con");
    /*if($_POST){
        echo "yes connection established";
    }*/
    if(isset($_POST['submit'])){

        $std_name = $_POST['std_name'];
        $std_email = $_POST['std_email'];
        $std_gen = $_POST['std_gender'];
        $std_pass = $_POST['std_pass'];
        $cont = $_POST['std_cont'];
        $std_add = $_POST['std_add'];
        $std_pin = $_POST['std_pin'];
        $std_age = $_POST['std_age'];
        $std_dob = $_POST['std_dob'];
        $std_blood = $_POST['std_blood'];
        $p_name = $_POST['fath_name'];
        $m_name = $_POST['moth_name'];
       

        


        mysqli_query($con,"INSERT INTO `tbl_studnt`(`std_name`, `std_email`, `std_gender`, `std_pass`, `std_cont`, `std_add`, `std_pin`, `std_age`, `std_dob`, `std_blood`, `fath_name`, `moth_name`) VALUES ('$std_name','$std_email','$std_gen','$std_pass','$cont','$std_add','$std_pin','$std_age','$std_dob','$std_blood','$p_name','$m_name')")
            or die("Error" . mysqli_error($con));
        
           
       
}


?>
<html lang="en">
<head>
   
   <?php include './bootstrap.min.php';?>
   <?php include './style.php';?>
  
    <title>DB Connection without Theme</title>
</head>
<body>
    <section class="Form my-5 mx-5">
        <div class="container">
            
                <div class="col-lg-6 col-md-6 py-5 px-4 ">
                    <h1 class="ml-4 w-100">Register For Free</h1>
                    <h5 class="ml-5">New Member No Worry</h5>
                    <form action="" class="ml-4" method="post">
                        <div class="form-group mt-4">
                            <input type="text" name = "std_name" class="form-control" placeholder="Student Name">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" name = "fath_name" class="form-control" placeholder="Father's Name">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" name = "moth_name" class="form-control" placeholder="Mother's Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name = "std_email"class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name = "std_pass"class="form-control" placeholder="Password">
                        </div>
                       
                        <div class="form-group">
                           <textarea name="std_add" id="" cols="30" rows="5" placeholder="Residential Address"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" name = "std_pin"class="form-control" placeholder="Pincode">
                        </div>
                        <div class="form-group">
                            <input type="number" name = "std_cont"class="form-control" placeholder="Contact">
                        </div>
                        <div class="form-group pl-1 d-flex" style="outline:none; box-shadow:none;">
                            <input type="radio" name = "std_gender"class="form-control " value="Male" style="outline:none; box-shadow:none;">Male
                            <input type="radio" name = "std_gender"class="form-control" value="Female" style="outline:none; box-shadow:none;">Female
                        </div>
                        <div class="form-group">
                            <input type="number" name = "std_age"class="form-control" placeholder="Age">
                        </div>
                        <div class="form-group" style="box-shadow:none;">
                        D.O.B:&nbsp;<input type="date" name="std_dob" id="" value="Date Of Birth" placeholder="DOB">
                        </div>
                        <div class="form-group ">
                         <input type="text" name = "std_blood"class="form-control" placeholder="Blood Group">
                        </div>
                        <div class="form-group">
                           <button type="submit" name ="submit" class="btn btn-lg btn-custom">Submit</button>
                        </div>
                        
                    </form>
                </div>
           
        </div>
    </section>







     <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>