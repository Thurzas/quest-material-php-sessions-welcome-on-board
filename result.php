<?php
//@todo start PHP session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on board</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include '_navbar.php' ?>
    <main class="container">
        <?php //@todo display contact form data ?>
        <h1>Thank you for your message <?= $_SESSION['contact']['name'] ?>!</h1>
        <p>
            Your message is being processed.
            <br>
            Our team will get back to you within 48 hours. at <?= $_SESSION['contact']['email'] ?>.
        </p>
        <p>
            Have a nice day and see you soon 🙂
        </p>
        <p>
            You've contacted us for
        </p>
        <ul>
            <li>
                Subject: <?= $_SESSION['contact']['subject'] ?>
            </li>
            <li>
                 Message:  <?= $_SESSION['contact']['message'] ?>
            </li>
        </ul>
    </main>
    <?php include '_footer.php' ?>
</body>

</html>