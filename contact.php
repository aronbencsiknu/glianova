<?php include 'header.php'; ?>

<main>
    <h1>Contact Us</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize form data
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $message = htmlspecialchars(trim($_POST['message']));

        // Validate email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Invalid email format. Please enter a valid email address.</p>";
            $showForm = true;
        } else {
            // Prepare the email
            $to = "aron.b.bencsik@gmail.com"; // Replace with your email address
            $subject = "New Contact Form Submission from $name";
            $body = "Name: $name\n";
            $body .= "Email: $email\n\n";
            $body .= "Message:\n$message\n";
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";

            // Send the email
            if (mail($to, $subject, $body, $headers)) {
                echo "<p>Thank you, $name! Your message has been sent successfully. We will respond to you soon.</p>";
                $showForm = false;
            } else {
                echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
                $showForm = true;
            }
        }
    } else {
        $showForm = true;
    }

    if ($showForm) {
    ?>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    <?php
    }
    ?>
</main>

<?php include 'footer.php'; ?>

