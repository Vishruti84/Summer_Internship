<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <?php include './style1.php';?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Student Marks</title>
</head>
<body>
<br><br>
    <div class="container justify-content-center align-items-center">
        <form action="marksview.php" method="post" class="myform p-3 justify-content-center align-items-center">
        <h4>Student Details</h4>
            <div class="form-group">
                <input type="text" name="std1" placeholder="Student Name" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="email" name="std2" placeholder="Student Email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="std3" placeholder="Student Standard" class="form-control" required>
            </div>
            <h4>Student Marks Details</h4>
            <div class="form-group">
                <input type="text" name="std4" placeholder="Subject 1" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="std5" placeholder="Subject 2" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="std6" placeholder="Subject 3" class="form-control" required>
            </div>
            <div class="form-group">
               <button class="btn btn-custom ml-3">Submit</button>
            </div>



        </form>




    </div>
    
</body>
</html>