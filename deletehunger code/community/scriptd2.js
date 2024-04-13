document.addEventListener('DOMContentLoaded', () => {
    const postsContainer = document.getElementById('postsContainer');
  
    // Fetch community posts
    fetch('https://your-backend-api/posts')
      .then(response => response.json())
      .then(posts => {
        posts.forEach(post => {
          const postElement = createPostElement(post);
          postsContainer.appendChild(postElement);
        });
      })
      .catch(error => console.error('Error fetching posts:', error));
  
    // Function to create post element
    function createPostElement(post) {
      const postElement = document.createElement('div');
      postElement.classList.add('post');
  
      const contentElement = document.createElement('p');
      contentElement.textContent = post.content;
  
      const likeBtn = createButton('Like', 'like-btn');
      likeBtn.addEventListener('click', () => handleLike(post.id));
  
      const commentBtn = createButton('Comment', 'comment-btn');
      commentBtn.addEventListener('click', () => handleComment(post.id));
  
      const shareBtn = createButton('Share', 'share-btn');
      shareBtn.addEventListener('click', () => handleShare(post.id));
  
      postElement.appendChild(contentElement);
      postElement.appendChild(likeBtn);
      postElement.appendChild(commentBtn);
      postElement.appendChild(shareBtn);
  
      return postElement;
    }
  
    // Function to create button
    function createButton(text, className) {
      const button = document.createElement('button');
      button.textContent = text;
      button.classList.add('button', className);
      return button;
    }
  
    // Function to handle like button click
    function handleLike(postId) {
      // Send request to update like count for the post with postId
      console.log('Liked post with ID:', postId);
    }
  
    // Function to handle comment button click
    function handleComment(postId) {
      // Open modal or navigate to comment section for the post with postId
      console.log('Commented on post with ID:', postId);
    }
  
    // Function to handle share button click
    function handleShare(postId) {
      // Display share dialog or copy post link to clipboard for the post with postId
      console.log('Shared post with ID:', postId);
    }
  });
  