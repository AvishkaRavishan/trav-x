// Smooth redirection function
function redirectToPage(pageUrl) {
    window.location.href = pageUrl;
}

// Initialize Tilt.js effect (requires Tilt.js library)
const tiltElements = document.querySelectorAll("[data-tilt]");
tiltElements.forEach(el => {
    VanillaTilt.init(el, {
        max: 15,
        speed: 400,
        glare: true,
        "max-glare": 0.3,
    });
});

// Add a hover vibration effect
const destinationCards = document.querySelectorAll(".destination-card");
destinationCards.forEach(card => {
    card.addEventListener("mouseenter", () => {
        card.style.transform = "translateY(-12px) rotate(-1deg)";
    });
    card.addEventListener("mouseleave", () => {
        card.style.transform = "translateY(0) rotate(0)";
    });
});

// Button action for booking
function bookNow() {
    alert("Redirecting to the booking page...");
    window.location.href = "booking.html";
}

// Simple effect on scroll
window.addEventListener("scroll", () => {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        navbar.style.background = "#172418";
        navbar.style.boxShadow = "0px 5px 20px rgba(0, 0, 0, 0.5)";
    } else {
        navbar.style.background = "#1a1a1a";
        navbar.style.boxShadow = "0px 5px 15px rgba(0, 0, 0, 0.3)";
    }
});


// Smooth Scrolling
document.querySelectorAll('.navbar a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Element Fade-In on Scroll
const fadeInElements = document.querySelectorAll('.content-section, .service-card');

const fadeInOnScroll = () => {
    fadeInElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }
    });
};

fadeInElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'all 0.6s ease-in-out';
});

window.addEventListener('scroll', fadeInOnScroll);

// Hover Effect (Dynamic Glow)
document.querySelectorAll('[data-hover-effect]').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.boxShadow = '0 0 20px 5px #f0a500';
    });
    card.addEventListener('mouseleave', () => {
        card.style.boxShadow = 'none';
    });
});

const cursor = document.createElement('div');
cursor.style.cssText = `
    width: 15px;
    height: 15px;
    background-color: #f0a500;
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    transition: transform 0.1s ease;
`;
document.body.appendChild(cursor);

document.addEventListener('mousemove', e => {
    cursor.style.top = `${e.clientY}px`;
    cursor.style.left = `${e.clientX}px`;
});


document.getElementById('search-btn').addEventListener('click', function() {
    let destination = document.getElementById('destination').value;
    let vehicleType = document.getElementById('vehicle-type').value;
    let travelDate = document.getElementById('travel-date').value;
    let time = document.getElementById('time').value;

    if (destination && vehicleType && travelDate && time) {
        alert('Searching for tours...');
        // Here you would check if any customer has selected the same date and time
    } else {
        alert('Please fill in all fields.');
    }
});


// Add a 3D tilt effect to destination cards
const cards = document.querySelectorAll("[data-tilt]");

cards.forEach((card) => {
    card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width;
        const y = (e.clientY - rect.top) / rect.height;

        card.style.transform = `rotateY(${(x - 0.5) * 15}deg) rotateX(${(0.5 - y) * 15}deg)`;
    });

    card.addEventListener("mouseleave", () => {
        card.style.transform = "rotateY(0) rotateX(0)";
    });
});


// Smooth Scrolling for Navbar Links
document.querySelectorAll('.navbar nav a').forEach(link => {
    link.addEventListener('click', event => {
        event.preventDefault();
        const targetId = link.getAttribute('href').substring(1);
        document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
    });
});

// Dynamic Navbar Background on Scroll
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.style.backgroundColor = '#333';
        navbar.style.boxShadow = '0px 5px 20px rgba(0, 0, 0, 0.6)';
    } else {
        navbar.style.backgroundColor = '#1a1a1a';
        navbar.style.boxShadow = '0px 5px 15px rgba(0, 0, 0, 0.3)';
    }
});


function bookNow() {
    alert("Booking feature is coming soon! Stay tuned.");
}

