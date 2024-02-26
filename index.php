<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login | DZ</title>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col md-6 side-image">
                    <!-- Image -->
                    <img src="img/DZ.png" alt="">
                    
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Sign In</header>
                        <form action="process.php" method="post">
                            <div class="input-field">
                                
                                <input type="text" class="input" id="email" name="email" required autocomplete="off">
                                <label for="email">Email</label>
                                
                            </div>
                            <div class="input-field">
                                
                                <input type="password" class="input" id="password" name="password" required autocomplete="off">
                                <label for="password">Password</label>
                                
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" name="loginButton" value="Sign In">
                            </div>
                            
                            
                        </form>
                        <div class="signUp">
                            <span>Don't have an account? <a href="register.php">Register</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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