<?php include("Connection.php"); ?>
<?php
 $id = $_GET['id']
?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice</title>
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

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
     <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
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
          
      </nav>
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
       <?php include("sidebar.php"); ?>      <div class="page-content">
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
            <li class="breadcrumb-item active">Invoice           </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
          
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Print Invoice</strong></div>
                  <div class="block-body">
                   <form name="form" id="form1" action="" method="post">

<?php

 $query1 = mysqli_query($con,"Select * from invoice WHERE `id` = ".$id);
 
while($row = mysqli_fetch_array($query1))
{
	?>
<div id="printJS-form">

  <div class="form-group row">
    <div class="col-sm-9">
      <div class="row">
        <div class="col-md-5">
          <label class="col-md-4 control-label" for="selectbasic">No</label>
   <input class="form-control"  value="<?php echo $row[0] ?>" readonly></input>
        </div>
        <div class="col-md-5">
          <label class="col-md-4 control-label" for="selectbasic" class="form-control">Date</label>

       <input class="form-control"  value="<?php echo $row[1] ?>" ></input>
       </div>
      </div>
    </div>
  </div>
   <div class="form-group row">
    <div class="col-sm-9">
      <div class="row">
        <div class="col-md-5">
          <label class="col-md-4 control-label" for="selectbasic">Bill</label>
   <input class="form-control"  value="<?php echo $row[2] ?>" ></input>
        </div>
        <div class="col-md-5">
          <label class="col-md-4 control-label" for="selectbasic" class="form-control">Customer</label>

           
   <input class="col-md-12 form-control"  value="<?php echo $row[3] ?>" ></input>
       </div>
      </div>
    </div>
  </div>
</br>
  <div class="form-group row">	
    <div class="col-sm-12">
      <div class="row">
        <div class="col-md-4">
          <label class="col-md-8 control-label" for="selectbasic">Sub Account</label>
<div class="show_product" ></div>
   <input class="form-control"  value="<?php echo $row[4] ?>" ></input>
 
 

</div>
   


<div class="col-md-3">
  <label class="col-md-8 control-label" for="selectbasic">Amount</label>
<input class="col-md-8 form-control" id="value1" name="value1" value="<?php echo $row[10] ?>"></input>

    </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-4">
  <br>       
   <input class="form-control"  value="<?php echo $row[5] ?>" ></input> 
    </div>
   


  <div class="col-md-3">
  
<br>
   <input class="col-md-8 form-control" id="value2" name="value2" value="<?php echo $row[11] ?>"></input>

      </div>
      </div>


    <div class="form-group row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-4">
  <br>       
  <input class="form-control"  value="<?php echo $row[6] ?>" ></input>
    </div>



  <div class="col-md-3">
  
<br>
   <input class="col-md-8 form-control" id="value3" name="value3" value="<?php echo $row[12] ?>"></input>

      </div>
      </div>
      <div class="form-group row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-4">
  <br>       
  <input class="form-control"  value="<?php echo $row[7] ?>" ></input>
    </div>


  <div class="col-md-3">
  
<br>
   <input class="col-md-8 form-control" id="value4" name="value4" value="<?php echo $row[13] ?>"></input>

      </div>
      </div>

    <div class="form-group row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-4">
  <br>       
  <input class="form-control"  value="<?php echo $row[8] ?>" ></input>  
    </div>


  <div class="col-md-3">
  
<br>
   <input class="col-md-8 form-control" id="value5" name="value5" value="<?php echo $row[14] ?>"></input>

      </div>
      </div>

    <div class="form-group row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-4">
  <br>       
  <input class="form-control"  value="<?php echo $row[9] ?>" ></input> 
    </div>
   

  <div class="col-md-3">
  
<br>
   <input class="col-md-8 form-control" id="value6" name="value6" value="<?php echo $row[15] ?>"></input>

      </div>
      </div>

<hr>
        <div class="form-group row">
          <div class="col-sm-12">
            <div class="row">
  
              <div class="col-md-4">
             <label class="col-md-8 control-label" for="selectbasic">Total</label>

        </div>
  


        <div class="col-md-3">
        <label class="col-md-8 control-label" for="selectbasic">Rp.<?php echo $row[17] ?><?php

if(isset($_POST['btnadd'])){
  $value1 = $_POST['value1'];
  $value2 = $_POST['value2'];
  $value3 = $_POST['value3'];
  $value4 = $_POST['value4'];
  $value5 = $_POST['value5'];
  $value6 = $_POST['value6'];
  
  $sum = $value1+$value2+$value3+$value4+$value5+$value6;
  
  echo $sum;
  }

    ?></label>

          </div>
          </div>
  </div>



   
  </div>



                  <label class="col-sm-1 form-control-label">Description</label>
                       
                        <textarea class="col-sm-5 form-control" id="description" name="description" ><?php echo $row[16] ?></textarea>

                     				
                  </div>
                </div>

              </form> </div>
			  <?php 
}?>
                </div>
              </div>
            </div>
          </div>
		   	<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script> 
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://github.com/mushlihun/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2023&copy; Web Page Design by <a href="https://github.com/mushlihun">Mushlihun - Theme used of Bootstrap</a>.</p>
            </div>
          </div>
        </footer>
		<button type="button" class="btn btn-primary" onclick="printJS ({ printable: 'printJS-form', type: 'html', header: 'Invoice Voucher' })">
    Print Form
 </button> 
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
  </body>
</html>