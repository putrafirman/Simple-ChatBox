<?php

$pfuser='root2';
$pfpass='';
$pfname='chatbox_test';
$pfhost='localhost';

$table="pesan";

$conn = mysql_connect($pfhost, $pfuser, $pfpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db($pfname);


// sending query
$result = mysql_query("SELECT * FROM {$table}");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<h1>Table: {$table}</h1>";
echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}

echo '-';
mysql_free_result($result);

?>

<?php

	if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'INSERT INTO pesan '.'(iduser, msg,date)'."VALUES ( 1, 'kamu kamu kamuu kamu', '2016-04-28' )";

   mysql_select_db($pfname);
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }

   echo "Entered data successfully\n";

   mysql_close($conn);

?>
