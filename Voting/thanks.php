<?php
session_start();
ob_start(); // Start output buffering
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
        }
        .container {
            margin-top: 50px;
            background-color: black;
            color: white;
        }
        .e3 {
            font-size: 72px;
            background: -webkit-linear-gradient(90deg, #03a9f4, #f441a5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            border-radius: 50px 50px 0px 0px;
        }
        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #444;
            padding-top: 10px;
        }
        .q3 {
            font-size: 1.4em;
            padding: 0.6em 0.8em;
            border-radius: 0.5em;
            border: none;
            background-color: #000;
            color: #fff;
            cursor: pointer;
            box-shadow: 2px 2px 3px #000000b4;
        }
        .q4 {
            position: relative;
            padding: 3px;
            background: linear-gradient(90deg, #03a9f4, #f441a5);
            border-radius: 0.9em;
            transition: all 0.4s ease;
        }
        .q4:hover::before {
            filter: blur(1.2em);
        }
    </style>
</head>
<body>

    <?php
        if(!isset($_SESSION['name'])){
            header("Location: index.php");
            exit(); // It's important to exit after a redirect
        }
    ?>

    <div class="container text-center">
        <h1 class="e3">Thank You!</h1>

        <h3 class="thankyou-message text-white mt-5"> <?php echo "Welcome " . htmlspecialchars($_SESSION['name']); ?></h3>

        <p class="lead mt-4">Your vote has been successfully submitted.</p>
        <p>We appreciate your participation.</p>
        
        <form method="POST">
            <div class="q4 mt-5 w-25 mx-auto">
                <button class="q3 w-100" name="goback">Go Back</button>
            </div>
        </form>

        <?php
        if (isset($_POST['goback'])) {
            header('Location: able.php');
            exit();
        }
        ?>
    </div>

    <footer class="footer mt-5">
        <div class="footer-bottom">
            <p>&copy; 2024 Your Website AM Sports. All Rights Reserved. Design by @Abdul Mueed</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    ob_end_flush(); // Flush the output buffer
    ?>

</body>
</html>
