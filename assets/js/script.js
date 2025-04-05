document.addEventListener('DOMContentLoaded', function() {
// Theme Toggle Functionality
const themeToggle = document.querySelector('.theme-toggle');
const html = document.documentElement;

// Check for saved theme preference or use preferred color scheme
const savedTheme = localStorage.getItem('theme') || 
                  (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
html.setAttribute('data-theme', savedTheme);

// Update toggle icon based on current theme
updateToggleIcon(savedTheme);

themeToggle.addEventListener('click', () => {
    const currentTheme = html.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    
    html.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    
    updateToggleIcon(newTheme);
});

function updateToggleIcon(theme) {
    const sunIcons = document.querySelectorAll('.toggle-icon .fa-sun');
    const moonIcons = document.querySelectorAll('.toggle-icon .fa-moon');
    const logoLights = document.querySelectorAll('.logo-light');
    const logoDarks = document.querySelectorAll('.logo-dark');
    
    if (theme === 'dark') {
        sunIcons.forEach(icon => {
            icon.style.opacity = '0';
            icon.style.transform = 'translate(-50%, -50%) rotate(90deg)';
        });
        moonIcons.forEach(icon => {
            icon.style.opacity = '1';
            icon.style.transform = 'translate(-50%, -50%) rotate(0)';
        });
        logoLights.forEach(logo => {
            logo.style.opacity = '0';
        });
        logoDarks.forEach(logo => {
            logo.style.opacity = '1';
        });
    } else {
        sunIcons.forEach(icon => {
            icon.style.opacity = '1';
            icon.style.transform = 'translate(-50%, -50%) rotate(0)';
        });
        moonIcons.forEach(icon => {
            icon.style.opacity = '0';
            icon.style.transform = 'translate(-50%, -50%) rotate(-90deg)';
        });
        logoLights.forEach(logo => {
            logo.style.opacity = '1';
        });
        logoDarks.forEach(logo => {
            logo.style.opacity = '0';
        });
    }
}
    
    // Mobile Menu Functionality
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenu = document.querySelector('.close-menu');
    
    hamburger.addEventListener('click', () => {
        hamburger.classList.add('active');
        mobileMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    
    closeMenu.addEventListener('click', () => {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
    });
    
    // Close mobile menu when clicking on a link
    const mobileLinks = document.querySelectorAll('.mobile-menu a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });
    });
    
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // FAQ Accordion
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqItem = question.parentElement;
            faqItem.classList.toggle('active');
            
            // Close other open FAQs
            faqQuestions.forEach(q => {
                if (q !== question && q.parentElement.classList.contains('active')) {
                    q.parentElement.classList.remove('active');
                }
            });
        });
    });
    
    // Payment Method Toggle
    const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
    paymentMethods.forEach(method => {
        method.addEventListener('change', () => {
            document.querySelector('.card-payment-details').style.display = 'none';
            document.querySelector('.transfer-payment-details').style.display = 'none';
            document.querySelector('.ussd-payment-details').style.display = 'none';
            
            if (method.value === 'card') {
                document.querySelector('.card-payment-details').style.display = 'block';
            } else if (method.value === 'transfer') {
                document.querySelector('.transfer-payment-details').style.display = 'block';
            } else if (method.value === 'ussd') {
                document.querySelector('.ussd-payment-details').style.display = 'block';
            }
        });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Course card hover animation
    const courseCards = document.querySelectorAll('.course-card');
    courseCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            const icon = card.querySelector('.course-icon i');
            icon.style.transform = 'scale(1.2)';
            icon.style.transition = 'transform 0.3s ease';
        });
        
        card.addEventListener('mouseleave', () => {
            const icon = card.querySelector('.course-icon i');
            icon.style.transform = 'scale(1)';
        });
    });
    
    // Testimonial card hover animation
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    testimonialCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            const authorIcon = card.querySelector('.author-icon i');
            authorIcon.style.transform = 'rotate(15deg)';
            authorIcon.style.transition = 'transform 0.3s ease';
        });
        
        card.addEventListener('mouseleave', () => {
            const authorIcon = card.querySelector('.author-icon i');
            authorIcon.style.transform = 'rotate(0)';
        });
    });
    
    // Process step hover animation
    const processSteps = document.querySelectorAll('.process-step');
    processSteps.forEach(step => {
        step.addEventListener('mouseenter', () => {
            const icon = step.querySelector('.process-icon');
            icon.style.transform = 'scale(1.1)';
            icon.style.transition = 'transform 0.3s ease';
        });
        
        step.addEventListener('mouseleave', () => {
            const icon = step.querySelector('.process-icon');
            icon.style.transform = 'scale(1)';
        });
    });
    
    // Initialize navbar state
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    }
    
    // Initialize payment method display
    document.querySelector('input[name="payment_method"]:checked').dispatchEvent(new Event('change'));
});
// Contact Form Submission with SweetAlert
const contactForm = document.querySelector('.contact-form form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;
        
        // Get form data
        const formData = new FormData(this);
        
        // Send AJAX request
        fetch('process-contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Show success message
                Swal.fire({
                    title: 'Success!',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#005BBB'
                }).then(() => {
                    // Reset form
                    contactForm.reset();
                    // Scroll to top of form
                    document.querySelector('.contact-form').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            } else {
                // Show error message
                Swal.fire({
                    title: 'Error!',
                    html: data.message,
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#005BBB'
                });
            }
        })
        .catch(error => {
            Swal.fire({
                title: 'Error!',
                text: 'An unexpected error occurred. Please try again later.',
                icon: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#005BBB'
            });
        })
        .finally(() => {
            // Reset button state
            submitBtn.textContent = originalBtnText;
            submitBtn.disabled = false;
        });
    });
}