<?//
session_start();
$con=mysqli_connect("localhost","root","","chat");


$rs = mysqli_query($con,"SELECT *  FROM messages order by id desc limit 40");

$arr =array();
for($i=0;$i<40;$i++)
    $arr[$i]="";
$i=78;
while($row = mysqli_fetch_array($rs))
{
    $arr[$i] = strval($row['user']);
    $i++;
    $arr[$i] = strval($row['message']);
    $i-=3;
}
echo json_encode($arr);
mysqli_close($con);
?>