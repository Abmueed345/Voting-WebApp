<?php
session_start();
session_unset();  // Unset all session variables
session_destroy();  // Destroy the session
header("Location:login.php");  // Redirect to login page (or another page)
exit();
?>

<?php
                    
                    // if (!$_SESSION['mail']) {
                    //     header('location: login.php');
                    // }

                    ?>

