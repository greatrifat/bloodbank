
<?php session_start();
require_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
//Code for Registration 
if(isset($_POST['submit']))
{
    $p_name=$_POST['p_name'];
    $p_contact=$_POST['p_contact'];
    
    $p_bloodgroup=$_POST['p_bloodgroup'];
    $p_address=$_POST['p_address'];
    $p_time=$_POST['p_time'];
    

    $msg=mysqli_query($con,"insert into request(p_name,p_contact,p_bloodgroup,p_address,p_time) values('$p_name','$p_contact','$p_bloodgroup','$p_address','$p_time');");
if($msg)
{
    echo "<script>alert('Request successfully, Hope for best');</script>";
    echo "<script type='text/javascript'> document.location = 'viewrequest.php'; </script>";
}

}
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Send Req | Registration and Login System</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  

    </head>
    <body class="bg-primary">
        <?php include_once('includes/navbar.php');?>
               
                   
        
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">

<hr />
                                        <h5 class="text-center font-weight-light my-4">Send Request</h5></div>
                                    <div class="card-body">
<form method="post" name="signup" onsubmit="return checkpass();">

<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="p_name" name="p_name" type="text" placeholder="Enter your first name" required />
<label for="p_name">Patient name<span style="color:red">*</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="p_contact" name="p_contact" type="text" placeholder="Enter your last name" required />
 <label for="p_contact">Contact Person<span style="color:red">*</label>
</div>
</div>
</div>


                                                
<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating">
<div class="font-italic">Blood Group<span style="color:red">*</span></div>
<div><select id="p_bloodgroup" name="p_bloodgroup" class="form-control" required>
<option value="">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
</div>
</div>
</div>


</div>

<div class="row mb-3">
<div class="form-floating">
<input class="form-control" id="p_address" name="p_address" type="text" placeholder="Enter your last name" required />
 <label for="p_address">Address<span style="color:red">*</label>
</div>
</div>



                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="p_time" name="p_time" type="text" placeholder="Enter your last name" required />
 <label for="p_time">When?<span style="color:red">*</label>
</div>
</div>






 
        
                                            

<div class="mt-4 mb-0">
<div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="submit">Send Request</button></div>
</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
  <div class="small"><a href="viewrequest.php">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
         <?php include_once('includes/footer.php');?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>



