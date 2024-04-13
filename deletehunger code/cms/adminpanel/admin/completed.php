<?php
session_start();

if(isset($_SESSION['id'])&& isset($_SESSION['use_name'])){
 
    ?>

<?php
 $servername="127.0.0.1:3306";
 $username="u130083126_deletehunger";
 $password="Deletehunger@2024";
 $databse="u130083126_deletehunger";
// create connection
$connection=new mysqli($servername,$username,$password,$databse);

$id="";
$name="";
$email="";
$phone="";
$address="";
$organisation="";
$dd="";
$gst="";
$addhaar="";
$slot="";
$check="";
$pin="";


$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='GET'){
    if(!isset($_GET["id"])){
        header("location: index.php");
        exit;
    }

    $id=$_GET["id"];

     

    

    do{
        if(empty($id)){
            $errorMessage="All fields are Required";
            break;
        }

        
        $sql="UPDATE details SET status = 'completed'  WHERE id = '$id'";
        
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage="Invalid query:" . $connection->error;
            break;
        }

        $successMessage="Client updated correctly";
        header("location: index.php");
        exit;

    }while(false);
}

?>


<?php
}
else{
    header("Location: ../index.php");
    exit();
}
?>