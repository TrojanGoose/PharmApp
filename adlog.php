<?php
session_start();
include "db_conn.php";
if (isset($_POST['userID']) && isset
($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $userID = validate($_POST['userID']);
    $password = validate($_POST['password']);

    if(empty($userID)) {
        header("Location: adlog.php?error=User ID is required");
        exit();
    }
    else if(empty($password)){
        header("Location: adlog.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM user WHERE userID='$userID' AND  password='$password' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)=== 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['userID']=== $userID && $row['password']=== $password) {
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: admin.php");
                exit();
            }else{
                header("Location: adlog.php?error=Incorrect UserID or Password");
                exit();
            }

        }else{
            header("Location: adlog.php?error=Incorrect UserID or Password");
            exit();
        }
    }
}
else{
    header("Location: adlog.php");
    exit();
}