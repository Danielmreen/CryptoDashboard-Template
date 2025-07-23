
<html lang="en">
<head>
   <?php include 'head.php'?>
</head>
<body class="bg-light text-dark">
<div class="d-flex" id="wrapper">

<?php include 'sidebar.php' ?>


<div id="page-content-wrapper" class="flex-grow-1">
  <?php include 'navbar.php' ?>
     


     
     <div class="container-fluid mt-4" style="margin:20px;padding:70px;">
      <h2 class="text-dark">Profile Details </h2>
      <div class="form-group" style="width:350px">
      <label for="usr" style="margin:8px">Username</label>
      <input type="text" class="form-control form-control-lg" id="usr" value="Username">
      </div>
      <div class="form-group" style="width:350px">
      <label for="email" style="margin:8px">Email address</label>
      <input type="text" class="form-control form-control-lg" id="email" value="sample@gmail.com">
      </div>
      <br>
      <button type="button" class="btn btn-primary active">Save</button>
   


     </div> 

</div>
    



</div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://s3.tradingview.com/tv.js"></script>
    <!-- Custom JS -->
    <script src="main.js"></script>



</body>



</html>