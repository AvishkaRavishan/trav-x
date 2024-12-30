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

// Optional: You can add dynamic interaction for the wave effect.
const reflection = document.getElementById('water-reflection');

// JavaScript to create ripple effect on mouse move

const rippleContainer = document.querySelector('.water-ripple-container');

// Create a ripple effect when mouse is moved over the hero section
document.querySelector('.hero').addEventListener('mousemove', function(e) {
    // Create a new ripple element
    const ripple = document.createElement('div');
    ripple.classList.add('ripple');

    // Calculate the position of the mouse relative to the hero section
    const rippleX = e.clientX - this.offsetLeft;
    const rippleY = e.clientY - this.offsetTop;

    // Set the position of the ripple
    ripple.style.left = `${rippleX - 50}px`;  // Offset to center the ripple
    ripple.style.top = `${rippleY - 50}px`;   // Offset to center the ripple
    ripple.style.width = ripple.style.height = '100px'; // Initial size of ripple

    // Append the ripple to the container
    rippleContainer.appendChild(ripple);

    // Remove the ripple after animation ends (to avoid memory leaks)
    ripple.addEventListener('animationend', () => {
        rippleContainer.removeChild(ripple);
    });
});

//FOR TRIPS SELECTION
function toggleRoundTripFields() {
    const tripType = document.getElementById("trip-type").value;
    const oneWayField = document.querySelector(".one-way-field");
    const roundTripFields = document.querySelector(".round-trip-fields");

    if (tripType === "round-trip") {
        oneWayField.style.display = "none";
        roundTripFields.style.display = "block";
    } else {
        oneWayField.style.display = "block";
        roundTripFields.style.display = "none";
    }
}





// Booking Button Ripple Effect
document.getElementById('search-btn').addEventListener('click', function (e) {
    const ripple = document.createElement('div');
    ripple.classList.add('ripple-effect');
    this.appendChild(ripple);

    const rect = this.getBoundingClientRect();
    ripple.style.left = `${e.clientX - rect.left}px`;
    ripple.style.top = `${e.clientY - rect.top}px`;

    setTimeout(() => ripple.remove(), 600); // Remove ripple after animation
});

// Add CSS for ripple effect
const style = document.createElement('style');
style.textContent = `
    .ripple-effect {
        position: absolute;
        width: 10px;
        height: 10px;
        background: rgba(240, 165, 0, 0.6);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple-animation 0.6s ease-out;
        pointer-events: none;
    }
    @keyframes ripple-animation {
        to {
            transform: scale(10);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);


// Smooth Scrolling
document.querySelectorAll('.navbar a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
        });
    });
});

const nodemailer = require('nodemailer');

async function sendEmail(details) {
    const transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
            user: 'your-email@gmail.com',
            pass: 'your-email-password',
        },
    });

    const mailOptions = {
        from: 'your-email@gmail.com',
        to: 'recipient-email@gmail.com',
        subject: 'New Booking Details',
        text: `Booking Details:
        Destination: ${details.destination}
        Vehicle: ${details.vehicleType}
        Date: ${details.travelDate}
        Time: ${details.time}`,
    };

    await transporter.sendMail(mailOptions);
}


//image slideshow js
let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change slide every 5 seconds
}

function changeSlide(n) {
    let slides = document.getElementsByClassName("slide");
    slides[slideIndex - 1].style.display = "none";
    slideIndex += n;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    if (slideIndex < 1) {
        slideIndex = slides.length;
    }
    slides[slideIndex - 1].style.display = "block";
}

document.addEventListener("DOMContentLoaded", () => {
    showSlides();
});