<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="p-5 bg-body-secondary">

    <h2 class="d-flex justify-content-center mt-2 fw-bold">Log In</h2>

    <form action="process.php" method="post" class="m-5 mt-0">
        <div class="container p-2 " >
            <label for="username" class="h4">Enter Email:</label>
            <input type="email" placeholder="Enter Username" name="email" class="form-control border-success" required>
            
        </div>
        <div class="container p-2">
            <label for="password" class="h4">Enter Password:</label>
            <input type="password" placeholder="Enter Password" name="password" class="form-control border-success" required>
        </div >
        <div class="d-flex justify-content-center p-2 mt-2 ">
            <button type="submit" name="loginButton" class="btn btn-success fs-5 fw-semibold form-control border-success" >Login</button>
        </div>
        <div class="register d-flex justify-content-center">
            <p>Don't have an account?</p>
            <a href="register.php" class="fw-semibold ms-2 link-offset-2 link-underline link-underline-opacity-0">Register</a>
        </div>
    </form>
    

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
    if (isset($_SESSION['status']) && $_SESSION['status_code'] != '' )
    {
        ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['status']; ?>",
                    icon: "<?php echo $_SESSION['status_code']; ?>",
                });
            </script> 
            <?php
            unset($_SESSION['status']);
            unset($_SESSION['status_code']);
    }
    ?>
    
</body>
</html>
