<?
    include_once "config.php";
    $id = (isset($_POST['id']) ? $_POST['id'] : '');
    $sql = "SELECT * FROM tabledb WHERE id= ".$id;
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    while($res = mysqli_fetch_array($result))
    {
        $name = $res['name'];
        $email = $res['email'];
        $mobile = $res['mobile'];  
        $state = $res['state'];
        $city = $res['city'];
        $address = $res['address'];
        
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please fill this form to update record to the database.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="" class="form-control" required>
                           <!-- <span class="invalid-feedback"></span>-->
                        </div>
                        <div class="form-group">
                            <label>Email id</label>
                            <input type="text" name="email" value="" class="form-control" required>
                           
                        </div>
                        <div class="form-group">
                            <label>Mobile No.</label>
                            <input type="text" name="mobile" class="form-control" value="" required>
                            
                        </div>
                         <div class="form-group">
                            <label>State</label><br>
    
                            <select name="state">
                            <option value="<?php echo $state1;?>">    Select State   </option>
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
                            <textarea name="address" class="form-control" value="" required></textarea>
                           
                        </div>


                       
                        <input type="Submit" name="update" class="btn btn-primary" value="Update">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<?
       /* $id1 = $_GET['id1'];
        $name1 = $_GET['name1'];
        $email1 = $_GET['email1'];
        $mobile1 = $_GET['mobile1'];
        $state1 = $_GET['state1'];
        $city1 = $_GET['city1'];
        $address1 = $_GET['address1'];*/

    if(isset($_POST['update'])/* && !empty($_POST['id'])*/) {
        $id = (isset($_POST['id']) ? $_POST['id'] : '');
        $name = (isset($_POST['name']) ? $_POST['name'] : '');
        $email = (isset($_POST['email']) ? $_POST['email'] : '');
        $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
        $state = (isset($_POST['state']) ? $_POST['state'] : '');
        $city = (isset($_POST['city']) ? $_POST['city'] : '');
        $address = (isset($_POST['address']) ? $_POST['address'] : '');
        
        $query = "UPDATE tabledb set name = '$name', email = '$email', mobile = '$mobile', state = '$state', city = '$city', address = 'address' where id =' " .$id." ' ";
        $query_run = mysqli_query($link,$query)  or die(mysqli_error($link));

        if($query_run){
            echo "<script language='javascript'>window.alert('Updated');</script>";

        }
        else{
            mysqli_error($link);
        }

    }
?>