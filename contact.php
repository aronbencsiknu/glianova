<?php include 'header.php'; ?>
    <main>
        <h1>Contact Us</h1>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </main>
<?php include 'footer.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // Here, you can process the form data, send an email, or store it in a database.
    echo "<p>Thank you, $name! We will respond to your message soon.</p>";
}
?>
