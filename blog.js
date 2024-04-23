const blogPosts = document.querySelectorAll('.blog-post');

blogPosts.forEach(post => {
  post.addEventListener('mouseover', () => {
    post.style.boxShadow = "0px 5px 10px rgba(0, 0, 0, 0.2)";
    post.style.transform = "scale(1.02)"; // Increase size slightly on hover
  });

  post.addEventListener('mouseout', () => {
    post.style.boxShadow = "none";
    post.style.transform = "scale(1)"; // Reset size on mouseout
  });
});
