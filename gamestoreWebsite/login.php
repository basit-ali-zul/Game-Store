<?php
session_start();
if (isset($_POST['login'])) {
    if (isset($_POST['password']) && isset($_POST['email'])) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "gamestore";

        $password = $_POST['password'];
        $email = $_POST['email'];

        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        else{   
            
            $stmt = $con->prepare("select * from gamestore.user_info where email = ?"); 
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt_result=$stmt->get_result();
            if($stmt_result->num_rows > 0) { 
                $data=$stmt_result->fetch_assoc();

                if($data['password']==$password) { 
                    // echo "<h2>Login Successfully</h2>";
                    $_SESSION['userid'] = $data['userid'];
                    header("Location: account.php");
                    die;

                }
                else {
                    echo "<h2>Invalid Email or password</h2>";
                }
            }
            else {
            echo "<h2>Invalid Email or password</h2>";
            }

        }
        $con->close();
    }
    else{
        echo "<h2>all fields are required</h2>";
    }
}
else{
    echo "<h2>submit button not set</h2>";
}
?>