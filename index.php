
<html lang="en">
<head>
    <?php include 'head.php'?>
</head>
<body class="bg-light text-dark">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
         
         <?php include 'sidebar.php'; ?>

        <!-- /Sidebar -->
         
        <div id="page-content-wrapper" class="flex-grow-1">
            <!-- Navbar -->
            <?php include 'navbar.php';?>
            <!-- /Navbar -->
            <div class="container-fluid mt-4">
                <!-- Wallet Info Widgets -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card text-dark mb-3" style="border-radius: 15px;">
                            <div class="card-body" style="background-color:linear-gradient(90deg,#020024 0%, #090979 35%, #00d4ff 100%);border-radius: 15px;";>
                                <h5 class="card-title"><i class="fa-brands fa-dollar-sign me-2 text-warning"></i>Main Balance</h5>
                                
                                <p class="card-text fs-4">$4000.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-dark mb-3" style="border-radius: 15px;">
                            <div class="card-body" style="background-color:#4479e1;border-radius: 15px;";>
                                <h5 class="card-title"><i class="fa-brands fa-dollar-sign me-2 text-warning"></i>Total Profit</h5>
                                <p class="card-text fs-4">$0.00</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-dark mb-3" style="border-radius: 15px;">
                            <div class="card-body" style="background-color:linear-gradient(90deg,rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);border-radius: 15px;";>
                                <h5 class="card-title"><i class="fa-solid fa-dollar-sign me-2 text-warning"></i>Total Withdrawal</h5>
                                <p class="card-text fs-4">$0.00</p>
                                <!--<p class="card-text text-success">$5,000.00</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-dark mb-3" style="border-radius: 15px;">
                            <div class="card-body" style="background-color:#4479e1;border-radius: 15px;">
                                <h5 class="card-title"><i class="fa-solid fa-dollar-sign me-2 text-warning"></i>Commissions</h5>
                                <p class="card-text fs-4">$0.00</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Wallet Info Widgets -->
                <div class="row">
                    <!-- Charts -->
                     <div class="d-grid mt-40" style="grid-template-columns: repeat(2, 1fr); gap: 24px">
        <div>
            <div class="d-flex align-items-center justify-content-between" style="padding:10px">
                <h1 class="d_18">My Orders</h1>
                <h1 class="uni"><span>Total Order:</span> $0.00</h1>
            </div>
            <div class="out_block mt-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div style="width: 40%">
                        <div class="d-flex flex-column" style="gap: 6px">
                            <p class="d_15 o6">Active Orders</p>
                            <p class="d_20 text-black">$0.00</p>
                        </div>
                        <div class="dash_line"></div>
                        <div class="d-flex flex-column" style="gap: 6px">
                            <p class="d_15 o6">Expired Orders</p>
                            <p class="d_20 text-black">$0.00</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div>
            <h1 class="d_18">Today's Activity</h1>
            <div class="d-grid mt-8" style="grid-template-columns: repeat(3, 2fr); gap: 16px">
                <div class="gr_block">
                    <div class="wd_lock">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.9974 2.66647C10.8427 2.66647 6.66406 6.84513 6.66406 11.9998C6.66406 17.1545 10.8427 21.3331 15.9974 21.3331C21.1521 21.3331 25.3307 17.1545 25.3307 11.9998C25.3307 6.84514 21.1521 2.66647 15.9974 2.66647Z" fill="#3769FF"></path>
                            <path d="M20 24C17.3333 24 16 26 16 26C16 26 17.3333 28 20 28C22.6667 28 24 26 24 26C24 26 22.6667 24 20 24Z" fill="#3769FF"></path>
                            <path d="M12 24C9.33333 24 8 26 8 26C8 26 9.33333 28 12 28C14.6667 28 16 26 16 26C16 26 14.6667 24 12 24Z" fill="#3769FF"></path>
                            <path d="M16 29.3335V21.3335" stroke="#3769FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M13.9141 15.5554V8.44423M15.9974 8.44423V6.66646M15.9974 17.3331V15.5554M13.9141 11.9998H18.0807M18.0807 11.9998C18.7711 11.9998 19.3307 12.5968 19.3307 13.3331V14.2221C19.3307 14.9585 18.7711 15.5554 18.0807 15.5554H12.6641M18.0807 11.9998C18.7711 11.9998 19.3307 11.4028 19.3307 10.6665V9.77757C19.3307 9.04119 18.7711 8.44423 18.0807 8.44423H12.6641" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="d-flex flex-column" style="gap: 4px">
                        <p class="d_15 text-center o6">Today Profits</p>
                        <p class="d_20 text-center text-black">$0.00</p>
                    </div>
                </div>
                <div class="gr_block">
                    <div class="wd_lock">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.8885 15C23.8885 19.7251 20.058 23.5556 15.3329 23.5556C10.6078 23.5556 6.77734 19.7251 6.77734 15C6.77734 10.2749 10.6078 6.44444 15.3329 6.44444C20.058 6.44444 23.8885 10.2749 23.8885 15Z" fill="#3769FF"></path>
                            <path d="M27.5099 5.84085C27.5099 5.84085 27.7251 3.65951 27.1983 3.13281M27.1983 3.13281C26.6685 2.60299 24.4906 2.82312 24.4906 2.82312M27.1983 3.13281L23.8867 6.44441" stroke="#3769FF" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M24.5 2.77778L27.5556 5.83333" stroke="#3769FF" stroke-width="1.89444"></path>
                            <path d="M27.5099 24.1591C27.5099 24.1591 27.7251 26.3404 27.1983 26.8672M27.1983 26.8672C26.6685 27.397 24.4906 27.1769 24.4906 27.1769M27.1983 26.8672L23.8867 23.5555" stroke="#3769FF" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M24.5 27.2222L27.5556 24.1667" stroke="#3769FF" stroke-width="1.89444"></path>
                            <path d="M3.4644 3.1328L6.77604 6.44441M3.4644 3.1328C3.99422 2.60299 6.17218 2.82312 6.17218 2.82312M3.4644 3.1328C2.93769 3.65951 3.1529 5.84084 3.1529 5.84084" stroke="#3769FF" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M3.10938 5.83333L6.16493 2.77778" stroke="#3769FF" stroke-width="1.89444"></path>
                            <path d="M3.4644 26.8672L6.77604 23.5555M3.4644 26.8672C3.99422 27.397 6.17218 27.1769 6.17218 27.1769M3.4644 26.8672C2.93769 26.3405 3.1529 24.1592 3.1529 24.1592" stroke="#3769FF" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M3.10938 24.1667L6.16493 27.2222" stroke="#3769FF" stroke-width="1.89444"></path>
                            <path d="M15.23 11.7016C13.8799 11.7016 12.8906 12.4864 12.8906 13.3973C12.8906 14.3081 13.5285 14.8777 15.3351 14.8777C17.3251 14.8777 17.7795 15.785 17.7795 16.6958C17.7795 17.6068 16.9097 18.3262 15.23 18.3262M15.23 11.7016C16.2943 11.7016 16.8569 12.0742 17.3011 12.5757M15.23 11.7016V10.6697M15.23 18.3262C14.1656 18.3262 13.7518 18.1159 13.1656 17.5855M15.23 18.3262V19.2885" stroke="white" stroke-width="1.83333" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <div class="d-flex flex-column" style="gap: 4px">
                        <p class="d_15 text-center o6">Today Bonus</p>
                        <p class="d_20 text-center text-black">$0.00</p>
                    </div>
                </div>
                <div class="gr_block">
                    <div class="wd_lock">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4.40452H29.3333" stroke="#3769FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6.66797 4.40452V19.0699C6.66797 22.175 7.24209 23.189 9.90466 24.7866L13.924 27.1982C15.2609 28.0002 15.9293 28.4014 16.668 28.4014C17.4066 28.4014 18.075 28.0002 19.412 27.1982L23.4313 24.7866C26.0938 23.189 26.668 22.175 26.668 19.0699V4.40452" fill="#3769FF"></path>
                            <path d="M17.4729 11.076L18.2941 12.7321C18.4061 12.9626 18.7048 13.1838 18.9567 13.2261L20.4452 13.4754C21.3971 13.6354 21.6211 14.3317 20.9352 15.0186L19.778 16.1853C19.582 16.3829 19.4747 16.7641 19.5353 17.0369L19.8667 18.4813C20.1279 19.6245 19.526 20.0668 18.5228 19.4693L17.1276 18.6365C16.8756 18.486 16.4603 18.486 16.2037 18.6365L14.8085 19.4693C13.81 20.0668 13.2034 19.6198 13.4647 18.4813L13.796 17.0369C13.8566 16.7641 13.7493 16.3829 13.5533 16.1853L12.3961 15.0186C11.7149 14.3317 11.9342 13.6354 12.8861 13.4754L14.3745 13.2261C14.6219 13.1838 14.9205 12.9626 15.0325 12.7321L15.8537 11.076C16.3017 10.1774 17.0296 10.1774 17.4729 11.076Z" fill="white"></path>
                        </svg>
                    </div>
                    <div class="d-flex flex-column" style="gap: 4px">
                        <p class="d_15 text-center o6">Today Referral</p>
                        <p class="d_20 text-center text-black">0</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>   
    <div class="mt-40" style="padding:20px">
        <h1 class="d_18">My Referral</h1>
        <div class="dash_block mt-12" style="background: #F7F7F7">
            <div class="d-flex align-items-center justify-content-between" style="gap: 5px">
                <div class="w-50">
                    <div>
                        <label class="d_label">Referral Code</label>
                        <div class="relative d-flex align-items-center">
                            <input type="text" class="d_form1 copyd" readonly="" value="IJJJ10" style="letter-spacing: 5px">
                            <button class="copy_btn" style="position:relative">Copy</button>
                        </div>
                    </div>
                    <div class="mt-24">
                        <label class="d_label">Referral Link</label>
                        <div class="relative d-flex align-items-center">
                            <input type="text" class="d_form1 copyd" readonly="" value="cryptodashboard/ref?=IJJJ10">
                            <button class="copy_btn" style="position:relative">Copy</button>
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <div class="d-flex align-items-center" style="gap: 62px">
                        <div class="d-flex align-items-center" style="gap: 12px">
                            <div class="cbd">
                                <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.10547 11.375C8.10547 9.72965 9.43929 8.39583 11.0846 8.39583H15.418C17.0633 8.39583 18.3971 9.72965 18.3971 11.375V17.3333C18.3971 17.782 18.0334 18.1458 17.5846 18.1458H16.2305V23.8333C16.2305 24.282 15.8667 24.6458 15.418 24.6458H11.0846C10.6359 24.6458 10.2721 24.282 10.2721 23.8333V18.1458H8.91797C8.46924 18.1458 8.10547 17.782 8.10547 17.3333V11.375Z" fill="#3769FF"></path>
                                    <path d="M10.2695 4.33334C10.2695 2.68799 11.6033 1.35417 13.2487 1.35417C14.8941 1.35417 16.2279 2.68799 16.2279 4.33334C16.2279 5.97868 14.8941 7.31251 13.2487 7.31251C11.6033 7.31251 10.2695 5.97868 10.2695 4.33334Z" fill="#3769FF"></path>
                                </svg>
                            </div>
                            <div class="d-flex flex-column" style="gap: 4px">
                                <p class="d_15 o6" style="opacity: .8">Your Partners</p>
                                <p class="d_20 text-black">0</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" style="gap: 12px">
                            <div class="cbd">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.277 6.25C19.7213 6.24999 20.0947 6.24998 20.3992 6.27206C20.7152 6.29497 21.0221 6.34483 21.3145 6.47989C21.6457 6.63285 21.9416 6.86234 22.1572 7.1611C22.3609 7.44339 22.437 7.7475 22.4701 8.03961C22.5001 8.30406 22.5 8.62116 22.5 8.96402V9.03598C22.5 9.37885 22.5001 9.69594 22.4701 9.96039C22.437 10.2525 22.3609 10.5566 22.1572 10.8389C21.9416 11.1377 21.6457 11.3671 21.3145 11.5201C21.0221 11.6552 20.7152 11.705 20.3992 11.7279C20.0947 11.75 19.7213 11.75 19.2769 11.75H6.22308C5.7787 11.75 5.4053 11.75 5.10082 11.7279C4.78479 11.705 4.47793 11.6552 4.18552 11.5201C3.85434 11.3671 3.55841 11.1377 3.3428 10.8389C3.13907 10.5566 3.06299 10.2525 3.02989 9.96039C2.99993 9.69594 2.99997 9.37884 3 9.03597V8.96403C2.99997 8.62116 2.99993 8.30406 3.02989 8.03961C3.06299 7.7475 3.13907 7.44339 3.3428 7.1611C3.55841 6.86234 3.85434 6.63285 4.18552 6.47989C4.47793 6.34483 4.78479 6.29497 5.10082 6.27206C5.40529 6.24998 5.77869 6.24999 6.22306 6.25H19.277Z" fill="#3769FF"></path>
                                    <path d="M4.53678 12.9182C4.27341 12.8739 4.14172 12.8517 4.07086 12.9116C4 12.9715 4 13.0943 4 13.34V15.0544C3.99998 16.657 3.99997 17.936 4.13483 18.939C4.27415 19.9753 4.56966 20.8287 5.2448 21.5039C5.91994 22.179 6.77335 22.4745 7.80961 22.6138C8.8127 22.7487 10.0917 22.7487 11.6943 22.7487C11.725 22.7487 11.75 22.7237 11.75 22.6929V13.3987C11.75 13.2101 11.75 13.1158 11.6914 13.0572C11.6328 12.9987 11.5386 12.9987 11.35 12.9987H6.18911C5.77245 12.9987 5.36055 12.9987 5.01041 12.9733C4.86504 12.9628 4.70558 12.9467 4.53678 12.9182Z" fill="#3769FF"></path>
                                    <path d="M14.15 12.9987C13.9614 12.9987 13.8672 12.9987 13.8086 13.0572C13.75 13.1158 13.75 13.2101 13.75 13.3987V22.6929C13.75 22.7237 13.775 22.7487 13.8057 22.7487C15.4083 22.7487 16.6873 22.7487 17.6904 22.6138C18.7267 22.4745 19.5801 22.179 20.2552 21.5039C20.9303 20.8287 21.2258 19.9753 21.3652 18.939C21.5 17.936 21.5 16.657 21.5 15.0544V13.34C21.5 13.0943 21.5 12.9715 21.4291 12.9116C21.3583 12.8517 21.2266 12.8738 20.9632 12.9182C20.7944 12.9467 20.6349 12.9628 20.4896 12.9733C20.1394 12.9987 19.7276 12.9987 19.3109 12.9987H14.15Z" fill="#3769FF"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.53571 1.25006C6.99721 1.25006 5.75 2.49727 5.75 4.03578C5.75 6.36326 7.6368 8.25006 9.96429 8.25006H12.75H15.5357C17.8632 8.25006 19.75 6.36326 19.75 4.03578C19.75 2.49727 18.5028 1.25006 16.9643 1.25006H16.6071C15.0352 1.25006 13.6377 1.99676 12.75 3.1548C11.8623 1.99676 10.4648 1.25006 8.89286 1.25006H8.53571ZM11.75 6.1072C11.75 4.52925 10.4708 3.25006 8.89286 3.25006H8.53571C8.10178 3.25006 7.75 3.60184 7.75 4.03578C7.75 5.25869 8.74137 6.25006 9.96429 6.25006H11.75V6.1072ZM13.75 6.25006H15.5357C16.7586 6.25006 17.75 5.25869 17.75 4.03578C17.75 3.60184 17.3982 3.25006 16.9643 3.25006H16.6071C15.0292 3.25006 13.75 4.52925 13.75 6.1072V6.25006Z" fill="#3769FF"></path>
                                </svg>
                            </div>
                            <div class="d-flex flex-column" style="gap: 4px">
                                <p class="d_15 o6" style="opacity: .8">Total Bonus</p>
                                <p class="d_20 text-black">$0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-40" style="padding: 20px;">
                        <label class="d_label">Share your referral link</label>
                        <div class="d-flex align-items-center mt-12" style="gap: 16px">
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
    </div>
 
                   
                   
                
                <!-- /Charts -->
                <!-- Transaction Table -->
                <div class="row">
                    <div class="col-12">
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
                <!-- /Transaction Table -->
            </div>
        </div>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://s3.tradingview.com/tv.js"></script>
    <!-- Custom JS -->
    
    
    
    
</body>
</html> 