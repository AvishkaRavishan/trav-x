<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour X</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places" async defer></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="index.php" class="logo"></a>
            <nav>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="my_booking.php">My Bookings</a>
                <a href="sign-in.php">Log In</a>
            </nav>
        </div>
    </header>

    <main id="home">
        <section class="hero" id="hero">
            <div class="hero-content">
                <h1>Let's Tour</h1>
                <p>Your Travel Partner in Sri Lanka!</p>
            </div>
            <div class="water-ripple-container"></div>
        </section>

        <div class="tour-search">
            <h2>Tour Search</h2>
            <div class="search-box">
                <div class="input-group">
                    <label for="trip-type">Trip Type</label>
                    <select id="trip-type" onchange="toggleRoundTripFields()">
                        <option value="one-way">One Way</option>
                        <option value="round-trip">Round Trip</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="destination">Destination</label>
                    <input type="text" id="destination" placeholder="Select Destination">
                </div>
                <div class="input-group">
                    <label for="vehicle-type">Vehicle Type</label>
                    <select id="vehicle-type">
                        <option value="">Select Vehicle Type</option>
                        <option value="car">Car</option>
                        <option value="bus">Bus</option>
                        <option value="van">Van</option>
                    </select>
                </div>
                <!-- One-way Date Input -->
                <div class="input-group one-way-field">
                    <label for="travel-date">Travel Date</label>
                    <input type="date" id="travel-date">
                </div>
                <!-- Round Trip Date Range -->
                <div class="round-trip-fields" style="display: none;">
                    <div class="input-group">
                        <label for="start-date">Start Date</label>
                        <input type="date" id="start-date">
                    </div>
                    <div class="input-group">
                        <label for="end-date">End Date</label>
                        <input type="date" id="end-date">
                    </div>
                    <div class="input-group">
                        <label for="stops">Stops</label>
                        <input type="text" id="stops" placeholder="Add Stops">
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="time">Time</label>
                    <input type="time" id="time">
                </div>
                <button id="search-btn" class="search-btn">Search</button>
            </div>
        </div>
        <script>
            
    function toggleRoundTripFields() {
        const tripType = document.getElementById("trip-type").value;
        const roundTripFields = document.querySelector(".round-trip-fields");
        const oneWayField = document.querySelector(".one-way-field");

        if (tripType === "round-trip") {
            roundTripFields.style.display = "block";
            oneWayField.style.display = "none";
        } else {
            roundTripFields.style.display = "none";
            oneWayField.style.display = "block";
        }
    }

        </script>
        

        <div id="map"></div>

        <section id="about" class="content-section">
            <h2>About Us</h2>
            <p>Welcome to <strong>Tour X</strong>, where your travel dreams come to life!</p>
            <p>We are dedicated to offering unforgettable travel experiences to both local adventurers and foreign explorers.</p>
            <p>Whether you're looking for a scenic getaway, cultural journey, or peaceful escape, we're here to make it happen.</p>
        </section>

        <section id="destinations" class="content-section">
            <h2>Our Top Destinations</h2>
            <div class="destination-grid">
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
                <div class="destination-card" data-tilt>
                    <a href="Top Destinations/Jetwing Saman Villas.php">
                        <img src="assets/unawatuna.jpg" alt="Jetwing Saman Villas">
                        <div class="destination-details">
                            <h3>Jetwing Saman Villas</h3>
                            <p>A luxurious getaway surrounded by pristine beaches.</p>
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Tour X | All Rights Reserved.</p>
    </footer>

    <script>
        let map;
        let autocomplete;

        function initMap() {
            const sriLanka = { lat: 7.8731, lng: 80.7718 };
            map = new google.maps.Map(document.getElementById("map"), {
                center: sriLanka,
                zoom: 7,
            });

            const input = document.getElementById("destination");
            autocomplete = new google.maps.places.Autocomplete(input, {
                types: ["(regions)"],
                componentRestrictions: { country: "lk" },
            });

            autocomplete.addListener("place_changed", () => {
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    alert("No details available for the selected location.");
                    return;
                }

                map.setCenter(place.geometry.location);
                map.setZoom(12);

                new google.maps.Marker({
                    position: place.geometry.location,
                    map: map,
                });
            });
        }

        window.initMap = initMap;
    </script>
</body>
</html>
