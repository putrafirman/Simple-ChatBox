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

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}

echo '-';
mysql_free_result($result);

?>

<?php

//$query = "select * from pesan";

//$hasil = mysql_query($query);

//echo $hasil;


//mysql_close($conn);

//mysql_connect($server,$user,$password);
//@mysql_select_db($database) or die("Unable to select database");

//$query="select * from pesan";

//$result=mysql_query($query);

//$num=mysql_numrows($result);

//mysql_close();

//echo $num;

	if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   //$_COOKIE['test']=2;
   //$cou = $_COOKIE['test'];

   $sql = 'INSERT INTO pesan '.'(iduser, msg,date)'."VALUES ( 1, 'kamu kamu kamuu kamu', '2016-04-28' )";

   //$_COOKIE['test']++;

   mysql_select_db($pfname);
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }

   echo "Entered data successfully\n";

   mysql_close($conn);

?>
