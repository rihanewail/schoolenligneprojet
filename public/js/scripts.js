document.getElementById('loadMore').addEventListener('click', function() {
    const postsContainer = document.querySelector('.posts-container');
    for (let i = 0; i < 3; i++) {
        const post = document.createElement('div');
        post.className = 'post';
        post.innerHTML = `
            <img src="https://via.placeholder.com/250" alt="Post Image">
            <p>More about our students and their projects.</p>
        `;
        postsContainer.appendChild(post);
    }
});
