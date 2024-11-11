<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
                <p class="font-weight-bold">Add New Employee</p>
            </div>

            <div class="form-container">
                <form action="" method="POST" class="employee-form">
                    <fieldset>
                        <legend>Personal Information:</legend>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first-name">First Name:</label>
                                <input type="text" id="first-name" name="first-name" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="middle-name">Middle Name:</label>
                                <input type="text" id="middle-name" name="middle-name" placeholder="Enter middle name">
                            </div>
                            <div class="form-group">
                                <label for="last-name">Last Name:</label>
                                <input type="text" id="last-name" name="last-name" placeholder="Enter last name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="sex">Sex:</label>
                                <select id="sex" name="sex">
                                    <option value="" disabled selected>Select Here...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Birthdate:</label>
                                <input type="date" id="birthdate" name="birthdate">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" id="phone" name="phone" placeholder="e.g. 09123456789">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Address:</legend>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="street-address">Street Address:</label>
                                <input type="text" id="street-address" name="street-address" placeholder="Enter street address">
                            </div>
                            <div class="form-group">
                                <label for="barangay">Barangay:</label>
                                <input type="text" id="barangay" name="barangay" placeholder="Enter barangay">
                            </div>
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" id="city" name="city" placeholder="Enter city">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="province">Province:</label>
                                <input type="text" id="province" name="province" placeholder="Enter province">
                            </div>
                            <div class="form-group">
                                <label for="country">Country:</label>
                                <input type="text" id="country" name="country" placeholder="Enter country">
                            </div>
                            <div class="form-group">
                                <label for="postal-code">Postal Code:</label>
                                <input type="text" id="postal-code" name="postal-code" placeholder="Enter postal code">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Account Information:</legend>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="department">Department:</label>
                                <select id="department" name="department">
                                    <option value="" disabled selected>Select Here...</option>
                                    <option value="IT">IT</option>
                                    <option value="user">Marketing</option>
                                    <option value="user">Toto Bodyguard</option>
                                    <option value="user">Pisot Toto</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" id="email" name="email" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" placeholder="@ Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" placeholder="Enter password">
                            </div>
                        </div>
                    </fieldset>

                    <button type="submit" class="submit-btn">Submit</button>
                    
                    <button type="reset" class="cancel-btn">Cancel</button>
                </form>
            </div>

        </main>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
