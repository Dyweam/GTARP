<?php
require('../connect.php');
require('../session.php');
?>

<?php confirm_logged_in(); ?>

<?php redirect_is_moderator(); ?>

<?php

$user_id = $_POST['user_id'];

?>

<form name="redirect" id="redirect" action="../member/memberEdit.php" method="POST" class="d-inline">
    <input type="hidden" value=<?php echo $user_id; ?> name="user_id">
</form>

<?php

$newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : null;
$newPasswordConfirm = isset($_POST['newPasswordConfirm']) ? $_POST['newPasswordConfirm'] : null;

$moderator = isset($_POST['moderator']) ? $_POST['moderator'] : null;

if ($newPassword != "") {
    if ($newPassword != $newPasswordConfirm) {
        $_SESSION['error'] = "Les nouveaux mot de passe ne sont pas identiques";
?>
        <script type="text/javascript">
            document.forms["redirect"].submit();
        </script>
        <?php
    } else {
        $query = "SELECT * FROM  users WHERE  id =  " . $user_id . " AND  password =  '" . sha1($password) . "'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            $_SESSION['error'] = "Le mot de passe renseigné est incorrect.";
        } else {

            if ($newPassword != $newPasswordConfirm) {
                $_SESSION['error'] = "Les nouveaux mot de passe ne sont pas identiques ou ne sont pas correctement renseigné.";
        ?>
                <script type="text/javascript">
                    document.forms["redirect"].submit();
                </script>
                <?php
            } else {
                $query = "UPDATE users SET password = '" . sha1($newPassword) . "', moderator = " . ($moderator == 'on' ? 1 : 0) . " WHERE id = " . $user_id;
                $result = mysqli_query($conn, $query);

                if ($result) {
                    $_SESSION['error'] = "Les informations ont été modifiées.";
                } else {
                    $_SESSION['error'] = "Erreur lors de la la modification du mot de passe.";
                ?>
                    <script type="text/javascript">
                        document.forms["redirect"].submit();
                    </script>
                <?php
                }
                ?>
                <script type="text/javascript">
                    window.location = "members.php";
                </script>
            <?php
            }
        }
    }
} else {
    $query = "SELECT * FROM  users WHERE  id =  " . $user_id . " AND  password =  '" . sha1($password) . "'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        $_SESSION['error'] = "Le mot de passe renseigné est incorrect.";
    } else {
        $query = "UPDATE users SET moderator = " . ($moderator == 'on' ? 1 : 0) . " WHERE id = " . $user_id;
        $result = mysqli_query($conn, $query);

        if ($result) {
            $_SESSION['error'] = "Les informations ont été modifiées.";
        } else {
            $_SESSION['error'] = "Erreur lors de la la modification du mot de passe.";
            ?>
            <script type="text/javascript">
                document.forms["redirect"].submit();
            </script>
        <?php
        }
        ?>
        <script type="text/javascript">
            window.location = "members.php";
        </script>
<?php

    }
}
