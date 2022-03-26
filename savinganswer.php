<?php
$connected="connected";
$useranswerr=$_POST['useranswer'];
$useridd=$_POST['userid'];
$connection=mysqli_connect("localhost",'root','','STU_SYS');
$conn="UPDATE from ckeckanswer set useranswer='{$useranswerr}' where id='{$useridd}'";
$connect_qry=mysqli_query($connection,$conn);
if($connect_qry)
{
    echo $connected;
}
else{
    $connected="not connected";
    echo $connected;
}
?>