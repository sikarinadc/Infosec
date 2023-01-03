<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>BlogSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dashboard.css">

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>   
</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/infosec.png" alt="Logo" width="120" height="24"/>
      </a>
      <a class="btn btn-outline-success" href="index.php">Logout</a>
    </div>
  </header>


  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="ui_admin_dashboard.php">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>DATA ADMINISTRATION</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="ui_manage_account.php">
                <span data-feather="users" class="align-text-bottom"></span>
                Accounts Management
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ui_manage_comment.php">
                <span data-feather="message-circle" class="align-text-bottom"></span>
                Posts Management
              </a>
            </li>
          </ul>
        </div>
      </nav>
 <!-- PHP Routine to Get Data -->

 <?php
    include_once("config.php");

    if($_SERVER['REQUEST_METHOD'] == "GET")
    {
        $id = $_GET['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM tblaccounts WHERE ID=$id");
        while($res = mysqli_fetch_array($result))
        {
            $name = $res['Name'];
            $email = $res['Email'];
            $pass = $res['Password'];
        }
    }
    ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

<div class="table-responsive">
    <br><br><h3>Edit User Accounts</h3><br>
    <form action="update_account.php" method="POST" name="frmAccountUpdate" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" class="form-control" id="ID" name="ID" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $name; ?>">
        </div>
        <div class="mb-3">
        <label for="Email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $email; ?>">
        </div>
        <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
            <input type="text" class="form-control" id="Password" name="Password" value="<?php echo $pass; ?>">
        </div>
        <div class="mb-3 float-end">
            <button type="submit" class="btn btn-sm btn-primary p-3">Update</button>
            <a type="button" class="btn btn-sm btn-secondary p-3" href="ui_manage_account.php">Cancel</a>
        </div>
    </form>
    </div> 


</div>

</main>
</div>
</div>
    
  <script src="js/dashboard.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script>
    feather.replace()
  </script>
</body>
</html>
    
    
   