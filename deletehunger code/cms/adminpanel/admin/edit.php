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

$venue="";
$date="";
$time="";
$people="";
$comments="";
$name="";
$status="";

$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='GET'){
    // GET METHD; SHOW THE DATA OF CLIENT
    if(!isset($_GET["id"])){
        header("location: index.php");
        exit;
    }

    $id=$_GET["id"];
    // read the ROW OF SELECTED CLIENT FROM DATABASE
    $sql="SELECT * FROM details WHERE id=$id";
    $result=$connection->query($sql);
    $row=$result->fetch_assoc();

    if(!$row){
        header("location: index.php");
        exit;
    }

    $name=$row["name"];
    $venue=$row["venue"];
    $date=$row["date"];
    $time=$row["time"];
    $people=$row["people"];
    $status=$row['status'];
    $comments=$row["comments"];
    
}else{
    // POST METD: uPDATE THE DATA OF THE CLIENT
     
    $id=$_POST["id"];
    $venue=$_POST["venue"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $people=$_POST["people"];
    $comments=$_POST["comments"];
    $status=$_POST['status'];
    $name=$_POST["name"];
    do{
        if(empty($id)||empty($venue)|| empty($date)|| empty($time)||empty($people)||empty($comments)||empty($name)||empty($status)){
            $errorMessage="All fields are Required";
            break;
        }

        
        $sql="UPDATE details SET name = '$name', venue = '$venue',date='$date',time='$time',people='$people',comments='$comments',status='$status' WHERE id = '$id'";
        
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
                <label class="col-sm-3 col-form-label">Venue</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="venue" value="<?php echo $venue; ?>" >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="date" value="<?php echo $date; ?>" >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">time</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="time" value="<?php echo $time; ?>" >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">people</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="people" value="<?php echo $people; ?>" >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" >
                </div>
            </div>
            
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">comments</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="comments" value="<?php echo $comments; ?>" >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">status</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="status" value="<?php echo $status; ?>" >
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
                    <a class="btn btn-outline-primary" href="index.php" role="button">cancel</a>
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