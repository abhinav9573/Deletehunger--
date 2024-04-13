<?php
session_start();
include "db_conn.php";

if(isset($_POST['kname']) && isset($_POST['password'])) {
    function validate($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return  $data;
    }     
}

$name=validate($_POST['kname']);
$pass=validate($_POST['password']);

if(empty($name)){
    header("Location: index.php?error=User Name is required");
    exit();
}
else if(empty($pass)){
    header("Location: index.php?error=Password is required");
    exit();
}

$sql="SELECT * FROM admin WHERE use_name='$name' AND password='$pass' ";
$result=mysqli_query($conn,$sql);



if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    if($row['use_name']===$name && $row['password']===$pass){
        


        echo "Logged In!";
        
        $_SESSION['use_name']=$row['use_name'];
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
        $rr=$row['location'];

        

        header("Location: $rr ");
        exit();
    }
    else{
        header("Location: index.php?error=Incorrect User Name or Number");
        exit();
    }
}
else{
    header("Location: index.php");
    exit();
}
?>