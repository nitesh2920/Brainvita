<?php
$insert=false;
if(isset($_POST['name'])){

  
  // Set connection variables
  $server="localhost";
    $username="root";
    $password="";
    
    // Creating a database connection
    $con=mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("Connection to the Database failed due to".mysqli_connect_error());
      }
      // echo "success connecting to the database";
      
      // Collect post variables
      $name=$_POST['name'];
      $age=$_POST['age'];
      $gender=$_POST['gender'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $about=$_POST['about'];

    
      $sql="INSERT INTO `brainvita`.`quiz` (`name`, `age`, `gender`, `email`, `phone`, `about`) VALUES ('$name', 
      '$age', '$gender', '$email', '$phone', '$about');";
    // echo $sql;
    
    // INSERTING IN Database
    
    if($con->query($sql)== true){  //"->" Object operator"
      // echo "successfully inserted";
      $insert= true;  //Flag for succesfull insertion.
    }                      
    else{
      echo "ERROR:$sql <br> $con->error";
    }
    //Close The Database Connection
    
    $con->close();
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Brainvita Form</title>
  </head>
  <body>
    <img class="bg" src="bg.jpg" alt="Theme">
      <div class="container">
          <h1>Welcome to Brainvita Registration Form </h1>
          <p>Fill up the form and submit your form.</p>
        <?php 
          if($insert== true){
          echo "<p class='subm-msg'>Thanks for submitting Your form</p>";
          }
        ?>
          <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required/>
            <input type="text" name="age" id="age" placeholder="Enter your age" required/>
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender" required/>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required/>
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number" maxlength="10" required/>
            <textarea name="about" id="about" cols="20" rows="5" placeholder="Describe your self in short words"></textarea>
            <button type="submit" class="btn">Submit</button>
          </form>
      </div>
      <script src="index.js"></script>
  </body>
</html>


