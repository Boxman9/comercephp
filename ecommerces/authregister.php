<?php


$fullname = $_POST["fullName"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
echo $fullname;
echo $username;
echo $password;
echo $confirmPassword;


//received user input


if($_SERVER["REQUEST_METHOD"] == "POST"){
    //validate confirmpassword
    if(trim($password) == trim($confirmPassword)){


    
        $host = "localhost";
        $database = "ecommerces";
        $username = "root";
        $password = "";
    
        $dsn = "mysql: host=$host;dbname=$database;";
        try {
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e){
            echo "Connection Failed: " . $e->getMessage();
        }
    


    }else{
        header("location: /registration.php?error=Passwords are not the same");
        exit;


    }
}




//connect to database
//insert data


?>
	
