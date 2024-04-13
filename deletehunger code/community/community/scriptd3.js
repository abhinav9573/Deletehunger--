// Function to get current timestamp in "HH:MM AM/PM, Month Day, Year" format
function getCurrentTimestamp() {
    const now = new Date();
    const options = {
        hour: 'numeric',
        minute: 'numeric',
        hour12: true,
        month: 'short',
        day: 'numeric',
        year: 'numeric'
    };
    return now.toLocaleString('en-US', options);
}

// Function to add a new post
function addPost() {
    let postInput = document.getElementById('postInput');
    let postText = postInput.value.trim();

    if (postText !== '') {
        // Create post element
        let postContainer = document.querySelector('.post-container');
        let postElement = document.createElement('div');
        postElement.classList.add('post');

        // Post content
        let postContent = document.createElement('p');
        postContent.textContent = postText;

        // Timestamp
        let timestamp = document.createElement('span');
        timestamp.textContent = getCurrentTimestamp();
        timestamp.classList.add('timestamp');

        // Like button
        let likeBtn = document.createElement('button');
        likeBtn.textContent = 'Like';
        likeBtn.classList.add('btn', 'like-btn');
        likeBtn.addEventListener('click', () => handleLike(postElement));

        // Comment button
        let commentBtn = document.createElement('button');
        commentBtn.textContent = 'Comment';
        commentBtn.classList.add('btn', 'comment-btn');
        commentBtn.addEventListener('click', () => handleComment(postElement));

        // Append elements to post container
        postElement.appendChild(postContent);
        postElement.appendChild(timestamp);
        postElement.appendChild(likeBtn);
        postElement.appendChild(commentBtn);
        postContainer.prepend(postElement);

        // Clear input
        postInput.value = '';
    }
}

// Function to handle like button click
function handleLike(postElement) {
    let likeBtn = postElement.querySelector('.like-btn');
    likeBtn.disabled = true;
    likeBtn.textContent = 'Liked';
    // You can implement logic here to update likes count on the server
}

// Function to handle comment button click
function handleComment(postElement) {
    // Implement logic to open comment modal or navigate to comment section
}
