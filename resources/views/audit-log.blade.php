<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit Log</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <div class="menu-icon">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="search">
                <input type="search" id="search" placeholder="search audit logs">
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
                <a href="/attendance">
                    <span class="material-icons-outlined">event</span>Attendance
                </a>
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
                
        </ul>

        </aside>


        <main class="main-container">
            <div class="main-title">
                <p class="font-weight-bold">AUDIT LOG</p>
            </div>

            <div class="audit-log-list">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Day</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Engineering</td>
                            <td>Monday</td>
                            <td>9:00 AM</td>
                            <td>5:00 PM</td>
                            <td>Completed project tasks</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>Marketing</td>
                            <td>Monday</td>
                            <td>9:30 AM</td>
                            <td>4:30 PM</td>
                            <td>Attended meetings and collaborated on marketing strategy</td>
                        </tr>
                        <!-- Add more audit log rows as needed -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
