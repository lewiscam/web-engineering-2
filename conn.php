<?php

$mysqli = new mysqli(localhost, whited11_theNews, ilovethenews, whited11_theNews);

if ($mysqli­>connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli­>connect_error;
}

echo "<h1>theNews</h1>";
echo "<p>Here are the categories and feed names of the RSS feeds I'll be using to build my news reader application.</p>";

$result = mysqli_query($mysqli,"SELECT * FROM `Category`");

while($row = mysqli_fetch_array($result))
  {
  echo '<h3>'.$row['Category_name'].'</h3>';
  }

  echo '<br>';

$result = mysqli_query($mysqli,"SELECT * FROM `Feed`");

while($row = mysqli_fetch_array($result))
  {
  echo $row['Feed_name'];
  echo "<br>";
  }

?>