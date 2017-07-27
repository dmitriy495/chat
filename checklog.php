<?
session_start();
if ($_POST["loginlog"] == "" || $_POST["passwordlog"] == "" )
{
    header("Location:index.php");
}
else{
$login = $_POST["loginlog"];
$password = $_POST["passwordlog"];
$con=mysqli_connect("localhost","root","","chat");
$success = mysqli_fetch_assoc(mysqli_query($con,"SELECT id FROM users where login='$login' and password='$password'"));
 mysqli_close($con);
    if ($success!=NULL)
    {
        $_SESSION['LogedUser']=$login;
        header("Location:chat.php");
    }
    else
        header("Location:index.php");
}
?>
