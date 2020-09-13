<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/joinbeta.css">
</head>
<body>
<div style=" background-color: #f5faff;">
  <!-- Start your project here-->  
  <div class="container" style="padding: 5%;">

    <!-- Section -->
    <section>
  
      <h3 class="font-weight-normal text-center pb-2 display-4 header" style="font-size: 40px; font-family: Helvetica;"><strong>Join Beta</strong></h3>
      
      <p class="lead text-center text-muted pt-2 mb-5 ">Help us ship the first version and earn rewards</p>
      
      <!--First row-->
      <div class="row d-flex justify-content-center">
        <div class="col-6">
          <div class="view" style="margin-top: 10%; margin-bottom: 5%;">
            <img src="img/pickpet.png" class="img-fluid" alt="smaple image">
          </div>
        </div>
        <!--First column-->
        <div class="col-6 z-depth-1" style="background-color: white; padding: 3%;">
        <form method = "post" action = "<?=$_SERVER['PHP_SELF'];?>">
          <!-- Material outline input -->
          <div class="md-form md-outline form-lg">
            <input type="text" id="name" name="name" class="form-control form-control-lg" required>
            <label for="name">Name</label>
          </div>
          
          <!-- Material outline input -->
          <div class="md-form md-outline form-lg">
            <input type="text" id="email" name="email" class="form-control form-control-lg" required>
            <label for="email">Email</label>
          </div>
          
          <!-- Material outline input -->
          <div class="md-form md-outline form-lg">
            <input type="number" id="phno" name="phno" class="form-control form-control-lg" required>
            <label for="phno">Phone Number</label>
          </div>
           <!-- Material outline input -->
           <div class="md-form md-outline form-lg">
            <input type="text" id="bio" name="bio" class="form-control form-control-lg" required>
            <label for="bio">Short Bio</label>
          </div>
          <div class="md-form md-outline form-lg">
            <button type="submit" style="background-color: #e35555; border-radius: 10px; height:50px; color:white; width:100%"name="submit" class="btn btn-block btn-lg">Join Beta</button>

            <?php
try{
    $conn = new mysqli("localhost", "root", "","pickpet_beta"); // Establishing Connection with Server
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     } 
    if(isset($_POST['submit']))
    { // Fetching variables of the form which travels in URL
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phno = $_POST['phno'];
        $bio = $_POST['bio'];
        if($name !=''||$email !=''){
        //Insert Query of SQL
        $sql ="insert into beta_responses(name,email,phno,bio) values ('$name','$email','$phno','$bio')";
        if (mysqli_query($conn, $sql)) 
        {
          $message = "Data Submitted";
          echo "<script type='text/javascript'>alert('$message');</script>";
          // echo "New record created successfully";
       } else {
          $message = "Submission Error!!";
          echo "<script type='text/javascript'>alert('$message');</script>";
       }
    }
    else{
        $message = "Insertion Failed.. Some Fields are Blank....!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
    // exit(); 
    }
      // Closing Connection with Server
     $conn->close();
  
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }

?>
          </div>
         
      </form>
  
        </div>
        <!--First column-->
  
      </div>
      <!--First row-->
  
    </section>
    <!-- Section -->
  
  </div>
  <!-- End your project here-->
</div>

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
