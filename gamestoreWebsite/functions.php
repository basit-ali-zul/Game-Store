<?php

function check_login($con)
{

	if(isset($_SESSION['userid']))
	{

		$id = $_SESSION['userid'];
		$query = "select * from user_info where userid = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}



function makePurchase($userid,$gameid,$page) {
	if (isset($_POST['purchasebtn'])) {

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "gamestore";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT userid,gameid FROM gamestore.user_games WHERE userid = ? and gameid = ? LIMIT 1";
            $Insert = "INSERT INTO gamestore.user_games(userid,gameid) values(?, ?)";
            $Insert2 = "INSERT INTO gamestore.invoice(userid,gameid,datetime) values(?, ?, current_timestamp())";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("ii",$userid,$gameid);
            $stmt->execute();
            $stmt->bind_result($resultUserid,$resultGameid);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ii",$userid, $gameid);
                if ($stmt->execute()) {
                    // header("Location: gamepurchased.php");
                    // die;
                }
                else {
                    echo $stmt->error;
                }

                $stmt = $conn->prepare($Insert2);
                $stmt->bind_param("ii",$userid, $gameid);
                if ($stmt->execute()) {
                    header("Location: $page");
                    die;
                }
                else {
                    echo $stmt->error;
                }

            }
            else {
                // echo "already purchased.";
				return true;
            }
            $stmt->close();
            $conn->close();
        }
    }
else {
    // echo "Submit button is not set";
}
}

function checkRecord($userid,$gameid){

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "gamestore";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT userid,gameid FROM gamestore.user_games WHERE userid = ? and gameid = ? LIMIT 1";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("ii",$userid,$gameid);
            $stmt->execute();
            $stmt->bind_result($resultUserid,$resultGameid);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum != 0) {
				$stmt->close();
            $conn->close();
				return true;
			}
              
            $stmt->close();
            $conn->close();
			return false; 
        }
    

}

