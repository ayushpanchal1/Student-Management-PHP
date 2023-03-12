<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "root", "witform");
    if (!$conn) {
        echo "Cannot Connect To Database" . mysqli_connect_error($conn);
        exit;
    }
    $email = $_POST["eml"];
    $username = $_POST["unm"];
    $password = $_POST["psw"];

    $query = "SELECT * FROM user WHERE email='$email' OR username='$username' OR password='$password';";
    $result = mysqli_query($conn, $query);
    $resultrows = mysqli_fetch_assoc($result);

    // print_r($resultrows);

    if (!$resultrows) {
        echo "<script>
        alert(`Incorrect credentials`);
        window.location.replace('login.php');
        </script>
        ";
    }

    $usernameresult = $resultrows['username'];
    $passwordresult = $resultrows['password'];
    $emailresult = $resultrows['email'];


    if($username == $usernameresult AND $password == $passwordresult AND $email == $emailresult){
        $_SESSION['user'] = $username;
        echo "<script>
        alert(`Log in successful!`);
        window.location.replace('index.php');
        </script>
        ";
    }

    else if ($username == $usernameresult AND $password == $passwordresult AND $email != $emailresult){
        echo "<script>
        alert(`Email is incorrect!`);
        window.location.replace('login.php');
        </script>
        ";
    }

    else if ($username != $usernameresult AND $password == $passwordresult AND $email == $emailresult){
        echo "<script>
        alert(`Username is incorrect!`);
        window.location.replace('login.php');
        </script>
        ";
    }

    else if ($username == $usernameresult AND $password != $passwordresult AND $email == $emailresult){
        echo "<script>
        alert(`Password is incorrect!`);
        window.location.replace('login.php');
        </script>
        ";
    }

    else {
        echo "<script>
        alert(`Failure`);
        window.location.replace('login.php');
        </script>
        ";
    }
?>