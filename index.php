<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sun Rock Tours - Your Trusted Travel Partner</title>
<meta name="description" content="Plan your dream vacation with Sun Rock Tours. Explore Sri Lanka's top destinations like Unawatuna, Kandy, and Galle with customized tours for families, couples, and solo travelers.">
<meta name="keywords" content="Sunrock, Sunrock Tours, travel partner, Sri Lanka travel, customized tours, Unawatuna, Galle, Kandy, Colombo">
<meta name="author" content="Sun Rock Tours">
<meta name="author" content="SunRockTours">
<meta name="author" content="SunRockTours.com">

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="assets/LOGO (2).png" type="image/x-icon">

    <style>
        #map {
            height: 400px;
            width: 100%;
            margin: 20px 0;
        }
        .search-box {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
        }
        .input-group {
            display: flex;
            flex-direction: column;
            width: 200px;
        }
        .input-group label {
            margin-bottom: 5px;
        }
        .input-group input, 
        .input-group select {
            padding: 8px;
            font-size: 14px;
        }
        .search-btn {
            align-self: flex-end;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .round-trip-fields {
            display: flex;
            gap: 20px;
        }
        .one-way-field {
            display: flex;
            flex-direction: column;
        }

        /* Media Query to Hide Navbar on Small Screens */
        @media (max-width: 768px) {
            .navbar {
                display: none; /* Hide navbar on small screens */
            }
        }
    </style>
</head>
<body>

<header>
    <div class="navbar">
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#book">Book Now</a>
            <a href="#destinations">Top Destinations</a>
        </nav>
    </div>

</header>


    <main id="home">
        <section class="hero" id="hero">
            <div class="hero-content">
                <h1>Let's Tour</h1>
                <p>Your Travel Partner in Sri Lanka!</p>
                <a href="https://wa.me/message/K3CC6OUJPSADD1" target="_blank" class="whatsapp-button">
    Book With WhatsApp
</a>
<style>/* Style for Book With WhatsApp Button */
/* Style for Book With WhatsApp Button */
.whatsapp-button {
    display: inline-block;
    background-color: #25D366; /* WhatsApp green color */
    color: white;
    padding: 12px 30px; /* Padding adjusted for a more elongated look */
    font-size: 18px;
    border-radius: 30px; /* Moderate rounded corners */
    text-align: center;
    text-decoration: none;
    margin-top: 20px; /* Adds space between paragraph and button */
    transition: all 0.3s ease; /* Smooth transition for hover effects */
    font-weight: bold;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    letter-spacing: 1px; /* Adds some spacing between letters for a cleaner look */
}

.whatsapp-button:hover {
    background: linear-gradient(45deg, #25D366, #128C7E); /* Gradient background on hover */
    transform: translateY(-4px); /* Slight upward movement on hover */
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15); /* Deeper shadow on hover */
}

.whatsapp-button:active {
    transform: translateY(2px); /* Slight downward movement when button is pressed */
}

/* Social Links styling remains the same */
.social-links {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-links a {
    display: inline-block;
    text-decoration: none;
}

.social-links img {
    width: 40px;
    height: 40px;
    transition: transform 0.3s ease;
}

.social-links img:hover {
    transform: scale(1.1);
}

</style>
            </div>
            
        </section>

        <div class="tour-search" id="book">
    <h2>Tour Booking Form</h2>
    <div class="search-box">
        <form id="booking-form" method="POST">
            <div class="input-group">
                <label for="trip-type">Trip Type</label>
                <select id="trip-type" name="trip_type" onchange="toggleRoundTripFields()">
                    <option value="one-way">One Way</option>
                    <option value="round-trip">Round Trip</option>
                </select>
            </div>
            <div class="input-group">
                <label for="pick-up">Pick-Up</label>
                <input type="text" id="pick-up" name="pick_up" placeholder="Enter Pick-Up Location" required>
            </div>
            <div class="input-group">
                <label for="drop">Drop</label>
                <input type="text" id="drop" name="drop" placeholder="Enter Drop Location" required>
            </div>
            <div class="input-group">
                <label for="vehicle-type">Vehicle Type</label>
                <select id="vehicle-type" name="vehicle_type" required>
                    <option value="">Select Vehicle Type</option>
                    <option value="car">Car</option>
                    <option value="bus">Bus</option>
                    <option value="van">Van</option>
                </select>
            </div>
            <div class="input-group one-way-field">
                <label for="travel-date">Travel Date</label>
                <input type="date" id="travel-date" name="travel_date" required>
            </div>
            <div class="round-trip-fields" style="display: none;">
                <div class="input-group">
                    <label for="start-date">Start Date</label>
                    <input type="date" id="start-date" name="start_date">
                </div>
                <div class="input-group">
                    <label for="end-date">End Date</label>
                    <input type="date" id="end-date" name="end_date">
                </div>
                <div class="input-group">
                    <label for="stops">Stops</label>
                    <input type="text" id="stops" name="stops" placeholder="Enter Stops ">
                </div>
            </div>
            <div class="input-group">
                <label for="time">Time</label>
                <input type="time" id="time" name="time" required>
            </div>
            <button type="button" id="search-btn" class="search-btn">Book</button>
        </form>
    </div>
</div>

<script>
    // Toggle Round Trip Fields
    function toggleRoundTripFields() {
        const tripType = document.getElementById("trip-type").value;
        const roundTripFields = document.querySelector(".round-trip-fields");
        const oneWayField = document.querySelector(".one-way-field");

        if (tripType === "round-trip") {
            roundTripFields.style.display = "flex";
            oneWayField.style.display = "none";
        } else {
            roundTripFields.style.display = "none";
            oneWayField.style.display = "flex";
        }
    }


</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const tripTypeSelect = document.getElementById('trip-type');
    const oneWayFields = document.querySelector('.one-way-field');
    const roundTripFields = document.querySelector('.round-trip-fields');
    const searchBtn = document.getElementById('search-btn');

    // Toggle round-trip fields based on trip type
    tripTypeSelect.addEventListener('change', toggleRoundTripFields);

    function toggleRoundTripFields() {
        if (tripTypeSelect.value === 'round-trip') {
            oneWayFields.style.display = 'none';
            roundTripFields.style.display = 'block';
            document.getElementById('travel-date').removeAttribute('required');
            document.getElementById('start-date').setAttribute('required', true);
            document.getElementById('end-date').setAttribute('required', true);
        } else {
            oneWayFields.style.display = 'block';
            roundTripFields.style.display = 'none';
            document.getElementById('travel-date').setAttribute('required', true);
            document.getElementById('start-date').removeAttribute('required');
            document.getElementById('end-date').removeAttribute('required');
        }
    }

    // Handle form submission
    searchBtn.addEventListener('click', function () {
        const tripType = tripTypeSelect.value;
        const pickUp = document.getElementById('pick-up').value.trim();
        const drop = document.getElementById('drop').value.trim();
        const vehicleType = document.getElementById('vehicle-type').value;
        const time = document.getElementById('time').value.trim();

        let travelDate = document.getElementById('travel-date').value.trim();
        let startDate = document.getElementById('start-date').value.trim();
        let endDate = document.getElementById('end-date').value.trim();
        let stops = document.getElementById('stops').value.trim() || 'None';

        // Validate required fields
        if (!pickUp || !drop || !vehicleType || !time || 
            (tripType === 'one-way' && !travelDate) || 
            (tripType === 'round-trip' && (!startDate || !endDate))) {
            alert('Please fill in all required fields.');
            return;
        }

        // Construct the WhatsApp message
        let message = `*New Booking Request*\n\n` +
                      `*Trip Type:* ${tripType === 'one-way' ? 'One Way' : 'Round Trip'}\n` +
                      `*Pick-Up Location:* ${pickUp}\n` +
                      `*Drop Location:* ${drop}\n` +
                      `*Vehicle Type:* ${vehicleType}\n` +
                      `*Time:* ${time}\n`;

        if (tripType === 'one-way') {
            message += `*Travel Date:* ${travelDate}\n`;
        } else {
            message += `*Start Date:* ${startDate}\n*End Date:* ${endDate}\n*Stops:* ${stops}\n`;
        }

        // WhatsApp API URL with proper encoding
        const phoneNumber = "94764624205"; // Replace this with the Sunrock WhatsApp number
        const encodedMessage = encodeURIComponent(message);
        const whatsappURL = `https://wa.me/message/K3CC6OUJPSADD1?phone=${phoneNumber}&text=${encodedMessage}`;

        // Open WhatsApp chat directly
        window.open(whatsappURL, '_blank');
    });
});
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Explore Sri Lanka with Sun Rock Tours",
  "description": "Customized travel experiences to top destinations like Unawatuna, Kandy, and Galle, Badulla, Nine Arch, Nuwara Eliya.",
  "touristType": "Family, Solo, Couples",
  "location": {
    "@type": "Place",
    "name": "Sri Lanka"
  }
}
</script>



        <style>.round-trip-fields .input-group input,
.round-trip-fields .input-group select {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    color: #333;
}

.round-trip-fields .input-group input::placeholder {
    color: #999;
    font-style: italic;
}
</style>


        <style>/* Tour Search Section */
.tour-search {
    background-color: #2e2e2e;
    padding: 120px 120px;
    color: #fff;
    text-align: center;
}

.tour-search h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #f0a500;
}

/* Input Group Styles */
.input-group {
    margin-bottom: 15px; /* Space between fields */
    width: 100%;
    text-align: left;
}

.input-group label {
    display: block;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.input-group input,
.input-group select {
    width: 100%; /* Ensure inputs fill the available space */
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    color: #333;
}



/* Styling for the one-way trip fields */
.one-way-field {
    display: flex;
    flex-direction: column;
}

/* Round trip fields - stack below Travel Date */
.round-trip-fields {
    display: none;
    margin-top: 20px; /* Ensure it has space from the travel date field */
    flex-direction: column;
    align-items: flex-start;
    width: 100%;
}

/* Button Styles */
.search-btn {
    padding: 10px 20px;
    font-size: 1.2rem;
    background-color: #f0a500;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-btn:hover {
    background-color: #e08900;
}

/* For responsive design (Mobile/Tablet) */
@media (max-width: 768px) {
    .tour-search {
        padding: 40px 20px; /* Reduced padding for smaller screens */
    }

    .tour-search h2 {
        font-size: 1.6rem; /* Adjusted font size */
    }

    .input-group input,
    .input-group select {
        font-size: 0.9rem; /* Adjust input font size */
    }

    #stops-btn {
        font-size: 1rem; /* Adjust button size for mobile */
        width: 100%; /* Make button full width on mobile */
    }
}


</style>
        <script>
function toggleRoundTripFields() {
    const tripType = document.getElementById("trip-type").value;
    const roundTripFields = document.querySelector(".round-trip-fields");
    const oneWayField = document.querySelector(".one-way-field");

    if (tripType === "round-trip") {
        roundTripFields.style.display = "flex";  // Show fields below Travel Date
        oneWayField.style.display = "none";  // Hide the One-way field
    } else {
        roundTripFields.style.display = "none";  // Hide the Round-trip fields
        oneWayField.style.display = "flex";  // Show the One-way field
    }
}

        </script>


<section id="about" class="content-section">
            <h2>About Us</h2>
            <p>Welcome to <strong>Sun Rock Tours</strong>, where your travel dreams come to life!</p>
            <p>We are dedicated to offering unforgettable travel experiences to both local adventurers and foreign explorers.</p>
            <p>Whether you're looking for a scenic getaway, cultural journey, or peaceful escape, we're here to make it happen.</p>
        </section>
        <div class="social-links">
    
    <!-- Facebook Link -->
    <a href="https://www.facebook.com/share/1Ew8Thr2PR/?mibextid=wwXIfr" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook">
    </a>
    
    <!-- WhatsApp Link -->
    <a href="https://wa.me/message/K3CC6OUJPSADD1" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
    </a>

    <!-- Email Link -->
    <a href="mailto:sunrocktourssrilanka@gmail.com?subject=Inquiry&body=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services.">
        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email">
    </a>
</div>
<style>
    .social-links {
        display: flex;
        justify-content: center; /* Center the icons horizontally */
        gap: 30px; /* Increased space between the icons */
            background-color:rgb(32, 30, 30);
    padding: 40px ;
    color: #fff;
    text-align: center;
    }

    .social-links a {
        display: inline-block;
        text-decoration: none; /* Removes the default link underline */
    }

    .social-links img {
        width: 50px; /* Increased size of the icons */
        height: 50px;
        transition: transform 0.3s ease; /* Adds smooth hover effect */
    }

    .social-links img:hover {
        transform: scale(1.2); /* Slightly enlarges the icon on hover */
    }
</style>

<section id="destinations" class="content-section">

    <h2>Our Top Destinations</h2>
    <div class="destination-grid">

        <!-- Sri Dalada Maligawa -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/Sri Dalada Maligawa.php">

                <img src="assets/dalada maligawa.jpg" alt="Sri Dalada Maligawa">
                <div class="destination-details">
                    <h3>Sri Dalada Maligawa</h3>
                    <p>The Temple of the Sacred Tooth Relic, a UNESCO World Heritage site in Kandy.</p>
                    <span class="rating">⭐⭐⭐</span>
                </div>
            </a>
        </div>

        <!-- Nine Arch Bridge -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/Nine Arch Bridge.php">
                <img src="assets/nine arch.jpg" alt="Nine Arch Bridge">
                <div class="destination-details">
                    <h3>Nine Arch Bridge</h3>
                    <p>A stunning architectural masterpiece in Ella.</p>
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                </div>
            </a>
        </div>

        <!-- Galle Fort -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/Galle.php">
                <img src="assets/galle fort.jpg" alt="Galle Fort">
                <div class="destination-details">
                    <h3>Galle Fort</h3>
                    <p>Experience the colonial charm of this fortress by the sea.</p>
                    <span class="rating">⭐⭐⭐⭐</span>
                </div>
            </a>
        </div>


        <!-- Unawatuna -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/unawatuna.php">
                <img src="assets/unawatuna.jpg" alt="Unawatuna">
                <div class="destination-details">
                    <h3>Unawatuna</h3>
                    <p>Golden sands, crystal-clear waters, and vibrant coral reefs await you.</p>
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                </div>
            </a>
        </div>

        <!-- Trinco -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/trinco.php">
                <img src="assets/trinco.jpg" alt="Trincomalee">
                <div class="destination-details">
                    <h3>Trincomalee</h3>
                    <p>Pristine beaches, historic temples, and breathtaking landscapes in the East.</p>
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                </div>
            </a>
        </div>

        <!-- Jaffna -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/jaffna.php">
                <img src="assets/jaffna.jpg" alt="Jaffna">
                <div class="destination-details">
                    <h3>Jaffna</h3>
                    <p>Explore Tamil culture, Jaffna Fort, and culinary delights in the North.</p>
                    <span class="rating">⭐⭐⭐⭐</span>
                </div>
            </a>
        </div>

        <!-- Katharagama -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/katharagama.php">
                <img src="assets/kataragama.jpg"Katharagama">
                <div class="destination-details">
                    <h3>Katharagama</h3>
                    <p>A sacred pilgrimage town with temples and cultural festivities.</p>
                    <span class="rating">⭐⭐</span>
                </div>
            </a>
        </div>

        <!-- Arugambay -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/arugambay.php">
                <img src="assets/arugambay.jpg" alt="Arugambay">
                <div class="destination-details">
                    <h3>Arugambay</h3>
                    <p>A surfer's paradise with stunning beaches and a laid-back vibe.</p>
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                </div>
            </a>
        </div>

        <!-- Nelum Kuluna -->
        <div class="destination-card" data-tilt>
            <a href="Top Destinations/nelumkuluna.php">
                <img src="assets/nelum_kuluna.jpg   " alt="Nelum Kuluna">
                <div class="destination-details">
                    <h3>Nelum Kuluna</h3>
                    <p>The Lotus Tower, an iconic landmark in Colombo with panoramic views.</p>
                    <span class="rating">⭐⭐⭐</span>
                </div>
            </a>
        </div>
    </div>

        <style>/* Remove underline and set text color to white for links in Top Destinations */
#destinations a {
    text-decoration: none; /* Removes underline */
    color: white; /* Sets text color to white */
}

#destinations a:hover {
    color: #f0a500; /* Optional: Adds a hover effect, like a golden color */
}
</style>

    </div>
</section>



    </main>

    <footer>
        <p>© 2024 Sun Rock Tours | All Rights Reserved.</p>
    </footer>








</body>
</html>
