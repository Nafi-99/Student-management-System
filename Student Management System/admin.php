<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>The E-School</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<head></head>
<body class="host_version"> 

	<!-- Modal -->
	
    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<h2 style="color:white">Welcome to Admin Dashboard</h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="admin.php">Dashboard</a></li>
						<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
						<li class="nav-item "><a class="nav-link" href=""><?php echo $_SESSION['username'];   ?></a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
<?php
    $connection= mysqli_connect("localhost", "root", "" , "user_registration");
    $query="SELECT * FROM users";
    $query_run=mysqli_query($connection, $query);

    
?>
   <table class="table table-hover">
   <thead>
    <tr>
      <th>ID No.</th>
      <th >Name</th>
      <th >Email</th>
      <th >Role</th>
    </tr>
  </thead>
  <tbody>
  <?php
   if(mysqli_num_rows($query_run)>0)
   {
       while($row=mysqli_fetch_assoc($query_run))
       {
         ?>

    <tr >
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['role'];?></td>
    </tr>
     <?php
       }
   }
   else {
       echo "No Records Found";
   }
    
      
      ?>
  </tbody>
</table>
    

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>