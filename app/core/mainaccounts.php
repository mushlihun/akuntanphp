<?php
session_start();
error_reporting(1);

include("Connection.php");
 
 if($_SESSION['s_uname'] !="" && $_SESSION['s_pass'] !="")
 {


 if(isset($_POST['btnshow'])){
	$name = $_POST['name'];

	$chart = $_POST['chart'];
	
	$query= "INSERT INTO `account`( `accountname`, `chartid`) VALUES ('$name',$chart)";
	$exe = mysqli_query($con,$query);
	
	}


 ?>


<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PaymentVoucherRecords</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon1.png">
<link rel="stylesheet" type="text/css" href="css/datatable.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
 

   <!-- Favicon-->


    </head>

   
  <body >
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form name="form" id="form1" action="" method="post">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="paymentdesign.php" class="navbar-brand">
                 <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dash</strong><strong>Board</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">DF</strong><strong>M</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
      
            <!-- Log out               -->
            <div class="list-inline-item logout">                   <a id="logout" href="signout.php" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          
        
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/LOGO LIST 2.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">LC</h1>
            <p>(listcreative.id)</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
       <?php include("sidebar.php"); ?>    <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Web Apps Accounting Managments</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="paymentdesign.php">Home</a></li>
            <li class="breadcrumb-item active">createnewaccount           </li>
			<li class="breadcrumb-item active">mainaccount           </li>
			
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
          
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Add Main Account</strong></div>
                  <div class="block-body">
                 <form name="form" id="form1" action="" method="post">

<div >

<?php

$select = mysqli_query($con, "Select * from data");
$select1 = mysqli_query($con, "SELECT * FROM `account`");

?>

<br>

  
     <div class="form-group row">
    <div class="col-sm-9">
      <div class="row">
        <div class="col-md-5">
          <label class="col-md-12 control-label" for="selectbasic">Account Name</label>
   <input class="form-control" id="name" name="name" placeholder="Enter Account Name"></input>

        </div>
        <div class="col-md-4">
          <label class="col-md-12 control-label" for="selectbasic" class="form-control">Chart ID</label>

          <select name="chart" class="form-control">

<?php
$query = "SELECT * FROM `chartaccount`";
$exe = mysqli_query($con,$query);
if($exe){
	while($row = mysqli_fetch_array($exe)){
	?>
<option value= "<?php echo $row['chartid']; ?>"><?php echo $row['accountname']; ?></option>	
<?php	}
}else{
	echo "problem";
}
?>
</select>
  
       </div>
      </div>
    </div>
  </div>


  <button type="submit" class="btn btn-primary" name="btnshow" id="btnadd">Create MainAccount</button>


  <div class="table-responsive">  
<br>
  <table id="tables" class="display" >
<thead>
<tr class="table-active">
<th class="table-danger">AccountID</th>
<th>Account Name</th>
<th>Amount</th>
<th>Chart ID</th>
<th>Options</th>

</tr>
<thead>
<tbody>
<?php

while($row = mysqli_fetch_array($select1))
{
  $tabledata = '<tr >
  <td class="table-active">'.$row[0].'</td>
  <td class="table-secondary">'.$row[1].'</td>
  <td>'.$row[2].'</td>
  <td >'.$row[3].'</td>
	<td><a href="mainedit.php?id='.$row[0].'">Edit</a> | <a href="maindelete.php?id='.$row[0].'">delete</a></td>
  </tr>';
  echo $tabledata;
  }

?>
<tbody>
</table></div></div>
              </form> </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://github.com/mushlihun/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2023&copy; Web Page Design by <a href="https://github.com/mushlihun">Mushlihun - Theme used of Bootstrap</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
	
	
	
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>   
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>   
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>   
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pSSAake/0.1.36/pSSAake.min.js"></script>   
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pSSAake/0.1.36/vfs_fonts.js"></script>   
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>   




	  
	  <script>
	   $(document).ready( function () {
    $('#tables').DataTable({
		   
			 dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]

	});
} );

</script>
	
  </body>
</html>

<?php

}else{
   header('Location:login.php');
 }

  

?>