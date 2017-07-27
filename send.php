<?
$usr = $_GET["sendlog"];
$msg = $_GET["sendmes"];
$con=mysqli_connect("localhost","root","","chat");
$success = mysqli_query($con,"INSERT INTO `messages` (`user`, `message`) VALUES ('$usr', '$msg')");
mysqli_close($con);

?>
