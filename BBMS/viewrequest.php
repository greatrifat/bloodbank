
<?php session_start();
require_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } 
//Code for Registration 

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Donation Request</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>

        <div id="layoutSidenav">
         
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">View Donation Request</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="welcome.php">Dashbord</a></li>
                            <li class="breadcrumb-item active">Donor Request</li>
                        </ol>
            
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Request for blood
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                             <th>Sno.</th>
                                  <th>Name</th>
                                  <th>Contact No </th>
                                  <th> Blood Group</th>                                  
                                  <th> Address</th>
                                  <th> Preferred Time </th>
                                  
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Sno.</th>
                                  <th>Name</th>
                                  <th>Contact No </th>
                                  <th> Blood Group</th>                                  
                                  <th> Address</th>
                                  <th> Preferred Time </th>
                                  
                                  
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                              <?php 
                                              $userid=$_SESSION['id'];
                                              $ret=mysqli_query($con,"select * from request where p_bloodgroup like (select bloodgroup from users where id='$userid') "); 
                                              //Subquery
                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['p_name'];?></td>
                                  <td><?php echo $row['p_contact'];?></td>
                                  <td><?php echo $row['p_bloodgroup'];?></td>
                                  <td><?php echo $row['p_address'];?></td>
                                  <td><?php echo $row['p_time'];?></td>
                                   
                                  
                                  
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
  <?php include('includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
