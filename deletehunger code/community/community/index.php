
<!DOCTYPE html>
<html>
<head>
    <title>Community Page</title>
    
</head>

<link rel="stylesheet" href="styled3.css">
<link rel="scriptsheet" href="scriptd3.js">

<body>
    <header>
        <h1>Samadhaan Community Posts</h1>
        <img src="./dexImage/Delete-Hunger.png"width="125" height="85" alt="logo" class="text-logo" />
        <a href="../logout.php" id="logoutButton">Logout</a>
    </header>
    <main>
        <div class="post">
            <img src="./dexImage/image1d3.jpg" alt="Post Image 1">
            <div class="post-content">
                <h2>The next big thing will be reducing food waste.</h2>
                <p>The impact of our community's efforts is palpable, touching the lives of countless children and families. By ensuring access to nutritious food, we not only alleviate hunger but also empower children to focus on their education and personal growth.</p>
            </div>
            <div class = "post-buttons">
                <button class="post-button">Like</button>
                <button class="post-button">Share</button>
                <button class="post-button">Comment</button>
            </div>
            <div class="sticker sticker-like"></div>
            <div class="sticker sticker-share"></div>
            <div class="sticker sticker-comment"></div>
        </div>
        <div class="post">
            <img src="./dexImage/image2d3.jpg" alt="Post Image 2">
            <div class="post-content">
                <h2>Not eating a healthy and balanced diet leads to weakness and deficiency diseases.</h2>
                <p>Food is the substance we eat every day for energy and strength.</p>
            </div>
            <div class = "post-buttons">
                <button class="post-button">Like</button>
                <button class="post-button">Share</button>
                <button class="post-button">Comment</button>
            </div>
            <div class="sticker sticker-like"></div>
            <div class="sticker sticker-share"></div>
            <div class="sticker sticker-comment"></div>
        </div>
        <!-- Add more posts as needed -->
    </main>
    <footer>
        <input type="text" id="postInput" placeholder="Write a post...">
        <button onclick="addPost()">Post</button>
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
