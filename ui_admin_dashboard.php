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

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <div class="row">
      <div class="col-sm-6">
      <div class="card bg-warning">
      <div class="card-body">
        <h2 class="card-title">21</h2> 
          <p class="card-text">User Registrations</p>
          <center><a class="small text-black stretched-link" href="#">More info
            <img src="./images/arrow-circle-right.png" width="15px"></a></center>
      </div>
      </div>  
      </div>

      <div class="col-sm-6">
      <div class="card bg-danger">
      <div class="card-body">
      <h2 class="card-title">41, 690</h2>
      <p class="card-text">Comments</p>
      <p class="card-text">21% increase in 30 days</p>
      </div>
      </div>
      </div>
      </div>
      
      <div class="container">
        <canvas id="myChart"></canvas>
      </div>
      
      <script>
        const ctx = document.getElementById('myChart');
          
          new Chart(ctx, {
            type: 'bar',
              data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 
                'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                label: '# of What?',
                data: [21, 15, 37, 5, 14, 23, 32, 19, 43, 50, 26, 30],
                borderWidth: 1,
                backgroundColor: 'rgba(54, 162, 235, 0.2)'
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
        </script>
                </div>
            </div>
          </main>
          
        </div>
      </div>
  
  <script src="node_modules\chart.js\dist\chart.umd.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script>
    feather.replace()
  </script>
  
</body>
</html>