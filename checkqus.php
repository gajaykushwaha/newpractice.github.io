<?php
$checkid=$_POST['idval'];
$connection=mysqli_connect("localhost",'root','','STU_SYS');
$conn="SELECT * from miniproject where id={$checkid}";
$connect_qry=mysqli_query($connection,$conn);
$result=0;
if($connect_qry)
{
    if(mysqli_num_rows($connect_qry)>0)
    {
       $result=1;
    }
    echo $result;
}

?>