<?php
include("koneksi.php");
if(isset($_GET['username']) && isset($_GET['password'])){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //$mysqli = new mysqli("localhost", "root", "", "sqlinjection");
    
    $username = htmlspecialchars($_GET['username']);
    $password = htmlspecialchars($_GET['password']);
    //$query = "SELECT * FROM users WHERE username='$username' and password='$password'";

    // $result = $mysqli->query($query);
    
    // /* numeric array */
    // $row = $result->fetch_array(MYSQLI_NUM);
    // printf("%s (%s)\n", $row[0], $row[1]);

    // var_dump($row);
    $query="select username,password from users where username='$username' and password='$password' limit 0,1";
    $result=mysqli_query($conn,$query);
    $rows = mysqli_fetch_array($result);
    if($rows)
    {
    echo "You have Logged in successfully" ;
    }
    else
    {
    Echo "Better Luck Next time";
    }
    
   
}else{
    echo " nothing";
}