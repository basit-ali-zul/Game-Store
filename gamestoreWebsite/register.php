<?php
if (isset($_POST['register'])) {
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['email']) && isset($_POST['phonenumber'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "gamestore";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM gamestore.user_info WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO gamestore.user_info(username, password, email, phonenumber) values(?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssi",$username, $password, $email, $phonenumber);
                if ($stmt->execute()) {
                    header("Location: accountCreated.html");
                    die;
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>