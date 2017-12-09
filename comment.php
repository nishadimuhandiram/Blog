<?php

//include ('comment.php');

$txtarea = "";
$postid = "";
$errors = array();
	


$db = mysqli_connect("localhost","root","","blogusers");



if(isset($_POST['commentbttn']))
{
	
	$txtarea = $_POST['txtarea'];
	$postid = $_POST['postid'];
	

	if(empty($txtarea))
{


	array_push($errors, "Comment field is empty");

}


	if(empty($postid))
{


	array_push($errors, "postid field is empty");

}



if(count($errors)==0)
{
echo "Entered successfully";

}

include('errors.php');


if (!$db) {

	die("Connection failed".mysql_connect_error());
}

}



$sql = "INSERT INTO comments(Comment,postid)
			VALUES('$txtarea','$postid')";

$result = $db->query($sql);



//header("Loation: comment.php");






?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	
	.commentbox
	{
		margin-left: 500px; 
		margin-top: 300px;
		
	}


</style>


</head>
<body style="background: #D8D8D8;">
<form method="POST" action="comment.php">
	<table class="commentbox">

<tr>
<td>
<input type="text" name="postid" placeholder="Post ID">	
</td>
</tr>
<tr>
<td>
<textarea name="txtarea" cols="100" rows="10" placeholder="Enter your comment here" style="text-align: center;"></textarea>
</td>
</tr><tr>
<td style="float: right;">

<button type="submit" name="commentbttn">Comment</button>
<button type="submit">Cancel</button>
</td>
</tr>

</table>
</form>
</body>
</html>

