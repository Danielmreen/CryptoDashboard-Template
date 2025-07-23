
<html lang="en">
<head>
   <?php include 'head.php'?>
</head>
<body>
<div class="d-flex" id="wrapper">

<?php include 'sidebar.php' ?>


<div id="page-content-wrapper" class="flex-grow-1">
  <?php include 'navbar.php' ?>
     


     
     <div class="container-fluid mt-4" style="margin:20px;">
        <div class="row">
       
 
      <h2 class="text-dark">Deposit </h2>
      <div class="form-group" style="width:60%">
      <label for="usr" style="margin:8px">Deposit Network</label>
      
      <div class="dropdown">
       <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
         Select deposit network
       </button>
       

        <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="#">BTC</a></li>
           <li><a class="dropdown-item" href="#">ETH</a></li>
           <li><a class="dropdown-item" href="#">BCH</a></li>
        </ul>
        
      
        
      </div>
      <div class="form-group" >
      <label for="email" style="margin:8px">Amount</label>
      <input type="text" class="form-control form-control-lg" id="email" placeholder="Amount in USD" style="width:100%;">
      </div>
      
      <br>
      <button type="button" class="btn btn-primary active">Deposit</button>

     </div>
     
      

       </div>  
       <br>
           <div class="row">
                    <div class="col">
                        <div class="card  text-dark">
                            <div class="card-header">
                                <i class="fa-solid fa-arrow-right-arrow-left me-2"></i>Recent Transactions
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-light table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Currency</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2024-06-01</td>
                                                <td><span class="badge bg-success">Deposit</span></td>
                                                <td>0.5</td>
                                                <td>BTC</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2024-05-30</td>
                                                <td><span class="badge bg-danger">Withdraw</span></td>
                                                <td>2.0</td>
                                                <td>ETH</td>
                                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>2024-05-28</td>
                                                <td><span class="badge bg-success">Deposit</span></td>
                                                <td>1000</td>
                                                <td>USDT</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2024-05-25</td>
                                                <td><span class="badge bg-danger">Withdraw</span></td>
                                                <td>0.1</td>
                                                <td>BTC</td>
                                                <td><span class="badge bg-danger">Failed</span></td>
                                            </tr>
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://s3.tradingview.com/tv.js"></script>
    <!-- Custom JS -->
    <script src="main.js"></script>



</body>



</html>