<?php

$contentId = $_GET['id'];
$server = "db5007437214.hosting-data.io";
$user = "dbu3752535";
$pass = "2aeux7aLJj7qgYU";
$dbname = "dbu3752535";
$mysqli = new mysqli($server,$user,$pass, $dbname);
$sql = "SELECT headline FROM tl_content WHERE id=" . $contentId;
$dbQuery = Database::getInstance()->prepare($sql);
$dbResult = $dbQuery->execute();
while($row = $dbResult->fetchRow()){
  $array = unserialize($row[0]);
  $name = $array["value"];
}

echo '<div class="ce_text formular_text"><h2>Anfrage zum Exponat ' . $name . ' </h2></div>';
