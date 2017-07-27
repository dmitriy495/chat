<?
$delnum = $_GET["delnum"];
$delnum = 41 -$delnum;
$con=mysqli_connect("localhost","root","","chat");
$rs =mysqli_query($con,"select `id` from `messages` order by id desc limit $delnum");
while($row = mysqli_fetch_array($rs))
{
    $num = strval($row['id']);
}
mysqli_query($con,"delete from `messages` where id ='$num'");
mysqli_close($con);
?>