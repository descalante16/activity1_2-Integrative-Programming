<?php
session_start();

include('config.php');

if(isset($_POST["loginButton"])){
    $email = $_POST["email"];
    $password = $_POST["password"];


    // $sql = "SELECT fname, mname, lname, role FROM user LIMIT 1;";
    
    $sql = "SELECT email, fname, mname, lname FROM users WHERE email = '$email' and password = '$password' LIMIT 1;";
    $sql_run = mysqli_query($conn, $sql);

   
        $row = mysqli_fetch_array($sql_run);
        $email = $row['email'];
        $fname = $row['fname'];
        $mname = $row['mname'];
        $lname = $row['lname'];
        $password = $row['password'];
        $role = $row['role'];

        
        header("Location: insert.php");           
         

}

if(isset($_POST["registerButton"])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $fname = $_POST['fname'];
    $mname = isset($_POST['mname']) ? $_POST['mname'] : '' ;
    $lname = $_POST['lname'];

    $check_email_query = "SELECT * FROM `users` WHERE `email` = '$email'";
    $email_result = mysqli_query($conn,$check_email_query);
    $email_count = mysqli_fetch_array($email_result)[0];

    if($email_count > 0){
        $_SESSION['status'] = "Email address already taken";
        $_SESSION['status_code'] = "error";
        header("Location: register.php");
        exit();
    }

    if ($password !== $repassword){
        $_SESSION['status'] = "Password does not match";
        $_SESSION['status_code'] = "error";
        header("Location: register.php");
        exit();
    }


    $query = "INSERT INTO `users`(`email`, `password`, `fname`, `mname`, `lname`) VALUES ('$email','$password','$fname','$mname','$lname')";
    $query_result = mysqli_query( $conn, $query );

    if($query_result){
        $_SESSION['status'] = "Registration Sucess!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
        exit();
    }

    // if ($sql_run && mysqli_affected_rows($conn) > 0) {
    //     echo "\n User registered successfully!";
    //     // Redirect to index.php
    //     header("Location: index.php");
    // } else {
    //     echo "Error: " . mysqli_error($conn);
    // }
}

if(isset($_POST["insertButton"])){
    $fname = $_POST['fname'];
    $mname = isset($_POST['mname']) ? $_POST['mname'] : '' ;
    $lname = $_POST['lname'];
    $student_id = $_POST['student_id'];
    $year = $_POST['year'];
    $section = $_POST['section'];

    $insert_query = "INSERT INTO `students` (`user_id`, `student_id`, `fname`, `mname`, `lname`, `year`, `section`) VALUES ('1', '$student_id', '$fname', '$mname', '$lname', '$year', '$section');";
    $insert_result = mysqli_query($conn, $insert_query);
  

}


?>