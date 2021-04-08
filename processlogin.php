<?php

require('connect.php');
require('session.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $upass = trim($_POST['password']);
    $h_upass = sha1($upass);
    if ($upass == '') {
?> <script type="text/javascript">
            alert("Password is missing!");
            window.location = "login.php";
        </script>
        <?php
    } else {
        $sql = "SELECT * FROM  `users` WHERE  `username` =  '" . $username . "' AND  `password` =  '" . $h_upass . "'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $numrows = mysqli_num_rows($result);

            if ($numrows == 1) {
                $found_user  = mysqli_fetch_array($result);

                $_SESSION['user'] = $found_user;

        ?> <script type="text/javascript">
                    window.location = "index.php";
                </script>
            <?php


            } else {
            ?> <script type="text/javascript">
                    

                    window.location = "index.php";
                    
                </script>
<?php $_SESSION['error'] = "Pseudonyme ou mot de passe incorrect.";

            }
        } else {
            die("Erreur lors de la connexion ...");
        }
    }
}

?>