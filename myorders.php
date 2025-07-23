
<html lang="en">
<head>
   <?php include 'head.php'?>
</head>
<body>
<div class="d-flex" id="wrapper">

<?php include 'sidebar.php' ?>


<div id="page-content-wrapper" class="flex-grow-1">
  <?php include 'navbar.php' ?>
     


     
     <div class="container-fluid mt-4" >
        
       
 
     
       <br>
           <div class="row">
                    <div class="col">
                        <div class="card  text-dark">
                            <div class="card-header">
                                <i class="fa-solid  me-2"></i>My Orders
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
   <?php include 'head.php'?>



</body>



</html>