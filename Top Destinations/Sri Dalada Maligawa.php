<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Dalada Maligawa</title>
    <link rel="stylesheet" href="topdes.css">
    <script src="topdes.js" defer></script>
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="navbar">
            <nav>
                <!-- Ensure this path is correct according to your project structure -->
                <a href="/index.php">Home</a> <!-- Absolute path for testing -->
                <a href="../about.php">About</a>
                <a href="../contact.php">Contact</a>
                <a href="../sign-in.php">Sign In</a>
            </nav>
        </div>
    </header>
    

    <!-- Destination Content -->
    <main>
        <section class="destination-content">
            <h1>Sri Dalada Maligawa</h1>
            <img src="../assets/dalada maligawa.jpg" alt="Sri Dalada Maligawa" class="destination-image">
            <p>
                The Sri Dalada Maligawa, or Temple of the Sacred Tooth Relic, is a significant Buddhist site located in Kandy, Sri Lanka.
                It houses the relic of Buddha's tooth and is a symbol of Sri Lankan heritage. This sacred temple attracts visitors from around
                the globe who wish to experience its spiritual significance and stunning architecture.
            </p>
            <h3>Ratings: ★★★★☆ (4.5/5)</h3>
            <h4>How to Travel</h4>
            <p>
                Book your trip with us! We provide comfortable vehicles for groups of all sizes and personalized itineraries.
                Travel in luxury while experiencing the rich history and culture of Kandy. With our expert guides, you'll gain deeper insights into
                the significance of this revered site.
            </p>
            <button class="btn" onclick="bookNow()">Book Now</button>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Travel Adventures. All Rights Reserved.</p>

        </div>
    </footer>

    <style>

        /* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}



.logo {
    font-size: 1.5rem;
    font-weight: bold;
}

/* Main content styling */
.destination-content {
    padding: 2rem;
    text-align: center;
}

.destination-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.5rem;
}

/* Button styling */
.btn {
    display: inline-block;
    padding: 0.7rem 1.5rem;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

/* Responsive styling */
@media (max-width: 1200px) {
    .destination-content {
        padding: 1.5rem;
    }
}



@media (max-width: 480px) {
    .destination-image {
        max-width: 100%;
    }

    .btn {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }
}

    </style>
</body>
</html>
