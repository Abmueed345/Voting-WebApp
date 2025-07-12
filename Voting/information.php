<?php
session_start();
ob_start(); // Start output buffering
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
        fieldset .form-check {
            display: inline-block;
            margin-right: 20px;
        }
        .form-check-input {
            box-shadow: 0px 0px 5px 2px gray;
            border-radius: 50%;
            width: 20px;
            height: 20px;
        }
        .form-check-input:checked {
            background-color: black;
            box-shadow: 0px 0px 10px 3px gray;
        }
        .form-check-label {
            margin-left: 10px;
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
        .footer {
    background-color: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
    border-radius: 50px 50px 0px 0px;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.footer-links,
.footer-social,
.footer-info {
    margin: 10px;
    flex: 1 1 200px; /* Flex grow/shrink basis */
}

.footer-links h3,
.footer-social h3,
.footer-info h3 {
    margin-bottom: 10px;
}

.footer-links ul,
.footer-social ul {
    list-style: none;
    padding: 0;
}

.footer-links ul li,
.footer-social ul li {
    margin: 5px 0;
}

.footer-links a,
.footer-social a {
    color: #ffffff;
    text-decoration: none;
}

.footer-links a:hover,
.footer-social a:hover {
    text-decoration: underline;
}

.footer-bottom {
    margin-top: 20px;
    border-top: 1px solid #444;
    padding-top: 10px;
}




/* From Uiverse.io by david-mohseni */ 
.wrapper {
  display: inline-flex;
  list-style: none;
  height: 120px;
  width: 100%;
  padding-top: 40px;
  font-family: "Poppins", sans-serif;
  justify-content: center;
}

.wrapper .icon {
  position: relative;
  background: black;
  border-radius: 50%;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: #fff;
  color: #fff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #fff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #1877f2;
  color: #fff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #1da1f2;
  color: #fff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #e4405f;
  color: #fff;
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


</style>
</head>
<body>
    
    
    <div class="container">
        <h1 class="text-center e3">Cast your Vote</h1>
        <form id="registrationForm" action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="cnic">CNIC No:</label>
                <input type="text" class="form-control" id="cnic" name="cnic" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone No:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <fieldset class="form-group">
                <legend class="e3 mt-3 mb-3">Nomination:</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nomination" id="nomination1" value="Cristiano Ronaldo" required>
                    <label class="form-check-label" for="nomination1">Cristiano Ronaldo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nomination" id="nomination2" value="Lionel Messi">
                    <label class="form-check-label" for="nomination2">Lionel Messi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nomination" id="nomination3" value="Paul Pogba">
                    <label class="form-check-label" for="nomination3">Paul Pogba</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nomination" id="nomination4" value="Kylian Mbappé">
                    <label class="form-check-label" for="nomination4">Kylian Mbappé</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nomination" id="nomination5" value="Gonçalo Guedes">
                    <label class="form-check-label" for="nomination5">Gonçalo Guedes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nomination" id="nomination6" value="Neymar">
                    <label class="form-check-label" for="nomination6">Neymar</label>
                </div>
            </fieldset>
            <div class="q4 mt-5 ml-4 w-25">
                <button class="q3 w-100" name="submit">Submit</button>
            </div>

            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $_SESSION['name'] = $name;
                $email = $_POST['email'];
                $_SESSION['email'] = $email;
                $dob = $_POST['dob'];
                $_SESSION['dob'] = $dob;
                $cnic = $_POST['cnic'];
                $_SESSION['cnic'] = $cnic;
                $phone = $_POST['phone'];
                $_SESSION['phone'] = $phone;
                $nomination = $_POST['nomination'];
                $_SESSION['nomination'] = $nomination;

                // Database connection
                $conn = mysqli_connect("localhost", "root", "", "voting");

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

             
                // Insert data into the database
                $sql = "INSERT INTO voter (Name, Email, Date, Cnic, Phone, Nominations) 
                        VALUES ('$name', '$email', '$dob', '$cnic', '$phone', '$nomination')";


                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header("Location: thanks.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }


                // Close the connection
                mysqli_close($conn);
            }
            ?>
        </form>
    </div>

    <footer class="footer mt-5">
        <div class="footer-container">
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#search">Search</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                    <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                    <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                    <li><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
            <div class="footer-info">
                <h3>Contact Us</h3>
                <p>Email: abmueed204@gmail.com</p>
                <p>Phone: +92 317 2428287</p>
            </div>
        </div>
        <div class="footer-bottom">

        
<ul class="wrapper">
  <li class="icon facebook">
    <span class="tooltip">Facebook</span>
    <svg
      viewBox="0 0 320 512"
      height="1.2em"
      fill="currentColor"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
      ></path>
    </svg>
  </li>
  <li class="icon twitter">
    <span class="tooltip">Twitter</span>
    <svg
      height="1.8em"
      fill="currentColor"
      viewBox="0 0 48 48"
      xmlns="http://www.w3.org/2000/svg"
      class="twitter"
    >
      <path
        d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"
      ></path>
    </svg>
  </li>
  <li class="icon instagram">
    <span class="tooltip">Instagram</span>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      height="1.2em"
      fill="currentColor"
      class="bi bi-instagram"
      viewBox="0 0 16 16"
    >
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
      ></path>
    </svg>
  </li>
</ul>


            <p>&copy; 2024 Your Website AM Sports. All Rights Reserved. Design by @Abdul mueed</a>.</p>
        </div>
    </footer>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
