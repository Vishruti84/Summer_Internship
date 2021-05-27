<html>
<body>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <?php include './style.php';?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!------"This is the php code for form using get and post Method"-->
    <div class="container ">
     
           <form action="detail.php" method="post">
           <table class="align-items-center justify-content-center table-responsive">
                    <tr>
                    <td>First Name:<input type="text" name="txt1" placeholder=" First Name" required class="p-2 mb-2"/></td>
                    </tr>
                    <tr>
                    <td>Last Name:<input type="text" name="txt2" placeholder=" Last Name" required class="p-2 mb-2"/></td>
                    </tr>
                    <tr>
                    <td>Age:<input type="age" name="txt3" placeholder="Age" required class="p-2 mb-2"/></td>
                     </tr>
                     <tr>
                     <td>Email:<input type="email" name="txt4" placeholder="Email" required class="p-2 mb-2"/></td>
                    </tr>
                    <tr>
                    <td>Contact:<input type="contact" name="txt5" placeholder="Contact Number" required class="p-2 mb-2"/></td>
                    </tr>
                    <tr>
                    <td><button class="btn btn-custom justify-content-center mt-4">Submit</button></td>
                    </tr>
            </form>
        </table>
  </div>
    </body>
    </html>









