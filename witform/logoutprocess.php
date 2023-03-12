<?php
    session_start();
    session_destroy();
    echo "<script>
        alert(`Sucessfully logged out! Redirecting to login page`);
        window.location.replace('login.php');
        </script>
        ";
    // header("Location: login.php");
?>