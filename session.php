<?php

session_start();

function logged_in()
{
    return isset($_SESSION['user']);
}

function confirm_logged_in()
{
    if (!logged_in()) { ?>
        <script type="text/javascript">
            window.location = "login.php";
        </script>
<?php
    }
}

function is_moderator()
{
    return $_SESSION['user']['moderator'];
}

function redirect_is_moderator()
{
    if (!is_moderator()) { ?>
        <script type="text/javascript">
            window.location = "../index.php";
        </script>
    <?php
    }
}

?>