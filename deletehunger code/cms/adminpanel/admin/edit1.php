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

$user_name="";
$password="";
$location="";


$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='GET'){
    // GET METHD; SHOW THE DATA OF CLIENT
    if(!isset($_GET["id"])){
        header("location: register.php");
        exit;
    }

    $id=$_GET["id"];
    // read the ROW OF SELECTED CLIENT FROM DATABASE
    $sql="SELECT * FROM users WHERE id=$id";
    $result=$connection->query($sql);
    $row=$result->fetch_assoc();

    if(!$row){
        header("location: register.php");
        exit;
    }

    $user_name=$row["user_name"];
    $password=$row["password"];
    $location=$row["location"];
    
    
}else{
    // POST METD: uPDATE THE DATA OF THE CLIENT
     
    $id=$_POST["id"];
    $user_name=$_POST["user_name"];
    $password=$_POST["password"];
    $location=$_POST["location"];
  
    do{
        if(empty($id)||empty($user_name)|| empty($password)|| empty($location)){
            $errorMessage="All fields are Required";
            break;
        }

        
        $sql="UPDATE users SET  user_name = '$user_name',password='$password',location='$location' WHERE id = '$id'";
        
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage="Invalid query:" . $connection->error;
            break;
        }

        $successMessage="Client updated correctly";
        header("location: register.php");
        exit;

    }while(false);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noida form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Edit Member</h2>

        <?php
        if(!empty($errorMessage)){
            echo"
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
            </button></div>";
        }
        ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">user_name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>" >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>" >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">location</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="location" value="<?php echo $location; ?>" >
                </div>
            </div>
           
           
            
           
           

            <?php
            if(!empty($successMessage)){
                echo"
               
               
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>$successMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
            </button></div>
                ";
            }
            ?>


            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="register.php" role="button">cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>

<?php
}
else{
    header("Location: ../index.php");
    exit();
}
?>