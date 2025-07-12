<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>

        body {
            background-color: black;
        }

        .e3 {
            font-size: 72px;
            background: -webkit-linear-gradient(90deg, #03a9f4, #f441a5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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

.q4::before {
  content: "";
  position: absolute;
  inset: 0;
  margin: auto;
  border-radius: 0.9em;
  z-index: -10;
  filter: blur(0);
  transition: filter 0.4s ease;
}

.q4:hover::before {
  background: linear-gradient(90deg, #03a9f4, #f441a5);
  filter: blur(1.2em);
}
.q4:active::before {
  filter: blur(0.2em);
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



    </style>
</head>
<body>
    <?php
    if(!$_SESSION['mail']){
        header("location:login.php");
    }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                
                <h1 class="text-center e3 mt-5 mb-5"><?php echo $_SESSION['mail']; ?></h1>

                <?php

                // Initialize variables
                $ronaldo = 0;
                $messi = 0;
                $neymar = 0;
                $pogba = 0;
                $mbappe = 0;
                $guedes = 0;

                // Database connection
                $conn = mysqli_connect("localhost", "root", "", "voting");

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Cristiano Ronaldo Query
                $sql = "SELECT * FROM voter WHERE Nominations = 'Cristiano Ronaldo'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $ronaldo++;
                    }

                    $ronaldoval = $ronaldo * 5;

                    echo "<h1 class='text-white'>Cristiano Ronaldo:</h1>";
                    echo "<div class='progress'>";
                    echo "<div class='progress-bar bg-success' role='progressbar' style='width: {$ronaldoval}%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div><br><br>";
                }

                // Lionel Messi Query
                $sql = "SELECT * FROM voter WHERE Nominations = 'Lionel Messi'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $messi++;
                    }

                    $messival = $messi * 5;

                    echo "<h1 class='text-white'>Lionel Messi:</h1>";
                    echo "<div class='progress'>";
                    echo "<div class='progress-bar bg-warning' role='progressbar' style='width: {$messival}%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div><br><br>";
                }

                // Neymar Query
                $sql = "SELECT * FROM voter WHERE Nominations = 'Neymar'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $neymar++;
                    }

                    $neymarval = $neymar * 5;

                    echo "<h1 class='text-white'>Neymar:</h1>";
                    echo "<div class='progress'>";
                    echo "<div class='progress-bar bg-primary' role='progressbar' style='width: {$neymarval}%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div><br><br>";
                }

                
                $sql = "SELECT * FROM voter WHERE Nominations = 'Paul Pogba'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $pogba++;
                    }

                    $pogbaval = $pogba * 5;

                    echo "<h1 class='text-white'>Paul Pogba:</h1>";
                    echo "<div class='progress'>";
                    echo "<div class='progress-bar bg-warning
                    ' role='progressbar' style='width: {$pogbaval}%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div><br><br>";
                }

                // Kylian Mbappé Query
                $sql = "SELECT * FROM voter WHERE Nominations = 'Kylian Mbappé'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $mbappe++;
                    }

                    $mbappeval = $mbappe * 5;

                    echo "<h1 class='text-white'>Kylian Mbappé:</h1>";
                    echo "<div class='progress'>";
                    echo "<div class='progress-bar bg-primary' role='progressbar' style='width: {$mbappeval}%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div><br><br>";
                }

                // Gonçalo Guedes Query
                $sql = "SELECT * FROM voter WHERE Nominations = 'Gonçalo Guedes'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $guedes++;
                    }

                    $guedesval = $guedes * 5;

                    echo "<h1 class='text-white'>Gonçalo Guedes:</h1>";
                    echo "<div class='progress'>";
                    echo "<div class='progress-bar bg-danger' role='progressbar' style='width: {$guedesval}%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div><br><br>";
                }



                




                // Close database connection
                mysqli_close($conn);
                ?>



<table class="table table-dark table-striped mt-5">
    <thead>
        <tr>
            <th class="e3">Player Votes</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-white">Cristiano Ronaldo</td>
            <td class="text-white"><?php echo $ronaldo; ?></td>
        </tr>
        <tr>
            <td class="text-white">Lionel Messi</td>
            <td class="text-white"><?php echo $messi; ?></td>
        </tr>
        <tr>
            <td class="text-white">Neymar</td>
            <td class="text-white"><?php echo $neymar; ?></td>
        </tr>
        <tr>
            <td class="text-white">Paul Pogba</td>
            <td class="text-white"><?php echo $pogba; ?></td>
        </tr>
        <tr>
            <td class="text-white">Kylian Mbappé</td>
            <td class="text-white"><?php echo $mbappe; ?></td>
        </tr>
        <tr>
            <td class="text-white">Gonçalo Guedes</td>
            <td class="text-white"><?php echo $guedes; ?></td>
        </tr>
    </tbody>
</table>




                <form action="disable.php" method="post">
                    <div class="q4 mt-4 w-100 mb-5">
                        <button type="submit" class="q3 w-100" name="logout">Logout</button>
                    </div>
                </form>

                    <?php
                    if (isset($_POST['logout'])) {
                        header('location:disable.php');
                    }
                    ?>



                    </form>

                    
                    
                    

                    

                    
            </div>
        </div>
    </div>


    <footer class="footer mt-5">
        <div class="footer-bottom">
            <p>&copy; 2024 Your Website AM Sports. All Rights Reserved. Design by @Abdul Mueed</p>
        </div>
    </footer>


    

    



</body>
</html>
