<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Meta tags and other head elements -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glia Nova</title>
    <link rel="stylesheet" href="style.css">
    <!-- Include JavaScript files -->
    <script defer src="javascript/hamburger.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript/particles.js"></script>
    <script>
        $(document).ready(function() {
            particlesJS.load('particle-div', 'javascript/particle-cfg.json', function() {
                console.log('callback - particles.js config loaded');
            });
        });
    </script>
</head>
<body>
    <?php
    // Get the current page name
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>
    <header>
        <!-- Logo Section -->
        <div class="logo">
            <a href="index.php">
                <img src="images/glianova_logo.png" alt="Company Logo">
            </a>
        </div>
        <!-- Hamburger Icon -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- Navigation Menu -->
        <nav>
            <ul>
                <li><a href="index.php" <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>>Home</a></li>
                <li><a href="news.php" <?php if ($currentPage == 'news.php') echo 'class="active"'; ?>>News</a></li>
                <li><a href="about.php" <?php if ($currentPage == 'about.php') echo 'class="active"'; ?>>Algae Biotech</a></li>
                <li><a href="tarnabod.php" <?php if ($currentPage == 'tarnabod.php') echo 'class="active"'; ?>>Tarnabod</a></li>
                <li><a href="contact.php" <?php if ($currentPage == 'contact.php') echo 'class="active"'; ?>>Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Rest of the body content -->
</body>
</html>
