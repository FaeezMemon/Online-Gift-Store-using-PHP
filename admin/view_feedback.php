

<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

?>
<head>
<link rel="icon" type="image/png" href="logo.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Feed back</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    

</head>

<body class="fix-header fix-sidebar">
   
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
  
    <div id="main-wrapper">
   
         <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        
                        <span><img src="logo.png" alt="homepage" class="dark-logo" height="25px" width="25px" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
            
                    <ul class="navbar-nav mr-auto mt-md-0">
              
                        
                     
                       
                    </ul>
       
                    <ul class="navbar-nav my-lg-0">

                        
                    
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                  
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                   <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      
        <div class="left-sidebar">
       
            <div class="scroll-sidebar">
             
                <nav class="sidebar-nav">
                   <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                        <li class="nav-label">Log</li>
                        <li> <a href="all_users.php">  <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Categories</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_sub-categories.php">All Categories</a></li>
								<li><a href="add_category.php">Add Categories</a></li>
                                <li><a href="add_sub-categories.php">Add Sub-categories</a></li>
                                
                            </ul>
                        </li>
                      <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-gift" aria-hidden="true"></i><span class="hide-menu">Gifts</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_gift.php">All Gifts</a></li>
								<li><a href="add_gift.php">Add Gift</a></li>
                              
                                
                            </ul>
                        </li>
						 <li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>
                         <li> <a href="view_feedback.php"><i class="fa fa-commenting" aria-hidden="true"></i><span>Feedback</span></a></li>
                         
                    </ul>
                </nav>
        
            </div>
     
        </div>
    
        <div class="page-wrapper">
      
            
      
            <div class="container-fluid">
           
                <div class="row">
                    <div class="col-12">
                        
                       
                    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">All Feedback</h4>
                            </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th>User</th>	
                                                <th>Email</th>
                                                <th>Feedback</th>
												<th>Meesage</th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT * FROM feedback";
												$query=mysqli_query($db,$sql);
                                                while($row=mysqli_fetch_assoc($query)){
                                                    ?>
                                                    <tr><td><?php echo $row['name'];  ?></td>
                                                    <td><?php echo $row['email'];  ?></td>
                                                    <td><?php echo $row['feedback'];  ?></td>
                                                    <td><?php echo $row['message'];  ?></td>
                                                   
                                                </tr>
                                                    <?php
                                                }
											?>
                                             
                                            
                                           
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
         
            </div>
 
		
            <footer class="footer"> © 2022 - Gift</footer>
    
        </div>
   
    </div>
    
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    
</body>

</html>