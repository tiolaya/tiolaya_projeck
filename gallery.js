// Select the image container element
const imageContainer = document.querySelector('.foto-container');

// Add an event listener for mouseenter events on the container
imageContainer.addEventListener('mouseenter', () => {

  // Get all the image elements within the container
  const images = imageContainer.querySelectorAll('img');

  // Loop through each image
  images.forEach(image => {
    // Apply a grayscale filter initially
    image.style.filter = 'grayscale(100%)';

    // Add an event listener for mouseover events on each image
    image.addEventListener('mouseover', (event) => {
      // Remove the grayscale filter on hover
      event.target.style.filter = 'grayscale(0%)';
    });

    // Add an event listener for mouseout events on each image
    image.addEventListener('mouseout', (event) => {
      // Reapply the grayscale filter when leaving the image
      event.target.style.filter = 'grayscale(100%)';
    });
  });
});
