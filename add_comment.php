<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=tutorialPoint', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';

$snippet_id = $_POST['snippet_id'];

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO comment_box (snippet_id, parent_comment_id, comment, comment_sender_name) 
 VALUES (:snippet_id, :parent_comment_id, :comment, :comment_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
  	':snippet_id' => $_POST['snippet_id'],
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>