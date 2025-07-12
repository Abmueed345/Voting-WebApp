<?php
session_start();
ob_start(); // Start output buffering
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Themed Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #121212; /* Dark background */
            color: #ffffff; /* White text color */
        }

        .login-container {
            margin-top: 100px;
            width: 600px;
            padding: 20px;
            background-color: #1c1c1c; /* Darker background for form */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .form-control {
            background-color: #333333; /* Input background */
            color: #ffffff; /* Input text color */
            border: none;
        }

        .form-control:focus {
            background-color: #444444; /* Input focus background */
            color: #ffffff;
            border: 1px solid #03a9f4; /* Focus border color */
        }

        .btn-primary {
            background-color: #03a9f4;
            border-color: #03a9f4;
        }

        .btn-primary:hover {
            background-color: #0288d1; /* Button hover color */
            border-color: #0288d1;
        }

        .text-center a {
            color: #03a9f4;
        }

        .text-center a:hover {
            color: #0288d1; /* Link hover color */
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



    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="login-container">
                <h2 class="text-center">Only admin login</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                     <div class="q4 mt-4 ml-4 w-50 m-auto">
                        <button class="q3 w-100 m-auto" name="submit">Login</button>
                    </div>
                    <div class="text-center mt-3">
                        <a href="index.php">Home</a>
                    </div>
                    <div class="text-center mt-2">
                        <a href="#">Create an account</a>
                    </div>

                    <?php
                    if (isset($_POST['submit'])) {
                        $email = $_POST['email'];
                        $_SESSION['mail'] = $email;
                        $password = $_POST['password'];
                        $_SESSION['pass'] = $password;

                        $conn = mysqli_connect("localhost", "root", "", "admin");

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM info WHERE Email = '{$email}' AND Password = '{$password}'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {

                            $row = mysqli_fetch_assoc($result);
                            
                            if ($row['Email'] == $email && $row['Password'] == $password) {
                                header("Location: admin.php");
                                exit();
                            } else {
                                echo "Invalid email or password.";
                                exit();
                            }

                    
                        }   
                        
                    } 
                    
                    
                    
                    

                    ?>

                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <?php
    ob_end_flush(); // Flush the output buffer
    ?>

</body>
</html>
