<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Website</title>
    <link rel="stylesheet" href="style.css">
    <!-- Include the script.js file -->
    <script defer src="javascript/hamburger.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="javascript/particles.js"></script>
    <script>
            $( document ).ready(function() {
                /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
                particlesJS.load('particle-div', 'javascript/particle-cfg.json', function() {
                    console.log('callback - particles.js config loaded');
                });
            });
        </script>
</head>
<body>
    <header>
        <!-- Logo Section -->
        <div class="logo">
            <a href="index.php">
                <img src="images/glianova_logo.png" alt="Company Logo">
            </a>
        </div>
        <!-- Navigation Menu -->
        <!-- Hamburger Icon -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- Navigation Menu -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Algae Biotech</a></li>
                <li><a href="tarnabod.php">Tarnabod</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>