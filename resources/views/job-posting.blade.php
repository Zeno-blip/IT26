<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Postings - Human Hive</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="Images/buyog.png" alt="Human Hive Logo" class="navbar-logo-img">
        </div>
        <ul class="navbar-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#job-listings">Job Listings</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="/login" class="login-btn">Login</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Find Your Dream Job</h1>
            <p>Browse through our latest job opportunities and join the best team today!</p>
            <a href="#job-listings" class="btn-cta">Explore Jobs</a>
        </div>
    </section>

    <!-- Job Listings Section -->
    <section id="job-listings" class="job-listings">
        <h2>Featured Job Listings</h2>
        <div class="job-cards">
            <div class="job-card">
                <h3>Software Developer</h3>
                <p>Location: New York, NY</p>
                <p>Full-time, 3+ years experience required</p>
                <a href="/job-app" class="btn-apply">Apply Now</a>
            </div>
            <div class="job-card">
                <h3>Product Manager</h3>
                <p>Location: San Francisco, CA</p>
                <p>Full-time, 5+ years experience required</p>
                <a href="/job-app" class="btn-apply">Apply Now</a>
            </div>
            <div class="job-card">
                <h3>UX/UI Designer</h3>
                <p>Location: Remote</p>
                <p>Part-time, Portfolio required</p>
                <a href="/job-app" class="btn-apply">Apply Now</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2>About Us</h2>
        <p>Human Hive is a leading recruitment agency connecting the brightest talents with top companies. We are committed to helping you build your career.</p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions, feel free to reach out to us.</p>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit" class="btn-cta">Send Message</button>
        </form>
    </section>

    <!-- Login Section (Modal or Redirect) -->
    <div id="login" class="login-modal">
        <div class="login-container">
            <h3>Login</h3>
            <form>
                <input type="email" placeholder="Email Address" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" class="btn-cta">Login</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
