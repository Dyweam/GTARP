<?php
require('../connect.php');
require('../session.php');
?>

<?php confirm_logged_in(); ?>

<?php redirect_is_moderator(); ?>

<form name="redirect" id="redirect" action="../member/memberAdd.php" method="POST" class="d-inline">
</form>

<?php
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$passwordConfirm = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : null;

$moderator = isset($_POST['moderator']) ? $_POST['moderator'] : null;

if ($password != "") {
    if ($password != $passwordConfirm) {
        $_SESSION['error'] = "Les mot de passe ne sont pas identiques";
?>
        <script type="text/javascript">
            document.forms["redirect"].submit();
        </script>
        <?php
    } else {
        $query = "SELECT * FROM  users WHERE  username =  '" . $username . "'";
        $result = mysqli_query($conn, $query);
        $row = $result->fetch_assoc();

        if ($row) {
            $_SESSION['error'] = "Le nom d'utilisateur est déjà utilisé.";
            ?>
                <script type="text/javascript">
                    document.forms["redirect"].submit();
                </script>
            <?php
        } else {

            $query = "INSERT INTO users(username, password, moderator) VALUES ('" . $username . "', '" . sha1($password) . "', " . ($moderator == 'on' ? 1 : 0) . ");";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['error'] = "L'utilisateur à été ajouté.";
            } else {
                $_SESSION['error'] = "Erreur lors de l'ajout de l'utilisateur.";
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
} else {
    $_SESSION['error'] = "Le mot de passe n'est pas renseigné.";
    ?>
    <script type="text/javascript">
        document.forms["redirect"].submit();
    </script>
<?php
}
