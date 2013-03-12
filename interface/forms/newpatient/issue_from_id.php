<?php
/*
  Custom file to retrieve an issue's title given its ID
*/
require_once("../../globals.php");

$id = intval($_REQUEST['id']);
$res = sqlQuery("select title from lists where id=$id");
if ($res !== false)
  echo json_encode($res);
else
  echo json_encode(array("Error"=>true));
?>
