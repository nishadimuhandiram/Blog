<?php

include ('comment.php');

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



header("Loation: comment.php");






?>