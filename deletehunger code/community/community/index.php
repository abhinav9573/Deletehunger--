<?php
session_start();

if(isset($_SESSION['id'])&& isset($_SESSION['username'])){
  $name=$_SESSION['username'];
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Community Page</title>
    
</head>

<link rel="stylesheet" href="styled3.css">
<link rel="stylesheet" href="button.css">
<link rel="scriptsheet" href="scriptd3.js">

<body>
    <header>
        <h1>Samadhaan Community Posts</h1>
        <img src="./dexImage/Delete-Hunger.png"width="125" height="85" alt="logo" class="text-logo" />
        <a href="../logout.php" id="logoutButton">Logout</a>
    </header>
    <main>
        <div class="post">
        <?php 
  
require_once 'dbConfig.php'; 
 

$result = $db->query("SELECT img,caption,uname FROM post ORDER BY id DESC"); 
?>


<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']);?>   " />
            <p> User :<?php echo $row['uname'];?></p>
            <p><?php echo $row['caption'];?></p>
            <div class = "post-buttons">
                <!-- <button class="post-button">Like</button>
                <button class="post-button">Share</button> -->
                <button class="post-button">Comment</button>
            </div>
            <br>
        <?php } ?> 
        
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
            
        
            

    </main>
    <footer>
        
        <a class="button button1" href="post.php">Post</a>
    </footer>

    <div class="chatbot">
        <button id="chatToggle" class="chat-toggle">Chat</button>
        <div id="chatbox" class="chatbox">
            <!-- Chat content will be loaded here -->
            <input type="text" id="userInput" class="user-input" placeholder="Type your message...">
            <button id="sendMessage" class="send-message">Send</button>
        </div>
    </div>

    <script src="scriptd3.js"></script>

</body>
</html>
<?php
}
else{
    header("Location: ../index.php");
    exit();
}
?>