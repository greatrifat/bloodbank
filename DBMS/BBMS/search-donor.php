<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Donor Search</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar1.php');?>
        <div id="layoutSidenav">
         
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Donor Search</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Blood Bank Management System</a></li>
                            <li class="breadcrumb-item active">Search Donor</li>
                        </ol>
            
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Registered Active donor Contact
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                             <th>Sno.</th>
                                  <th>First Name</th>
                                  <th> Last Name</th>
                                  <th> Gender</th>
                                  <th> Age</th>
                                  <th> Blood Group</th>
                                  <th> Address</th>
                                  <th> Active Status</th>
                                  <th> Email Id</th>
                                  <th>Contact no.</th>
                                  
                                  
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Sno.</th>
                                  <th>First Name</th>
                                  <th> Last Name</th>
                                  <th> Gender</th>
                                  <th> Age</th>
                                  <th> Blood Group</th>
                                  <th> Address</th>
                                  <th> Active Status</th>
                                  <th> Email Id</th>
                                  <th>Contact no.</th>
                                  
                                  
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                              <?php $ret=mysqli_query($con,"select * from users where status like 'Available' ");
                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['fname'];?></td>
                                  <td><?php echo $row['lname'];?></td>
                                  <td><?php echo $row['gender'];?></td>
                                  <td><?php echo $row['age'];?></td>
                                  <td><?php echo $row['bloodgroup'];?></td>
                                  <td><?php echo $row['address'];?></td>
                                  <td><?php echo $row['status'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><?php echo $row['contactno'];?></td>  
                                  
                                  
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
