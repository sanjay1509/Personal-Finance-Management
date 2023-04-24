<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>responsive</title>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <!-- material icons con -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
       <!-- google font con -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
                <div class="container">
                    <img src="./images/lg.png" class="logo">
                    <div class="search-bar">
                        <span class="material-symbols-sharp">
                            search
                            </span>
                            <input type="search" placeholder="Search">
                    </div>
                    <div class="profile-area">
                        <div class="theme-btn">
                            <span class="material-symbols-sharp active">
                                light_mode
                                </span>
                                <span class="material-symbols-sharp">
                                    dark_mode
                                    </span>
                        </div>
                         <div class="profile">
                            <div class="profile-photo">
                                <img src="./images/profile-1.jpg" onclick="toggleMenu()" ondblclick="toleMenu()">
                            </div>
                            
                            
                         </div>
                         <button id="menu-btn">
                            <span class="material-symbols-sharp">
                                menu
                                </span>
                         </button>
                    </div>
                </div>
            </nav>
            <!-- end of navbar -->

            <main>
                <aside>
                    <button id="close-btn">
                        <span class="material-symbols-sharp">
                            close
                            </span>
                    </button>
                    <div class="sidebar">
                        <a href="#" class="act active">
                            <span class="material-symbols-sharp">
                                dashboard
                                </span>
                                <h4>Dashboard</h4>
                        </a>
                        <a href="#"  onclick="toMenu()" class="act" >
                            <span class="material-symbols-sharp">
                                shopping_cart
                                </span>
                                <h4>Expenses</h4>
                        </a>
                        <a href="#" class="act" onclick="tomMenu()">
                            <span class="material-symbols-sharp">
                                currency_rupee
                                </span>
                                <h4>Income</h4>
                        </a>
                        <a href="#" class="act" onclick="TomMenu()">
                            <span class="material-symbols-sharp" >
                                account_balance_wallet
                                </span>
                                <h4>Budget</h4>
                        </a>
                    </div>
                </aside>

                
                

                <!-- end of aside -->
                <section class="middle">
                    <div class="header">
                        <h1>Overview</h1>
                        <input type="date">
                    </div>
                    <div class="cards">
                        <div class="card" >
                            <div class="top" >
                                <div class="left">
                                    <img src="./images/BTC.png">
                                    <h2>BTC</h2>
                                </div>
                                <img src="./images/visa.png" class="right" >
                            </div>
                            <div class="middle">
                                <h1 style="margin: 0;">$836,666</h1>
                                <div class="chip">
                                    <img src="./images/card chip.png">
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="left">
                                    <small>Card Holder</small>
                                    <h5 style="margin: 0;">Sanju</h5>
                                </div>
                                <div class="right">
                                   <div class="expiry">
                                    <small>Expiry</small>
                                    <h5 style="margin: 0;">09/2028</h5>
                                   </div>
                                   <div class="cvv">
                                    <small>CVV</small>
                                    <h5 style="margin: 0;">143</h5>
                                   </div>

                                </div>
                            </div>
                        </div>
                        <!-- end of card-1 -->
                        <div class="card">
                            <div class="top">
                                <div class="left">
                                    <img src="./images/ETH.png">
                                    <h2>ETH</h2>
                                </div>
                                <img src="./images/master card.png" class="right">
                            </div>
                            <div class="middle">
                                <h1 style="margin: 0;">$36,666</h1>
                                <div class="chip">
                                    <img src="./images/card chip.png">
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="left">
                                    <small>Card Holder</small>
                                    <h5 style="margin: 0;">Sanju</h5>
                                </div>
                                <div class="right">
                                   <div class="expiry">
                                    <small>Expiry</small>
                                    <h5 style="margin: 0;">09/2028</h5>
                                   </div>
                                   <div class="cvv">
                                    <small>CVV</small>
                                    <h5 style="margin: 0;">143</h5>
                                   </div>

                                </div>
                            </div>
                        </div>
                        <!-- end of card-2-->
                        <div class="card">
                            <div class="top">
                                <div class="left">
                                    <img src="./images/BTC.png">
                                    <h2>BTC</h2>
                                </div>
                                <img src="./images/visa.png" class="right">
                            </div>
                            <div class="middle">
                                <h1 style="margin: 0;">$86,666</h1>
                                <div class="chip">
                                    <img src="./images/card chip.png">
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="left">
                                    <small>Card Holder</small>
                                    <h5 style="margin: 0;">Sanju</h5>
                                </div>
                                <div class="right">
                                   <div class="expiry">
                                    <small>Expiry</small>
                                    <h5 style="margin: 0;">06/2028</h5>
                                   </div>
                                   <div class="cvv">
                                    <small>CVV</small>
                                    <h5 style="margin: 0;">143</h5>
                                   </div>

                                </div>
                            </div>
                        </div>
                        <!-- end of card-3 -->
                    </div>
                    <!-- end of cards -->
                    <div class="monthly-report">
                        <div class="report">
                            <h3 style="margin: 0;">Income</h3>
                            <div>
                                <details>
                                    <h1 style="margin: 0;">$29,033</h1>
                                    <h6 class="success" style="margin: 0;">+3.5%</h6>
                                </details>
                                <p class="text-muted" style="margin: 0;">Compared to $26,938 last month</p>
                            </div>
                        </div>
                        <!-- end of income report -->
                        <div class="report">
                            <h3 style="margin: 0;">Expenses</h3>
                            <div>
                                <details>
                                    <h1 style="margin: 0;">$9,033</h1>
                                    <h6 class="danger" style="margin: 0;">-8.5%</h6>
                                </details>
                                <p class="text-muted" style="margin: 0;">Compared to $11,938 last month</p>
                            </div>
                        </div>
                        <!-- end of expenses report -->
                        <div class="report">
                            <h3 style="margin: 0;">Cashback</h3>
                            <div>
                                <details>
                                    <h1 style="margin: 0;">$10,033</h1>
                                    <h6 class="success" style="margin: 0;">+7.5%</h6>
                                </details>
                                <p class="text-muted" style="margin: 0;">Compared to $26,938 last month</p>
                            </div>
                        </div>
                        <!-- end of cashback report -->
                        <div class="report">
                            <h3 style="margin: 0;">Turnover</h3>
                            <div>
                                <details>
                                    <h1 style="margin: 0;">$129,033</h1>
                                    <h6 class="danger" style="margin: 0;">-17.5%</h6>
                                </details>
                                <p class="text-muted" style="margin: 0;">Compared to $120,938 last month</p>
                            </div>
                        </div>
                        <!-- end of turnover report -->
                    </div>
                    <!-- end of monthly report -->
                    <div class="fast-payment">
                        <h2>Fast Payment</h2>
                        <div class="badges">
                            <div class="badge">
                                <span class="material-symbols-sharp">
                                    add
                                    </span>
                            </div>
                            <div class="badge">
                                <span class="bg-primary"></span>
                                <div>
                                    <h5>Training</h5>
                                    <h4>$50</h4>
                                </div>
                            </div>
                            <div class="badge">
                                <span class="bg-success"></span>
                                <div>
                                    <h5>Internet</h5>
                                    <h4>$60</h4>
                                </div>
                            </div>
                            <div class="badge">
                                <span class="bg-primary"></span>
                                <div>
                                    <h5>Gas</h5>
                                    <h4>$150</h4>
                                </div>
                            </div>
                            <div class="badge">
                                <span class="bg-success"></span>
                                <div>
                                    <h5>Food</h5>
                                    <h4>$50</h4>
                                </div>
                            </div>
                            <div class="badge">
                                <span class="bg-danger"></span>
                                <div>
                                    <h5>Electricity</h5>
                                    <h4>$310</h4>
                                </div>
                            </div>
                            <div class="badge">
                                <span class="bg-primary"></span>
                                <div>
                                    <h5>Water</h5>
                                    <h4>$80</h4>
                                </div>
                            </div>
                            <div class="badge">
                                <span class="bg-danger"></span>
                                <div>
                                    <h5>Gadgets</h5>
                                    <h4>$700</h4>
                                </div>
                            </div>
                            <div class="badge">
                                <span class="bg-success"></span>
                                <div>
                                    <h5>Travel</h5>
                                    <h4>$280</h4>
                                </div>
                            </div>
                            <div class="badge">
                                <span class="bg-primary"></span>
                                <div>
                                    <h5>Clothing</h5>
                                    <h4>$900</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end of fast payment -->
                    <canvas id="chart"></canvas> <br>
                    <div class="container-chart">
                        <canvas id="chart_area"></canvas>
                      </div>
                    
                    
            
                </section>
                <!-- end of middle -->
             
                <section class="right">
                    <div class="container-canvas">
                        <!-- <h4 style="text-align: center;top: 10px;position: relative;">Pie chart for admin panel</h4> -->
                        <div>
                            <canvas id="pie-chart"></canvas>
                        </div> 
                    </div>
                    <div class="investments">
                        <div class="header">
                            <h2>Investments</h2>
                            <a href="#" style="text-decoration: none;">More
                                <span class="material-symbols-sharp">
                                    chevron_right
                                    </span>
                            </a>
                        </div>

                        <div class="investment">
                            <img src="./images/uniliver.png">
                            <h4>Uniliver</h4>
                            <div class="date-time">
                                <p>11 Feb,2023</p>
                                <small class="text-muted">11:10am</small>
                            </div>
                            <div class="bonds">
                                <p>1402</p>
                                <small class="text-muted">Bonds</small>
                            </div>
                            <div class="amount">
                                <h4>$20,033</h4>
                                <small class="danger">-4.27%</small>
                            </div>
                        </div>
                        <!-- end of investment-1 -->
                        <div class="investment">
                            <img src="./images/tesla.png">
                            <h4>Tesla</h4>
                            <div class="date-time">
                                <p>15 Sep,2017</p>
                                <small class="text-muted">11:10am</small>
                            </div>
                            <div class="bonds">
                                <p>2402</p>
                                <small class="text-muted">Bonds</small>
                            </div>
                            <div class="amount">
                                <h4>$60,033</h4>
                                <small class="success">+14.27%</small>
                            </div>
                        </div>
                        <!-- end of investment-2 -->
                        <div class="investment">
                            <img src="./images/monster.png">
                            <h4>Monster</h4>
                            <div class="date-time">
                                <p>11 Feb,2023</p>
                                <small class="text-muted">11:10am</small>
                            </div>
                            <div class="bonds">
                                <p>1402</p>
                                <small class="text-muted">Bonds</small>
                            </div>
                            <div class="amount">
                                <h4>$20,033</h4>
                                <small class="danger">-4.27%</small>
                            </div>
                        </div>
                        <!-- end of investment-3 -->
                        <div class="investment">
                            <img src="./images/mcdonalds.png">
                            <h4>McDonals</h4>
                            <div class="date-time">
                                <p>14 Sep,2020</p>
                                <small class="text-muted">11:10am</small>
                            </div>
                            <div class="bonds">
                                <p>1002</p>
                                <small class="text-muted">Bonds</small>
                            </div>
                            <div class="amount">
                                <h4>$23,033</h4>
                                <small class="success">+5.27%</small>
                            </div>
                        </div>
                        <!-- end of investment-4 -->
                    </div>
                    <!-- end of investments -->
                    <div class="recent-transactions">
                        <div class="header">
                            <h2>Recent Transactions</h2>
                            <a href="#" style="text-decoration: none;">More
                                <span class="material-symbols-sharp">
                                    chevron_right
                                    </span>
                            </a>
                        </div>
                        <div class="transaction">
                            <div class="service">
                                <div class="icon bg-purple-light">
                                    <span class="material-symbols-sharp purple">
                                        headphones
                                        </span>
                                </div>
                                <div class="details">
                                    <h4>Music</h4>
                                    <p>20.03.2023</p>
                                </div>
                            </div>
                            <div class="card-details">
                                <div class="card bg-danger">
                                    <img src="./images/visa.png" >
                                </div>
                                <div class="details">
                                    <p>*2757</p>
                                    <small class="text-muted">Credit Card</small>
                                </div>
                            </div>
                                <h4>-$70</h4>
                        </div>
                        <!-- end of transaction-1 -->
                        <div class="transaction">
                            <div class="service">
                                <div class="icon bg-danger-light">
                                    <span class="material-symbols-sharp danger">
                                        shopping_bag
                                        </span>
                                </div>
                                <div class="details">
                                    <h4>Shopping</h4>
                                    <p>16.03.2023</p>
                                </div>
                            </div>
                            <div class="card-details">
                                <div class="card bg-dark">
                                    <img src="./images/master card.png" >
                                </div>
                                <div class="details">
                                    <p>*2757</p>
                                    <small class="text-muted">Credit Card</small>
                                </div>
                            </div>
                                <h4>-$600</h4>
                        </div>
                        <!-- end of transaction2 -->
                        <div class="transaction">
                            <div class="service">
                                <div class="icon bg-primary-light">
                                    
                                        <span class="material-symbols-sharp primary">
                                            restaurant
                                            </span>
                                       
                                </div>
                                <div class="details">
                                    <h4>Food</h4>
                                    <p>10.03.2023</p>
                                </div>
                            </div>
                            <div class="card-details">
                                <div class="card bg-primary">
                                    <img src="./images/visa.png" >
                                </div>
                                <div class="details">
                                    <p>*2757</p>
                                    <small class="text-muted">Credit Card</small>
                                </div>
                            </div>
                                <h4>-$260</h4>
                        </div>
                        <!-- end of transaction3 -->
                        <div class="transaction">
                            <div class="service">
                                <div class="icon bg-danger-light">
                                    <span class="material-symbols-sharp danger">
                                        <span class="material-symbols-sharp">
                                            <span class="material-symbols-sharp">
                                                stadia_controller
                                                </span>
                                            </span>
                                        </span>
                                </div>
                                <div class="details">
                                    <h4>Games</h4>
                                    <p>01.03.2023</p>
                                </div>
                            </div>
                            <div class="card-details">
                                <div class="card bg-dark">
                                    <img src="./images/master card.png" >
                                </div>
                                <div class="details">
                                    <p>*2757</p>
                                    <small class="text-muted">Credit Card</small>
                                </div>
                            </div>
                                <h4>-$90</h4>
                        </div>
                        <!-- end of transaction4 -->
                        <div class="transaction">
                            <div class="service">
                                <div class="icon bg-success-light">
                                    
                                        <span class="material-symbols-sharp success">
                                            medication
                                            </span>
                                       
                                </div>
                                <div class="details">
                                    <h4>Pharmacy</h4>
                                    <p>26.02.2023</p>
                                </div>
                            </div>
                            <div class="card-details">
                                <div class="card bg-dark">
                                    <img src="./images/master card.png" >
                                </div>
                                <div class="details">
                                    <p>*2757</p>
                                    <small class="text-muted">Credit Card</small>
                                </div>
                            </div>
                                <h4>-$300</h4>
                        </div>
                        <!-- end of transaction5 -->
                    </div>
                    <!-- end of recent transactions -->
                </section>
                <!-- end of right -->
            </main>
            <!-- end of main -->

            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="./images/profile-1.jpg">
                        <h2>Sanju</h2>
                    </div>
                    <hr>
                    <a href="#" class="sub-menu-link" onclick="togleMenu()" style="text-decoration: none;">
                        <span class="material-symbols-outlined white">
                            person
                            </span>
                            <p>Profile</p>
                            <span class="arrow">></span>
                    </a>
                    <a href="#" class="sub-menu-link" style="text-decoration: none;">
                        <span class="material-symbols-outlined white">
                            settings
                            </span>
                            <p>Settings & Privacy</p>
                            <span class="arrow">></span>
                    </a>
                    <a href="#" class="sub-menu-link" style="text-decoration: none;">
                        <span class="material-symbols-outlined white">
                            help
                            </span>
                            <p>Help & Support</p>
                            <span class="arrow">></span>
                    </a>
                    <a href="#" class="sub-menu-link" style="text-decoration: none;">
                        <span class="material-symbols-outlined white">
                            logout
                            </span>
                            <p>Logout </p>
                            <span class="arrow">></span>
                    </a>
                </div>
            </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


            <div class="py-5my-5" id="subMen">
                <div class="container-acc" id="subMe" >
                    
                    <div class="shadow" id="acc">
                        <div class="profile-tab-nav border-right">
                            <div class="p-4">
                                <div class="img-circle text-center mb-3">
                                    <img src="./images/profile-1.jpg" alt="Image" class="shadow">
                                </div>
                                <h4 class="text-center">Sanjay Kumar</h4>
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link  active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                                    <i class="fa fa-home text-center mr-1"></i> 
                                    Account
                                </a>
                                <a class="nav-link " id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                                    <i class="fa fa-key text-center mr-1"></i> 
                                    Password
                                </a>
                                <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                                    <i class="fa fa-user text-center mr-1"></i> 
                                    Security
                                </a>
                                <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
                                    <i class="fa fa-tv text-center mr-1"></i> 
                                    Application
                                </a>
                                <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                                    <i class="fa fa-bell text-center mr-1"></i> 
                                    Notification
                                </a>
                            </div>
                        </div>
                        <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                <h3 class="mb-4">Account Settings</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>First Name</label>
                                              <input type="text" class="form-control" value="Sanjay">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Last Name</label>
                                              <input type="text" class="form-control" value="Kumar">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Email</label>
                                              <input type="text" class="form-control" value="gsanjaykumar@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Phone number</label>
                                              <input type="text" class="form-control" value="+91 1234567895">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Company</label>
                                              <input type="text" class="form-control" value="Personal Finance Management">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Designation</label>
                                              <input type="text" class="form-control" value="UI Developer">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                              <label>Bio</label>
                                            <textarea class="form-control" rows="4">hello world</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Update</button>
                                    <button class="btn btn-light"  onclick="toleMenu()">Cancel</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                <h3 class="mb-4">Password Settings</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Old password</label>
                                              <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>New password</label>
                                              <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Confirm new password</label>
                                              <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Update</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                                <h3 class="mb-4">Security Settings</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Login</label>
                                              <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label>Two-factor auth</label>
                                              <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="recovery">
                                                <label class="form-check-label" for="recovery">
                                                Recovery
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Update</button>
                                    <button class="btn btn-light" >Cancel</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                                <h3 class="mb-4">Application Settings</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="app-check">
                                                <label class="form-check-label" for="app-check">
                                                App check
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                                                <label class="form-check-label" for="defaultCheck2">
                                                Lorem ipsum dolor sit.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Update</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                                <h3 class="mb-4">Notification Settings</h3>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="notification1">
                                        <label class="form-check-label" for="notification1">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium accusamus, neque cupiditate quis
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="notification2" >
                                        <label class="form-check-label" for="notification2">
                                            hic nesciunt repellat perferendis voluptatum totam porro eligendi.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="notification3" >
                                        <label class="form-check-label" for="notification3">
                                            commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Update</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="./main.js"></script>
            
            <script>
                let subMen = document.getElementById("subMen");
		function togleMenu(){
			subMen.classList.toggle("open-menu");
		}

        let subMe = document.getElementById("subMe");
        function toleMenu(){
			subMen.classList.toggle("open-menu");
            subMe.classList.toggle("close-menu");
		}

        



                let subMenu = document.getElementById("subMenu");
                function toggleMenu(){
                    subMenu.classList.toggle("open-menu");
                }


                
                new Chart(document.getElementById('pie-chart'), {
                  type: 'pie',
                  data: {
                    labels: ["FOOD", "CLOTHING", "EDUCATION", "ELECTRONICS", "RENT"],
                    datasets: [{
                      backgroundColor: ["#e63946", "#254BDD",
                        "#ffbe0b", "#1d3557", "#326998"
                      ],
                      data: [418, 263, 434, 586, 332]
                    }]
                  },
                  options: {
                    title: {
                      display: true,
                      text: 'Pie Chart for admin panel'
                    },
                    responsive: true
                  }
                });

                new Chart(document.getElementById('chart_area'), {
                  type: 'bar',
                  data: {
                    labels: ["FOOD", "CLOTHING", "EDUCATION", "ELECTRONICS", "RENT"],
                    datasets: [{
                      backgroundColor: ["#e63946", "#254BDD",
                        "#ffbe0b", "#1d3557", "#326998"
                      ],
                      data: [418, 263, 434, 586, 332]
                    }]
                  },
                  options: {
                    title: {
                      display: true,
                      text: 'Pie Chart for admin panel'
                    },
                    responsive: true
                  }
                });

              

           
              </script>

              <!-- expensespage -->

<div class="expp" >
    <div class="sub-men-wrap" id="suMenu">
        <div class="sub-men">
            <div class="column-inc">
                <div class="tabu">
                    <button class="button-inc" onclick="tMenu()">+Add Expenses</button>
                    <h1>EXPENSES</h1>
                    <br>
                    <table class="table" style="width:75%">
                        <thead><tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody id="table-data">
                        </tbody>
                    </table>
                    <!-- <p style="text-align:center;">it's empty here!</p>  -->
                </div>
    
    
            </div>
    
      <div class="exppp" >
        <div class="sub-me-wrap" id="exMenu">
            <div class="sub-me" id="eMenu">
                <div class="ep">
              <h1>Record Expenses</h1>
              <p style="font-size: larger; padding-top: 60px;"><u>Save a new  Expense Record</u>
              </p>
              <div style="display: inline-block; text-align: left;">
              <form class="expen">
              <label for="name"  style="padding-top: 30px;">Title:</label>
              <input type="text" id="name" name="name" value=" " size="25"><br>
              <label for="amount" style="padding-top: 30px;">Amount:</label>
              <input type="text" id="amount" name="amount" value=" " size="25"><br>
                <label for="accounts" style="padding-top: 30px;">Account:</label>  
                <select id="accounts" name="accounts">
                <option value="others" >Others</option>
                  <option value="credit card">Credit Card</option>
                  <option value="cash">Cash</option>
                  <option value="My Bank">My Bank</option>
                  <option value="debit card">Debit card</option>
              </select><br>
              <label for="categorys" style="padding-top: 30px;">Category:</label>
                <select id="categorys" name="categorys">
                <option value="others">Others</option>
                  <option value="transportation">Transportation</option>
                  <option value="living">Living</option>
                  <option value="events">Events</option>
                  <option value="food">Food</option>
                  <option value="housing">Housing</option>
                  
              </select><br>
              <label for="datemax" style="padding-top: 30px;">Date:</label>
                <input type="date" id="datemax" name="datemax"><br>
              </form>
              <button class="button button1" onclick="qMenu()">Close</button>
              <button class="button button2 submit" onclick="adding()">Add Expenses</button>
            </div>
            </div>
        </div>
        </div>
    
    </div>
        </div>
    </div>

</div>
<!-- IncomePAGE -->
<div class="epp" >
    <div class="sub-men-wrap" id="ssMenu">
        <div class="sub-men">
            <div class="column-inc">
                <div class="tabu">
                    <button class="button-inc" onclick="ttMenu()">+Add Income</button>
                    <h1>INCOME</h1>
                    <br>
                    <table class="table" style="width:75%;">
                        <thead><tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="table-data-1">
                    </tbody>
                </table>
                    <!-- <p style="text-align:center;">it's empty here!</p>  -->
                </div>
    
    
            </div>
    
      <div class="eppp" >
        <div class="sub-me-wrap" id="inMenu">
            <div class="sub-me" id="iMenu">
                <div class="ep">
              <h1>Record Income</h1>
              <p style="font-size: larger; padding-top: 60px;"><u>Save a new  Income Record</u>
              </p>
              <div style="display: inline-block; text-align: left;">
              <form>
              <label for="name1" style="padding-top: 30px;">Title:</label>
              <input type="text" id="name1" name="name1" value=" " size="25"><br>
              <label for="amounts1" style="padding-top: 30px;">Amount:</label>
              <input type="text" id="amounts1" name="amounts1" value=" " size="25"><br>
                <label for="accounts1" style="padding-top: 30px;">Account:</label>  
                <select id="accounts1" name="accounts1">
                <option value="others" >Others</option>
                  <option value="credit card">Credit Card</option>
                  <option value="cash">Cash</option>
                  <option value="My Bank">My Bank</option>
                  <option value="debit card">Debit card</option>
              </select><br>
              <label for="categorys1" style="padding-top: 30px;">Category:</label>
                <select id="categorys1" name="categorys1">
                <option value="others">Others</option>
                  <option value="transportation">Transportation</option>
                  <option value="living">Living</option>
                  <option value="events">Events</option>
                  <option value="food">Food</option>
                  <option value="housing">Housing</option>
                  
              </select><br>
              <label for="datemax1" style="padding-top: 30px;">Date:</label>
                <input type="date" id="datemax1" name="datemax1"><br>
              </form>
              <button class="button button1" onclick="qqMenu()">Close</button>
              <button class="button button2 submit" onclick="addes()">Add Income</button>
            </div>
            </div>
        </div>
        </div>
    
    </div>
        </div>
    </div>

</div>
<!-- budgetpage -->

<div class="pp" >
    <div class="sub-men-wrap" id="sssMenu">
        <div class="sub-men">
            <div class="column-inc">
                <div class="tabu">
                    <button class="button-inc" onclick="tttMenu()">+Add BUDGET</button>
                    <h1>BUDGET</h1>
                    <br>
                    <table class="table" style="width:75%">
                        <thead><tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody id="table-data-2">
                        </tbody>
                    </table>
                    <!-- <p style="text-align:center;">it's empty here!</p>  -->
                </div>
    
    
            </div>
    
      <div class="ppp" >
        <div class="sub-me-wrap" id="buMenu">
            <div class="sub-me" id="bMenu">
                <div class="ep">
              <h1>Record BUDGET</h1>
              <p style="font-size: larger; padding-top: 60px;"><u>Save a new  Budget Record</u>
              </p>
              <div style="display: inline-block; text-align: left;">
              <form>
              <label for="name2" style="padding-top: 30px;">Title:</label>
              <input type="text" id="name2" name="name2" value=" " size="25"><br>
              <label for="amounts2" style="padding-top: 30px;">Amount:</label>
              <input type="text" id="amounts2" name="amounts2" value=" " size="25"><br>
                <label for="accouts2" style="padding-top: 30px;">Account:</label>  
                <select id="accouts2" name="accounts2">
                <option value="others" >Others</option>
                  <option value="credit card">Credit Card</option>
                  <option value="cash">Cash</option>
                  <option value="My Bank">My Bank</option>
                  <option value="debit card">Debit card</option>
              </select><br>
              <label for="categorys2" style="padding-top: 30px;">Category:</label>
                <select id="categorys2" name="categorys2">
                <option value="others">Others</option>
                  <option value="transportation">Transportation</option>
                  <option value="living">Living</option>
                  <option value="events">Events</option>
                  <option value="food">Food</option>
                  <option value="housing">Housing</option>
                  
              </select><br>
              <label for="datemax2" style="padding-top: 30px;">Date:</label>
                <input type="date" id="datemax2" name="datemax2"><br>
              </form>
              <button class="button button1" onclick="qqqMenu()">Close</button>
              <button class="button button2" onclick="addes1()">Add Budget</button>
              </div>
            </div>
        </div>
        </div>
    
    </div>
        </div>
    </div>

</div>



<script>
    let suMenu = document.getElementById("suMenu");
function toMenu(){
suMenu.classList.toggle("open-menu");

}

        let exMenu = document.getElementById("exMenu");
                function tMenu(){
                    exMenu.classList.toggle("open-menu");
                }

                let eMenu = document.getElementById("eMenu");
                function qMenu(){
                    exMenu.classList.toggle("open-menu");
                }
                function adding(){
                const name = document.querySelector('#name');
	            const nam = name.value;
                const amount = document.querySelector('#amount');
	            const amo = amount.value;
                const datemax = document.querySelector('#datemax');
	            const date = datemax.value;
                var table = document.getElementById("table-data");
                var row = table.insertRow();
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                cell1.innerHTML = nam;
                cell2.innerHTML = date;
                cell3.innerHTML = amo;
                name.value='';
                amount.value='';
                datemax.value='';
               }

// income script
                let ssMenu = document.getElementById("ssMenu");
                    function tomMenu(){
                    ssMenu.classList.toggle("open-menu");

                    }

                let inMenu = document.getElementById("inMenu");
                function ttMenu(){
                    inMenu.classList.toggle("open-menu");}
                

                let iMenu = document.getElementById("eMenu");
                function qqMenu(){
                    inMenu.classList.toggle("open-menu");
                }
                function addes(){
                const name1 = document.querySelector('#name1');
	            const nam1= name1.value;
                const amounts1 = document.querySelector('#amounts1');
	            const amo1 = amounts1.value;
                const datemax1 = document.querySelector('#datemax1');
	            const date1 = datemax1.value;
                var table1 = document.getElementById("table-data-1");
                var row1 = table1.insertRow();
                var cell11 = row1.insertCell(0);
                var cell21 = row1.insertCell(1);
                var cell31 = row1.insertCell(2);
                cell11.innerHTML = nam1;
                cell21.innerHTML = date1;
                cell31.innerHTML = amo1;
                name1.value='';
                amounts1.value='';
                datemax1.value='';
                }
                // budgetscript

                let sssMenu = document.getElementById("sssMenu");
                    function TomMenu(){
                    sssMenu.classList.toggle("open-menu");
 
                    }

                let buMenu = document.getElementById("buMenu");
                function tttMenu(){
                    buMenu.classList.toggle("open-menu");
                }

                let bMenu = document.getElementById("bMenu");
                function qqqMenu(){
                    buMenu.classList.toggle("open-menu");
                }
                
                function addes1(){
                const name2 = document.querySelector('#name2');
	            const nam2= name2.value;
                const amounts2 = document.querySelector('#amounts2');
	            const amo2 = amounts2.value;
                const datemax2 = document.querySelector('#datemax2');
	            const date2 = datemax2.value;
                var table2 = document.getElementById("table-data-2");
                var row2 = table2.insertRow();
                var cell12 = row2.insertCell(0);
                var cell22 = row2.insertCell(1);
                var cell32 = row2.insertCell(2);
                cell12.innerHTML = nam2;
                cell22.innerHTML = date2;
                cell32.innerHTML = amo2;
                name2.value='';
                amounts2.value='';
                datemax2.value='';
                }


                
</script>
</div>
</body>
</html>
