<?php
include('./view/header_home.php');
?>

<?=$html?>

<?php
$_SESSION['user_id'];
$_SESSION['currentUser'];
$_SESSION['password'];
?>

<button><a href="index.php?cat=auth&op=deleteUser&user_id=<?= $_SESSION['user_id']?>">Delete</a></button>

<?php
include('./view/footer_home.php');