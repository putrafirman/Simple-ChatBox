<!DOCTYPE html>
<?php
include 'koneksi.php';
?>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <style>
            .pad{

            }
            .pad2{
                padding-top :8px;
                padding-left: 8px;
                padding-bottom: 8px;
                padding-left: 8px;  
            }
            .pad3 {

            }
            .chat{
                border-style: solid;
                border-color: black;
            }
            .maxed {
                max-height: 300px;
                overflow: auto;
            }
            .chatone {
                border: 1px;
            } 
        </style>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Settings</a></li>
            <li class="divider"></li>
            <li><a href="#!">Logout</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper #2196f3 blue">
                    <a href="#!" class="brand-logo center">Logo</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="badges.html">Name Profile</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <!-- Page Content goes here -->
            <div class="card-panel #82b1ff blue accent-1"><center>CHATBOX</center></div>

            <?php
//            $file = "chatbox.txt";
            if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['pesan'])) {

                //new insert
                $datenow = date("Y-m-d");
                $sql = "INSERT INTO pesan (iduser, msg,date) VALUES (1, '$_POST[pesan]', '$datenow' )";
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            echo '<div class="card-panel cyan">  <div class="maxed">';

            //new see data

            $sql = "SELECT * FROM pesan";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card-panel">';
                    echo "#IDMSG : " . $row["idmsg"] . "<br>";
                    echo "Nam e: " . $row["iduser"] . "<br>";
                    echo "Pesan : " . $row["msg"] . "<br>";
                    echo "Date :" . $row["date"] . "<br>";
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            //akhir
            //$conn->close();

            echo '</div></div>';
            ?>

            <div class="card-panel #bbdefb blue lighten-4">

                <!--
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                                <label for="disabled">Disabled</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </form>
                </div>
                -->

                <!-- -->
                <form action="#" method="POST" name="gb" onsubmit="return validate()">

                    Nama     :  <input type="text" name="nama"><br>
                    Email     : <input type="email" name="email"><br>
                    
                    <div class="input-field col s6">
                        <i class="material-icons prefix">message</i>
                        <input name ="pesan" id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Pesan</label>
                    </div>
                    
                    
                    <button class="btn waves-effect waves-light" type="submit" name="data">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>



        </div>

        <footer class="page-footer #2196f3 blue">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>


    </body>
</html>