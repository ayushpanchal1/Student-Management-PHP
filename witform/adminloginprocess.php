<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "root", "witform");
    if (!$conn) {
        echo "Cannot Connect To Database" . mysqli_connect_error($conn);
        exit;
    }
    $adminusername = $_POST["unm"];
    $adminpassword = $_POST["psw"];

    $query = "SELECT * FROM admin WHERE username='$adminusername' AND password='$adminpassword';";
    $result = mysqli_query($conn, $query);
    $resultrows = mysqli_fetch_assoc($result);

    // print_r($resultrows);

    if (!$resultrows) {
        echo "<script>
        alert(`Incorrect credentials`);
        window.location.replace('adminlogin.php');
        </script>
        ";
    }

    $adminusernameresult = $resultrows['username'];
    $adminpasswordresult = $resultrows['password'];


    if($adminusername == $adminusernameresult AND $adminpassword == $adminpasswordresult){
        $_SESSION['admin'] = $adminusername;
        echo "<script>
        alert(`Log in successful!`);
        window.location.replace('adminindex.php');
        </script>
        ";
    }

    else {
        echo "<script>
        alert(` Fatal Error`);
        window.location.replace('adminlogin.php');
        </script>
        ";
    }
?>