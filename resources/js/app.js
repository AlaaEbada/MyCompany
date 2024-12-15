import './bootstrap';

// Get the header element
const header = document.getElementById('header');

// Add a scroll event listener
window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        // Add shadow when scrolled
        header.classList.add('shadow-md');
    } else {
        // Remove shadow when at the top
        header.classList.remove('shadow-md');
    }
});