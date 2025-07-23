<html lang="en">
<head>
    <?php include 'head.php'?>
</head>
<body>
<div class="d-flex" id="wrapper">

<?php include 'sidebar.php' ?>


<div id="page-content-wrapper" class="flex-grow-1" >
  <?php include 'navbar.php' ?>
     


     
     <div class="container-fluid mt-4" style="margin:20px;">
      <h2 class="text-dark">Referral program </h2><br>
      <label class="d_label">Referral Code</label>
      <div class="relative d-flex align-items-center" style="width:40%">
                        <input type="text" class="d_form1 copyd" readonly="" value="1DEAZM" style="letter-spacing: 5px;background: #e0e9ed;">
                        <button class="copy_btn">Copy</button>
                    </div>
                    <br>
        
                <div class="mt-24" style="width:40%;">
                    <label class="d_label">Referral Link</label>
                    <div class="relative d-flex align-items-center">
                        <input type="text" class="d_form1 copyd" readonly="" value="signup?ref=1DEAZM" style="letter-spacing: 5px;background: #e0e9ed;">
                        <button class="copy_btn">Copy</button>
                    </div>
                </div>
                <br>
                <div class="mt-24">
                    <label class="d_label mb-0 fw-600">Share your referral link</label>
                    <div class="d-flex align-items-center mt-12" style="gap: 16px;text-decoration:none">
                        <a href="#" class="dash_social" style="text-decoration:none"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="dash_social" style="text-decoration:none"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="dash_social" style="text-decoration:none"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="dash_social" style="text-decoration:none"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" class="dash_social" style="text-decoration:none"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
   


     </div> 
     

</div>
    



</div>

















    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom JS -->
    <script src="main.js"></script>

    <style>@media only screen and (300px <= width <= 800px) {
    #page-content-wrapper > div > div.relative.d-flex.align-items-center{
      width:300px !important;
    
    }
    #page-content-wrapper > div > div:nth-child(6) > div{
        width:300px !important ;
    }
     }
    </style> 




</body>