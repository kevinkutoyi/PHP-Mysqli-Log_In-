<?php
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];

} else {
    header('location: ../index.php');
}
?>
