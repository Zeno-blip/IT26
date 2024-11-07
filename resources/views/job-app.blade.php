<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form id="jobApplicationForm" method="post">
            <h1>Job Application</h1>

            <!-- Personal Information -->
            <div class="input-row">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="input-row">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="input-row">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-row">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <!-- Desired Job Position -->
            <div class="input-row">
                <label for="desiredJob">Desired Job Position</label>
                <select id="desiredJob" name="desiredJob" required>
                    <option value="" disabled selected>Select a job position</option>
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Data Analyst">Data Analyst</option>
                    <option value="Project Manager">Project Manager</option>
                    <option value="Product Designer">Product Designer</option>
                    <option value="Marketing Specialist">Marketing Specialist</option>
                </select>
            </div>

            <!-- Educational Background -->
            <h2>Educational Background</h2>
            <div class="input-row">
                <label for="degree">Highest Degree</label>
                <input type="text" id="degree" name="degree" required>
            </div>
            <div class="input-row">
                <label for="fieldOfStudy">Field of Study</label>
                <input type="text" id="fieldOfStudy" name="fieldOfStudy" required>
            </div>
            <div class="input-row">
                <label for="institution">University</label>
                <input type="text" id="institution" name="institution" required>
            </div>
            <div class="input-row">
                <label for="graduationYear">Graduation Year</label>
                <input type="text" id="graduationYear" name="graduationYear" required>
            </div>

            <!-- Employment History -->
            <h2>Employment History</h2>
            <div class="input-row">
                <label for="jobTitle">Job Title</label>
                <input type="text" id="jobTitle" name="jobTitle" required>
            </div>
            <div class="input-row">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" required>
            </div>
            <div class="input-row">
                <label for="yearsExperience">Years of Experience</label>
                <input type="text" id="yearsExperience" name="yearsExperience" required>
            </div>

            <!-- Skills -->
            <h2>Skills</h2>
            <div class="input-row">
                <label for="skills">Skills</label>
                <input type="text" id="skills" name="skills" placeholder="Comma separated" required>
            </div>

            <!-- Submit Button -->
            <div class="input-row">
                <button type="submit" class="btn" name="submit">Apply</button>
            </div>
        </form>
    </div>
</body>
</html>
