<?php

//fetch_comment.php

$id = $_REQUEST['id'];

$connect = new PDO('mysql:host=localhost;dbname=tutorialPoint', 'root', '');

$query = "SELECT * FROM comment_box WHERE parent_comment_id = '0' AND snippet_id = '$id' ORDER BY comment_id DESC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="card">
 <div class="card-header">By <b class="text-primary">'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
 <div class="card-body">'.$row["comment"].'</div>
 <div class="card-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div><br>
 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "SELECT * FROM comment_box WHERE parent_comment_id = '".$parent_id."'";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
}
else
{
  $marginleft = $marginleft + 48;
}
if($count > 0)
{
  foreach($result as $row)
  {
   $output .= '
   <div class="card" style="margin-left:'.$marginleft.'px">
   <div class="card-header">By <b class="text-primary">'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
   <div class="card-body">'.$row["comment"].'</div>
   <div class="card-footer text-primary" align="right"><button type="button" class="btn btn-primary reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div><br> 
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
 }
}
return $output;
}

?>