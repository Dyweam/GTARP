<?php 
require('../connect.php');
require('../session.php'); 
?>

<?php confirm_logged_in(); ?>

<?php redirect_is_moderator(); ?>

<?php

$user_id = $_POST['user_id'];

if($user_id == $_SESSION['user']['id']){
    $_SESSION['error'] = "Vous ne pouvez pas supprimer votre propre compte.";
    ?>

    <script type="text/javascript">
        window.location = "members.php";
    </script>
<?php
}
else{
    $query = "DELETE FROM users WHERE id = " . $user_id;

    $result = mysqli_query($conn, $query);
    
    if ($result) {
        $_SESSION['error'] = "L'utilisateur a été supprimé avec succès.";
    } else {
        $_SESSION['error'] = "Erreur dans la suppression de l'utilisateur.";
    }
    
    ?>
    
    <script type="text/javascript">
        window.location = "members.php";
    </script><?php
}
?>
