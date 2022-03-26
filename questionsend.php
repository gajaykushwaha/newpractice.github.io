<?php
if($_SERVER["REQUEST_METHOD"]=='POST')
{
$idno=$_POST['id'];
$questions=$_POST['question'];
$options1=$_POST['option1'];
$options2=$_POST['option2'];
$options3=$_POST['option3'];
$options4=$_POST['option4'];
$correctans=$_POST['correctoption'];
$connection=mysqli_connect("localhost",'root','','STU_SYS');
$conn="INSERT into miniproject (id,Questions,Option1,Option2,Option3,Option4,Correctopt) values('{$idno}','{$questions}','{$options1}','{$options2}','{$options3}','{$options4}','{$correctans}')";
$res=mysqli_query($connection,$conn);
// if($res)
// {
//     echo "done";
// }
// else{
//     echo "not done";
// }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sendqus.css"/>
    <title>Document</title>
</head>
<body>
    
      <form method="POST">
       <!-- <div class="sendqus">   -->
        <input type="number" class="feedback-input ids" placeholder="Question Id" name="id"/>
        <input name="question" type="text" class="question feedback-input" placeholder="Question" name="question" />
        <input  type="text" class="option1 feedback-input" placeholder="Option 1" name="option1" />
        <input  type="text" class="option2 feedback-input" placeholder="Option 2" name="option2"/>
        <input  type="text" class="option3 feedback-input" placeholder="Option 3" name="option3"/>
        <input type="text" class="option4 feedback-input" placeholder="Option 4" name="option4"/>
        <input type="text" class="correctanswer feedback-input" placeholder="Correct Option"  name="correctoption"/>
        <button type="submit" class="sendbtn btn btn-primary" >Submit</button>
       <!-- </div> -->
    </form>
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script>
        $('.sendbtn').on('click',function()
        {
            var idss=$(".ids").val();
            var convertid=parseInt(idss);
            var questionvalue=$('.question').val();
            var option1value=$('.option1').val();
            var question2value=$('.option2').val();
            var question3value=$('.option3').val();
            var question4value=$('.option4').val();
            var correctoptvalue=$('.correctanswer').val();
            if(correctoptvalue==option1value ||correctoptvalue==question2value||correctoptvalue==question3value||correctoptvalue==question4value)
            {
                $.ajax({
                    url:'checkqus.php',
                    type:'POST',
                    data:{id:convertid},
                    success:function(data)
                    {
                        if(data==1)
                        {
                          alert("please change the question no")
                        }
                        else
                        {
                            $.ajax({
                                url:'sendquestion.php',
                                type:'POST',
                                data:{id:convertid,question:questionvalue,option1:option1value,option2:question2value,option3:question3value,option4:question4value,correctoption:correctoptvalue},
                                success:function(data)
                                {
                                    if(data==1)
                                    {
                                       $('.alert').css("display","block");
                                    }
                                    else
                                    {
                                        alert("Please fill all field or change the question no");
                                    }
                                }
                            
                            })
                        }
                    }
                
                })
        }
        else
        {
            alert("please fill the right answer from the options in correct option field ....");
        }
        })
</script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>