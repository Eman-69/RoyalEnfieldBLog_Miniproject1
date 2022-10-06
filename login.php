<?php 
session_start(); 
include "db.php";
if(isset($_POST['button'])){

    if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        echo "Location: index.php?error=User Name is required";

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM signup WHERE email='$email' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{
                echo "<script>alert('Incorrect Username or Password');</script>";
                exit('<a href="index.php"><strong>Go Back</strong></a> to Login Page');              
            }

        }else{
            echo "<script>alert('Incorrect Username or Password');</script>";
            exit('<a href="index.php"><strong>Go Back</strong></a> to Login Page');
        }

    }

    }else{
         echo "Location: index.php" ;
        exit();
     }
}
?>
    