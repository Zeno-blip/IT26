<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Archive</title>
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
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
                <a href="/dashboard">
                <div class="sidebar-brand">
                    <img src="Images/hive.png" alt="Human Hive Logo" class="sidebar-image" />
                </div>
            </a>
            </div>

            <ul class="sidebar-list">
                    <li class="sidebar-list-item">
                    <a href="/dashboard">
                        <span class="material-icons-outlined">dashboard</span>Dashboard
                    </a>
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
                    
            </ul>

        </aside>

        <main class="main-container">
            <div class="main-title">
                <p class="font-weight-bold">Employee Archive</p>
            </div>

            <div class="archive-list">
                <!-- Sample Archived Employee Cards -->
                <div class="archive-card">
                    <p class="employee-name">John Doe</p>
                    <span class="employee-details">Position: Developer</span>
                    <span class="employee-details">Archived on: 01/10/2023</span>
                    <a href="/employee">
                    <button class="restore-button">Restore</button>
                    </a>
                </div>

                <div class="archive-card">
                    <p class="employee-name">Jane Smith</p>
                    <span class="employee-details">Position: Designer</span>
                    <span class="employee-details">Archived on: 01/11/2023</span>
                    <a href="/employee">
                        <button class="restore-button">Restore</button>
                        </a>
                </div>

                <div class="archive-card">
                    <p class="employee-name">Sam Wilson</p>
                    <span class="employee-details">Position: Product Manager</span>
                    <span class="employee-details">Archived on: 01/12/2023</span>
                    <a href="/employee">
                        <button class="restore-button">Restore</button>
                        </a>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
