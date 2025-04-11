const SCROLL_THRESHOLD = 50;
const ANIMATION_THRESHOLD = 0.2;

const initSmoothScroll = () => {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
};

const handleNavbarScroll = () => {
    const navbar = document.querySelector('.navbar');
    navbar.style.backgroundColor = window.scrollY > SCROLL_THRESHOLD ? 
        'rgba(44, 62, 80, 0.95)' : 'var(--primary-color)';
};

const initSectionAnimations = () => {
    const sections = document.querySelectorAll('.section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, {threshold: ANIMATION_THRESHOLD});

    sections.forEach(section => observer.observe(section));
};

const updateActiveNavLink = () => {
    const sections = document.querySelectorAll('.section');
    const navLinks = document.querySelectorAll('.nav-link');
    let currentSection = '';
    
    sections.forEach(section => {
        if (window.scrollY >= section.offsetTop - 60) {
            currentSection = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${currentSection}`) {
            link.classList.add('active');
        }
    });
};

window.addEventListener('scroll', () => {
    handleNavbarScroll();
    updateActiveNavLink();
});

document.addEventListener('DOMContentLoaded', () => {
    initSmoothScroll();
    initSectionAnimations();
    handleNavbarScroll();
    updateActiveNavLink();
}); 