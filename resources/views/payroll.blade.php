<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Management</title>
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
                <img src="Images/Mushroom.jpg" alt="User Avatar">
            </div>
        </header>
        <div class="user-dropdown">
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <a href="/login">Logout</a>
        </div>
        <aside id="sidebar">

            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <img src="Images/hive.png" alt="Human Hive Logo" class="sidebar-image" />
                </div>
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
                <p class="font-weight-bold">PAYROLL MANAGEMENT</p>
            </div>

            <table class="payroll-table">
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Payment Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Software Engineer</td>
                        <td>$70,000</td>
                        <td>Paid</td>
                        <td>
                            <button class="pay-button">Pay</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Marketing Specialist</td>
                        <td>$65,000</td>
                        <td>Pending</td>
                        <td>
                            <button class="pay-button">Pay</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Sales Manager</td>
                        <td>$80,000</td>
                        <td>Paid</td>
                        <td>
                            <button class="pay-button">Pay</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Emily Davis</td>
                        <td>Graphic Designer</td>
                        <td>$60,000</td>
                        <td>Pending</td>
                        <td>
                            <button class="pay-button">Pay</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>

        </main>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
