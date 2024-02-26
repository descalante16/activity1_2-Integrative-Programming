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
    <title>Insert Data</title>
</head>
<body>

    <div class="container">

    <h2 class="d-flex justify-content-center mt-2 fw-bold">Insert New Student</h2>

        <form action="process.php" method="post" class="m-5 mt-0">
            <div class="container p-2 " >
                <label for="student_id" class="h4">Student ID</label>
                <input type="number" placeholder="Enter Student ID" name="student_id" class="form-control border-success" required>
                
            </div>
            <div class="container p-2 " >
                <label for="fname" class="h4">First Name</label>
                <input type="text" placeholder="First Name" name="fname" class="form-control border-success" required>
                
            </div>
            <div class="container p-2 " >
                <label for="mname" class="h4">Middle Name</label>
                <input type="text" placeholder="Middle Name" name="mname" class="form-control border-success" required>
                
            </div>
            <div class="container p-2 " >
                <label for="lname" class="h4">Last Name</label>
                <input type="text" placeholder="Last Name" name="lname" class="form-control border-success" required>
                
            </div>
            <div class="container p-2 " >
                <label for="year" class="h4">Year</label>
                <input type="text" placeholder="Year" name="year" class="form-control border-success" required>
                
            </div>
            <div class="container p-2 " >
                <label for="section" class="h4">Section</label>
                <input type="text" placeholder="Section" name="section" class="form-control border-success" required>
                
            </div>
           
            <div class="d-flex justify-content-center p-2 mt-2 ">
                <button type="submit" name="insertButton" class="btn btn-success fs-5 fw-semibold form-control border-success" >Submit</button>
            </div>
        </form>
    </div>
    
</body>
</html>