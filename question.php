<?php
$idsvalue=$_POST['btnid'];
$connection=mysqli_connect("localhost",'root','','STU_SYS');
$conn="SELECT * from miniproject where id={$idsvalue}";
$connect_qry=mysqli_query($connection,$conn);
$result="";
$i=1;
if($connect_qry)
{
    if(mysqli_num_rows($connect_qry)>0)
    {
        while($rows=mysqli_fetch_assoc($connect_qry))
        {
         
          $result.="<div class='show_questions'>
                 <p class='question'><b>Question No:{$rows['id']}</b></p>
                 <p class='question'><b>Multiple Choice(Select 1 out of 4 options, for the question below)</b></p>
                 <p class='question'><b>{$rows['Questions']}</b></p>
                 </div>
      <div>
          <ul type='none'>
              <li class='options'><input type='radio' name='one{$i}' value="{$rows['Option1']}"><b><p class='opt' >{$rows['Option1']}</p></b></li>   
              <li class='options'><input type='radio' name='one{$i}' value="{$rows['Option2']}"><b><p class='opt' >{$rows['Option2']}</p></b></li>   
              <li class='options'><input type='radio' name='one{$i}' value="{$rows['Option3']}"><b><p class='opt' >{$rows['Option3']}</p></b></li>   
              <li class='options'><input type='radio' name='one{$i}' value="{$rows['Option3']}"><b><p class='opt' >{$rows['Option4']}</p></b></li>   
          </ul>
      </div>";
      $i=$i+1;
        }
        echo $result;
    }
        
}

?>