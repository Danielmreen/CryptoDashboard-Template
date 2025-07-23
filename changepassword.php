<html>
<head>
<?php include 'head.php'?>


</head>
<body class="bg-light text-dark">
<div class="d-flex" id="wrapper">

<?php include 'sidebar.php' ?>


<div id="page-content-wrapper" class="flex-grow-1">
  <?php include 'navbar.php' ?>
     


     
     <div class="container-fluid mt-4" >
    <section class="dash_content" style="padding:5px;">
            <div class="set_menu">
        <a href="settings.php" style="text-decoration:none;">Payment Password</a>
        <a href="withdrawsettings.php" style="text-decoration:none;">Withdraw Settings</a>
        <a href="changepassword.php" style="text-decoration:none;">Change Password</a>
        <a href="security.php" style="text-decoration:none;">Security</a>
    </div>
    <div class="dash_block">
        <h1 class="d_18">Change password</h1>
        <form action="" method="post" class="mt-40">
            <input type="hidden" name="_token" value="zaOX1izwFu3U9krWx42NHTycrbLGvJb6lHmsBEnY">            <div class="d-grid" style="gap: 24px; max-width: 480px">
                <div class="w-100">
                    <label class="d_label">New Password</label>
                    <input class="d_form1 dfv2" type="password" name="password" placeholder="Enter a new password" required="">
                </div>
                <div class="w-100">
                    <label class="d_label">Confirm New Password</label>
                    <input class="d_form1 dfv2" type="password" name="repeat_password" placeholder="Enter the new password again" required="">
                </div>
                <div class="w-100">
                    <label class="d_label">Verification Code</label>
                    <div class="relative d-flex align-items-center">
                        <input class="d_form1 dfv2" type="number" name="code" placeholder="Enter Email Verification Code" required="">
                        <button class="btn-1 b_long w-30 send_code" type="button" id="reset_password">Send</button>
                    </div>
                </div>
            </div>
            <button class="btn-1 b_long mt-40">Save</button>
        </form>
    </div>
    </section>

        </div>
        </div>
        










</body>

<?php include 'script.php' ?>












</html>