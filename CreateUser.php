
<?php
    $user = $_POST["username"];
    $mysqli = new mysqli("mysql.eecs.ku.edu", "k329l640", "shook3Pa", "k329l640");
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $sql = "INSERT INTO Users (user_id)
            VALUES ('$user')";
    if ($mysqli->query($sql) === TRUE) {
            echo "Created new user id";
    }
    else {
        echo "User id already exists";
    }
    $mysqli->close();
?>
