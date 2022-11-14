<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHM Travel Developer Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <?php

            /**
             * Validate the request by conditionally redirecting the user.
             * @TODO: Replace all `true` values with your logic on lines 10-12
             *      Line 10: the http request type is POST
             *      Line 11: the submit button doesn't match the value in index.html
             *      Line 12: $_POST['tv-show'] contains a meaningful value (not null, is alphanumeric, no HTML/script/SQL)
             */

            $tvshow = "";
            $tvshowErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                // checking if tvshow input is empty or not
                if(empty($_POST["tvshow"])) {
                    $tvshowErr = "TV Show is required";
                } else {    
                    $tvshow = $_POST["tvshow"]; 
                        // checking if alphanumeric
                        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $tvshow)) {  
                        $tvshowErr = "Only alphabets and white space are allowed";  
                    } else {
                        /**
                         * Save validated $_POST['tv-show'] value to the database.
                         * Table schema for reference: create table `tv_shows` (`name` VARCHAR(20) primary key unique not null, `count` int not null default 0);
                         * @TODO: Insert validated submission data into the `tv_shows` table on line 26
                         *      Optionally use a try catch block, and display error messages to the user.
                         *      Optionally increment the show `count` if the name is already stored.
                         */
                        $pdo = new \PDO('sqlite:tv_shows.db');
                        $insert = $pdo->exec("insert into tv_shows('name') values ('$tvshow')");

                        /**
                        * Display stored data, four entries were inititally provided.
                        * No need to modify.
                        */
                        foreach ($pdo->query("select `name` from tv_shows") as $row) {
                            echo '<li>' . $row['name'] . '</li>';
                        }
                    } 
                }

            }


            /**
            * @TODO: Provide user with appropriate feedback.
            */

            if(isset($_POST['submit'])) {  
                if($tvshowErr == "") {  
                    echo "<b>You have sucessfully entered a show.</b> </h3>";  
                } else {  
                    echo "<b>You didn't filled up the form correctly.</b>";  
                }  
            }

            ?>
            </div>
        </div>
    </div>
</body>
</html>