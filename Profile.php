<?php  session_start();
if(empty($_SESSION['email']))
{
    header("location:index.php");
}

?>

WELCOME :<?php echo $_SESSION['name']; ?>

<a href="logout.php">Logout</a>