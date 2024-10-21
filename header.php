<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Meta tags and other head elements -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glia Nova</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.jpg">
    <!-- Include Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
            <!-- TradingView Widget BEGIN -->
            
            <!-- Logo Section -->
            <div class="logo">
                <a href="index.php">
                    <img src="images/glianova_logo.png" alt="Company Logo">
                </a>

                
            </div>
            <!-- Navigation Menu -->
            <nav>
                <ul>
                    <li><a href="index.php" <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>>Glia Nova</a></li>
                    <li><a href="news.php" <?php if ($currentPage == 'news.php') echo 'class="active"'; ?>>Hírek</a></li>
                    <li><a href="about.php" <?php if ($currentPage == 'about.php') echo 'class="active"'; ?>>Alga Technologia</a></li>
                    <li><a href="tarnabod.php" <?php if ($currentPage == 'tarnabod.php') echo 'class="active"'; ?>>Tarnabod</a></li>
                    <li><a href="contact.php" <?php if ($currentPage == 'contact.php') echo 'class="active"'; ?>>Kapcsolat</a></li>
                </ul>
                <div class="widgets">
            <div class="social-icons">
                    <a href="https://www.facebook.com/YourPage" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/YourProfile" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/YourProfile" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/YourProfile" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>NBI index: <span id="nbi-index">Betöltés...</span></p>
                <script>
                    fetch('nbi_value.txt')
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('nbi-index').innerHTML = data.trim();
                    })
                    .catch(error => console.log('Error fetching NBI index from file: ', error));
                </script>

                
                <!--?php
                    // Get the current page name
                    $currentPage = basename($_SERVER['PHP_SELF']);

                    // Read numbers from CSV file
                    $numbers = [];
                    if (($handle = fopen("numbers.csv", "r")) !== FALSE) {
                        if (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            // Convert all values to integers
                            $numbers = array_map('intval', $data);
                        }
                        fclose($handle);
                    }

                    // Ensure we have exactly 3 numbers
                    if (count($numbers) >= 3) {
                        // Use the first three numbers
                        $number1 = $numbers[0];
                        $number2 = $numbers[1];
                        $number3 = $numbers[2];
                    } else {
                        // Set default values or handle the error
                        $number1 = $number2 = $number3 = 20;
                    }
                ?-->
                <div class="header-numbers">
                    <p>Tarnabod időjárás:<br>
                        <!--span><?php echo htmlspecialchars($number1); ?> C</span><br>
                        <span><?php echo htmlspecialchars($number2); ?></span><br>
                        <span><?php echo htmlspecialchars($number3); ?></span-->
                        <span id="weather_emoji"></span>
                        <span id="temperature">Betöltés...</span>
                        

<script>
  // JSON mapping of weather codes to emojis
const weatherEmojis = {
  "-1": "💧",
  "0": "🌙",
  "1": "☀️",
  "2": "☁️🌙",
  "3": "🌤️",
  "4": "❓",
  "5": "🌫️",
  "6": "🌁",
  "7": "☁️",
  "8": "☁️☁️",
  "9": "🌧️🌙",
  "10": "🌦️",
  "11": "💧",
  "12": "🌧️",
  "13": "🌧️🌧️🌙",
  "14": "🌧️🌧️☀️",
  "15": "🌧️🌧️",
  "16": "🌨️💧🌙",
  "17": "🌨️💧☀️",
  "18": "🌨️💧",
  "19": "🌨️🧊🌙",
  "20": "🌨️🧊☀️",
  "21": "🌨️🧊",
  "22": "🌨️🌙",
  "23": "🌨️☀️",
  "24": "🌨️",
  "25": "🌨️🌨️🌙",
  "26": "🌨️🌨️☀️",
  "27": "🌨️🌨️",
  "28": "⛈️🌙",
  "29": "⛈️☀️",
  "30": "🌩️"
};

// Function to get the emoji for a given weather code
function getWeatherEmoji(code) {
  // Ensure the code is a string since object keys are strings
  const codeStr = code.toString();
  
  // Retrieve the emoji from the JSON mapping
  const emoji = weatherEmojis[codeStr];
  
  // Return the emoji or a default value if the code is not found
  return emoji || "❓";
}


async function fetchTemperature() {
    const apiUrl = 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,weather_code';
    
    
    try {
        const response = await fetch(apiUrl);
        const data = await response.json();
        const temperature = Math.round(data.current.temperature_2m);
        const code = data.current.weather_code;

        const emoji = getWeatherEmoji(code);

        // Display the temperature
         document.getElementById('temperature').textContent = ` ${temperature} °C`;
         document.getElementById('weather_emoji').textContent = `${emoji} `;
    } catch (error) {
        console.error('Failed to fetch temperature:', error);
        document.getElementById('temperature').textContent = 'Failed to load temperature data';
    }
}

// Call the function when the script loads
fetchTemperature();
</script>
                    </p>
                </div>

                </div>
            </nav>
            <!-- Hamburger Icon -->
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- Social Media Icons -->
            
    </header>
    <!-- Rest of the body content -->
</body>
</html>
