<?php
    session_start();
    if (isset($_SESSION['user'])) {
        $conn = mysqli_connect("localhost", "root", "root", "witform");
        if (!$conn) {
            echo "Cannot Connect To Database" . mysqli_connect_error($conn);
            exit;
        }
        $username = $_SESSION['user'];
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $middlename = $_POST["miname"];
        $mothersname = $_POST["moname"];
        $address = $_POST["addr"];
        $city = $_POST["city"];
        $pincode = $_POST["pcde"];
        $fathersphonenumber = $_POST["faph"];
        $mothersphonenumber = $_POST["moph"];
        $studentsphonenumber = $_POST["stph"];
        $parentsemail = $_POST["peml"];
        $studentsemail = $_POST["steml"];
        $admissioncategory = $_POST["adct"];
        $admissiontype = $_POST["adtp"];
        $gender = $_POST["gndr"];
        $bloodgroup = $_POST["bdgp"];
        $hobbies = $_POST["hobb"];
        $difficulty = $_POST["diff"];
        $anyotherremarks = $_POST["rema"];

        // print_r($_SESSION['user']);
        $query = "INSERT into form(username, firstname, lastname, middlename, mothersname, address, city, pincode, fathersphonenumber, mothersphonenumber, studentsphonenumber, parentsemail, studentsemail, admissioncategory, admissiontype, gender, bloodgroup, hobbies, difficulty, anyotherremarks)values('$username', '$firstname', '$lastname', '$middlename', '$mothersname', '$address', '$city', '$pincode', '$fathersphonenumber', '$mothersphonenumber', '$studentsphonenumber', '$parentsemail', '$studentsemail', '$admissioncategory', '$admissiontype', '$gender', '$bloodgroup', '$hobbies', '$difficulty', '$anyotherremarks');";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Query issue." . mysqli_error($conn);
        } else {
            echo "<script>
            alert(`Form submitted, redirecting to index page.`);
            window.location.replace('index.php');
            </script>
            ";
            //header("Location: index.php");
            //window.location.href = 'http://localhost/projectv2/index.php';
        }
     }
?>