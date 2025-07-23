<html>
<head>
<?php include 'head.php'?>


</head>
<body class="bg-light text-dark">
<div class="d-flex" id="wrapper">

<?php include 'sidebar.php' ?>


<div id="page-content-wrapper" class="flex-grow-1">
  <?php include 'navbar.php' ?>
     


     
     <div class="container-fluid mt-4" style="">
    <section class="dash_content" style="padding:5px;">
            <div class="set_menu">
        <a href="settings.php" style="text-decoration:none;">Payment Password</a>
        <a href="withdrawsettings.php" style="text-decoration:none;">Withdraw Settings</a>
        <a href="changepassword.php" style="text-decoration:none;">Change Password</a>
        <a href="security.php" style="text-decoration:none;">Security</a>
    </div>
    <div class="dash_block">
        <h1 class="d_18">Withdraw Settings</h1>
        <form action="" method="post" class="mt-40">
            <input type="hidden" name="_token" value="zaOX1izwFu3U9krWx42NHTycrbLGvJb6lHmsBEnY">            <div class="d-grid" style="gap: 24px; max-width: 480px">
                <div class="w-100">
                    <div class="form-group" >
                        <br>
      <label class="d_label">Deposit Network</label>
      
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
                    
                </div> <br>
                <div class="w-100">
                    <label class="d_label">Wallet Address</label>
                    <input class="d_form1 dfv2" type="text" name="wallet_address" placeholder="Enter your wallet address" id="wallet" required="">
                </div> <br>
                <div class="w-100">
                    <label class="d_label">Payment Password</label>
                    <input class="d_form1 dfv2" type="number" name="password" placeholder="Default Payment Password: 123777" required="">
                </div>
            </div>
            <button class="btn-1 b_long mt-40">Save Wallet Address</button>
        </form>

        <div style="margin-top: 55px">
            <h1 class="d_18">Bounded Wallets</h1>
                            <div class="block_bound mt-24">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <img src="https://fiobit.com/asset/img/wallet.png">
                        <p class="now1 mt-4 mb-0">No Wallet added yet.</p>
                        <p class="now2 mt-3 mb-0">Your wallet addresses will appear here once they are bound. Start by
                            adding
                            one now!</p>
                    </div>
                </div>
                    </div>
    </div>
    </section>

        </div>
        </div>
        










</body>

<?php include 'script.php' ?>












</html>