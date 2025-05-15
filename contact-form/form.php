
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple Contact Us Form by Bizbell Solutions">
    <meta name="author" content="Bizbell Solutions">
    <title>Contact Us - Bizbell Solutions</title>
</head>
<body>

    <h1>Contact Us</h1>
    <form action="process.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <label for="captcha">What is 3 + 4?</label><br>
        <input type="text" id="captcha" name="captcha" required><br><br>

        <input type="submit" value="Send Message">
    </form>

    <footer>
        <p>Powered by <a href="https://bizbellsolutions.com" target="_blank" rel="noopener noreferrer">Bizbell Solutions</a></p>
    </footer>

</body>
</html>
