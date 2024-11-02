<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <div class="menu-icon">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="search">
                <input type="search" id="search" placeholder="search here">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="user">
                <img src="Images/Mushroom.jpg" alt="">
               @auth
                
               @endauth 
                <div class="user-dropdown">
                    <a href="#">Profile</a>
                    <a href="#">Settings</a>
                    <a href="/login">Logout</a>
                </div>
            </div>

        </header>


        <aside id="sidebar">

            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <img src="Images/hive.png" alt="Human Hive Logo" class="sidebar-image" />
                </div>
            </div>

            <ul class="sidebar-list">
                    <li class="sidebar-list-item">
                        <span class="material-icons-outlined">dashboard</span>Dashboard
                    </li>
                    <li class="sidebar-list-item">
                    <a href="/payroll">
                        <span class="material-icons-outlined">paid</span>Payroll
                    </a>
                    </li>
                    <li class="sidebar-list-item">
                    <a href="/employee">
                            <span class="material-icons-outlined">groups</span>Employee
                    </a>
                    </li>
                    
                    
                    <li class="sidebar-list-item">
                        <span class="material-icons-outlined">event</span>Attendance
                    </li>
                    <li class="sidebar-list-item">
                        <a href="/audit-log">
                        <span class="material-icons-outlined">fact_check</span>Audit-log
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                    <a href="/applicant">
                        <span class="material-icons-outlined">group</span>Applicant
                    </a>    
                    </li>
                    <li class="sidebar-list-item">
                        <span class="material-icons-outlined">settings</span>Settings
                    </li>
            </ul>

        </aside>


        <main class="main-container">
            <div class="main-title">
                <p class="font-weight-bold">DASHBOARD</p>
            </div>

            <div class="main-cards">
                <div class="card">
                    <div class="card-inner">
                    <p class="text-primary">PAYROLL</p>
                    <span class="material-icons-outlined text-blue">paid</span>
                    </div>                    
                    <span class="text-primary font-weight-bold">249</span>
                
                </div>

                <div class="card">
                    <div class="card-inner">
                    <p class="text-primary">EMPLOYEE</p>
                    <span class="material-icons-outlined text-orange">groups</span>
                    </div>                    
                    <span class="text-primary font-weight-bold">90</span>
                
                </div>

                <div class="card">
                    <div class="card-inner">
                    <p class="text-primary">APPLICANT</p>
                    <span class="material-icons-outlined text-green">group add</span>
                    </div>                    
                    <span class="text-primary font-weight-bold">22</span>
                
                </div>


                <div class="card">
                    <div class="card-inner">
                    <p class="text-primary">ONBOARDING</p>
                    <span class="material-icons-outlined text-red">badge</span>
                    </div>                    
                    <span class="text-primary font-weight-bold">9</span>
                
                </div>
                

            </div>
            
            
            


        <div class="charts">
            <div class="charts-card">
                <p class="chart-title">Top 5 Products</p>
                <div id="bar-chart"></div>
            </div>

            <div class="charts-card">
                <p class="chart-title">Purchase and Sales Order</p>
                <div id="area-chart"></div>
            </div>


        </div>
        </main>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>


</body>
</html>