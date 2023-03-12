<?php
    $conn = mysqli_connect("localhost", "root", "root", "witform");
    if (!$conn) {
        echo "Cannot Connect To Database" . mysqli_connect_error($conn);
        exit;
    }
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["eml"];
    $username = $_POST["unm"];
    $password = $_POST["psw"];

    $query = "INSERT into user(firstname, lastname, email, username, password)values('$firstname', '$lastname', '$email', '$username', '$password');";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Query issue." . mysqli_error($conn);
    }
    
    else {
        echo "<script>
        alert(`Succesfully regitered, redirecting to login page.`);
        window.location.replace('login.php');
        </script>
        ";
    //header("Location: index.php");
    //window.location.href = 'http://localhost/projectv2/index.php';
    }
?>