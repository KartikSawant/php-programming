<?php
if(empty($_POST['input']))
{
    echo("Enter a value");
}    
?>
<form method="post" action="">
<input type="text" name="input">
<input type="submit">
</form>
<?php
if(!empty($_POST['input']))
{
    $res=$_POST['input'];
    //code here
    echo("Output:$res");
} 
?>