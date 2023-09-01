// Smooth scrolling to the target section
document.addEventListener('DOMContentLoaded', function() {
  var scrollDown = document.querySelector('.scroll-down-icon');
  scrollDown.addEventListener('click', function(e) {
    e.preventDefault();
    var targetSection = document.querySelector(this.getAttribute('href'));
    targetSection.scrollIntoView({ behavior: 'smooth' });
  });
});
// Function to handle form submission
function handleSearchFormSubmit(event) {
  event.preventDefault(); // Prevent form submission
  const searchTerm = document.getElementById('searchInput').value;
  // Perform your search action here, e.g., redirect to a search results page
  // Example:
  // window.location.href = 'https://example.com/search?query=' + encodeURIComponent(searchTerm);
}

// Add event listener to the search form
document.querySelector('.search-form').addEventListener('submit', handleSearchFormSubmit);