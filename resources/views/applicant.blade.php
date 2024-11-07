<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Applicants</title>
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
                <input type="search" id="search" placeholder="search applicants">
                <span class="material-icons-outlined">search</span>
            </div>
           
            <div class="user">
                <img src="Images/Mushroom.jpg" alt="">
               @auth
                
               @endauth 
                <div class="user-dropdown">
                    <a href="#">Profile</a>
                    <a href="/settings">Settings</a>
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
                <p class="font-weight-bold">MANAGE APPLICANTS</p>
            </div>

            <div class="applicant-list">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Desired Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>(123) 456-7890</td>
                            <td>Male</td>
                            <td>30</td>
                            <td>IT</td>
                            <td>
                                <button class="delete-button">Archive</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>(098) 765-4321</td>
                            <td>Female</td>
                            <td>28</td>
                            <td>Marketing</td>
                            <td>    
                                <button class="delete-button">Archive</button>
                            </td>
                        </tr>
                        <!-- Add more applicant rows as needed -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        function callNumber(phoneNumber) {
            window.location.href = `tel:${phoneNumber}`;
        }
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
