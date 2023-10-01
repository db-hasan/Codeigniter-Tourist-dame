// Function to add or remove the 'active' class from navigation links
function setActiveLink() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link.scroll');

    sections.forEach((section) => {
        const rect = section.getBoundingClientRect();
        if (rect.top <= 100 && rect.bottom >= 100) {
            const targetId = section.getAttribute('id');
            navLinks.forEach((navLink) => {
                navLink.classList.remove('active');
                if (navLink.getAttribute('href') === `#${targetId}`) {
                    navLink.classList.add('active');
                }
            });
        }
    });
}

// Add an event listener for the 'scroll' event
window.addEventListener('scroll', setActiveLink);

// Initially set the active link when the page loads
window.addEventListener('load', setActiveLink);