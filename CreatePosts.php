<?php
    $UI = $_POST["username"];
    $Post = $_POST["Post"];
    $mysqli = new mysqli("mysql.eecs.ku.edu", "k329l640", "shook3Pa", "k329l640");
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
        if($result = $mysqli->query("SELECT * FROM Users WHERE user_id = '$UI'")){
        $numRows = $result->num_rows;
            if($numRows == 0){
                echo "User ID Not Found";
            }
            else{
                $sql = "INSERT INTO Posts (content, author_id)
                        VALUES ('$Post', '$UI')";
                if ($mysqli->query($sql) === TRUE) {
                    echo "Post has been posted";
                }
                else {
                    echo "Could not post";
                }
            }
        $result->close();
    }
    $mysqli->close();
?>
