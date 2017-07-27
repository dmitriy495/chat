<?
session_start();
if ($_POST["loginreg"] == "" || $_POST["passwordreg"] == "" || $_POST["email"] == "" || $_POST["password2reg"] != $_POST["passwordreg"] )
{
    header("Location:index.php");

}
$login = $_POST["loginreg"];
$password = $_POST["passwordreg"];
$email= $_POST["email"];
$con=mysqli_connect("localhost","root","","chat");
$success = mysqli_fetch_assoc(mysqli_query($con,"SELECT id FROM users where login='$login'"));
//var_dump($success);
if ($success==NULL)
{
    mysqli_query($con,"INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$password', '$email')");
    mysqli_close($con);
    $_SESSION['LogedUser']=$login;
    header("Location:chat.php");
}
else
    header("Location:index.php");
?>
