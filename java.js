

document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('nav ul li a');
  
    navLinks.forEach((link) => {
      link.addEventListener('click', function (event) {
        event.preventDefault();
  
        // Get the target section's ID from the link's href attribute
        const targetId = this.getAttribute('href').substring(1);
  
        // Scroll to the target section
        const targetSection = document.getElementById(targetId);
  
        if (targetSection) {
          // Use scrollIntoView with smooth behavior for smooth scrolling
          targetSection.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  });
  