<?php

//date_default_timezone_set("GMT+7");

$pfuser='root2';
$pfpass='';
$pfdatabase='chatbox_test';
$pfhost='localhost';

$conn = mysqli_connect($pfhost, $pfuser, $pfpass, $pfdatabase) or die("Failed");


//$sql = "SELECT * FROM pesan";
//$result = mysqli_query($conn, $sql);
//
//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//    while ($row = mysqli_fetch_assoc($result)) {
//        echo "id: " . $row["idmsg"] . " - Name: " . $row["iduser"] . " " . $row["msg"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}
//
//$sql = "INSERT INTO pesan (iduser, msg,date) VALUES (1, 'kamu kamu kamuu kamu', '2016-04-28' )";
//
////'INSERT INTO pesan '.'(iduser, msg,date)'."VALUES ( 1, 'kamu kamu kamuu kamu', '2016-04-28' )"
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();

//mysqli_close($conn);



?>
