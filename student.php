<?php
include('process.php');

$email = isset($_GET['email']) ? $_GET['email'] : '';
$fname = isset($_GET['fname']) ? $_GET['fname'] : '';
$mname = isset($_GET['mname']) ? $_GET['mname'] : '';
$lname = isset($_GET['lname']) ? $_GET['lname'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>DOE</title>
</head>
<body class="bg-light">

    <div class="d-flex justify-content-start p-3 bg-info-subtle">
        <h2 class="me-2">Welcome </h2>
        <h2 class="text-success"><?php echo $fname; ?>,</h2>
    </div>
    <hr class="m-1">

    <div class="p-3">
        <h4>Email: <?php echo $email; ?></h4>
        <h4>First Name: <?php echo $fname; ?></h4>
        <h4>Middle Name: <?php echo $mname; ?></h4>
        <h4>Last Name: <?php echo $lname; ?></h4>
    </div>

</body>
</html>