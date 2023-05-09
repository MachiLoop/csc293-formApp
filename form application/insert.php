<?php

require_once('config/db.php');

if(isset($_POST['submit'])){

}

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_POST['gender']) && !empty($_POST['language']) && !empty($_POST['zip']) && !empty($_POST['about'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $zip = $_POST['zip'];
    $about = $_POST['about'];

   $query = "insert into userdata(name,email,password,phone,gender,language,zip,about) values('$name', '$email', '$password', '$phone', '$gender', '$language', '$zip', '$about')";

   $run = mysqli_query($conn, $query) or die(mysqli_error());

   if($run){
    // echo 'Form submitted succesfully';
    header('Location:records.php');
   }
   else{
    echo "Form not submitted";
   }
}
else{
    echo 'all fields required';
}

?>