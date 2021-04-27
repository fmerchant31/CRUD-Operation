<?php

require_once "config.php";
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    
   

    $sql = mysqli_query($link,"INSERT INTO tabledb(name,email,mobile,state,city,address) VALUES ('$name','$email','$mobile','$state','$city','$address')");

    header("location: index.php");
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add record to the database.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                           <!-- <span class="invalid-feedback"></span>-->
                        </div>
                        <div class="form-group">
                            <label>Email id</label>
                            <input type="text" name="email" class="form-control" required>
                           
                        </div>
                        <div class="form-group">
                            <label>Mobile No.</label>
                            <input type="text" name="mobile" class="form-control"  required>
                            
                        </div>
                         <div class="form-group">
                            <label>State</label><br>
    
                            <select name="state">
                            <option>    Select State   </option>
                            <option value="Maharshtra">Maharashtra</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Goa">Goa</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Karnataka">Karnataka</option>
                            
                            </select>
                            </div>
                            <div class="form-group">
                                <label>City</label><br>
        
                                <select name="city">
                                <option>     Select City     </option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Pune">Pune</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Panji">Panji</option>
                                <option value="Surat">Surat</option>
                                
                                </select>
                            </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" required></textarea>
                           
                        </div>


                       
                        <input type="Submit" name="Submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>