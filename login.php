<?php
// Include config file
$conn=require_once "dbconfig.php";
 
// Define variables and initialize with empty values
$username=$_POST["username"];
$passwd=$_POST["passwd"];
//增加hash可以提高安全性
$password_hash=password_hash($passwd,PASSWORD_DEFAULT);
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT * FROM account WHERE username ='".$username."'";
    $result=mysqli_query($link,$sql);
    if(mysqli_num_rows($result)==1 && $passwd==mysqli_fetch_assoc($result)["passwd"]){
        session_start();
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        //這些是之後可以用到的變數
        $_SESSION["username"] = mysqli_fetch_assoc($result)["username"];
        $_SESSION["passwd"] = mysqli_fetch_assoc($result)["passwd"];
        header("location:main.php");
    }else{
            function_alert("帳號或密碼錯誤"); 
        }
}


    // Close connection
    mysqli_close($link);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    return false;
} 
?>