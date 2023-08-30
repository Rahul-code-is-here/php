<?php
$insert=false;
if(isset($_POST['name'])){
   // set connection variable
 $server="localhost";
 $username="root";
 $password="";
// create a connection
 $con= mysqli_connect($server,$username,$password);
// check for connection success
 if(!$con){
    die("connection to this database failed due to ".mysqli_connect_error());
 }
// echo "success connecting to the db";

// collect post variable
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql=" INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;
// execute query
if($con->query($sql)==true){
    // echo "succesfully inserted";
    // flag for succesfull insertion
    $insert=true;
}else{
    echo "EROR: $sql <br> $con->error";
}
// close the database connection
$con->close();  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="mountain.png" alt="IIT khadagpur">
    <div class="container1">
        <h1>welcome to the iit khadagpur us trip plan</h1>
        <p>enter your details and submit your form to conform your participation in a trip</p>
        <?php 
        if($insert==true){
     echo  '<p class="submismsg">thank you for submitting your form, we are happy to see you joinning us for us trip</p>';}
 ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="please enter your name:">
            <input type="text" name="age" id="age" placeholder="please enter your age:">
            <input type="text" name="gender" id="gender" placeholder="please enter your gendef:">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your mobile number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea>
            <button class="btn">submit</button>
            <button class="btn">Reset</button>
        </form>
    </div>
    <script src="script.js"></script>
   
</body>
</html>